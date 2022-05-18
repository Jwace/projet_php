<?php
session_start();
include("header.php");
require("connexion_bdd.php");

if(isset($_POST["mail"]) && isset($_POST["mdp"])) {
    if(!empty($_POST["mail"]) && !empty($_POST["mdp"])) {
        $mail=htmlspecialchars($_POST["mail"]);
        $select="SELECT * FROM User WHERE email_user='".$mail."'";
        $requete=$bdd->query($select);
        $user=$requete->fetch();

        if($user) {
            if(password_verify(htmlspecialchars($_POST["mdp"]), $user["password"])) {
                $_SESSION["prenom"]=$user["prenom_user"];
                $_SESSION["nom"]=$user["nom_user"];
                $_SESSION["type"]=$user["type_user"];
                $_SESSION["id_user"]=$user["id_user"];

                header("location:index.php");
                exit;
            } else {
                header("location:index.php?erreur=mdp");
                exit;
            }} else {
                header("location:index.php?erreur=login");
                exit;
            }} else {
                header("location:index.php?erreur=champsVides");
                exit;
            }} else {
                header("location:index.php?erreur=existe");
                exit;
            };

include("footer.php");
?>