<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page Contact</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <!-- Logo + menu + bouton calculer la moyenne  -->
  <?php include "header.php" ?>

  <!-- commencement design page contact -->

  <h1 class="display-1" style="color: rgb(73, 73, 250); margin-top: 40px; margin-left: 280px; font-size: 40px;">CONTACT</h1>

  <div class="container">

    <form action="traitement.php" method="post">


      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nom</label>
        <input type="nom" class="form-control" name="nom" id="exampleFormControlInput1">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="exampleFormControlInput1">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Téléphone</label>
        <input type="Telephone" class="form-control" name="Telephone" id="exampleFormControlInput1">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <button type="submit" value="valider" class="btn btn-primary" name="valider">Envoyer</button>

    </form>
  </div>

  <br>

  <hr>
  <?php include "footer.php" ?>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>