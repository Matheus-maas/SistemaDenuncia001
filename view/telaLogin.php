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

        <style> 

        </style>
    </head>
    <body>
        <img src="logo1.png" width="100%" height="240">

        <fieldset style="width: 50%; margin: 0px auto;" ><legend> <br/> <h1> Tela de Login </h1> </legend>

            <div align="center">

                <form method="post" action="autenticaLogin.php">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
                        <div class="col-sm-8">
                            <input type="text" name="username" class="form-control"  placeholder="Nome do usuario">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Senha">
                        </div>
                    </div>
                    <br/>

                    <input type="submit" class="btn btn-primary btn-lg" value="Logar">
                    <br/>
                    <br/>
                </form> 
            </div>

        </fieldset>
        <br/>
        <br/>


        <label>
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