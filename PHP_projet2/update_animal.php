<?php
include("header.php");
require("connexion_bdd.php"); 

    if(isset($_GET["action"])) { // Vérifie qu'il y a eu une action modifier
        switch($_GET["action"]) {
            case "animal":
                if(isset($_POST["nom"])) {
                    if(!empty($_POST["nom"])) { 
                        $update="UPDATE Animal SET nom_animal='".$_POST["nom"]."' WHERE id_animal=".$_GET["id"];
                        $animal=$bdd->exec($update);
                        $auteur=$bdd -> exec($update);
                            header("location:index.php?page=updateAnimalOK"); 
                            exit;
                    } else { // fermeture !empty
                            header("location:update_animal.php?erreur=vide"); 
                            exit; }
                } else { 
                            header("location:update_animal.php?erreur=existe"); 
                            exit ; }
                            break ;
        }
    }

include("footer.php");
?>