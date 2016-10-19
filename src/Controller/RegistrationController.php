<?php

/**
 * Module Name: Registration Controller
 * Created on: 09/08/2016
 * Developer Name: Md. Shoeb
 * Description: Lets you manage all the Login , Registration and logout feature of users , Admin and Editors
 */

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
$user = TableRegistry::get('Users');
$editor = TableRegistry::get('Editors');
$admin = TableRegistry::get('Admins');
class RegistrationController extends AppController{
    
    public function initialize(){
        parent::initialize();
        $this->loadComponent('Flash'); // Include the FlashComponent

    }
        
    public function beforeFilter(Event $event){

        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        //$this->Auth->deny('*');
         
        $this->Auth->allow(['index','forgotpassword','editorforgotpassword','editorlogin']);
   
    }
        
    public function index(){
        $this->viewBuilder()->layout('kwikshoot'); 
        $session = $this->request->session();
        //echo $session->read('ID');
    }
    
    
    public function display(){
        $this->layout = false;
    }
        
        
    public function userregistration(){
        $this->viewBuilder()->layout('ajax'); 
        $this->loadModel('Users');
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            //print_r($this->request->data);
                    // fetching password to send plain password to user
                    $pass_word  = $this->request->data['password'];
                    $user = $this->Users->patchEntity($user, $this->request->data);
                    $name = $user['name'];
                    $user_email = $user['email'];
                    $company = $user['company'];
                    $title = $user['title'];
                    $phone = $user['phone'];
                   
            if($user->errors()){
                echo 'error';
                //$this->Flash->error(__('Email should be unique to register'));
            }elseif ($result = $this->Users->save($user)) {
                //$this->Flash->success(__('You have sucessfully registered, Please Login'));
                
                $userInfo  =  array('first_name'=>$name,
                                            'company'=>$company,
                                           'email'=>$user_email,
                                           'phone'=>$phone,
                                           'title'=>$title,
                                           'password'=>$pass_word,
                                           'userCreatedDate'  => date('d M,Y [h:i:s A]')
                                );
                // To create a new folder when user register for future use   
//                $user_name = split ("\ ", $name); 
//                $path = WWW_ROOT . 'users_data'.DS.$user_name[0].'_'.$result->id;
//                    $folder = new Folder($path , true, 0755);
                
                
                #mail to user
                 $email = new Email();
                             $email->template('user_registration_user_template')
                                    ->emailFormat('html')
                                    ->to($user_email)
                                     ->viewVars(compact('userInfo'))
                                    ->from(array(DEFAULT_EMAIL_FROM  => 'Kwikshoot'))
                                    ->subject('User Registration | Kwikshoot')
                                    ->send();
                             
                 #mail to admin            
                 $email = new Email();
                             $email->template('user_registration_admin_template')
                                    ->emailFormat('html')
                                    ->to(ADMIN_EMAIL)
                                     ->viewVars(compact('userInfo'))
                                    ->from(array(DEFAULT_EMAIL_FROM  => 'Kwikshoot'))
                                    ->subject('User Registration | Kwikshoot')
                                    ->send(); 
                $authUser = $this->Users->get($result->id)->toArray();
                $this->Auth->setUser($authUser);
                $session = $this->request->session();
                $session->write('ID', $result->id);
                $session->write('Name', $result->name);
                $session->write('Email', $result->email);
                $session->write('Phone', $result->phone);
                $session->write('City',  $result->city);
                $session->write('State', $result->state);
                $session->write('Country', $result->country);
                $session->write('login_type', 'user');
                
                if($session->read('Job_Id')){
                    $this->loadModel('Jobs');
                    $query = $this->Jobs->query();
                    $query->update()
                    ->set(['user_id' => $result->id])
                    ->where(['id' => $session->read('Job_Id')])
                    ->execute();  
                }
                $session->delete('Job_Id');
                
                             
                        //return $this->redirect(['action' => 'userlogin']);     
            }
            //$this->Flash->error(__('Unable to register'));
        }

