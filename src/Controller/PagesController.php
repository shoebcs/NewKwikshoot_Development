<?php
/**
 * Module Name: Pages Controller
 * Created on: 09/11/2016
 * Developer Name: Md. Shoeb
 * Description: Lets you manage all the static fron pages
 */
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link http://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @return void|\Cake\Network\Response
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display()
    {
      $this->viewBuilder()->layout('kwikshoot'); 
      $path = func_get_args();

        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $e) {
            if (Configure::read('debug')) {
                throw $e;
            }
            throw new NotFoundException();
        }
    }
    public function index()
    {
    
    }
    
   
    public function howitworks(){
       $this->viewBuilder()->layout('kwikshoot');  
    }
    
    public function samplevideo(){
        $this->viewBuilder()->layout('kwikshoot'); 
    }
    
    public function abouteditors(){
        $this->viewBuilder()->layout('kwikshoot'); 
    }
     public function contactus(){
        $this->viewBuilder()->layout('kwikshoot'); 
        $this->loadModel('Contacts');
        $validateCheck  =  0;
        $contact_us = $this->Contacts->newEntity();
        if ($this->request->is('post')) {
            //die($this->data['g-recaptcha-response']);
           // print_r($this->request->data);
                    $contact_us = $this->Contacts->patchEntity($contact_us, $this->request->data);
                    $name       =          $contact_us['name'];
                    $user_email =           $contact_us['email'];
                    $company    =          $contact_us['company'];
                    $title      =         $contact_us['title'];
                    $phone      =         $contact_us['phone'];
                    $description    =         $contact_us['description'];
              
                    $contact_us['g-recaptcha-response'];
                    
                if(empty($contact_us['g-recaptcha-response'])){
                 $validateCheck  =  1;
                 }     
                 if($validateCheck  ==  0){
               if($this->Contacts->save($contact_us)) {
                $this->Flash->success(__('Your Enquiry has been Successfully Submitted , Thank You !!'));
                //return $this->redirect(['action' => 'index']);
                $userInfo  =  array('name'=>$name,
                                   'company'=>$company,
                                   'email'=>$user_email,
                                   'phone'=>$phone,
                                   'title'=>$title,
                                   'description'=>$description,
                                   'userCreatedDate'  => date('d M,Y [h:i:s A]')
                                );
                #mail to user
                 $email = new Email();
                             $email->template('contactus_enquiry_admin_template')
                                    ->emailFormat('html')
                                    ->to(ADMIN_EMAIL)
                                     ->viewVars(compact('userInfo'))
                                    ->from(array(DEFAULT_EMAIL_FROM  => 'Kwikshoot'))
                                    ->subject('User Enquiry | Kwikshoot')
                                    ->send();
                 
                         }
              return $this->redirect('/pages/contact-us');           
        }
        }  
         $this->set('contact_us', $contact_us);
         $this->set('validateCheck', $validateCheck);
     }
    
}
