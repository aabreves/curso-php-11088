<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$sUserAgent = $_SERVER["HTTP_USER_AGENT"];

$iIni = strpos( $sUserAgent, "(", 0 ) + 1;
$iEnd = strpos( $sUserAgent, ")", $iIni );

$sSO = substr( $sUserAgent, $iIni, $iEnd - $iIni );

$asData = explode( ";", $sSO );

// SOLUÇÃO RUIM, MUITO RUIM... RUIM MESMO
//$asData[0] = trim( $asData[0] );
//$asData[1] = trim( $asData[1] );
//$asData[2] = trim( $asData[2] );
foreach ( $asData as $iIndex => $sValue ){
    $asData[$iIndex] = trim( $sValue );
}

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
              content="width=device-width, initial-scale=1" />
        <title>User Agent</title>

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
                echo "<h5>UserAgent: $sUserAgent</h5>";
                
                echo "<h5>Linux: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36</h5>";
                
                echo "<pre>";
                echo "Ini: $iIni\n";
                echo "End: $iEnd\n";
                echo " SO: $sSO\n";
                print_r( $asData );
                echo "</pre>";
            ?>
        </div>
    </body>
</html>

