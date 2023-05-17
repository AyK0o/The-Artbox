<!doctype html>
<html lang="fr">

<!-- Chatgement des variables oeuvres et des fonctions-->
<?php include("oeuvres.php");?>
<?php include("fonctions.php");?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <header>
        <!-- Apel de header.php-->
        <?php include ("header.php"); ?>
    </header>
    <main>
        <div id="liste-oeuvres">
            <!-- Apel de la fonction AfficherToutOeuvres -->
            <?php AfficherToutOeuvres($oeuvres);  ?>
    </div>
    </main>
    <footer>
        <!-- Apel de footer.php-->
        <?php include ("footer.php"); ?>
    </footer>
</body>
</html>
