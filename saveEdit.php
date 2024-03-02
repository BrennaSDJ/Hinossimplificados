<?php
include_once('conexao.php');

if (isset($_POST['update'])) {
    $id = $_POST['id']; 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data = $_POST['data_nascimento'];
    $senha = $_POST['senha'];

    
    $sqlUpdate = "UPDATE cadastro_clientes SET nome='$nome', email='$email', telefone='$telefone', sexo='$sexo', data_nascimento='$data', senha='$senha' WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);

    

}

header('Location: usuario_super.php');
?>
