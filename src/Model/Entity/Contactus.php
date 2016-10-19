<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;
class Contact extends Entity
{
// Make all fields mass assignable except for primary key field "id".
protected $_accessible = [
'*' => true,
'id' => false
];
// ...
}