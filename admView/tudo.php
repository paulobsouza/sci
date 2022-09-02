<?php
    include_once "../connection.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://www.seduc.ce.gov.br/wp-content/themes/ceara2017/favicon.ico" type="image/x-png">
    <link rel="shortcut icon" href="https://www.seduc.ce.gov.br/wp-content/themes/ceara2017/favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://www.seduc.ce.gov.br/wp-content/themes/ceara2017/favicon.ico" type="image/x-icon">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title> SCI - Área do Administrator </title>
</head>
<body>

<div class="container p-4 mb-5">
        <div class="row">
            <div class="col-12">
                <table id="admin" class="table table-striped" width=100%>
                    <thead>
                        <th class="th-sm"> Setor </th>
                        <th class="th-sm"> Pessoas </th>
                        <th class="th-sm"> Editar </th>
                        <th class="th-sm"> Excluir </th>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM tb_setor";
                            $query = mysqli_query($connection, $sql);
                            while($vetor = $query->fetch_assoc()){
                                $codigo = $vetor['set_nome'];
                                $nome = $vetor['set_pessoas'];
                                echo "<tr><td>".$codigo."</td>
                                    <td>".$nome."</td>
                                    <td> 
                                        <input type='button' value='Editar' class='btn btn-primary'>
                                    </td>
                                    <td>
                                        <input type='button' value='Excluir' class='btn btn-danger'>
                                    </td>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
<script>
$(document).ready(function(){
    $('#admin').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
        }
    });
});
</script>
</body>
</html>