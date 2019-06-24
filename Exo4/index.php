<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Exercice 4</title>
    </head>
    <body>
        <div class="container-fluid text-center">
            <div class="jumbotron jumbotron-fluid bg-info">
                <div class="container">
                    <h1 class="display-3">Exercices-04</h1>
                    <p class="lead">PHP-Pt6</p>
                </div>
            </div>
        </div>
        <p class="lead">Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL 
            existent et les afficher: index.php?language=PHP&server=LAMP</p>
        <a href="../index.php" class="btn btn-primary">Retour</a>
    </div>
</div>
<a href="index.php?language=PHP&server=LAMP" class="btn btn-primary">Afficher Nom / Prénom</a>
<!-- Balise signifiant que la suite est en PHP -->
<p>
    <?php
    echo 'Bonjour ' . $_GET['language'] . ' ' . $_GET['server'];
    ?>
</p>
</div>
</body>
</html>