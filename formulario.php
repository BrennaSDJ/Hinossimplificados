<?php
  
  if(isset($_POST['submit'])){

include_once('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['tel'];
$sexo = $_POST['genero'];
$data = $_POST['data'];
$senha = $_POST['senha'];

$resultado = mysqli_query($conexao, "INSERT INTO cadastro_clientes (nome,email,telefone,sexo,data_nascimento,senha)
                                     VALUES ('$nome','$email','$telefone','$sexo','$data','$senha')");

header('Location: login.php');
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.svg" type="image/x-icon">
    <title>Cadastro</title>
     <link rel="stylesheet" href="style/formulario.css">
     <style>
          .entra{
          display: flex;
          justify-content: center;
     }
     </style>
</head>
<body>
    
     <div class="caixa-cadastro">
        <div class="titulo">
           <h1>Cadastro</h1>
        </div>   
               <form action="formulario.php" method="post">
                   
               <div class="input-box">
                    <label for="nome" >Nome do Usuário</label>
                    <br>
                    <input type="text" id="nome" name="nome" class="InputUser" required>
               </div>
               <br>
               <div class="input-box" >
                    <label for="email" >Email</label>
                    <br>
                    <input type="email" id="email" name="email" class="InputUser" required>
               </div>
               <br>
               <div class="input-box" >
                    <label for="tel" >Telefone</label>
                    <br>
                    <input type="tel" id="tel" name="tel" class="InputUser" required>   
               </div>
               <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
               <br><br>    
               <div class="input-box">
                    <label for="data"><b>Data de nascimento</b></label>
                    <br>
                    <input type="date" id="data" name="data"  required>
               </div>
               <br>
               <div class="input-box" >
                    <label for="tel" >Senha</label>
                    <br>
                    <input type="password" id="tel" name="senha" class="InputUser" required>   
               </div>
                <br>
               <input type="submit" name="submit" id="submit" value="Enviar" >

               <div class="entra">
                  <h5>Já tem uma conta?<a href="login.php">Fazer Login</a></h5>
               </div>

           </form>
      </div>

<!-- <script>
     function logar(){
     var cad = document.getElementById('nome').value;
     var senha = document.getElementById('tel').value;

     if(cad == "nome" && senha == "tel"){
     alert("Cadastro realizado com sucesso.Faça login para acessar");
     }else{
     alert("Cadastro realizado com sucesso.Faça login para acessar");
     }

     }
</script> -->

</body>
</html>