<?php
  
  if(!empty($_GET['id']))
  {

     include_once('conexao.php');

     $id = $_GET['id'];

     $sqlselect = "SELECT * FROM cadastro_clientes WHERE id=$id";

     $result = $conexao->query($sqlselect);

     if($result->num_rows > 0)
     {
         while($user_data = mysqli_fetch_assoc($result))
         {
         $nome = $user_data['nome'];
         $email = $user_data['email'];
         $telefone = $user_data['telefone'];
         $sexo = $user_data['sexo'];
         $data = $user_data['data_nascimento'];
         $senha = $user_data['senha'];
         }
     }
     else
     {
          header('Location: usuario_super.php ');
     }


  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="style/formulario.css">
    <title>Cadastro</title>
     <style>
         .caixa-us{
               padding: 2px;
               display: flex;
               justify-content: center;
               margin-top: .5rem;
          }
          .link-us{
               text-decoration:none;
               color:  green;
          }
          #update{
               border: none;
               width: 100%;
               padding: 10px;
               border-radius: 10px;
               background-color: rgb(178, 253, 178);
          }
          #update:hover{
               background-color: #e4fdea;
               cursor: pointer;
          }
     </style>
</head>
<body>
    
     <div class="caixa-cadastro">
        <div class="titulo">
           <h1>Edição</h1>
        </div>   
               <form action="saveEdit.php" method="post">
                   
               <div class="input-box">
                    <label for="nome" >Nome do Usuário</label>
                    <br>
                    <input type="text" id="nome" name="nome" class="InputUser" value="<?php echo $nome ?>"  required>
               </div>
               <br>
               <div class="input-box" >
                    <label for="email" >Email</label>
                    <br>
                    <input type="email" id="email" name="email" class="InputUser" value="<?php echo $email?>" required>
               </div>
               <br>
               <div class="input-box" >
                    <label for="tel" >Telefone</label>
                    <br>
                    <input type="tel" id="tel" name="tel" class="InputUser" value="<?php echo $telefone ?>" required>   
               </div>
               <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" <?php ($sexo == 'feminino') ? 'checked' : '' ?> required>
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?> required>
                    <label for="masculino">Masculino</label>
               <br><br>    
               <div class="input-box">
                    <label for="data"><b>Data de nascimento</b></label>
                    <br>
                    <input type="date" id="data" name="data" value="<?php echo $data ?>"  required>
               </div>
               <br>
               <div class="input-box" >
                    <label for="tel" >Senha</label>
                    <br>
                    <input type="password" id="tel" name="senha" class="InputUser" value="<?php echo $senha ?>"  required>   
               </div>
                <br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
               <input type="submit" name="update" id="update" value="Enviar" >
               <div class="caixa-us">
                <a class="link-us" href="usuario_super.php" >Usuarios</a>
               </div> 
           </form>
      </div>

</body>
</html>