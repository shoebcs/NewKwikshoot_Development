<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::import('Component', 'AuthComponent');
class AppAuthComponent extends AuthComponent {

    function identify($user = null, $conditions = null) {
        $models = array('Users', 'Admins','Editors');
        foreach ($models as $model) {
            $this->userModel = $model; // switch model
            $this->params["data"][$model];// = $this->params["data"]["User"]; // switch model in params/data too
            $result = parent::identify($this->params["data"][$model], $conditions); // let cake do its thing
            if ($result) {
                return $result; // login success
            }
        }
        return null; // login failure
    }
}