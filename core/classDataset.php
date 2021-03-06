<?php

require_once 'autoloader.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dataset extends Database{
    protected $sTable;
    protected $asFields;
    protected $abPrimary;
    
    function __construct(){
        parent::__construct();
        $this->startDatabase();
    }
    
    public function selectAll(){
        $this->select_( $this->sTable, $this->asFields, [] );
    }
    
    public function selectOne( $vItemId ){
        $sPrimaryKey = array_keys( $this->abPrimary )[0];
        $asFilter = [ $sPrimaryKey => $vItemId ];
        $this->select_( $this->sTable, $this->asFields, $asFilter );
    }
    
    public function select( array $asFields, array $asFilter ){
        $this->select_( $this->sTable, $asFields, $asFilter );
    }
    
    protected function insert( array $asColumns ){
        $this->insert_( $this->sTable, $asColumns );
    }
    
}