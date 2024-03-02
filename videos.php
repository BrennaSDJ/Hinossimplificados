<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.svg" type="image/x-icon">
    <title>Vídeos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/videos.css">
    <script src="javascript/videos.js"></script>
</head>
<body>

<?php include_once('navbar.php') ?>
 
    <h1>Vídeos</h1>

    <hr>

    <div class="searchbar">
      <input id="find" type="text" name="find" placeholder="Insira o número do hino desejado" onkeyup="search()">
      </div>

  <div class="videos">


    <div class="side">
      <div class="nomes">
        <h2>Hino 01</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/2Ls4mJRcCxU?si=2FMaVQ97GHIJUjv0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
        <br>
        <div class="nomes">
          <h2>Hino 02</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/DwtJ-vCmDPo?si=xsrx0rxHG-cbYm68" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
          </div>
    </div>
        <br>
       
    <div class="side">
      <div class="nomes">
        <h2>Hino 03</h2>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/R4eZ0GKENCY?si=nQtP7a9MgkhQXapM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>   
        <br>
       
       <div class="nomes">
        <h2>Hino 04</h2>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/rVhm3XEomcc?si=TXEpwUs4V_2oe53S" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
     </div>
    </div>
        <br>

    <div class="side">
      <div class="nomes">
        <h2>Hino 05</h2>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/s-eIbR1B-TA?si=aovJp28lsveO2lGn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
        <br>

        <div class="nomes">
          <h2>Hino 06</h2>
           <iframe width="560" height="315" src="https://www.youtube.com/embed/1kYlgcea6uM?si=l7tTgzn8f4X1uVV6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

    </div>
        <br>
       
    <div class="side">
      <div class="nomes">
        <h2>Hino 07</h2>
         <iframe width="560" height="315" src="https://www.youtube.com/embed/NBxFDPQrcr4?si=rL5XE2O376EzU7bX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
        <br>
        <div class="nomes">
          <h2>Hino 08</h2>
           <iframe width="560" height="315" src="https://www.youtube.com/embed/2SOYHUNBiDE?si=KHqxRUkfuGow8DZL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      
    </div>


    </div>

    <div class="page">
      <span class="next_page"><button class="button"><a href="videospg2.php" style="color: black; text-decoration: none;">Próxima Página</a></button></span>
   </div>

   <?php include_once('footer.php')  ?> 
    
</body>
</html>