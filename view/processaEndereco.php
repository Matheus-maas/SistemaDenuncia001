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
            function sucesso(){
                setTimeout("window.location='telaDenuncia.php'", 2000);
            }
            
        </script>
    <?php
        $local = $_POST["local"];
        $estado = $_POST["estado"];
        $cidade = $_POST["cidade"];
        $bairro = $_POST["bairro"];
        $rua = $_POST["rua"];
        $telefone = $_POST["telefone"];
            
        $inserir = "INSERT INTO endereco (local, estado, cidade, bairro, rua, telefone) 
        VALUES ('$local', '$estado', '$cidade', '$bairro', '$rua', '$telefone');";
        mysqli_query($conexao, $inserir) or die (mysqli_error($conexao));
        echo"Endereco cadastrado com sucesso. Redirecionando para cadastro da denuncia em 2 segundos.";
        echo"<script language='javascript'>sucesso()</script";
        ?>
    </body>
</html>