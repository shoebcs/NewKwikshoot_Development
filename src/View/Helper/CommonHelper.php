<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\View\Helper;
use Cake\View\Helper;
use Cake\View\View;
use Cake\ORM\TableRegistry;
class CommonHelper extends Helper
{
    // initialize() hook is available since 3.2. For prior versions you can
    // override the constructor if required.
    public function initialize(array $config)
    {
        debug($config);
    }

    public function fileStatus($table_value , $file_value)
    {
      
        if($table_value == 0){
           echo 'N/A';
        }
        elseif($table_value!=0 && $file_value == ''){
            echo "File Not uploaded yet";
        }
        elseif($file_value != '')
        {
            echo $file_value;
        }
        
    }
    
    
    }
