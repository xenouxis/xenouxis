<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="allwork">
          <div class="slide" id="photoshop">
        <div class="container">
        </div>
        <div class="container-grid">
            <?php
            require "connexion.php";
                $req = $bdd->query("SELECT * FROM photoshop ORDER BY id DESC LIMIT 0,6");
                while($don = $req->fetch())
                {
                    echo '<div class="card">';
                        echo '<div class="image">';
                            echo '<img src="images/mini_'.$don['fichier'].'" alt="image de '.$don['nom'].'">';
                        echo '</div>';
                        echo '<div class="texte">';
                            echo '<h2>'.$don['nom'].'</h2>';
                            echo '<p>'.$don['description'].'</p>';
                            echo '
                            <a href="photoshop.php?id='.$don['id'].'" class="btn">En savoir plus</a>';
                        echo '</div>';
                    echo '</div>';
                }
                $req->closeCursor();
            ?>         
        </div>
        <a href="photoshop.php" class="btn" id="more">En voir plus</a>
    </div>
        </div>

    </div>
</body>
</html>