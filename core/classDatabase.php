<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Database{
    private $sDriver = "MYSQL";
    
    private $sHost = "localhost";
    private $iPort = 3306;
    
    private $sUser = "root";
    private $sPass = "";
    
    private $sDatabase = "northwind";
    
    private $dbConn = null;
    
    private $sStatus = "";
    private $bStatus = false;
    
    public function __construct(){
        // TODO: carregar informações de acesso ao BD 
        //       a partir de um arquivo
    } // public function __construct(){
    
    public function startDatabase() : bool{
        
        switch ( $this->sDriver ){
            case "POSTGRESQL":
                break;            
            
            case "MYSQL":
            default:
                $this->dbConn = mysqli_connect( $this->sHost,
                                                $this->sUser, 
                                                $this->sPass,
                                                $this->sDatabase );
                /* OU
                $this->dbConn = new mysqli( $this->sHost,
                                            $this->sUser, 
                                            $this->sPass,
                                            $this->sDatabase );
                 * 
                 */
                break;
        } // switch ( $sDriver ){
        
        if ( $this->dbConn ){
            $this->sStatus = "Database connection ready.";
            $this->bStatus = true;
        } // if ( $this->dbConn ){
        else{
            $this->sStatus = "Connect error: ".mysqli_connect_errno().
                             " - ".mysqli_connect_error();
            $this->bStatus = false;
        } // if ( $this->dbConn ){ .. else
        
        return $this->bStatus;
    } // public function startDatabase(){
    
    public function status() : string{
        return $this->sStatus;
    } // public function status() : string{
    
} // class Database{

