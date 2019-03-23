<?php

require_once '../../core/config.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Users extends Dataset{    
    function __construct(){
        parent::__construct();
        
        $this->sTable   =  "users";
        $this->asFields = [ 
           "user_id",
           "user_login",
           "user_email", 
           "user_password" ];
        
        $this->abPrimary = [ "user_id" => true ];
    } // function __construct(){   
    
    public function insertNewUser( $sLogin, $sEmail, $sPassword ){
        $asColumns = [
           $this->asFields[1] => "'$sLogin'",
           $this->asFields[2] => "'$sEmail'",
           $this->asFields[3] => "PASSWORD($sPassword)",
        ]; // $asColumns = [
        
        $this->insert( $asColumns );
    } // public function insertNewUser( $sLogin, $sEmail, $sPassword ){
    
} // class Users extends Dataset{

