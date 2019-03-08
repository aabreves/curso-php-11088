<?php ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport"
              content="width=device-width, initial-scale=1" />
        <title>Aula 28/Fev</title>

        <meta charset="utf-8" />
        <meta name="viewport"
              content="width=device-width, initial-scale=1" />
        <link rel="stylesheet"
              href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
        <script src="../node_modules/jquery/dist/jquery.min.js"></script>
        <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    </head>

    <body style="width:100%;height:100%">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" 
               href="#">
                <img src="../media/images/bird.jpg" 
                     alt="Logo" 
                     style="width:40px;">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" 
                       href="#">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" 
                       href="#">Link 2</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"
                       href="#" 
                       id="navbardrop" 
                       data-toggle="dropdown">
                        Exercícios pag23
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        $sHref = "exercices/ex4-pag23-form.php";
                        $sTarget = "ifrNav";
                        $sCaption = "Exercício 4";
                        $sLink = '<a class=\"nav-link\" href="'.$sHref.'" target="'.$sTarget.'" >'.$sCaption.'</a>';
                        echo "<li class=\"dropdown-item\">$sLink</li>";

                        $sHref = "exercices/ex4-pag23-form-v2.php";
                        $sTarget = "ifrNav";
                        $sCaption = "Exercício 4 (2)";
                        $sLink = '<a class=\"nav-link\" href="'.$sHref.'" target="'.$sTarget.'" >'.$sCaption.'</a>';
                        echo "<li class=\"dropdown-item\">$sLink</li>";

                        $sHref = "exercices/ex5-pag23-form.php";
                        $sTarget = "ifrNav";
                        $sCaption = "Exercício 5";
                        $sLink = '<a class=\"nav-link\" href="'.$sHref.'" target="'.$sTarget.'" >'.$sCaption.'</a>';
                        echo
                        "<li class=\"dropdown-item\">$sLink</li>";
                        ?>
                    </ul>
                </li>
            </ul>
        </nav>
        <div style="position:absolute;top:60px;width:100%;height:600px;background-color:#000;padding:10px;">
            <iframe id="ifrNav" 
                    name="ifrNav"
                    style="width:100%;height:100%;background-color:#aaa"></iframe>
        </div>
    </body>
</html>
