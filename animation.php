<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mes projets Animation</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="allwork photoshop-section">
        <h1>Mes animations</h1>
        <div class="container-grid">
            <?php
            require "connexion.php";
            $req = $bdd->query("SELECT * FROM infographie ORDER BY date DESC");
            while($don = $req->fetch()) {
                echo '<div class="card">';
                echo '<div class="image">';
                echo '<iframe width="100%" height="300" src="'.$don['video'].'" title="'.$don['nom'].'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
                echo '</div>';
                echo '<div class="texte">';
                echo '<h2>'.$don['nom'].'</h2>';
                echo '<p>'.$don['description'].'</p>';

                echo '</div>';
                echo '</div>';
            }
            $req->closeCursor();
            ?>
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>
</html>