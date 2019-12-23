<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Base com bootstrap 4</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div><h1><center>Cadastre aqui</h1></div>

<div class="container">
    <form method="post" action="inserir.php">
        <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Usuario</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="usuario">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Senha</label>
            <input type="password" class="form-control" id="exampleInputEmail1" name="senha">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Cargo</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="cargo">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
        <p><a href="index.php">Listar Clientes Cadastrador</a></p>
    </form>
</div>



</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>