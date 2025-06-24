<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=slli7102_mabase;charset=utf8','slli7102_monuser','Epse2M398!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die('Erreur: '.$e->getMessage());   
    }
?>