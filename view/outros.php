<<<<<<< HEAD
<?php
include_once('../connection.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title> SCI - Sistema de Controle de Impressões </title>
</head>

<body>
    <form action="../controller/cadSetor.php" method="POST">
        <div class="container shadow p-4 mb-5 bg-body rounded">
            <div class="row">
                <div class="col-12">
                    <center>
                        <h2> Outros </h2>
                    </center>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-3">
                    <label for="setor"> Setor </label>
                </div>
                <div class="col-9">
                    <input type="text" id="setor" name="setor" class="form-control">
                </div>
            </div>
            <div class="row py-2">
                <div class="col-3">
                    <label for="usuario"> Usuário </label>
                </div>
                <div class="col-9">
                    <input type="text" id="usuario" name="usuario" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Enviar" class="btn btn-success form-control">
                </div>
            </div>
        </div>
    </form>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"> </script>

=======
<?php
include_once ('../connection.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title> SCI - Sistema de Controle de Impressões </title>
</head>
<body>
    <form action="../controller/cadSetor.php" method="POST">
        <div class="container shadow p-4 mb-5 bg-body rounded">
            <div class="row">
                <div class="col-12">
                    <center><h2>Outros</h2></center>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-3">
                    <label for="setor">Setor</label>
                </div>
                <div class="col-9">
                    <input type="text" id="setor" name="setor" class="form-control">
                </div>
            </div>
            <div class="row py-2">
                <div class="col-3">
                    <label for="usuario">Usuário</label>
                </div>
                <div class="col-9">
                    <input type="text" id="usuario" name="usuario" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="submit" value="Enviar" class="btn btn-success form-control">
                </div>
            </div>
        </div>
    </form>    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>  
>>>>>>> b9fd271 (Co-authored-by: ArthurLelis32 <ArthurLelis32@users.noreply.github.com>)
</html>