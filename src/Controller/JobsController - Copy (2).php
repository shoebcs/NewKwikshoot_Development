<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;
class JobsController extends AppController{
   
    
    public function initialize(){
        parent::initialize();
        $this->loadComponent('Flash'); // Include the FlashComponent
        $this->loadComponent('Pricecalculator'); // Price calculation for extra Work
    }
    public function beforeFilter(Event $event){
        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
     }
    
    public function joblisting(){
        $this->loadModel('Jobs');
        $this->set('jobs', $this->Jobs->find('all'));
       
       
       $session = $this->request->session();
         
       if($session->read('login_type')=='user'){
           $this->viewBuilder()->layout('user');
           $this->set('jobs', $this->Jobs->find('all')
                                            ->where(['Jobs.user_id'=> $session->read('ID')]));
       }else if($session->read('login_type')=='editor'){
           $this->set('jobs', $this->Jobs->find('all')
                                            ->where(['Jobs.editor_id'=> $session->read('ID')]));
       }else{
        $this->set('jobs', $this->Jobs->find('all'));
        $this->viewBuilder()->layout('admin');
       }
    //   $this->set('_serialize', ['jobs']);
    }
    
    public function index(){
        $this->viewBuilder()->layout('kwikshoot');
         $session = $this->request->session();
//        if($session->read('login_type')!='user'){
//             $this->Flash->error(__('This page not authorized'));
//             return $this->redirect(['controller' => 'Registration','action' => 'index']);
//        }
        $job = $this->Jobs->newEntity();
        $name =  $session->read('Name');
        $user_email =  $session->read('Email');
        $phone =  $session->read('Phone');
        $userInfo  =  array('name'=>$name,
                            'email'=>$user_email,
                            'phone'=>$phone,
                            'userCreatedDate'  => date('d M,Y [h:i:s A]')
                            );
        
         //print_r($first_name);
        if($this->request->is('post')) {
          
        
            if($this->request->data['required_video_length']){
                $this->request->data['required_video_length'] = '3';
            }else{
                $this->request->data['required_video_length'] = $this->request->data['required_video_length1'];
            }
            
            if($this->request->data['raw_video_length']){
                $this->request->data['raw_video_length'] = '10';
            }else{
                $this->request->data['raw_video_length'] = $this->request->data['raw_video_length1'];
            }
            $this->request->data['status'] = 'Under Review';
            $this->request->data['basic_price'] = 195;
            $this->request->data['extra_price'] = $this->Pricecalculator->getExtraPrice($this->request->data);
            $this->request->data['total_price'] = $this->request->data['basic_price'] + $this->request->data['extra_price'];
           
             $this->request->data['user_id'] = 0;
             $total_price  = $this->request->data['total_price'];
            if($session->read('ID')>0){
               $this->request->data['user_id'] = $session->read('ID'); 
            }
           // dump($this->request->data); die;
             
            
            
            $job = $this->Jobs->patchEntity($job, $this->request->data);
//            $job = $this->Jobs->patchEntity($job, $this->request->data,[
//                'associated' => [
//                    'Users'
//                ]
//            ]);
            
            //dump($job); die;
            if ($result = $this->Jobs->save($job)) {
                $session = $this->request->session();
                $session->write('Job_Id', $result->id);
               
                $this->Flash->jobSuccess('The job has been saved.',array(
                    'params' => array('total_price' => $total_price)
                    ));
                if($user_email!=''){ // when user already login
                    #mail to user
                    $email = new Email();
                                $email->template('job_submission_user_template')
                                       ->emailFormat('html')
                                       ->to($user_email)
                                        ->viewVars(compact('userInfo'))
                                       ->from(array(DEFAULT_EMAIL_FROM  => 'Kwikshoot'))
                                       ->subject('Job Submitted | Kwikshoot')
                                       ->send();

                    #mail to admin            
                    $email = new Email();
                                $email->template('job_submission_admin_template')
                                       ->emailFormat('html')
                                       ->to(ADMIN_EMAIL)
                                        ->viewVars(compact('userInfo'))
                                       ->from(array(DEFAULT_EMAIL_FROM  => 'Kwikshoot'))
                                       ->subject('Job Submitted | Kwikshoot')
                                       ->send(); 
                }
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The job could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('job'));
        $this->set('_serialize', ['job']);
        
    }
    
    public function delete($id = null){
        $this->request->allowMethod(['post', 'delete']);
        $job = $this->Jobs->get($id);
        if ($this->Jobs->delete($job)) {
            $this->Flash->success(__('The job has been deleted.'));
        } else {
            $this->Flash->error(__('The job could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
     public function viewdetails($id = null){
        $this->viewBuilder()->layout('user');
        $view_details = $this->Jobs->get($id);
        
                if ($this->request->is(['post', 'put'])) {
                    // $image = $this->Images->patchEntity($image, $this->request->data);
                  if (!empty($this->request->data['extra_custom_title_page_file']['name'])) {
                    $file = $this->request->data['extra_custom_title_page_file']; //put the data into a var for easy use

                    $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                    $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions
                    $setNewFileName = time() . "_" . rand(000000, 999999);
                    //echo $file['tmp_name']; die();
                    //only process if the extension is valid
                    if (in_array($ext, $arr_ext)) {
                        //do the actual uploading of the file. First arg is the tmp name, second arg is 
                        //where we are putting it
                       echo  move_uploaded_file($file['tmp_name'], WWW_ROOT . '/upolad/avatar/' . $setNewFileName . '.' . $ext);

                        //prepare the filename for database entry 
                        $imageFileName = $setNewFileName . '.' . $ext;
                        }
                    }

                    //$getFormvalue = $this->Users->patchEntity($particularRecord, $this->request->data);

                  

                     $image_data =   $this->Jobs->patchEntity($view_details, $this->request->data);
                      if (!empty($this->request->data['extra_custom_title_page_file']['name'])) {
                                $image_data->avatar = $imageFileName;
                    }
                     $data = $this->request->data['Jobs'];
//                                if(!$data['extra_custom_title_page_file']['name']){
//                                 unset($data['extra_custom_title_page_file']);
//                                         }
//dump($image_data); die();//
                       if ($this->Jobs->save($image_data)) {
                           $this->Flash->success(__('Your Details have been updated.'));
                           return $this->redirect(array('controller'=>'jobs' , 'action'=>'joblisting'));
                                 }

                            }
                            $this->set('view_details', $view_details);
                    }
    
  
}