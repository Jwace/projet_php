<?php
include("header.php");
require("connexion_bdd.php"); 

    if(isset($_GET["action"])) { // Vérifie qu'il y a eu une action modifier
        switch($_GET["action"]) {
            case "animal":
                if(isset($_POST["nom"])) {
                    if(!empty($_POST["nom"])) { 
                        $update="UPDATE User SET nom_user='".$_POST["nom"]."' WHERE id_user=".$_GET["id"];
                        $user=$bdd->exec($update);
                        $user=$bdd -> exec($update);
                            header("location:index.php?page=updateUSerOK"); 
                            exit;
                    } else { 
                            header("location:update_user.php?erreur=vide"); 
                            exit; }
                } else {
                            header("location:update_user.php?erreur=existe"); 
                            exit ; }
                            break ;
        }
    }

include("footer.php");
?>