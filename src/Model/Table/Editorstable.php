<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Model\Table;
use Cake\ORM\TableRegistry;
use Cake\ORM\Table;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;
use Cake\Validation\Validator;
use Cake\ORM\Query;

class EditorsTable extends Table
{
public function initialize(array $config)
{
    $this->addBehavior('Timestamp');
}

    public function validationDefault(Validator $validator)
    {
       

            $validator
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('phone')
            ->requirePresence('phone', 'create')
            ->notEmpty('phone')
             ->add('phone',[
                    'length' => ['rule' => ['minLength', 10],
                                 'message' => 'phone need to be at least 10 characters long',
                                ]
                        ]);

//        $validator
//            ->requirePresence('city', 'create')
//            ->notEmpty('city');
//
//        $validator
//            ->requirePresence('state', 'create')
//            ->notEmpty('state');
//
//        $validator
//            ->requirePresence('country', 'create')
//            ->notEmpty('country');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

//        $validator
//            ->requirePresence('description', 'create')
//            ->notEmpty('description');

       

        return $validator;
    }
    
 public function validationOnlycheck(Validator $validator) {
        $validator = $this->validationDefault($validator);
        $validator->remove('first_name');
        $validator->remove('last_name');
        $validator->remove('email');
        $validator->remove('phone');
        $validator->remove('city');
        $validator->remove('state');
        $validator->remove('country');
        $validator->remove('description');
        return $validator;
    }
    
    
    public function buildRules(RulesChecker $rules){
        // Add a rule that is applied for create and update operations
    //    $rules->add(function ($entity, $options) {
    //        // Return a boolean to indicate pass/failure
    //    }, 'ruleName');
        $rules->add($rules->isUnique(['email']));

        // Add a rule for create.
    //    $rules->addCreate(function ($entity, $options) {
    //        // Return a boolean to indicate pass/failure
    //    }, 'ruleName');

        // Add a rule for update
    //    $rules->addUpdate(function ($entity, $options) {
    //        // Return a boolean to indicate pass/failure
    //    }, 'ruleName');

        // Add a rule for the deleting.
    //    $rules->addDelete(function ($entity, $options) {
    //        // Return a boolean to indicate pass/failure
    //    }, 'ruleName');

        return $rules;
    }
    
            public function findAuth(query $query, array $options)
            {
                $query
                    ->select(['id','first_name' , 'last_name' , 'email', 'password','phone','city','state','country','created','description','lastlogin'])
                    ->where(['Editors.active' => 1]);

                return $query;
            }    
    
}