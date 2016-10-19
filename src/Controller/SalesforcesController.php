<?php
   namespace App\Controller;

   use App\Controller\AppController;
   use Cake\Event\Event;

   class SalesforcesController extends AppController 
   {

      public function beforeFilter(Event $event)
      {
          parent::beforeFilter($event);
      }

      public function index()
      {
          $this->autoRender = false;
          $this->loadModel('Salesforce.SalesforceContact');
          $query = $this->SalesforceContact->find('all')
                      ->select(['Id','Email','LastName'])
                      ->where(['Email' => "info@salesforce.com"]
                  );

          foreach ($query as $row) {
            echo "<pre>";
            print_r($row);
            echo "</pre>";
          }

      }
   }