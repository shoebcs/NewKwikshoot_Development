<?php
/**
 * Module Name: App Controller
 * Created on: 08/22/2016
 * Developer Name: Md. Shoeb
 * Description: Lets you manage all the login and logout feature
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

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
     public function initialize()
{
        //print_r($this->request); 
        //echo $this->request->params['action']; die('shoeb');
         if($this->request->params['action'] == 'editorlogin')
         {
             //echo $this->request->params['action']; die();
           $this->loadComponent('Flash');
           $this->loadComponent('Auth', [
           'authenticate' => [
           'Form' => [
           'fields' => [
           'username' => 'email',
           'password' => 'password'
           ],
                'userModel' => 'Editors',
                'finder' => 'auth',
           ],
           ],
           'loginRedirect' => [
           'controller' => 'Editors',
           'action' => 'dashboard'
           ],
        'logoutRedirect' => [
        'controller' => 'registration',
        'action' => 'index'
        ],
        'loginAction' => [
        'controller' => 'Editors',
        'action' => 'editorlogin'
        ],
//          'storage' => [
//                'className' => 'Session',
//                //'key' => 'Auth.Editors',               
//            ],
        ]);
      $this->Auth->allow(['editorlogin','editorlogout']);
       // echo $this->request->params['action']; die();
        }
        else if($this->request->params['action'] == 'userlogin')
         {
             //print_r($this->request->params); die();
           $this->loadComponent('Flash');
           $this->loadComponent('Auth', [
           'authenticate' => [
           'Form' => [
               'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                  
           ],
                        'userModel' => 'Users',
                        'finder' => 'auth',  
           ],
           ],
           'loginRedirect' => [
           'controller' => 'Users',
           'action' => 'dashboard'
           ],
        'logoutRedirect' => [
        'controller' => 'registration',
        'action' => 'index'
        ],
        'loginAction' => [
        'controller' => 'Registration',
        'action' => 'userlogin'
        ],
//          'storage' => [
//                'className' => 'Session',
//                //'key' => 'Auth.Users',               
//            ],
        ]);
           
      $this->Auth->allow(['userregistration','userlogin','userlogout']);
       //echo $this->request->params['action']; die();
        }
 else {
     $this->loadComponent('Flash');
     
$this->loadComponent('Auth', [
        'authenticate' => [
        'Form' => [
        'fields' => [
        'username' => 'email',
        'password' => 'password'
         
        ],
            'userModel' => 'Admins'
        ],
        ],
        'loginRedirect' => [
        'controller' => 'Users',
        'action' => 'index'
        ],
        'logoutRedirect' => [
        'controller' => 'registration',
        'action' => 'index'
        ],
        'loginAction' => [
        'controller' => 'Registration',
        'action' => 'adminlogin'
        ],
//    'storage' => [
//                'className' => 'Session',
//                'key' => 'Auth.Admins',               
//            ],
        ]);
    //echo $this->request->params['action']; die();
// Allow the display action so our pages controller
// continues to work.
      $this->Auth->allow(['adminlogout','adminlogin','display','contactus','howitworks','samplevideo','abouteditors']);
 }
}


    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return void
     */
public function  beforeFilter(Event $event) {
                //$this->Auth->deny();
$this->Auth->allow('userregistration','adminlogout','userlogin','adminregistration','adminlogin');
    }
    
    public function beforeRender(Event $event) {
 
    $this->response->disableCache();

}
}
