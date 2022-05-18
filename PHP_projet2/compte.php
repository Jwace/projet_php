<?php
include("header.php");
require("connexion_bdd.php");

if (isset($_SESSION["id_user"])) { 
    echo "Bienvenue ".$_SESSION["prenom_user"]." ".$_SESSION["nom_user"]." !";
    } else {
    echo "Vous pouvez vous connecter sur cette"?> <a href="index.php">page</a><?php
} 

include("footer.php");
?>