<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once "../../core/config.php";

$dbData = new Users();

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Users</title>

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
                $dbData->selectAll();
                echo "<h5>Número de usuários: {$dbData->recordCount()}</h5>";
                echo "<pre>";
                while ( $asRecord = $dbData->getRecord_object() ){
                    print_r( $asRecord );
                } // while ( $asRecord = $dbData->getRecord() ){
                echo "</pre>";
            ?>
        </div>
    </body>
</html>

