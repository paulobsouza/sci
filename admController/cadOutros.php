<?php
    include "../connection.php";

    $outros = filter_input(INPUT_POST, 'outros');
    $usuario = filter_input(INPUT_POST, 'usuario');
    $sql = "INSERT INTO tb_setor(set_nome, set_pessoas) VALUES ('$outros','$usuario')";
    $executar = mysqli_query($connection, $sql);
    header("location:cadOutros.php");
?>