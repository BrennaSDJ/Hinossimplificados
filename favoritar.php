<?php

include('conexao.php');

$id = $_POST['name'];

$sql = "INSERT INTO favoritar(nome) VALUES ($id)";

if(mysqli_query($conexao,$sql)){
    header('Location: favoritos.php');
}else{
    header('Location: letras.php');
}

?>