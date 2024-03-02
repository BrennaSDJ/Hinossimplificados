<?php
 session_start();

 if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true)){
  unset($_SESSION['nome']);
  unset($_SESSION['senha']);
  header('Location: login.php');
 }

 $logado = $_SESSION['nome'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.svg" type="image/x-icon">
    <title>Hinos SUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="style/style.css">
     <script src="javascript/searchbar.js"></script>
</head>
<body>
   <?php include_once('navbar.php') ?>

    <div class="searchbar">
      <input id="find" type="text" name="find" placeholder="Insira o número do hino desejado" onkeyup="search()">
      </div>
      
        <div class="content row">

          <div class="card" style="width: 18rem;">
            <a href="pages/pag15.php" class="links"> <img src="img/hino15.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Hino 15 – Um Pobre e Aflito Viajor (A Poor Wayfaring Man of Grief)</h5>
              <p class="card-text">Hino 15 – Um Pobre e Aflito Viajor (A Poor Wayfaring Man of Grief)</p>
              <p>(Clique Aqui para Fazer Download da Partitura Simplificada) </p></a>
              <a href="download/Hino 15 - Um Pobre e Aflito Viajor.pdf" target="_blank" download="Hino 15 - Um Pobre e Aflito Viajor.pdf" type="application/pdf" class="btn btn-primary">Download PDF</a>
            </div>
          </div>

            <div class="card" style="width: 18rem;">
              <a href="pages/pag14.php" class="links"><img src="img/hino14.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Hino 14 - Hoje ao Profeta Louvemos(Praise to the Man)</h5>
                  <p class="card-text">Hino 14 – Hoje, ao Profeta Louvemos (Praise to the Man)</p><p>(Clique Aqui para Fazer Download da Partitura Simplificada) </p></a>
                  <a href="download/Hino 14 - Hoje, ao Profeta Louvemos (simplificado).pdf" target="_blank" download="Hino 14 - Hoje, ao Profeta Louvemos (simplificado).pdf" type="application/pdf" class="btn btn-primary">Download PDF</a>
                </div>
              </div>

            
              <div class="card" style="width: 18rem;">
                <a href="pages/pag13.php" class="links"><img src="img/hino13.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Hino 13 – Rejubilai-vos, Ó Nações (Let Earth’s Inhabitants Rejoice) </h5>
                  <p class="card-text">Hino 13 – Rejubilai-vos, Ó Nações (Let Earth’s Inhabitants Rejoice)</p>
                  <p>(Clique Aqui para Fazer Download da Partitura Simplificada)</p></a>
                  <a href="download/Hino 13 - Rejubilai-vos, Ó Nações (Simplificado).pdf" target="_blank" download="Hino 13 - Rejubilai-vos, Ó Nações (Simplificado).pdf" type="application/pdf" class="btn btn-primary">Download PDF</a>
                </div>
              </div> 
              
              
            <div class="card" style="width: 18rem;">
              <a href="pages/pag12.php" class="links"><img src="img/hino12.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Hino 12 – Que Manhã Maravilhosa! (Joseph Smith’s First Prayer) </h5>
                  <p class="card-text">Hino 12 – Que Manhã Maravilhosa! (Joseph Smith’s First Prayer)</p>
                  <p>(Clique Aqui para Fazer Download da Partitura Simplificada) </p></a>
                  <a href="download/Hino 12 - Que Manhã Maravilhosa (Simplificado).pdf" target="_blank" download="Hino 12 - Que Manhã Maravilhosa (Simplificado).pdf" type="application/pdf" class="btn btn-primary">Download PDF</a>
                </div>
              </div>


              
            <div class="card" style="width: 18rem;">
                <a href="pages/pag11.php" class="links"><img src="img/hino11.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Hino 11 - Abençoa Nosso Profeta (God Bless Our Prophet Dear) </h5>
                  <p class="card-text">Hino 11 - Abençoa Nosso Profeta (God Bless Our Prophet Dear)</p>
                  <p>(Clique Aqui para Fazer Download da Partitura Simplificada) </p></a>
                  <a href="download/Hino 11 - Abençoa Nosso Profeta (Simplificado).pdf" target="_blank" download="Hino 11 - Abençoa Nosso Profeta (Simplificado).pdf" type="application/pdf" class="btn btn-primary">Download PDF</a>
                </div>
              </div>

              
            <div class="card" style="width: 18rem;">
                <a href="pages/pag10.php" class="links"><img src="img/hino10.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Hino 10 – Vinde ao Profeta Escutar (Come, Listen to a Prophet’s Voice)</h5>
                  <p class="card-text">Hino 10 – Vinde ao Profeta Escutar (Come, Listen to a Prophet’s Voice)</p>
                  <p>(Clique Aqui para Fazer Download da Partitura Simplificada) </p></a>
                  <a href="download/Hino 10 - Vinde ao Profeta Escutar (Simplificado).pdf" target="_blank" download="Hino 10 - Vinde ao Profeta Escutar (Simplificado).pdf" type="application/pdf" class="btn btn-primary">Download PDF</a>
                </div>
              </div>

              
            <div class="card" style="width: 18rem;">
                <a href="pages/pag9.php" class="links"><img src="img/hino9.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Hino 09 – Graças Damos, Ó Deus, por um Profeta (We Thank Thee, O God, for a Prophet)</h5>
                  <p class="card-text">Hino 09 – Graças Damos, Ó Deus, por um Profeta (We Thank Thee, O God, for a Prophet)</p>
                  <p>(Clique Aqui para Fazer Download da Partitura Simplificada) </p></a>
                  <a href="download/Hino 09 - Graças Damos, Ó Deus, por um Profeta .pdf" target="_blank" download="Hino 09 - Graças Damos, Ó Deus, por um Profeta .pdf" type="application/pdf" class="btn btn-primary">Download PDF</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <a href="pages/pag8.php" class="links"><img src="img/hino8.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Hino 08 – Oração Pelo Profeta (We Ever Pray for Thee)</h5>
                  <p class="card-text">HHino 08 – Oração Pelo Profeta (We Ever Pray for Thee)</p>
                  <p>(Clique Aqui para Fazer Download da Partitura Simplificada) </p></a>
                  <a href="download/Hino 08 - Oração Pelo Profeta (Simplificado).pdf"  target="_blank" download="Hino 08 - Oração Pelo Profeta (Simplificado).pdf" type="application/pdf" class="btn btn-primary">Download PDF</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <a href="pages/pag7.php" class="links"><img src="img/hino7.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Hino 07 – O que Vimos Lá Nos Céus (What Was Witnessed in the Heavens?)</h5>
                  <p class="card-text">Hino 07 – O que Vimos Lá Nos Céus (What Was Witnessed in the Heavens?)</p>
                  <p>(Clique Aqui para Fazer Download da Partitura Simplificada) </p></a>
                  <a href="download/Hino 07 - O que Vimos Lá Nos Céus (Simplificado).pdf" target="_blank" download="Hino 07 - O que Vimos Lá Nos Céus (Simplificado).pdf" type="application/pdf" class="btn btn-primary">Download PDF</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <a href="pages/pag6.php" class="links"><img src="img/hino6.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Hino 06 – Um Anjo Lá do Céu (An Angel from on High)</h5>
                  <p class="card-text">Hino 06 – Um Anjo Lá do Céu (An Angel from on High) </p>
                  <p>(Clique Aqui para Fazer Download da Partitura Simplificada) </p></a>
                  <a href="download/Hino 06 - Um Anjo Lá do Céu (Simplificado).pdf" target="_blank" download="Hino 06 - Um Anjo Lá do Céu (Simplificado).pdf" type="application/pdf" class="btn btn-primary">Download PDF</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <a href="pages/pag5.php" class="links"><img src="img/hino5.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Hino 05 – Israel, Jesus Te Chama (Israel, Israel, God Is Calling) </h5>
                  <p class="card-text">Hino 05 – Israel, Jesus Te Chama (Israel, Israel, God Is Calling) </p>
                  <p>(Clique Aqui para Fazer Download da Partitura Simplificada) </p></a>
                  <a href="download/Hino 05 - Israel, Jesus Te Chama (Simplificada).pdf"  target="_blank" download="Hino 05 - Israel, Jesus Te Chama (Simplificada).pdf" type="application/pdf" class="btn btn-primary">Download PDF</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <a href="pages/pag4.php" class="links"><img src="img/hino4.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Hino 04 – No Monte a Bandeira (High on the Mountain Top) </h5>
                  <p class="card-text">Hino 04 – No Monte a Bandeira (High on the Mountain Top) </p>
                  <p>(Clique Aqui para Fazer Download da Partitura Simplificada) </p></a>
                  <a href="download/Hino 04 - No Monte a Bandeira.pdf" target="_blank" download="Hino 04 - No Monte a Bandeira.pdf" type="application/pdf" class="btn btn-primary">Download PDF</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <a href="pages/pag3.php" class="links"><img src="img/hino3.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Hino 03 – Alegres Cantemos (Now Let us Rejoice) </h5>
                  <p class="card-text">Hino 03 – Alegres Cantemos (Now Let us Rejoice) </p>
                  <p>(Clique Aqui para Fazer Download da Partitura Simplificada) </p></a>
                  <a href="download/Hino 03 - Alegres Cantemos Simplificado.pdf" target="_blank" download="Hino 03 - Alegres Cantemos Simplificado.pdf" type="application/pdf" class="btn btn-primary">Download PDF</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <a href="pages/pag2.php" class="links"><img src="img/hino2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Hino 02 – Tal Como um Facho (The Spirit of God)  </h5>
                  <p class="card-text">Hino 02 – Tal Como um Facho (The Spirit of God) </p>
                  <p>(Clique Aqui para Fazer Download da Partitura Simplificada) </p></a>
                  <a href="download/Hino 02 - Tal Como um Facho Simplificado.pdf" target="_blank" download="Hino 02 - Tal Como um Facho Simplificado.pdf" type="application/pdf" class="btn btn-primary">Download PDF</a>
                </div>
              </div>

              <div class="card" style="width: 18rem;">
                <a href="pages/pag1.php" class="links"><img src="img/hino1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Hino 01 – A Alva que Rompe (The Morning Breaks)</h5>
                  <p class="card-text">Hino 01 – A Alva que Rompe (The Morning Breaks)</p>
                  <p>(Clique Aqui para Fazer Download da Partitura Simplificada) </p></a>
                  <a href="download/Hino 1 - A Alva Rompe (Simplificado).pdf" target="_blank" download="Hino 1 - A Alva Rompe (Simplificado).pdf" type="application/pdf" class="btn btn-primary">Download PDF</a>
                </div>
              </div>

            </div>
          
     <?php include_once('footer.php')  ?>       
   
</body>
</html>