<?php
include "dbconnexion.php";
$nb_supp = $cnx->exec("DELETE FROM students firstname='$firstname', lastname='$lastname', email='$email', phone='$phone' WHERE id='' ");
echo $nb_supp . 'bien suprimer !';
?>