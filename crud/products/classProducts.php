<?php

require_once '../../core/autoloader.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Products extends Dataset{    
    function __construct(){
        parent::__construct();
        
        $this->sTable   =  "products";
        $this->asFields = [ 
           "ProductId",
           "ProductName",
           "SupplierId", 
           "CategoryId",
           "UnitPrice",
           "UnitsInStock" ];
        
        $this->abPrimary = [ "ProductId" => true ];
    } // function __construct(){    
} // class Products extends Dataset{

