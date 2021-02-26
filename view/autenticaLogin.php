<!DOCTYPE html>
<?php
    $conexao = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexao, "projeto");
    session_start();
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login</title>

    </head>
    <body>
    <script language="javascript">
            function sucesso(){
                setTimeout("window.location='telaInicial2.php'", 2000);
            }
            function falha(){
                setTimeout("window.location='telaLogin.php'", 2000);
            }
            
        </script>

        
        <?php
            $username = $_POST["username"];
            $password = $_POST["password"];
            $password = md5($password);
            
            $consulta = mysqli_query($conexao, "select * from usuario 
            WHERE username = '$username' AND password = '$password'");
           
            if(mysqli_num_rows($consulta) == 0 )
           {
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
               echo"Usuario ou senha inválidos. Redirecionando para tela de login em 2 segundos.";
               echo"<script language='javascript'>falha()</script";
            
            } 
            else {
                unset ($_SESSION['username']);
                unset ($_SESSION['password']);
                
                echo"Você foi logado com sucesso. Redirecionando em 2 segundos.";
                echo"<script language='javascript'>sucesso()</script";          
            }

        ?>
    </body>
</html>