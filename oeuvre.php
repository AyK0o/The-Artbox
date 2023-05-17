<!DOCTYPE html>
<html lang="fr">
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
        <?php include ("header.php"); ?>
    </header>
    <main>
        <?php 
        include("oeuvres.php");

        AfficherOeuvre($oeuvres,$_GET['id']);
        ?>
    </main>

    <footer>
        <?php include ("footer.php"); ?>
    </footer>
</body>
</html>
