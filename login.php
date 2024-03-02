<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.svg" type="image/x-icon">
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css">
    <style>
        h5,h1{
     color: green;
     }
    </style>
</head>
<body>

     <div class="caixa-login">
            <h1>Login</h1>
        <form action="testeLogin.php" method="POST">
            <input type="text" name="nome" placeholder="Usuário">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input type="submit" name="submit" value="Enviar" class="button">
        </form>    
             
            <h5>Não tem uma conta?<a href="formulario.php">Cadastre-se</a></h5>
      </div>

</body>
</html>