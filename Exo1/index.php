<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Exercice 1</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid bg-info">
      <div class="container">
        <h1 class="display-3">Exercices-01</h1>
        <p class="lead">PHP-Pt6</p>
      </div>
    </div>
  </div>
    <div class="d-flex justify-content-center mb-3">
        <a href="../index.php" class="btn btn-primary">Retour</a>
     
   
    <a href="index.php?lastname=Nemare&firstname=Jean" class="btn btn-primary">Afficher Nom / Prénom</a>
    <!-- Balise signifiant que la suite est en PHP -->
    <p>
     </div>    
      <?php
      echo 'Bonjour '.$_GET['firstname'].' '.$_GET['lastname'];
      ?>
    </p>
  </div>
</body>
</html>