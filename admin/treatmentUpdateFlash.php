<?php
     session_start();
     if(!isset($_SESSION['login']))
     {
         header("LOCATION:../403.php");
     }
 
    // vérifier ce que je dois modifier 
    if(isset($_GET['id']))
    {
        // protection d'une donnée qui vient de  l'extérieur 
        $id = htmlspecialchars($_GET['id']);
    }else{
        header("LOCATION:flash.php");
    }

    // vérifier et récup les info de ce que je dois modifier
    require "../connexion.php";
    $req = $bdd->prepare("SELECT * FROM flash WHERE id=?");
    $req->execute([$id]);
    $don = $req->fetch();
    if(!$don)
    {
        $req->closeCursor();
        header("LOCATION:flash.php");
    }
    $req->closeCursor();

    // test si le formulaire a été envoyé
    if(isset($_POST['nom']))
    {
        // traitement de mon formulaire
        $error = 0;
        if(empty($_POST['nom']))
        {
            $error = 1;
        }else{
            $nom = htmlspecialchars($_POST['nom']);
        }


        if(empty($_POST['description']))
        {
            $error = 3;
        }else{
            $description = htmlspecialchars($_POST['description']);
        }

        if(empty($_POST['date']))
        {
            $error = 4;
        }else{
            $date = htmlspecialchars($_POST['date']);
        }



        if($error==0)
        {
            if(empty($_FILES['fichier']['tmp_name']))
            {
                 // // modification dans la bdd
                $update = $bdd->prepare("UPDATE flash SET nom=?, description=?, date=? WHERE id=?");
                $update->execute([$nom, $description, $date, $id]);
                $update->closeCursor();
                header("LOCATION:flash.php?update=".$id);
            }else{
                // vérifier le nouveau fichier
                // ok - traitement du ou des fichier(s)
                $dossier = "../images/"; // ../images/monfichier.jpg
                $fichier = basename($_FILES['fichier']['name']);
                $taille_maxi = 2000000;
                $taille = filesize($_FILES['fichier']['tmp_name']);
                $extensions = ['.png','.jpg','.jpeg', '.gif'];
                $extension = strrchr($_FILES['fichier']['name'],'.');

                if(!in_array($extension, $extensions))
                {
                    $error = 2;
                }
                
                if($taille>$taille_maxi){
                    $error = 3;
                }

                  // test si le fichier correspond à nos attentes
                if($error == 0)
                {
                    $fichier = strtr($fichier, 
                    'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
                    'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                    $fichier = preg_replace('/([^.a-z0-9]+)/i','-',$fichier); 
                    $fichiercptl = rand().$fichier; 

                    if(move_uploaded_file($_FILES['fichier']['tmp_name'], $dossier.$fichiercptl))
                    {
                        // supprimer l'ancien fichier si le nouveau est ok 
                        unlink("../images/".$don['fichier']);

                        // modification (update) dans la base de données

                        $update = $bdd->prepare("UPDATE flash SET nom=?, description=?, date=?, fichier=? WHERE id=?");
                        $update->execute([$nom, $description, $date, $fichiercptl,$id]);
                        $update->closeCursor();
                        header("LOCATION:flash.php?update=".$id);
                    }else{
                        header("LOCATION:addFlash.php?errorimg=4");
                    }

                }else{
                    header("LOCATION:updateFlash.php?id=".$id."&errorimg=".$error);
                }     
            }
        }else{
            // redirection vers le formulaire en indiquant l'erreur
            header("LOCATION:updateFlash.php?id=".$id."&error=".$error);
        }


    }else{
        // redirection vers products.php car il n'y a pas de formulaire envoyé
        header("LOCATION:flash.php");
    }



?>
