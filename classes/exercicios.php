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
      <ul>
      <?php
         $sHref = "exercices/ex4-pag23-form.php";
         $sTarget = "_blank";
         $sCaption = "Exercício 4 da pag 23";
         $sLink = '<a href="'.$sHref.'" target="'.$sTarget.'" >'.$sCaption.'</a>';
         echo "<li>$sLink</li>";

         $sHref = "exercices/ex4-pag23-form-v2.php";
         $sTarget = "_blank";
         $sCaption = "Exercício 4 da pag 23 (versão 2)";
         $sLink = '<a href="'.$sHref.'" target="'.$sTarget.'" >'.$sCaption.'</a>';
         echo "<li>$sLink</li>";

         $sHref = "exercices/ex5-pag23-form.php";
         $sTarget = "_blank";
         $sCaption = "Exercício 5 da pag 23";
         $sLink = '<a href="'.$sHref.'" target="'.$sTarget.'" >'.$sCaption.'</a>';
         echo "<li>$sLink</li>";
      ?>
      </ul>
	</body>
</html>
