<?php 

require "connexion.php"

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
    <nav>
        <div id="logo">logo</div>
        <ul>
            <li><a href="#accueil">Accueil</a></li>
            <li><a href="#travaux">Travaux</a></li>
            <li id="menucontact"><a href="#contact" id="contactnav">Contact</a></li>
        </ul>
    </nav>
    <div id="accueil" class="slide">
        <div class="gauche">
            <div class="rond"></div>
        </div>
        <div class="droite">
            <div class="rectangle"></div>
            <div class="groupebouton">
                <a href="#contact"><div class="boutoncontact"></div></a>
                <a href="#"><div class="boutoncv"></div></a>
                
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
    <div id="contact" class="slide">
        <h1>Contact</h1>
        <div class="groupecontact">
            <div class="groupenom">
                <input type="text" placeholder="Nom">
                <input type="text" placeholder="Prénom">
            </div>
            <div id="mail"><input type="mail" placeholder="E-Mail"></div>
            <div class="groupesujet">
                           <!-- <label for="sujet">Sujet</label> -->
                           <select name="sujet" id="sujet" class="form-control">
                               <option value="sujet 1">Infographie</option>
                               <option value="sujet 2">Tatouage</option>
                           </select>
                       </div>
            <div id="message"><textarea name="message" id="message" placeholder="Message"></textarea></div>
            <div id="boutonenvoyer">
                <input type="submit" id=submit>
            </div>
        </div>
    </div>
</body>
</html>