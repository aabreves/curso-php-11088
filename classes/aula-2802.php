<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
   <head>
		<meta charset="utf-8" />
  	<meta name="viewport"
			content="width=device-width, initial-scale=1" />
		<title>Aula 28/Fev</title>
	</head>

	<body>
      <?php
        $asTest = [ "a" => "123abc", "b" => "234bcd" ];
        print_r( each( $asTest ) );
        //print_r( each( array_shift( $asTest ) ) );
      ?>
	</body>
</html>
