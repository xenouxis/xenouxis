<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=slli8869_portfolio_lisa;charset=utf8','slli8869_admin','Epse2M398',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die('Erreur: '.$e->getMessage());
    }
?>