       // $this->set('user', $user);
        $this->autoRender = false;

    }
        
    public function userlogin(){
        $this->viewBuilder()->layout('ajax');
        $this->autoRender = false;
        //$this->autoRender = false;
        $this->loadModel('Users');
       // $this->set('users', $this->Users->find('all'));
         if($this->request->is('ajax')) {
            // print_r($this->request->data);die();
            $users = $this->Auth->identify();
            if($users){
                $this->Auth->setUser($users);
                $udetails = $this->Auth->user();
                $id         =   $udetails[id];
                $name       =   $udetails[name];
                $email      =   $udetails[email];
                $phone      =   $udetails[phone];
                $city       =   $udetails[city];
                $state      =   $udetails[state];
                $country    =   $udetails[country];
//                /print_r($users);die();
                //echo $id, $first_name , $email; die();
                
                $session = $this->request->session();
                $session->write('ID', $id);
                $session->write('Name', $name);
                $session->write('Email', $email);
                $session->write('Phone', $phone);
                $session->write('City', $city);
                $session->write('State', $state);
                $session->write('Country', $country);
                $session->write('login_type', 'user');
                $this->Auth->redirectUrl();
                return $this->redirect($this->Auth->redirectUrl());
                
            }

//            $this->Flash->error('Your userame or password is incorrect.');
           // print_r($this->request->data);die();
              echo 'error';
          
        }
     
    }
        
    public function userlogout(){
        $session = $this->request->session();
        $session->destroy();
        $this->Flash->success('You are now logged out. Come back soon.');
        return $this->redirect($this->Auth->logout());
    }
                
        
    public function adminregistration(){
        $this->layout = 'blank';
        $this->loadModel('Admins');
        $admin = $this->Admins->newEntity();
        if ($this->request->is('post')) {
          $admin = $this->Admins->patchEntity($admin, $this->request->data);
          if ($this->Admins->save($admin)) {
            $this->Flash->success(__('You have sucessfully registered, Please Login'));
            return $this->redirect(['action' => 'adminlogin']);
          }
          $this->Flash->error(__('Unable to register'));
        }
        $this->set('admin', $admin);

    }
  
  
    public function adminlogin(){
        $this->viewBuilder()->layout('kwikshoot'); 
        if($this->request->is('post')) {
            $admins = $this->Auth->identify();
            if($admins){
                $this->Auth->setUser($admins);
                //print_r($admins);
                $Admin_Name =  $admins['name'];
                $Admin_Email =  $admins['email'];
                $Admin_Phone =  $admins['phone'];
                $session = $this->request->session();
                $session->write('Admin_Name', $Admin_Name);
                $session->write('Admin_Email', $Admin_Email);
                $session->write('login_type', 'admin');
                $this->Auth->redirectUrl();
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
      
    }
  
    public function adminlogout(){
        $session = $this->request->session();
        $session->destroy();
        $this->Flash->success('You are now logged out. Come back soon.');
        return $this->redirect($this->Auth->logout());
    }
  
    public function editorlogin(){
         
        $editors = TableRegistry::get('Editors');
        $this->viewBuilder()->layout('kwikshoot');
       $this->loadModel('Editors');
        //$this->set('editors', $this->Editors->find('all'));
        if($this->request->is('post')) {
            $editor = $this->Auth->identify();
            //print_r($editor);die();
            if($editor){
                $this->Auth->setUser($editor);
                $udetails = $this->Auth->user();
                $id =  $udetails[id];
                ///$editordetail = $Editors->find('all', array('conditions'=>array('id'=>$id)));
                //print_r($editordetail->first_name);die();
                //$this->set('editors', $this->Editors->find('all'));
                $first_name =  $udetails[first_name];
                $last_name  =   $udetails[last_name];
                $email      =   $udetails[email];
                $phone      =   $udetails[phone];
                $city       =   $udetails[city];
                $state      =   $udetails[state];
                $country    =   $udetails[country];
                $lastlogin    =  $udetails[lastlogin];
                //echo $lastlogin ; die(); 
              // print_r($udetails);die();
                $session = $this->request->session();
                $session->write('ID', $id);
                $session->write('First_Name', $first_name);
                $session->write('Last_Name', $last_name);
                $session->write('Email', $email);
                $session->write('Phone', $phone);
                $session->write('City', $city);
                $session->write('State', $state);
                $session->write('Country', $country);
                $session->write('login_type', 'editor');
                if ($lastlogin == '')
                {
                     $userInfo  =  array('first_name'=>$first_name,
                                            'last_name' => $last_name,
                                           'email'=>$email,
                                           'phone'=>$phone,
                                           'title'=>$title,
                                           'password'=>$pass_word,
                                           'userCreatedDate'  => date('d M,Y [h:i:s A]')
                                );
                #mail to admin when editor first time login
                 $emailTemplate = new Email();
                             $emailTemplate ->template('editor_firstlogin_editor_template')
                                    ->emailFormat('html')
                                    ->to(ADMIN_EMAIL)
                                     ->viewVars(compact('userInfo'))
                                    ->from(array(DEFAULT_EMAIL_FROM  => 'Kwikshoot'))
                                    ->subject('Editor First Time Login | Kwikshoot')
                                    ->send();
                    
                }
               $lastlogin = date('Y-m-d h:i:s');
                $query = $editors->query();
                $query->update()
                    ->set(['lastlogin' => $lastlogin])
                    ->where(['id' => $id])
                    ->execute();
                $this->Auth->redirectUrl();
                return $this->redirect($this->Auth->redirectUrl());
            }
        $this->Flash->error('Your username or password is incorrect.');
       }
    }
  
    public function editorlogout(){
        $session = $this->request->session();
        $session->destroy();
        $this->Flash->success('You are now logged out. Come back soon.');
        return $this->redirect($this->Auth->logout());
         //echo  $this->Auth->logout();
        //$this->Auth->logout();
        //$this->redirect();
    }
  
  
    function forgotpassword(){
        $this->viewBuilder()->layout('ajax');
        $this->autoRender = false;
        $user = TableRegistry::get('Users');
        //$this->viewBuilder()->layout('kwikshoot');
        
        if ($this->request->is(['post'])) {
            $userData = $user->findByEmail($this->request->data['email'])->first();
            if (!$userData) {
//               $this->Flash->success(__('No user or email found'));
               echo 'error';
               // return $this->redirect('/');
            }else{
                $userData->password = $random = mt_rand(10000000, 99999999);
                $userInfo  =  array('name'=>$userData->name,
                                 'last_name'=>$userData->last_name,
                                'email'=>$userData->email,
                                'password'=>$random
                                );
                if ($user->save($userData)) {
                    $email = new Email();
                    $email->template('user_forgot_password')
                            ->emailFormat('html')
                            ->to($userData->email)
                            ->viewVars(compact('userInfo'))
                            ->from(array('devender@veristrat.com'  => 'Kwikshoot'))
                            ->subject('User Forgot Password | Kwikshoot')
                            ->send();
//                    $this->Flash->success(__('Email Sent, Please check your inbox'));
//                    $this->redirect(array('action'=>'forgotpassword'));   
                    echo 'success';
                    }
            }

        }
   
      
    }
  
    function editorforgotpassword(){
        $editor = TableRegistry::get('Editors');
        $this->viewBuilder()->layout('kwikshoot'); 
        if ($this->request->is(['post'])) {
            $userData = $editor->findByEmail($this->request->data['email'])->first();
            if (!$userData) {
               $this->Flash->success(__('No user or email found'));
               // return $this->redirect('/');
            }else{
                $userData->password = $random = mt_rand(10000000, 99999999);
                $userInfo  =  array('first_name'=>$userData->first_name,
                                 'last_name'=>$userData->last_name,
                                'email'=>$userData->email,
                                'password'=>$random
                                );
                if ($editor->save($userData)) {
                    $email = new Email();
                    $email->template('editor_forgot_password')
                            ->emailFormat('html')
                            ->to($userData->email)
                            ->viewVars(compact('userInfo'))
                            ->from(array('devender@veristrat.com'  => 'Kwikshoot'))
                            ->subject('Editor Forgot Password | Kwikshoot')
                            ->send();
                    $this->Flash->success(__('Email Sent, Please check your inbox')); 
                    $this->redirect(array('action'=>'editorforgotpassword'));
                }
            }

        }
 
      
    }
  
    

  
  
  
}