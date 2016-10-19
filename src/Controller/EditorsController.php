<?php
/**
 * Module Name: Editors Controller
 * Created on: 09/09/2016
 * Developer Name: Md. Shoeb
 * Description: Lets you manage all the editor related information
 */
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;
class EditorsController extends AppController
{      
                    public function initialize()
                    {
                                parent::initialize();
                                $this->loadComponent('Flash'); // Include the FlashComponent
                    }
                    public function beforeFilter(Event $event){
                        parent::beforeFilter($event);
                        $this->Auth->allow(['index','userregistration','adminlogout','userlogin','adminregistration','editorlogin','display']);
                     }


                public function editorlisting(){
                    $this->viewBuilder()->layout('admin');
                    $this->set('editors', $this->Editors->find('all'));
                }
  
                public function edit($id = null)
              {
                        $this->viewBuilder()->layout('admin');
                        $editor = $this->Editors->get($id);
                        if ($this->request->is(['post', 'put'])) {
                        $this->Editors->patchEntity($editor, $this->request->data);
                        if ($this->Editors->save($editor)) {
                            $this->Flash->success(__('Congrats!  Editor details have been saved successfully.'));
                        return $this->redirect(array('controller'=>'editors' , 'action'=>'editorlisting'));
                        }
                        $this->Flash->error(__('Unable to update your detail.'));
                        }
                        $this->set('editor', $editor);
              }

            public function addnew(){       
                 $this->viewBuilder()->layout('admin');
                $editor = $this->Editors->newEntity();
                if ($this->request->is('post')) {
                    $currentDate = date('Y-m-d H:i:s');
                    $pass_word  = $this->request->data['password'];
                    $editor_phone = $this->request->data['phone'];
                    $editor = $this->Editors->patchEntity($editor, $this->request->data);
                    //print_r($pass_word );die();
                    $first_name = $editor['first_name'];
                    $last_name = $editor['last_name'];
                    $editor_email = $editor['email'];
                    $phone = $editor['phone'];
                    $password = $editor['password'];
                    $editor->created = $currentDate;
                    $editor->modified = $currentDate;
                    $editor->laslogin = $currentDate;
                    if($editor->errors()){
                        $this->Flash->error(__('Hey, Welcome back!  That email address is already registered.  Please log in instead.'));
                    }elseif ($this->Editors->save($editor)) {
                            $this->Flash->success(__('Editor Created Successfully.'));
                            $editorInfo  =  array('first_name'=>$first_name,
                                            'last_name'=>$last_name,
                                           'email'=>$editor_email,
                                           'phone'=>$editor_phone,
                                           'password'=>$pass_word,
                                           'userCreatedDate'  => date('d M,Y [h:i:s A]')
                                );
                            $this->set('editorInfo', $editorInfo);
                           //print_r($editorInfo); die();
                            $email = new Email();
                             $email->template('editor_registration')
                                    ->emailFormat('html')
                                    ->to($editor_email)
                                     ->viewVars(compact('editorInfo'))
                                    ->from(array(DEFAULT_EMAIL_FROM  => 'Kwikshoot'))
                                    ->subject('Editor Registration | Kwikshoot')
                                    ->send();
                            return $this->redirect(['action' => 'editorlisting']);
                        }
//                        $this->Flash->error(__('Unable to create the editor'));
                }
                $this->set('editor', $editor);
            }

                public function delete($id)
                {        $this->layout = 'blank';
                        $this->request->allowMethod(['post', 'delete']);
                        $editor = $this->Editors->get($id);
                        if ($this->Editors->delete($editor)) {
                        $this->Flash->success(__('The editor has been deleted.'));
                        return $this->redirect(['action' => 'editorlisting']); }
                }

          
                public function dashboard(){
                    $this->viewBuilder()->layout('editor');
                    //print_r($this->Auth->logout());
                }
                
        function updatepassword(){
            $this->viewBuilder()->layout('editor');
            $session = $this->request->session();
            $userData = $this->Editors->get($session->read('ID'));
            if ($this->request->is(['post'])) {
            $userData = $this->Editors->newEntity($this->request->data,['validate' => false]);
            $userData->password = $this->request->data['password'];
            $userData->id = $session->read('ID');
            $userData->confirmpassword = $this->request->data['confirmpassword'];
           // print_r($userData->errors()); die("pal");
        if($this->request->data['password'] != $userData->confirmpassword){
            $this->Flash->error(__('Oops, password does not match!  You will want to try that again.')); 

        }elseif ($this->Editors->save($userData)) {
            $this->Flash->success(__('Yay! Your Password has been Updated successfully!')); 
        }
        $this->set('password','');
    }

}
                public function viewprofile(){
                 $this->viewBuilder()->layout('editor');
             }
             
             public function update($id = null)
        {
                $this->viewBuilder()->layout('editor');
                $updater = $this->Editors->get($id);
                //$this->Auth->setUser($updater);
                $udetails = $this->Auth->user();
                $id =  $udetails[id];
                $first_name =  $udetails[first_name];
                $last_name =   $udetails[last_name];
                $email  =   $udetails[email];
                $phone  =   $udetails[phone];
                $city  =   $udetails[city];
                $state  =   $udetails[state];
                $country  =   $udetails[country];
                if ($this->request->is(['post', 'put'])) {
                $this->Editors->patchEntity($updater, $this->request->data);
                if ($this->Editors->save($updater)) {
                    $session = $this->request->session();
                    $session->write('ID', $id);
                    $session->write('First_Name', $this->request->data['first_name']);
                    $session->write('Last_Name', $this->request->data['last_name']);
                    $session->write('Email', $this->request->data['email']);
                    $session->write('Phone', $this->request->data['phone']);
                    $session->write('City', $this->request->data['city']);
                    $session->write('State', $this->request->data['state']);
                    $session->write('Country', $this->request->data['country']);
                    $this->Flash->success(__('Yay! Your details have been updated.'));
                    return $this->redirect(array('controller'=>'editors' , 'action'=>'viewprofile'));
                    }
                     $this->Flash->error(__('Unable to update your article.'));
                    }
                    $this->set('updater', $updater);
                    }
                    
                    
}