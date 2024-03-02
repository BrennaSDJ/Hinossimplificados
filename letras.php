<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.svg" type="image/x-icon">
    <title>Letras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="javascript/boxes.js"></script>
    <link rel="stylesheet" href="style/letras.css">
    <style>
      .botao{
        background-color:  rgb(185, 252, 185);

        width:80%;
        border: rgb(178, 253, 178);
        box-shadow: 1px 1px 3px green;
      }

      .botao:hover{
      transition: all 0s ease 0s;
      transform-style: flat;
      box-shadow: inset;
      background-color: #77CAA9;
      }
    </style>
</head>
<body>

<?php include_once('navbar.php') ?>

    <h1 class="big">Letras</h1>

    <hr>

    <div class="searchbar">
      <input class="barra" id="find" type="text" name="find" placeholder="Insira o número do hino desejado" onkeyup="search()">
      </div>


      <div class="boxes">
        <div class="mini_box">
            
              <a href="pages/pag1.php"><p><span class="theme">Hino 01 – A Alva que Rompe (The Morning Breaks)</span></p></a>

              <div>
                <form action="favoritar.php" method="post">
                  <input type="hidden" value="01" name="name">
                  <input class="botao" type="submit" value="Favoritar">
                </form>
              </div>
        </div>

        <div class="mini_box">
           
           <a href="pages/pag2.php"><p><span class="theme">Hino 02 – Tal Como um Facho (The Spirit of God)</span></p></a>

           <div>
                <form action="favoritar.php" method="post">
                  <input type="hidden" value="02" name="name">
                  <input class="botao" type="submit" value="Favoritar">
                </form>
              </div>
          
    </div>

    <div class="mini_box">
        
      <a href="pages/pag3.php"><p><span class="theme">Hino 03 – Alegres Cantemos (Now Let us Rejoice) </span></p></a>

      <div>
                <form action="favoritar.php" method="post">
                  <input type="hidden" value="03" name="name">
                  <input  class="botao" type="submit" value="Favoritar">
                </form>
              </div>

    </div>

       <div class="mini_box">
                
            <a href="pages/pag4.php"><p><span class="theme">Hino 04 – No Monte a Bandeira (High on the Mountain Top)</span></p></a>

            <div>
                <form action="favoritar.php" method="post">
                  <input type="hidden" value="04" name="name">
                  <input  class="botao" type="submit" value="Favoritar">
                </form>
              </div>

     </div>


     <div class="mini_box">
                
        <a href="pages/pag5.php"><p><span class="theme">Hino 05 – Israel, Jesus Te Chama (Israel, Israel, God Is Calling)</span></p></a>

        <div>
                <form action="favoritar.php" method="post">
                  <input type="hidden" value="05" name="name">
                  <input class="botao" type="submit" value="Favoritar">
                </form>
              </div>
 
     </div>

     <div class="mini_box">
                
       <a href="pages/pag6.php"><p><span class="theme">Hino 06 – Um Anjo Lá do Céu (An Angel from on High)</span></p></a> 

       <div>
                <form action="favoritar.php" method="post">
                  <input type="hidden" value="06" name="name">
                  <input class="botao" type="submit" value="Favoritar">
                </form>
              </div>
  
     </div>

     <div class="mini_box">
                
        <a href="pages/pag7.php"><p><span class="theme">Hino 07 – O que Vimos Lá Nos Céus (What Was Witnessed in the Heavens?)</span></p></a>

        <div>
                <form action="favoritar.php" method="post">
                  <input type="hidden" value="07" name="name">
                  <input  class="botao" type="submit" value="Favoritar">
                </form>
              </div>

      </div>

      <div class="mini_box">
                
        <a href="pages/pag8.php"><p><span class="theme">Hino 08 – Oração Pelo Profeta (We Ever Pray for Thee)</span></p></a>

        <div>
                <form action="favoritar.php" method="post">
                  <input type="hidden" value="08" name="name">
                  <input class="botao" type="submit" value="Favoritar">
                </form>
              </div>

      </div>


      <div class="mini_box">
                
        <a href="pages/pag9.php"><p><span class="theme">Hino 09 – Graças Damos, Ó Deus, por um Profeta (We Thank Thee, O God, for a Prophet)</span></p></a>

           <div>
                <form action="favoritar.php" method="post">
                  <input type="hidden" value="09" name="name">
                  <input class="botao" type="submit" value="Favoritar">
                </form>
              </div>

     </div>

     <div class="mini_box">
                
        <a href="pages/pag10.php"><p><span id="10" class="theme">Hino 10 – Vinde ao Profeta Escutar (Come, Listen to a Prophet’s Voice)</span></p></a>

        <div>
                <form action="favoritar.php" method="post">
                  <input type="hidden" value="10" name="name">
                  <input class="botao" type="submit" value="Favoritar">
                </form>
              </div>

     </div>


     <div class="mini_box">
                
        <a href="pages/pag11.php"><p><span class="theme">Hino 11 - Abençoa Nosso Profeta (God Bless Our Prophet Dear)</span></p></a>

        <div>
                <form action="favoritar.php" method="post">
                  <input type="hidden" value="11" name="name">
                  <input class="botao" type="submit" value="Favoritar">
                </form>
              </div>

     </div>


     <div class="mini_box">
                
        <a href="pages/pag12.php"><p><span class="theme">Hino 12 – Que Manhã Maravilhosa! (Joseph Smith’s First Prayer)</span></p></a>

        <div>
                <form action="favoritar.php" method="post">
                  <input type="hidden" value="12" name="name">
                  <input  class="botao" type="submit" value="Favoritar">
                </form>
              </div>

     </div>


     <div class="mini_box">
                
        <a href="pages/pag13.php"><p><span class="theme">Hino 13 – Rejubilai-vos, Ó Nações (Let Earth’s Inhabitants Rejoice)</span></p></a>

        <div>
                <form action="favoritar.php" method="post">
                  <input type="hidden" value="13" name="name">
                  <input class="botao" type="submit" value="Favoritar">
                </form>
              </div>

     </div>


     <div class="mini_box">
                
        <a href="pages/pag14.php"><p><span class="theme">Hino 14 - Hoje ao Profeta Louvemos(Praise to the Man)</span></p></a>

        <div>
                <form action="favoritar.php" method="post">
                  <input type="hidden" value="14" name="name">
                  <input class="botao" type="submit" value="Favoritar">
                </form>
              </div>

     </div>

     <div class="mini_box">
                
        <a href="pages/pag15.php"><p><span class="theme">Hino 15 – Um Pobre e Aflito Viajor (A Poor Wayfaring Man of Grief)</span></p></a>

        <div>
                <form action="favoritar.php" method="post">
                  <input type="hidden" value="15" name="name">
                  <input class="botao" type="submit" value="Favoritar">
                </form>
              </div>

     </div>



     </div>


     <?php include_once('footer.php')  ?> 
    
</body>
</html>