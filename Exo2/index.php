<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Exercice 2</title>
</head>
<body>
  <div class="container-fluid text-center">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Exercice 2 - PHP</h1>
        <h3>Partie 6</h3>
        <p class="lead">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
        existent et les afficher: index.php?lastname=Nemare&firstname=Jean</p>
      </div>
    </div>
    <a href="index.php?lastname=Nemare&firstname=Jean" class="btn btn-primary">Afficher Nom / Prénom</a>
       <p>
    <!-- Début du php -->
    <?php
    if (isset($_GET['firstname'])&&isset($_GET['lastname'])&&isset($_GET['age'])){
        echo 'Bonjour '.$_GET['firstname'].' '.$_GET['lastname'].' '.$_GET['age'].' '.'ans';
       }else{
           echo 'Veuillez renseignez votre age';
       }
    ?>
      </p>
  </div>
</body>
</html>
