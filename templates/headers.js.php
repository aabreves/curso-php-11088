<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
    
<!-- ARQUIVOS NA PASTA node_modules DO PROJETO -->
<?php 
$sBsVersion = "4.3.1";

if ( isset( $_SESSION["USE-CDN"] ) && 
  $_SESSION["USE-CDN"] === false ){
    
  $sLocation = "http://".$_SERVER["HTTP_HOST"]."/curso-php-11088";  
    
  echo "<script src=\"$sLocation/node_modules/jquery/dist/jquery.min.js\"></script>
        <script src=\"$sLocation/node_modules/popper.js/dist/umd/popper.min.js\"></script>";
  
  echo "<link rel=\"stylesheet\"
                href=\"$sLocation/js/bootstrap/{$sBsVersion}/dist/css/bootstrap.min.css\" />
        <script src=\"$sLocation/js/bootstrap/{$sBsVersion}/dist/js/bootstrap.min.js\"></script>";
}
else{
  echo "<link rel=\"stylesheet\"
              href=\"https://maxcdn.bootstrapcdn.com/bootstrap/{$sBsVersion}/css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/{$sBsVersion}/js/bootstrap.min.js\"></script>";  
}
?>