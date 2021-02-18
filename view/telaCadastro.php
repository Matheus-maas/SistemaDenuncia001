<!doctype html>
<html lang="en">
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
                border:1px red;
                background:LightSteelBlue;
            }

        </style>
    </head>
    <body>

        <img src="logo1.png" width="1350" height="240">

        <fieldset style="width: 50%; margin: 0px auto;" ><legend> <br/><h1>Tela de Cadastro </h1> </legend>

            <div align="center">
               <form method="post" action="processaCadastro.php"> -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-8">
                        <input type="text" name="nome" class="form-control"  placeholder="Seu nome">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Usuario</label>
                    <div class="col-sm-8">
                        <input type="text" name="username" class="form-control"  placeholder="Nome do usuario">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Senha</label>
                    <div class="col-sm-8">
                        <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Senha">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">

                        <br/>
                        
                        <input onclick="window.location.href = 'telaInicial.php';" type="button" class="btn btn-primary btn-lg" value="Voltar">
                        <input type="button" class="btn btn-primary btn-lg" value="Cancelar">
                        <input type="button" class="btn btn-primary btn-lg" value="Apagar">
                        <input type="submit" name="btnCadUsuario" class="btn btn-primary btn-lg" value="Salvar">


                    </div>
                    <br/>
                    </fieldset>
                    <br/>
                    <label> Desenvolvido por: Lucas de Liz Frutuoso e Matheus Henrique Maas</label> <br/>
                    <label>
                        Versão: 2.00
                    </label>
                    <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
                    </body>
                    </html>