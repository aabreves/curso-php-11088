<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$oMenu_std = new stdClass();
$oMenu_std->id      = "menu_1";
$oMenu_std->caption = "Menu 1";
$oMenu_std->itens   = [];

$oItemMenu_std = new stdClass();
$oItemMenu_std->href    = "#";
$oItemMenu_std->target  = "_self";
$oItemMenu_std->caption = "Item 1";

// ISTO NÃO FUNCIONA - NÃO É POSSÍVEL CRIAR UM MÉTODO PARA
// UM OBJETO stdClass
//$oItemMenu_std->set = function(){
//    echo "uhu!";
//};
//
//$oItemMenu_std->set();

$oMenu_std->itens[] = $oItemMenu_std;

class Menu{
    var $id      = "";
    var $caption = "";
    var $itens   = [];
}

class ItemMenu{
    public $href;
    public $target;
    public $caption;
}

$oMenu = new Menu();
$oMenu->id      = "menu_2";
$oMenu->caption = "Menu 2";
$oMenu->itens   = [];

$oItemMenu = new ItemMenu();
$oItemMenu->href    = "#";
$oItemMenu->target  = "_self";
$oItemMenu->caption = "Item 1";

$oMenu->itens[] = $oItemMenu;


?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Classes & Objetos</title>

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
                echo "<h5>Objeto Menu - stdClass</h5>";
                echo "<pre>";
                print_r( $oMenu_std );
                echo "</pre>";
                
                echo "<h5>Objeto Menu - class Menu</h5>";
                echo "<pre>";
                print_r( $oMenu );
                echo "</pre>";
            ?>
        </div>
    </body>
</html>

