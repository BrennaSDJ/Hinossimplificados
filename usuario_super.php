<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.svg" type="image/x-icon">
    <title>Super User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
    <style>
    .table-bg{
            box-shadow:0px 1px 9px 11px rgb(178, 253, 178);  

   }  
     .botao1{
      border-radius: 15px;
      padding: 10px;
      color: white;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: red;
      float:right;
      border: #e4fdea;
      box-shadow: 1px 1px 3px gray;
      margin-bottom: 2rem;
      margin-right:5rem;
      width:10rem;
   }

     button{
      border-radius: 15px;
      padding: 10px;
      color: black;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: rgb(136, 247, 136);
      float:right;
      border: #e4fdea;
      box-shadow: 1px 1px 3px gray;
      margin-bottom: 2rem;
      margin-right:5rem;
     }
  
     button:hover{
      transition: all 0s ease 0s;
      transform-style: flat;
      box-shadow: inset;
      background-color: rgb(185, 252, 185);
  
   }

   .estilo{
    text-decoration:none;
    color:black;
   }
    </style>
</head>
<body>
    <?php include_once('navbar.php') ?>

              <div>
               <a href="sair.php"><input  class="botao1" type="button" value="Sair do Login"></a>
              </div>

              <div class="botao">
                <button><a class="estilo" href="index.php">Página Inicial</a></button>
              </div>
    
    <?php
      
      include('conexao.php');
     
      $sql = "SELECT * FROM cadastro_clientes ORDER BY id DESC";

      $result = $conexao->query($sql);

      

    ?>

    <div class="m-5">
    <table class="table table-bg">
  <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuario</th>
                <th scope="col">Email</th>
                <!-- <th scope="col">Usuário</th> -->
                <th scope="col">Editar</th>
                <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
             <?php
                while($user_data = mysqli_fetch_assoc( $result))
                {
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['email']."</td>";
                    echo "<td>
                    <a class='btn btn-primary' href='edit.php?id=$user_data[id]'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                    <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z'/>
                    </svg>
                    </td>";
                    echo "<td>
                    <a class= 'btn btn-sm btn-danger' href='delete.php?id=$user_data[id]' >
                       <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                      </svg>
        
                    </a>
                    
                    </td>";
                    
                  
                   
                }
             ?>
        </tbody>
</table>
    </div>


</body>
</html>