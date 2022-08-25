<?php
include_once ('../connection.php');
include_once ('../header/header.php');
include_once ('../footer/footer.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SCI - Sistema de Controle de Impressões </title>
</head>
<body>
    <form action="../controller/cadSetor.php" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <label for="setor">Setor</label>
                </div>
                <div class="col-6">
                    <input type="text" id="setor" name="setor" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="usuario">Usuário</label>
                </div>
                <div class="col-6">
                    <input type="text" id="usuario" name="usuario" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input type="submit" value="Enviar">
                </div>
                <div class="col-6">
                    <input type="reset" value="Limpar">
                </div>
            </div>
        </div>
    </form>    
</body>
</html>