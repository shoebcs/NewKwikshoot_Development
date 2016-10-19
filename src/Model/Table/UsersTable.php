<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;
use Cake\ORM\Rule\IsUnique;
use Cake\ORM\Query;
class UsersTable extends Table
{
    public function initialize(array $config){
        parent::initialize($config);

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->hasMany('Jobs', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        
    }
    
    public function validationDefault(Validator $validator)
    {
    
     $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);
        return $validator;
    }

        
public function buildRules(RulesChecker $rules)
{
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
                    ->select(['id', 'name','email', 'password','phone','city','state','country','created'])
                    ->where(['Users.active' => 1]);

                return $query;
            }

}