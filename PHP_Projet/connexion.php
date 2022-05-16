<?php
    session_start();
    require("connexion_bdd.php");
if(isset($_POST["mail"]) && isset($_POST["mdp"])) {
    if(!empty($_POST["mail"]) && !empty($_POST["mdp"])) {
        $query=$bdd->query("SELECT * FROM User WHERE email_user='".$_POST["mail"]."'");
        $user=$query->fetch();
            if($user) {
                if(password_verify(htmlspecialchars($_POST["mdp"]),$user["password"])) {
                    $_SESSION["id"]=$user["id_user"];
                    $_SESSION["nom"]=$user["nom_user"];
                    $_SESSION["prenom"]=$user["prenom_user"];
                    $_SESSION["type"]=$user["type_user"];
                        header("location:../index.php");
                        exit;
} else {
                        header("location:../form_connexion.php?err=mdp");
                        exit;
                        echo $user["id_user"];
}} else {
                        header("location:../form_connexion.php?erreur=login");
                        exit;
}} else {
                        header("location:../form_connexion.php?erreur=vide");
                        exit;
}} else {
                        header("location:../form_connexion.php?erreur=valide");
                        exit;
}