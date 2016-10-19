<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;

class JobsTable extends Table{
    
   public function initialize(array $config)
    {
       
        parent::initialize($config);
         
              
        $this->table('jobs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Jobs', [
            'foreignKey' => 'job_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ExtraTasks', [
            'foreignKey' => 'job_id'
        ]);
        $this->hasMany('JobBrief', [
            'foreignKey' => 'job_id'
        ]);
        $this->hasMany('JobUserEditor', [
            'foreignKey' => 'job_id'
        ]);
        $this->hasMany('Jobs', [
            'foreignKey' => 'job_id'
        ]);
       $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
       
       
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        

        $validator
            ->requirePresence('objective_of_your_video', 'create')
            ->notEmpty('objective_of_your_video');
          
        $validator
            ->allowEmpty('raw_video_length_file')
            ->add('raw_video_length_file', [
                'validExtension' => [
                    'rule' => ['extension',['mp4','mkv','avi','flv']],
                    'message' => __('Only Allow mp4, avi ,flv and mkv extension ') ]]);
        $validator
            ->allowEmpty('extra_custom_title_page_file')
            ->add('extra_custom_title_page_file', [
                'validExtension' => [
                    'rule' => ['extension',['jpg','png','gif','jpeg']],
                    'message' => __('Only Allow jpg, png ,gif and jpeg extension ') ]]);
        $validator
            ->allowEmpty('extra_single_graphic_overlay_file')
            ->add('extra_single_graphic_overlay_file', [
                'validExtension' => [
                    'rule' => ['extension',['jpg','png','gif','jpeg']],
                    'message' => __('Only Allow jpg, png ,gif and jpeg extension ') ]]);
        $validator
            ->allowEmpty('extra_green_screen_keying_file')
            ->add('extra_green_screen_keying_file', [
                'validExtension' => [
                    'rule' => ['extension',['jpg','png','gif','jpeg']],
                    'message' => __('Only Allow jpg, png ,gif and jpeg extension ') ]]);
        $validator
            ->allowEmpty('extra_image_screen_takeover_file')
            ->add('extra_image_screen_takeover_file', [
                'validExtension' => [
                    'rule' => ['extension',['jpg','png','gif','jpeg']],
                    'message' => __('Only Allow jpg, png ,gif and jpeg extension ') ]]);
        
         $validator
            ->allowEmpty('extra_image_overlay_on_screen_file')
            ->add('extra_image_overlay_on_screen_file', [
                'validExtension' => [
                    'rule' => ['extension',['jpg','png','gif','jpeg']],
                    'message' => __('Only Allow jpg, png ,gif and jpeg extension ') ]]);
        
//        $validator
//            ->integer('required_video_length')
//            ->requirePresence('required_video_length', 'create')
//            ->notEmpty('required_video_length');
//
//        $validator
//            ->integer('raw_video_length')
//            ->requirePresence('raw_video_length', 'create')
//            ->notEmpty('raw_video_length');
//
//        $validator
//            ->requirePresence('video_start_end_points', 'create')
//            ->notEmpty('video_start_end_points');
//
//        $validator
//            ->requirePresence('free_title_page', 'create')
//            ->notEmpty('free_title_page');
//
//        $validator
//            ->requirePresence('speaker_title', 'create')
//            ->notEmpty('speaker_title');
//
//        $validator
//            ->requirePresence('closing_page_content', 'create')
//            ->notEmpty('closing_page_content');
//
//        $validator
//            ->requirePresence('user_status', 'create')
//            ->notEmpty('user_status');
//
//        $validator
//            ->requirePresence('editor_status', 'create')
//            ->notEmpty('editor_status');
//
//        $validator
//            ->requirePresence('status', 'create')
//            ->notEmpty('status');
//
//        $validator
//            ->integer('basic_price')
//            ->requirePresence('basic_price', 'create')
//            ->notEmpty('basic_price');
//
//        $validator
//            ->integer('extra_price')
//            ->requirePresence('extra_price', 'create')
//            ->notEmpty('extra_price');
//
//        $validator
//            ->integer('total_price')
//            ->requirePresence('total_price', 'create')
//            ->notEmpty('total_price');
//
//        $validator
//            ->dateTime('deleted')
//            ->requirePresence('deleted', 'create')
//            ->notEmpty('deleted');
        
        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['job_id'], 'Jobs'));

        return $rules;
    }

}