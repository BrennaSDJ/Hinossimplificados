<?php
  
  if(!empty($_GET['id']))
  {
     include_once('conexao.php');

     $id = $_GET['id'];

     $sqlselect = "SELECT * FROM cadastro_clientes WHERE id=$id";

     $result = $conexao->query($sqlselect);

     if($result->num_rows > 0)
     {
        $sqlDelete = "DELETE FROM cadastro_clientes WHERE id=$id";
         $sqlDelete = $conexao->query($sqlDelete);
     }   
  }  
       header('Location: usuario_super.php');
     


  
?>
