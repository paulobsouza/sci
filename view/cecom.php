<?php
include_once('../connection.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title> CECOM </title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <label for="nome">Nome</label>
            </div>
            <div class="col-6">
                <select name="nome" class="form-select">
                    <option disabled selected> Selecione </option>
                    <?php
                    $sql = "SELECT * FROM tb_setor WHERE set_nome = 'CECOM';";
                    $query = mysqli_query($connection, $sql);
                    while ($vetor = $query->fetch_assoc()) {
                        $nome = $vetor['set_pessoas'];
                        echo "<option>" . $nome . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="nome"> N° de Impressões </label>
                </div>
                <div class="col-6">
                    <select name="nome" class="form-select">
                        <option disabled selected> Selecione </option>
                        <?php
                        $i = 0;
                        while ($i <= 1000) {
                            echo "<option>" . $i . "</option>";
                            $i++;
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>