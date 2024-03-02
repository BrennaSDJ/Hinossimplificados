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
        <h2>Hino 09</h2>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/dGjjzAoX45A?si=5-B1l8ujJkfa4ONq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
        <br>
       <div class="nomes">
           <h2>Hino 10</h2> 
          <iframe width="560" height="315" src="https://www.youtube.com/embed/yG-jBvJLngM?si=Y4AxjNXYnEOmKxRS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
       </div>
    </div>
        <br>
    <div class="side">

      <div class="nomes">
        <h2>Hino 11</h2> 
         <iframe width="560" height="315" src="https://www.youtube.com/embed/LsImE4FAwKQ?si=qi4O-IqlFuvmZn06" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
        <br>
      <div class="nomes">
          <h2>Hino 12</h2> 
          <iframe width="560" height="315" src="https://www.youtube.com/embed/SqWfKhVEIow?si=qciDoR60OW0JPp_t" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>

    </div>
        <br>

    <div class="side">
      <div class="nomes">
        <h2>Hino 13</h2> 
           <iframe width="560" height="315" src="https://www.youtube.com/embed/ficVPhNmHxM?si=HOYTgM5xbq60Jp9U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
      </div> 
        <br>

        <div class="nomes">
          <h2>Hino 14</h2> 
           <iframe width="560" height="315" src="https://www.youtube.com/embed/fvS-5U2h_pU?si=7emEqG7OTKeNQrsR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

    </div>
        <br>
    <div class="side">
      <div class="nomes">
        <h2>Hino 15</h2> 
          <iframe width="560" height="315" src="https://www.youtube.com/embed/CfIsvShFB3U?si=t5AO1ll8t7SWVn75" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>

    </div>

    </div>

    <div class="page">
        <span class="next_page"><button class="button"><a href="videos.php" style="color: black; text-decoration: none;">Página Anterior</a></button></span>
     </div>

     <?php include_once('footer.php')  ?> 
    
</body>
</html>