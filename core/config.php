<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );
//ini_set( 'display_startup_errors', TRUE );

require_once "autoloader.php";

$sLocation = $_SERVER["DOCUMENT_ROOT"]."/curso-php-11088";
require_once "$sLocation/utilities/menu-utilities.php";

session_start();

$_SESSION["USE-CDN"] = false;










