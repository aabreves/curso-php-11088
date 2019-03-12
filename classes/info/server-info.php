<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//echo "<pre>";
//print_r( $_SERVER );
//echo "</pre>";

// A SUPERGLOBAL $_SERVER É UM ARRAY

// PARA CADA ELEMENTO NO ARRAY $_SERVER
//foreach( $_SERVER as $sValue ){
//    // $sValue representa o valor do elemento
//}
$htmlServerInfo = "<table class=\"table table-striped\">";

$htmlServerInfo .= "<thead>";
$htmlServerInfo .= "<tr>";
$htmlServerInfo .= "<th>CHAVE</th>";
$htmlServerInfo .= "<th>VALOR</th>";
$htmlServerInfo .= "</tr>";
$htmlServerInfo .= "</thead>"; 

$htmlServerInfo .= "<tbody>";
foreach( $_SERVER as $sIndex => $sValue ){
    // $sIndex representa o índice do elemento
    // $sValue representa o valor do elemento
    $htmlServerInfo .= "<tr>";
    $htmlServerInfo .= "<td>$sIndex</td>";
    $htmlServerInfo .= "<td>$sValue</td>";
    $htmlServerInfo .= "</tr>";
} // foreach( $_SERVER as $sIndex => $sValue ){
$htmlServerInfo .= "</tbody>";

$htmlServerInfo .= "</table>";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
              content="width=device-width, initial-scale=1" />
        <title>Modelo-html</title>

        <meta charset="utf-8" />
        
        <meta name="viewport"
              content="width=device-width, initial-scale=1" />
        
        <!-- ARQUIVOS NA PASTA node_modules DO PROJETO -->
        <link rel="stylesheet"
              href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />
        
        <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
        <script src="../../node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <!-- ARQUIVOS ONLINE (NA NUVEM) - CÓDIGO COPIADO DE
        https://www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_dropdown-active&stacked=h -->
<!--        <link rel="stylesheet"
              href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
        
    </head>

    <body style="width:100%;height:100%">
        <div id="divContent">
            <?php
                // TODO:
                echo $htmlServerInfo;
            ?>
        </div>
    </body>
</html>

