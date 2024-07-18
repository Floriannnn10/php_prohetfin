<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Page d"accueil</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <!-- Logo + menu + bouton calculer la moyenne  -->
  <?php
  include "header.php"
  ?>

  <!-- premier titre + Image_logo2 + paragraphe -->

  <div class=" mb-3" style="text-align: justify; margin-left:150px; margin-top: 50; margin-top: 130px; font-size: 15px;">


    <div class="row g-0">
      <div class="col-md-8">
        <div class="">
          <h1 class="moyenne-1">Calculer la moyenne <br> en un clic </h1>
          <p class="moyenne">
            <b>MaMoyenne</b> est une application web simple mais efficace <br>conçue pour faciliter le suivi des notes et le calcule de la <br> moyenne pondérée des étudians. Que vous soyez au <br>lycée, à l'unisersité ou dans une ecole professionnelles,<br> cette application vous permet de saisir vos notes pour <br>chaque matière et de visualiser instantanément votre <br> moyenne cumulative.
          </p>
          <!-- div bouton design -->
          <div class="bouton">
            <a href="#" class="btn btn-primary">En savoir plus </a>
            <a href="Calcul.php"><button type="button" class="btn btn-outline-secondary">Calculez la moyenne</button></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <img src="images/banniere.png" class="img-fluid rounded-start" alt="Bannière">
      </div>

    </div>
  </div>


  <br>
  <br>
  <br>
  <br>

  <hr>

  <?php
  include "footer.php"
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>