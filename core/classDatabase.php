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

    private $vQueryResult = false; // v de Variant

    private $sStatus = "";
    private $bStatus = false;

    public function __construct(){
        // TODO: carregar informações de acesso ao BD
        //       a partir de um arquivo
    } // public function __construct(){

    public function __destruct(){
        if ( $this->dbConn ){
            switch ( $this->sDriver ){
                case "POSTGRESQL":
                    break;

                case "MYSQL":
                default:
                    mysqli_close( $this->dbConn );
            } // switch ( $this->sDriver ){
        } // if ( $this->dbConn ){
    } // public function __destruct(){

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

        // SE A CONEXÃO FOI ESTABELECIDA ENTÃO
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

    private function exec( $sqlCommand ){
        if ( $this->dbConn ){
            switch ( $this->sDriver ){
                case "POSTGRESQL":
                    break;

                case "MYSQL":
                default:
                    $this->vQueryResult = mysqli_query( $this->dbConn, $sqlCommand );
            } // switch ( $this->sDriver ){
        } // if ( $this->dbConn ){
    } // private function exec( $sqlCommand ){

    protected function insert_( $sTable, array $asData ){
        // TODO:
        // INSERT INTO <table> ( columns ) VALUES ( values )
        // $asData = [ "column1" => "value1", "column2" => "value2", ... ]
        $sColumns = "";
        $sValues = "";
        $i = 0;
        
        foreach( $asData as $sColumn => $vValue ){
            $i++;
            if ( $i === 1 ){
                $sColumns .= "$sColumn";
                $sValues  .= "$vValue";
                continue;
            } // if ( $i === 1 ){
            $sColumns .= ", $sColumn";
            $sValues  .= ", $vValue";
        } // foreach( $asData as $sColumn => $vValue ){
        
        $sqlInsert = "INSERT INTO $sTable ($sColumns) VALUES ($sValues)";
        echo $sqlInsert;
        $this->exec($sqlInsert);
        
    } // public function insert( $sTable, array $asData ){

    public function update(){
        // TODO:
    }

    public function delete(){
        // TODO:
    }

    /**
     * 
     * @param type $sTable      products
     * @param type $asFields    [ "ProductId", 
     *                            "ProductName", 
     *                            "UnitsInStock" ]
     *                          - SE FOR UM ARRAY VAZIO ENTÃO 
     *                            SELECIONAR TODOS (*)
     * 
     * @param type $asFilter    [ "CategoryId" => category_id ]
     *                          - SE FOR UM ARRAY VAZIO ENTÃO NÃO
     *                            TEM FILTRO
     */
    public function select_( $sTable, array $asFields, array $asFilter ){
        // TODO: montar o comando SQL de acordo com os parametros
        if ( count( $asFields ) === 0 ){
            $sFields = "*";
        } // if ( count( $asFields ) === 0 ){
        else{
            $sFields = $this->getFieldsList( $asFields );
        } // if ( count( $asFields ) === 0 ){ .. else
        
        $sWhere = "";
        if ( count( $asFilter ) !== 0 ){
            
            // $asFilter = [ "ProductId" => 33 ];
            // WHERE ProductId=33
            // 
            // $asFilter = [ "SupplierId" => 3, "CategoryId" => 4 ];
            // WHERE SupplierId=3 AND CategoryId=4            
            if ( 1 ){
                $i = 0;
                foreach ( $asFilter as $sKey => $vValue ){
                    $i++;
                    if ( $i === 1 ){
                        $sWhere = " WHERE $sKey='$vValue'";
                        continue;
                    } // if ( $i === 1 ){
                    $sWhere .= " AND $sKey='$vValue'";
                } // foreach ( $asFilter as $sKey => $vValue ){
            }
            else{
                $asKey = each( $asFilter );
                $sWhere = " WHERE {$asKey["key"]}='{$asKey["value"]}'";
                array_shift( $asFilter );
                foreach ( $asFilter as $sKey => $vValue ){
                    $sWhere .= " AND $sKey='$vValue'"; 
                } // foreach ( $asFilter as $sKey => $vValue ){
            }
        } // if ( count( $asFilter ) !== 0 ){
        
        $sql = "SELECT $sFields FROM $sTable$sWhere";        
        
        $this->exec( $sql );
        
    } // public function select( $sTable, $asFields, $asFilter ){
    
    public function recordCount(){
        return mysqli_num_rows( $this->vQueryResult );
    }
    
    public function getRecord(){
        return mysqli_fetch_array( $this->vQueryResult );
    }
    
    public function getRecord_object(){
        return mysqli_fetch_object( $this->vQueryResult );
    }
    
    public function getRecord_assoc(){
        return mysqli_fetch_assoc( $this->vQueryResult );
    }
    
    private function getFieldsList( array $asFields ){            
        // "ProductId, ProductName, UnitsInStock"
        if ( 1 ){
            // SOLUÇÃO 1
            $i = 0;
            foreach( $asFields as $sField ){
                $i++;
                if ( $i === 1 ){
                    $sFields = $sField;
                    continue;
                } // if ( $i === 1 ){
                $sFields .= ", $sField";                
            } // foreach( $asFields as $sField ){
        }
        else{
            // SOLUÇÃO 2
            $sFields = array_shift( $asFields );                
            foreach( $asFields as $sField ){
                $sFields .= ", $sField";                
            } // foreach( $asFields as $sField ){                
        }
        return $sFields;
    } // private function getFieldsList( array $asFields ){

} // class Database{

