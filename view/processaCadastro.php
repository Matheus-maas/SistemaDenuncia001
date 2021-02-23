<!DOCTYPE html>
<?php
$conexao = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexao, "projeto");
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
    </head>
    <body>
        <script language="javascript">
            function sucesso() {
                setTimeout("window.location='telaLogin.php'", 2000);
            }

        </script>
        <?php
        $nome = $_POST["nome"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password = md5($password);
        $email = $_POST["email"];

        $inserir = "INSERT INTO usuario (nome, username, password, email) 
        VALUES ('$nome', '$username', '$password', '$email');";
        mysqli_query($conexao, $inserir) or die (mysqli_error($conexao));
        echo"Usuario cadastrado com sucesso. Redirecionando para tela de login em 2 segundos.";
        echo"<script language='javascript'>sucesso()</script";
        ?>
    </body>
</html>