<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once "../../core/config.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>New User</title>

        <meta charset="utf-8" />

        <meta name="viewport"
              content="width=device-width, initial-scale=1" />

        <?php
        require_once '../../templates/headers.js.php';
        ?>

    </head>

    <body style="width:100%;height:100%">
        <div id="divContent">
            <form action="insert.php"
                  method="POST"
                  style="padding:30px 120px">
                <h5>CRIAR NOVO USUÁRIO</h5>
                <div class="form-group">
                    <label for="txtLogin">Login:</label>
                    <input type="text" 
                           class="form-control" 
                           id="txtLogin"
                           name="txtLogin"
                           required >
                </div>
                <div class="form-group">
                    <label for="emlEmail">Email address:</label>
                    <input type="email" 
                           class="form-control" 
                           id="emlEmail"
                           name="emlEmail"
                           required >
                </div>
                <div class="form-group">
                    <label for="pwdSecret">Password:</label>
                    <input type="password" 
                           class="form-control" 
                           id="pwdSecret"
                           name="pwdSecret"
                           required >
                </div>
                <div class="form-group">
                    <label for="pwdConfSecret">Confirm Password:</label>
                    <input type="password" 
                           class="form-control" 
                           id="pwdConfSecret" 
                           required >
                </div>
                <button type="submit" 
                        class="btn btn-primary">Submit</button>
            </form>
            <?php
                // TODO:
                if ( isset( $_POST["txtLogin"] ) ){
                    $usrNewUser = new Users();
                    
                    $usrNewUser->insertNewUser( $_POST["txtLogin"],
                       $_POST["emlEmail"],
                       $_POST["pwdSecret"] );
                    
                } // if ( isset( $_POST["txtLogin"] ) ){
            ?>
        </div>
    </body>
</html>

