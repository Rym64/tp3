<?php

try {
$bdd = new PDO('mysql:host=localhost;dbname=dsi22_g2_2019;charset=utf8', 'root','');

} catch(Exception $e) { die('Erreur : '.$e->getMessage()); }

    $firstname = $_POST['firstname'] ; 
    $lastname = $_POST['lastname'] ;
    $email = $_POST['email'] ;
    $phone = $_POST['phone'] ;

    // On ajoute une entrée dans la table personne 
    $nb_modifs = $bdd->exec("UPDATE students SET firstname='$firstname', lastname='$lastname', email='$email', phone='$phone' ");
    