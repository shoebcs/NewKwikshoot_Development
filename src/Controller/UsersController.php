<?php
/**
 * Module Name: Users Controller
 * Created on: 09/11/2016
 * Developer Name: Md. Shoeb
 * Description: Lets you manage all User related actions
 */
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
class UsersController extends AppController
{
    public function initialize()
{
parent::initialize();
$this->loadComponent('Flash'); // Include the FlashComponent
}
  public function index(){
       $this->viewBuilder()->layout('admin'); 
       $this->loadModel('Admins');
       $this->set('admins', $this->Admins->find('all'));
      
  }
   public function userlisting(){
       $this->viewBuilder()->layout('admin'); 
       $this->set('users', $this->Users->find('all'));
       //print_r($this->Users->find('all'));
       
   }
  public function jobcalculator(){
      $this->layout = false;
  }
  public function translisting(){
      $this->layout = false;
  }
  public function dashboard(){
    $this->viewBuilder()->layout('user');
  
  }
  public function viewprofile(){
      $this->viewBuilder()->layout('user');
  }
      public function update($id = null)
        {
        $this->viewBuilder()->layout('user');
        $updater = $this->Users->get($id);
               // $this->Auth->setUser($updater);
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
                $this->Users->patchEntity($updater, $this->request->data);
                if ($this->Users->save($updater)) {
                    $session = $this->request->session();
                    echo $session->write('ID', $id);
                    $session->write('First_Name', $this->request->data['first_name']);
                    $session->write('Last_Name', $this->request->data['$last_name']);
                    $session->write('Email', $this->request->data['email']);
                    $session->write('Phone', $this->request->data['phone']);
                    $session->write('City', $this->request->data['city']);
                    $session->write('State', $this->request->data['state']);
                    $session->write('Country', $this->request->data['country']);
                    $this->Flash->success(__('Your Details have been updated.'));
                    return $this->redirect(array('controller'=>'users' , 'action'=>'viewprofile'));
                    
                    
        }
        $this->Flash->error(__('Unable to update your article.'));
        }
        $this->set('updater', $updater);
        }
        
        
        function updatepassword(){
            $this->viewBuilder()->layout('user');
            $session = $this->request->session();
            $userData = $this->Users->get($session->read('ID'));
            if ($this->request->is(['post'])) {
                $userData = $this->Users->newEntity($this->request->data,['validate' => false]);
                $userData->password = $this->request->data['password'];
                $userData->id = $session->read('ID');
                $userData->confirmpassword = $this->request->data['confirmpassword'];
                if($this->request->data['password'] != $userData->confirmpassword){
                    $this->Flash->error(__('Oops, password does not match!  You will want to try that again.')); 
                }elseif ($this->Users->save($userData)) {
                    $this->Flash->success(__('Yay! Your Password has been Updated successfully!')); 
                }
              $this->set('password','');
        }

    }
    
    public function activate($id = null) {
         
        if (!$id) {
            $this->Flash->error(__('Please provide a user id'));
            return $this->redirect(['action' => 'userlisting']);
        }
        $user = $this->Users->get($id);
        $user = $this->Users->patchEntity($user, $this->request->data);
        $status = $user->active ? 'Deactivated':'Activated';
        $user->active = $user->active ? 0:1;
       
        if ($this->Users->save($user)) {
             $this->Flash->success(__('User '.$status.' Successfully !!'));
             return $this->redirect(['action' => 'userlisting']);
        }
        $this->Flash->error(__('User was not re-activated'));     
         return $this->redirect(['action' => 'userlisting']);
    }
    
    public function delete($id = null){
        $this->loadModel('Jobs');
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        $user->id;
        if($this->Users->delete($user)) {
          $query = $this->Jobs->query();
                        $query->update()
                        ->set(['deleted' => 1])
                        ->where(['user_id' => $id])
                        ->execute();  
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'userlisting']);
    }
    
    
}