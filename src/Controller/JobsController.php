<?php
/**
 * Module Name: Jobs Controller
 * Created on: 08/29/2016
 * Developer Name: Md. Shoeb
 * Description: Lets you manage all the uploaded jobs by users
 */

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
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
        $this->loadModel('Editors');
       
        $this->viewBuilder()->layout('kwikshoot');
        $editoData = $this->Editors->find('list',array('keyField' => 'id', 'valueField' => 'first_name')); 
        $this->set('editor',$editoData);
        $this->set('jobs', $this->Jobs->find('all'));
       $session = $this->request->session();
         
       if($session->read('login_type')=='user'){
           $this->viewBuilder()->layout('user');
           $this->set('jobs', $this->Jobs->find('all')
                                            ->where(['Jobs.user_id'=> $session->read('ID')]));
       }else if($session->read('login_type')=='editor'){
           $this->viewBuilder()->layout('editor'); 
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
        $first_name =  $session->read('First_Name');
        $last_name =  $session->read('Last_Name');
        $user_email =  $session->read('Email');
        $phone =  $session->read('Phone');
        $userInfo  =  array('first_name'=>$first_name,
                                           'last_name'=>$last_name,
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
            $this->request->data['job_status'] = 'In Queue';
            $this->request->data['basic_price'] = 195;
            $this->request->data['extra_price'] = $this->Pricecalculator->getExtraPrice($this->request->data);
            $this->request->data['total_price'] = $this->request->data['basic_price'] + $this->request->data['extra_price'];
           
             $this->request->data['user_id'] = 0;
             $total_price  = $this->request->data['total_price'];
            if($session->read('ID')>0){
               $this->request->data['user_id'] = $session->read('ID'); 
            }
           // dump($this->request->data); die;
                $session = $this->request->session();
                $session->write('Req_Video_Length', $this->request->data['required_video_length1']);
                $session->write('Raw_Video_Length', $this->request->data['raw_video_length1']);
                $session->write('Obj_of_video', $this->request->data['objective_of_your_video']);
                $session->write('obj_other', $this->request->data['objective_of_your_video_other']);
                $session->write('video_start_end_point', $this->request->data['video_start_end_points']);
                $session->write('extra_minute', $this->request->data['extra_minute_of_raw_video_above_10_minutes']);
                $session->write('extra_custom_title', $this->request->data['extra_custom_title_page']);
                $session->write('extra_overlay', $this->request->data['extra_single_graphic_overlay']);
                $session->write('extra_keying', $this->request->data['extra_green_screen_keying']);
                $session->write('extra_music_overlay', $this->request->data['extra_music_overlay']);
                $session->write('extra_image_keying', $this->request->data['extra_image_screen_takeover']);
                $session->write('extra_image_overlay', $this->request->data['extra_image_overlay_on_screen']);
                $session->write('extra_subtitle', $this->request->data['extra_minimum_for_subtitles']);
                $session->write('extra_information', $this->request->data['extra_information']); 
            
            
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
                
//                 #mail to user
//                 $email = new Email();
//                             $email->template('job_submission_user_template')
//                                    ->emailFormat('html')
//                                    ->to($user_email)
//                                     ->viewVars(compact('userInfo'))
//                                    ->from(array(DEFAULT_EMAIL_FROM  => 'Kwikshoot'))
//                                    ->subject('Job Submitted | Kwikshoot')
//                                    ->send();
//                             
//                 #mail to admin            
//                 $email = new Email();
//                             $email->template('job_submission_admin_template')
//                                    ->emailFormat('html')
//                                    ->to(ADMIN_EMAIL)
//                                     ->viewVars(compact('userInfo'))
//                                    ->from(array(DEFAULT_EMAIL_FROM  => 'Kwikshoot'))
//                                    ->subject('Job Submitted | Kwikshoot')
//                                    ->send(); 
                //$session->destroy();
                //return $this->redirect(['action' => 'index']);
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

        return $this->redirect(['action' => 'joblisting']);
    }
    
    
     public function viewdetails($id = null){
         $this->loadModel('Users');
         $view_details = $this->Jobs->get($id);
          $User_ID = $view_details->user_id;
          $user_details = $this->Users->get($User_ID);
         $name =  $user_details->name;
         $id =  $user_details->id;
          if($this->request->session()->read('login_type')=='admin'){
              $this->viewBuilder()->layout('admin');
             $this->set('view_details', $view_details);
              $this->render('viewdetails_admin');
          } 
          elseif($this->request->session()->read('login_type')=='editor'){
              $this->viewBuilder()->layout('editor');
             $this->set('view_details', $view_details);
              $this->render('viewdetails_admin');
          }
          else {
              $this->viewBuilder()->layout('user');
                if ($this->request->is(['post', 'put'])) {
                  //code for Images Upload by user by Shoeb 
                  foreach ($_FILES as $key => $value) {
                      if($key == 'raw_video_length_file'){
                      continue;}
                      if($_FILES[$key]['name']=='' && $view_details[$key]!=''){
                        $this->request->data[$key] = $view_details[$key];  
                          continue;
                      }else if($_FILES[$key]['name']==''){
                          $this->request->data[$key] = '';
                          continue; 
                      }
                   $random_number = mt_rand(10000000, 99999999);     
                  $user_name = split ("\ ", $name); 
                 $path = WWW_ROOT . 'users_data'.DS.$user_name[0].'_'.$id.DS.'Job'.'_'.$random_number;
               // echo $path; die();
                 $folder = new Folder($path , true, 0755);    
                    $view_details[$key] = $_FILES[$key];
                    if (!empty($view_details[$key]['name'])) {
                    $file = $view_details[$key]['name']; //put the data into a var for easy use
                    $fileToUpload = $view_details[$key]['tmp_name'];
                    $ext = substr(strtolower(strrchr($file, '.')), 1); //get the extension
                    $arr_ext = array('jpg', 'jpeg', 'gif','png'); //set allowed extensions
                    $setNewFileName = time() . "_" . rand(000000, 999999);
                    if (in_array($ext, $arr_ext)) {
                        //do the actual uploading of the file. First arg is the tmp name, second arg is where we are putting it
                        move_uploaded_file($fileToUpload, $path.DS.$setNewFileName . '.' . $ext);
                       $this->request->data[$key] = $setNewFileName . '.' . $ext;
                        //prepare the filename for database entry 
                        $imageFileName = $setNewFileName . '.' . $ext;
                      
                        }
                    }//end of code for Images Upload by user by Shoeb 
                  }
                  
                  //code for Video Uploads by Shoeb
                   if($_FILES['raw_video_length_file']['name']=='' && $view_details['raw_video_length_file']!=''){
                        $this->request->data['raw_video_length_file'] = $view_details['raw_video_length_file'];  
                      }else if($_FILES['raw_video_length_file']['name']==''){
                          $this->request->data['raw_video_length_file'] = '';
                      }
                 
                    
                $view_details['raw_video_length_file'] = $_FILES['raw_video_length_file'];
                if (!empty($view_details['raw_video_length_file']['name'])) {
                $file = $view_details['raw_video_length_file']['name']; //put the data into a var for easy use
                $fileToUpload = $view_details['raw_video_length_file']['tmp_name'];
                $ext = substr(strtolower(strrchr($file, '.')), 1); //get the extension
                $arr_ext = array('mp4','mkv','avi','flv'); //set allowed extensions
                $setNewFileName = time() . "_" . rand(000000, 999999);
                //only process if the extension is valid
                if (in_array($ext, $arr_ext)) {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is where we are putting it
                   move_uploaded_file($fileToUpload, $path.DS.$setNewFileName . '.' . $ext);
                   $this->request->data['raw_video_length_file'] = $setNewFileName . '.' . $ext;
                    //prepare the filename for database entry 
                    $imageFileName = $setNewFileName . '.' . $ext;
                    }
                }   //End of code for Video Uploads  
                //$this->set('imageFileName',$imageFileName);
        
   
   
                
                   $image_data =   $this->Jobs->patchEntity($view_details, $this->request->data);
                      //dump($image_data); die();
                       if ($this->Jobs->save($image_data)) {
                           $this->Flash->success(__('Your Details have been updated.'));
                           return $this->redirect(array('controller'=>'jobs' , 'action'=>'joblisting'));
                                 }
                            }
                            $this->set('view_details', $view_details);
                    }
     } 
     
     
                 public function jobassign(){
                       $this->loadModel('Users');
                       $this->loadModel('Editors');
                       $new_editorid =  $this->request->data['editornewid'];
                        $jobId =  $this->request->data['jobid'];
                        //getting user data to send the mail to Editor
                        $userid = $this->request->data['user_id'];
                       $usersData = $this->Users->get($userid); 
                       $userEmail =  $usersData->email;
                       $userName  =  $usersData->name;
                       $userPhone  =  $usersData->phone;
                       // Update the Status of job When Job Assign to Editor 
                       $query = $this->Jobs->query();
                        $query->update()
                        ->set(['editor_id' => $new_editorid , 'job_status' => 'Breif Review'])
                        ->where(['id' => $jobId])
                        ->execute();
                        
                        $jobsDetails = $this->Jobs->get($jobId);
                         $Objective =  $jobsDetails->objective_of_your_video_other;
                         $clientid =   $jobsDetails->user_id;
                         
                         
                         
                        //getting editor data to send the mail to User
                        $editorData = $this->Editors->get($new_editorid);  
                        $editorFName =  $editorData->first_name;
                        $editorLName =  $editorData->last_name;
                        $editorEmail =  $editorData->email;
                        $editorPhone =  $editorData->phone;
                        $userInfo  =  array('name'=>$userName,
                                           'email'=>$userEmail,
                                            'User_Phone'=>$userPhone,
                                           'Editor_Fname'=>$editorFName,
                                           'Editor_Lname'=>$editorLName,
                                           'Editor_Email'=>$editorEmail,
                                           'Editor_Phone'=>$editorPhone,
                                           'Editor_ID'=>$new_editorid,
                                           'Job_ID'=>$jobId,
                                           'Video_Description'=>$Objective,
                                           'User_ID' =>$clientid,
                                           'userCreatedDate'  => date('d M,Y [h:i:s A]')
                                );
                        // Update the Status of User When Job Assign to Editor 
                        $query =  $this->Users->query();
                            $query->update()
                            ->set(['verified' => 1])
                            ->where(['id' => $userid])
                            ->execute();
                        #email to User when job assign to editor
                         $emailTemplate = new Email();
                             $emailTemplate ->template('job_assignto_editor_user_template')
                                    ->emailFormat('html')
                                    ->to($userEmail)
                                     ->viewVars(compact('userInfo'))
                                    ->from(array(DEFAULT_EMAIL_FROM  => 'Kwikshoot'))
                                    ->subject('Job Assigned To Editor | Kwikshoot')
                                    ->send();
                        
                         // Update the Status of Editor When Job Assign to Editor     
                        $query = $this->Editors->query();
                        $query->update()
                        ->set(['verified' => 1])
                        ->where(['id' => $new_editorid])
                        ->execute();     
                             
                        #email to Editor when job assign to editor     
                        $emailTemplate = new Email();
                             $emailTemplate ->template('job_assignto_editor_editor_template')
                                    ->emailFormat('html')
                                    ->to($editorEmail)
                                     ->viewVars(compact('userInfo'))
                                    ->from(array(DEFAULT_EMAIL_FROM  => 'Kwikshoot'))
                                    ->subject('New Job Assigned To You | Kwikshoot')
                                    ->send();
                         $this->Flash->success(__('Yay! Job is Sucessfully Assign to the Editor.'));     
                        return $this->redirect(['controller'=>'jobs','action' => 'joblisting']);
                }
    
                public function jobaccept($id = null){
                  $this->loadModel('Users');
                  $this->loadModel('Editors');
                  $job = $this->Jobs->get($id);
                  $jobID = $job->id;
                  $editorID = $job->editor_id;
                  $userID =  $job->user_id;  
                  $Objective =  $job->objective_of_your_video_other;
                  $query =  $this->Jobs->query();
                            $query->update()
                            ->set(['accepted' => 1, 'job_status' => 'Work In Progress'])
                            ->where(['id' => $jobID])
                            ->execute();
                        
                       //getting user data to send the mail to Admin
                      $usersData = $this->Users->get($userID);
                      $userEmail =  $usersData->email;
                       $userName  =  $usersData->name;
                       $userPhone  =  $usersData->phone;   
                       
                       //getting editor data to send the mail to user 
                        $editorData = $this->Editors->get($editorID);
                        $editorFName =  $editorData->first_name;
                        $editorLName =  $editorData->last_name;
                        $new_editorid = $editorData->id;
                       
                       
                        $userInfo  =  array('name'=>$userName,
                                           'email'=>$userEmail,
                                            'User_Phone'=>$userPhone,
                                           'Editor_Fname'=>$editorFName,
                                           'Editor_Lname'=>$editorLName,
                                           'Editor_ID'=>$new_editorid,
                                           'Job_ID'=>$jobID,
                                           'Video_Description'=>$Objective,
                                           'User_ID' =>$userID,
                                           'userCreatedDate'  => date('d M,Y [h:i:s A]')
                                );
                        
                    #email to User when job assign to editor
                         $emailTemplate = new Email();
                             $emailTemplate ->template('job_acceptedby_editor_user_template')
                                    ->emailFormat('html')
                                    ->to($userEmail)
                                     ->viewVars(compact('userInfo'))
                                    ->from(array(DEFAULT_EMAIL_FROM  => 'Kwikshoot'))
                                    ->subject('Job Accepted By Editor | Kwikshoot')
                                    ->send();
                             
                        #email to Admin when job assign to editor     
                        $emailTemplate = new Email();
                             $emailTemplate ->template('job_acceptedby_editor_admin_template')
                                    ->emailFormat('html')
                                    ->to(ADMIN_EMAIL)
                                     ->viewVars(compact('userInfo'))
                                    ->from(array(DEFAULT_EMAIL_FROM  => 'Kwikshoot'))
                                    ->subject('Job Accepted By Editor | Kwikshoot')
                                    ->send();     
                        
                  $this->Flash->success(__('Yay! You have Accepted a New Job !! Please Start Working on it.'));  
                  return $this->redirect(['action' => 'joblisting']);
                }
                
}