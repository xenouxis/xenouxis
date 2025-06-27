<?php 
    require "connexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div id="accueil" class="slide">
        <div class="gauche">
            <div class="rond"> 
                <img src="images/polaroid_moi.png" alt="polaroid" class="polaroid_moi"></a>
            </div>
        </div>
        <div class="droite">
            <div class="rectangle"></div>
            <div class="groupebouton">
                <a href="#contact"><div class="boutoncontact">Contact</div></a>
                <a href="#"><div class="boutoncv">CV</div></a>
            </div>
            <div class="skills-icons">
                <?php
                $skillsReq = $bdd->query("SELECT * FROM skills");
                while($skill = $skillsReq->fetch()) {
                    echo '<img src="images/'.$skill['fichier'].'" alt="icone compétence" class="skill-icon">';
                }
                $skillsReq->closeCursor();
                ?>
            </div>
        </div>
    </div>
    <div id="travaux" class="slide">
        <h1>Mes travaux</h1>
        <div class="groupetravaux">
            <a href="photoshop.php"class="boutontravaux">Photoshop</a>
            <a href="illustrator.php"class="boutontravaux">Illustrator</a>
            </div>
            <div class="groupetravaux">
            <a href="animation.php"class="boutontravaux">Animation</a>
            <a href="web.php"class="boutontravaux">Web</a>
        </div>
    </div>
    <div class="slide" id="contact">
           
                   <form action="traitement.php" method="POST">
               <div class="groupecontact">
                   <h1>Contact</h1>
                   <?php
                       if(isset($_GET['error']))
                       {
                           echo "<div class='danger'>Une erreur est survenue (code erreur: ".$_GET['error'].")</div>";
                       }

                       if(isset($_GET['message']))
                       {
                           if($_GET['message']=="success")
                           {
                               echo "<div class='succes'>Votre message a bien été envoyé</div>";
                           }
                       }
                   ?>
                    <div class="groupebouton">
                        <input type="text" id="nom" name="nom" class="nom" placeholder="Nom">
                        <input type="text" id="prenom" name="prenom" class="nom" placeholder="Prenom">
                    </div>
                       <div class="mail">
                           <input type="email" name="email" placeholder="Email" id="mail">
                       </div>
                       <div class="message">
                           <textarea name="message" id="message" placeholder="Message"></textarea>
                       </div>
                       <div class="boutonenvoyer">
                           <input type="submit" value="Envoyer" class="envoyer" id="envoyer">
                       </div>
                   </form>
               </div>
       </div>
</body>
<?php include 'footer.php'; ?>
</html>