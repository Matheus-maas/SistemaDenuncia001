<?php
$conexao = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexao, "projeto2");
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>AccessibilitReport</title>
        <style>
            h1 {
                color: #010101;
                text-shadow: 1px 1px 1px rgba(1, 1, 1, 0.97);
            }
            h2 {
                color: #010101;
            }

            fieldset{
                border:1px;
                background:LightSteelBlue;
            }
            body {
                background:White;
            }

        </style>
    </head>
    <body>
        <img src="Logo1.png" width="1350" height="260">

        <fieldset style="width: 50%; margin: 1px auto;"><legend> <br/> <br/> <br/> <h1> Consulta de denuncia </h1> </legend>
            <br/>
            <div align="center">

                <?php
                $username = $_POST['username'];

                $consulta = mysqli_query($conexao, "SELECT * from usuario WHERE username = '$username' ") or die(mysqli_error($conexao));
                $linhas = mysqli_num_rows($consulta);

                $result_usuarios = " SELECT * from usuario as u "
                        . "join denuncia as d on u.idUsuario=d.Usuario_id "
                        . "join endereco as e on d.Endereco_id=e.endereco_id"
                        . "WHERE username = '$username'";
                $resultado_usuarios = mysqli_query($conexao, $result_usuarios);

                echo"<table width='100%' border='1' bordercolor='Gray'>";
                echo"<thead";
                echo"<tr class='table-light'>";
                echo"<th class='bg-primary text-white'>" . "<center>" . 'Usuario' . "</center>" . "</th>";
                echo"<th class='bg-primary text-white'>" . "<center>" . 'nome do local' . "</center>" . "</th>";
                echo"<th class='bg-primary text-white'>" . "<center>" . 'descricao do problema' . "</center>" . "</th>";
                echo"<th class='bg-primary text-white'>" . "<center>" . 'sugestão' . "</center>" . "</th>";
                echo"<th class='bg-primary text-white'>" . "<center>" . 'status' . "</center>" . "</th>";
                echo"</thead>";
                echo '<tbody>';
                while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
                    echo '<tr>';
                    echo"<td class='bg-light text-dark'>" . "<center>" . $row_usuario['username'] . "</center>" . "</td>\n";
                    echo"<td class='bg-light text-dark'>" . "<center>" . $row_usuario['local'] . "</center>" . "</td>";
                    echo"<td class='bg-light text-dark'>" . "<center>" . $row_usuario['descricaoProblema'] . "</center>" . "</td>";
                    echo"<td class='bg-light text-dark'>" . "<center>" . $row_usuario['dicaSolucao'] . "</center>" . "</td>";
                    echo"<td class='bg-light text-dark'>" . "<center>" . $row_usuario['status'] . "</center>" . "</td>";
                    echo"</tr>";
                }
                echo"</tbody></table>";
                ?>
            </div>
            <!-- xxxxxxx -->

            <div align="center">
                <br/>
                <button  onclick="window.location.href = 'telaInicial2.php';" type="button" class="btn btn-primary btn-lg">Tela Inicial</button>
                <br/>
                <br/>
            </div>
        </fieldset>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>