<?php
require("connexion_bdd.php");
include("header.php");

    if(isset($_GET["action"])) { 
        switch($_GET["action"]) {
        case "animal" : // On teste ce qu'on a dans le formulaire form_insert.php
            if(isset($_POST["titre"]) && isset($_POST["auteur"]) && isset($_POST["rayon"]) && isset($_POST["nb_exemp"])) {
 // Vérification du titre, auteur, rayon et nombre d'exemplaires du formulaire form_insert.php
            if(!empty($_POST["titre"]) && !empty($_POST["auteur"]) && !empty($_POST["rayon"]) && !empty($_POST["nb_exemp"])) {
                // Vérification si les champs ne sont pas vides (dans le formulaire form_insert.php)
                $insert="INSERT INTO livre (titre_livre, rayon)
                VALUES('".$_POST["titre"]."','".$_POST["rayon"]."')";
                $livre=$bdd -> exec($insert);
// requête SQL pour insérer les valeurs mises (titre et rayon) dans le formulaire form_insert.php dans la base de données (dans la table livre)
                $id=$bdd -> lastInsertId();
// récupérer le dernier identifiant inséré en base avec la fonction LastInsertId
                $insert="INSERT INTO est_auteur_de(idt_auteur, idt_livre)
                VALUES(".$_POST["auteur"].",".$id.")";
                $est_auteur_de=$bdd -> query($insert);
// Requête SQL pour insérer dans la table "est_auteur_de" le nom de l'auteur est l'id qui vient d'être créé dans la table livre (qui contient titre et rayon)
                for($i=1;$i<=$_POST["nb_exemp"];$i++){
                    $insert="INSERT INTO exemplaire(idt_livre)
                    VALUES(".$id.")";
                    $exemp=$bdd -> exec($insert); }
// Pour chaque exemplaire saisi, il va rajouter les informations dans la base de données
            header("location:../index.php?page=livre");
            exit;
 // Si tout est bon, redirige vers la page index.php
        } else { // Fermeture if !empty
            header("location:../form_insert.php?erreur=vide");
            exit;} 
// Si un ou plusieurs champs sont vides, redirige vers le formulaire form_insert.php avec message d'erreur vide dans l'URL
        } else {
                header("location:../form_insert.php?erreur=existe");
                exit;}
// Si les champs sont les mêmes que dans la base de données, redirige vers le formulaire form_insert.php avec message d'erreur existe dans l'URL
        break;
        }}