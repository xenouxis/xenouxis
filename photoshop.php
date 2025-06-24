<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<title>Portfolio</title>
<?php
        require  "connexion.php";
        $req = $bdd->query("SELECT * FROM photoshop ORDER BY id ASC");
        while($don = $req->fetch())
        {
                        echo "<div class='col-md-3'>";
                        echo "<img src='images/".$don['fichier']."' class='img-fluid' />";
                        echo "<div class='title'>".$don['nom']."</div>";
                        echo "<a href='show.php?id=".$don['id']."' class='btn btn-primary'>Voir plus</a>";
                        echo "</div>";
                }
                $req->closeCursor();
            ?>            
    
</body>
</html>