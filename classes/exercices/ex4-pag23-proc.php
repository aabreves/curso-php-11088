<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
		<meta charset="utf-8" />
  	<meta name="viewport"
			content="width=device-width, initial-scale=1" />
		<title>Ex 4 Pag 23</title>
	</head>

	<body>
      <?php
         print_r( $_REQUEST );

         $nYear = $_REQUEST["nYear"];

         if ( $nYear % 2 !== 0 ){
            echo "<h5>NÃO É BISSEXTO!</h5>";
         }
         else{
            echo "<h5>PRECISA TESTAR...</h5>";
         }
      ?>
	</body>
</html>
