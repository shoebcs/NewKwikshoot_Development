<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class ArticlesTable extends Table
{
public function initialize(array $config)
{
$this->addBehavior('Timestamp');
}
//public function validationDefault(Validator $validator)
//{
//$validator
//->notEmpty('title')
//->requirePresence('title')
//->notEmpty('body')
//->requirePresence('body');
//return $validator;
//}
}