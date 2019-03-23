<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once "../../core/config.php";
//require_once '../../core/classDatabase.php';

$dbData = new Products();
//$dbData = newObject( "Database" );
//$dsProducts = newObject( "Products" );
//$dbData->select( [ "ProductId", "ProductName" ], [] );

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Products</title>

        <meta charset="utf-8" />
        
        <meta name="viewport"
              content="width=device-width, initial-scale=1" />
        
        <?php
        require_once '../../templates/headers.js.php';
        ?>
        
    </head>

    <body style="width:100%;height:100%">
        <div id="divContent">
            <?php
                // TODO:                
                $dbData->selectOne( 13 );
                echo "<pre>";
                while ( $asRecord = $dbData->getRecord_object() ){
                    print_r( $asRecord );
                } // while ( $asRecord = $dbData->getRecord() ){
                echo "</pre>";
                
                $dbData->select( [ "ProductId", "ProductName" ],
                   [ "ProductName" => "Aniseed Syrup" ] );
                echo "<pre>";
                while ( $asRecord = $dbData->getRecord_object() ){
                    print_r( $asRecord );
                } // while ( $asRecord = $dbData->getRecord() ){
                echo "</pre>";
                
                $dbData->selectAll();
                echo "<h5>Número de produtos: {$dbData->recordCount()}</h5>";
                echo "<pre>";
                while ( $asRecord = $dbData->getRecord_object() ){
                    print_r( $asRecord );
                } // while ( $asRecord = $dbData->getRecord() ){
                echo "</pre>";
            ?>
        </div>
    </body>
</html>

