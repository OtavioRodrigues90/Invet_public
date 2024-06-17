<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Invet</title>
    <script defer src="menu.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
   <?php
    include("connection.php");
    mysqli_close($conn);
    ?>

  <style></style>
  </head>
  <body>
   
    <header class="heade">
      <nav class="naves">
        <a href="index.php" class="logo"><img src="4.png" alt="Logo Invet"></a>
        <button class="hamburger"></button>
        <ul class="naves-list">
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Material do curso</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>
    </header>

    <section class="banne">
      <h3><span>O BOM PROFISSIONAL DE TI</span> SEMPRE BUSCA MAIOR<br>PRATICIDADE PARA O SEU AMBIENTE DE TRABALHO <br> (site em desenvolvimento)</h3>
    </section>

    <section>
    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="mouses.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="rtx.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="computador.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </section>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>