<!DOCTYPE html>  
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page de caclul</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>


  <!-- Logo + menu + bouton calculer la moyenne  -->
  <?php
  include "header.php"
  ?>


  <!-- Grand titre  -->
  <h1 class="display-1" style="color: rgb(73, 73, 250); margin-top: 40px; margin-left: 280px; font-size: 40px;">CALCUL DE MOYENNE</h1>


  <!-- TABLEAU DE VALIDATION DE CALCUL -->
  <form action="traitement2.php" method="post">
    <div class="container" style="margin-top: 30px;">
      <div class="row">
        <div class="col">
          <p>Nom & prénom de l'étudiant</p>
          <input type="text" class="form-control" name="nom" aria-label="name">
        </div>
        <div class="col">
          <p>Email de l'étudiant</p>
          <input type="text" class="form-control" name="email" aria-label="mail">
        </div>
      </div>

      <br>
      <hr>


      <div class="container2" style="margin-top: 30px; display:flex; gap:20px;">

        <div class="col">
          <p>Note PHP</p>
          <input type="text" class="form-control" name="note1" aria-label="note1">
        </div>
        <div class="col">
          <p>Coefficient</p>
          <input type="text" class="form-control" name="coefficient1" aria-label="coefficient1">
        </div>
      </div>

      <br>
      <hr>

      <div class="container3" style="margin-top: 30px; display:flex; gap:20px;">

        <div class="col">
          <p>Note MÉRISE</p>
          <input type="text" class="form-control" name="note2" aria-label="note2">
        </div>
        <div class="col">
          <p>Coefficient</p>
          <input type="text" class="form-control" name="coefficient2" aria-label="coefficient2">
        </div>
      </div>

      <br>
      <hr>


      <div class="container3" style="margin-top: 30px; display:flex; gap:20px;">

        <div class="col">
          <p>Note Anglais</p>
          <input type="text" class="form-control" name="note3" aria-label="note3">
        </div>
        <div class="col">
          <p>Coefficient</p>
          <input type="text" class="form-control" name="coefficient3" aria-label="coefficient3">
        </div>
      </div>

      <br>
      <hr>

      <div class="container4" style="margin-top: 30px; display:flex; gap:20px;">

        <div class="col">
          <p>Note Français</p>
          <input type="text" class="form-control" name="note4" aria-label="note4">
        </div>
        <div class="col">
          <p>Coefficient</p>
          <input type="text" class="form-control" name="coefficient4" aria-label="coefficient4">
        </div>
      </div>


      <br>
      <hr>


      <div class="container5" style="margin-top: 30px; display:flex; gap:20px;">

        <div class="col">
          <p>Note Algoritmique</p>
          <input type="text" class="form-control" name="note5" aria-label="note5">
        </div>
        <div class="col">
          <p>Coefficient</p>
          <input type="text" class="form-control" name="coefficient5" aria-label="coefficient5">
        </div>
      </div>


      <br>
      <hr>


      <div class="container6" style="margin-top: 30px; display:flex; gap:20px;">

        <div class="col">
          <p>Note Javascript</p>
          <input type="text" class="form-control" name="note6" aria-label="note6">
        </div>
        <div class="col">
          <p>Coefficient</p>
          <input type="text" class="form-control" name="coefficient6" aria-label="coefficient6">
        </div>
      </div>


      <br>
      <hr>


      <div class="container7" style="margin-top: 30px; display:flex; gap:20px;">

        <div class="col">
          <p>Note Bootstrap</p>
          <input type="text" class="form-control" name="note7" aria-label="note7">
        </div>
        <div class="col">
          <p>Coefficient</p>
          <input type="text" class="form-control" name="coefficient7" aria-label="coefficient7">
        </div>
      </div>


      <br>
      <hr>


      <div class="container8" style="margin-top: 30px; display:flex; gap:20px;">

        <div class="col">
          <p>Note HTML</p>
          <input type="text" class="form-control" name="note8" aria-label="note8">
        </div>
        <div class="col">
          <p>Coefficient</p>
          <input type="text" class="form-control" name="coefficient8" aria-label="coefficient8">
        </div>
      </div>


      <br>
      <hr>

      <div class="container9" style="margin-top: 30px; display:flex; gap:20px;">

        <div class="col">
          <p>Note CSS</p>
          <input type="text" class="form-control" name="note9" aria-label="note9">
        </div>
        <div class="col">
          <p>Coefficient</p>
          <input type="text" class="form-control" name="coefficient9" aria-label="coefficient9">
        </div>
      </div>

      <br>
      <hr>

      <div class="container10" style="margin-top: 30px; display:flex; gap:20px;">

        <div class="col">
          <p>Note Wordpress</p>
          <input type="text" class="form-control" name="note10" aria-label="note10">
        </div>
        <div class="col">
          <p>Coefficient</p>
          <input type="text" class="form-control" name="coefficient10" aria-label="coefficient10">
        </div>
      </div>

      <br>
      <hr>


      <div class="container11" style="margin-top: 30px; display:flex; gap:20px;">

        <div class="col">
          <p>Note Laravel</p>
          <input type="text" class="form-control" name="note11" aria-label="note11">
        </div>
        <div class="col">
          <p>Coefficient</p>
          <input type="text" class="form-control" name="coefficient11" aria-label="coefficient11">
        </div>
      </div>

      <br>
      <hr>

      <div class="form-group row">
        <div class="col-sm-12 text-center">
          <button type="submit" name="submit" class="btn btn-primary">CALCULER</button>
        </div>
      </div>



    </div>
  </form>
  <hr>

  <div class="form-group row">
    <div class="col-sm-12 text-center">
      <a href="Accueil.php"><button class="btn btn-primary">Retour à la page d'accueil</button></a>
    </div>
  </div>



  <?php
  include "footer.php"
  ?>

  <br>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>