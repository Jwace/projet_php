<?php
session_start();
require("connexion_bdd.php");

if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["adresse"]) && isset($_POST["mail"]) && isset($_POST["telephone"]) && isset($_POST["mdp"]) && isset($_POST["mdp_conf"])){
    // Vérifier que les variables existent
    if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["adresse"]) && !empty($_POST["mail"]) && !empty($_POST["telephone"]) && !empty($_POST["mdp"])  && !empty($_POST["mdp_conf"])) {
// Vérifier que les champs ne soient pas vides (c'est mieux de vérifier les deux)
        if($_POST["mdp"] == $_POST["mdp_conf"]){
// Vérifier que le mot de passe et la confirmation de mot de passe sont pareils
            $mdp=htmlspecialchars($_POST["mdp"]);
// Permet d'avoir un mot de passe "propre" / empêche le HTML et Javascript
// $mdp=strip_tags, même chose que htmlspecialchars : empêche de rentrer du HTML et JavaScript dans les valeurs utilisateurs
// Si HTML ou JS inscrit dans les valeurs utilisateurs, le PHP va le lire et peut détruire les données
// Utiliser $mdp=strip_tags OU $mdp=htmlspecialchar, pas d'intérêt d'utiliser les deux en même temps
            /*$mdp=password_hash($mdp, PASSWORD_BCRYPT);*/
// Hacher le mot de passe (ce qu'on veut hacher, constante pour hacher le mot de passe sur 60 caractères)
    $nom=($_POST["nom"]);
    $prenom=($_POST["prenom"]);
    $adresse=($_POST["adresse"]);
    $email=($_POST["mail"]);
    $tel=($_POST["telephone"]);
                $user="SELECT * FROM User WHERE email_user='".$email."'";
                $select=$bdd->query($user);
// Si on fait une demande SELECT, obligation de faire un query derrière
// récupération d'un tableau de données 
                $count=$select->fetchColumn();
// donne le nombre de lignes trouvées qui sont pareilles et récupère toute la colonne mail_utilisateur de la base SQL
                    if($count!=0){ // si le nombre de lignes trouvées est différent de 0 donc si l'adresse mail est déjà dans la base de données
                        header("location:../index.php?page=inscription&erreur=mail");
                        exit;
// Redirection vers la page index.php avec l'erreur "inscription&erreur=mail" dans l'URL
                    } else {
                $pdo="INSERT INTO User(type_user, nom_user, prenom_user, adresse, email_user, telephone_user, password) 
                VALUES('".htmlspecialchars($nom)."','".htmlspecialchars($prenom)."','".htmlspecialchars($adresse)."','". htmlspecialchars($email)."','".htmlspecialchars($tel)."','".$mdp."')";
// Requête SQL
                $insert=$bdd->exec($pdo);
// On exécute la requête sql sur la base de données ($bdd), la base de données s'appelle $bdd parce qu'on l'a appelé comme ça dans le fichier connexion.php
$_SESSION["prenom_nom"]=$prenom." ".$nom;
$_SESSION["mail"]=$mail;
$_SESSION["type_utilisateur"]="visiteur"; // on ne créée que des utilisateurs de base / visiteurs
                    header("location:index.php?InscriptionReussie");
                        exit; } 
// Redirection vers la page index sans la page d'inscription
                    } else { // l'utilisateur n'a pas saisi 2 fois le même mot de passe 
                        header("location:../index.php?page=inscription&erreur=mdp");
                        exit; }
// Redirection vers l'index en incluant la page d'inscription, avec message d'erreur dans l'URL "erreur=mdp"
                    } else { // l'utilisateur a saisi des champs vides dans le formulaire d'inscription
                        header("location:../index.php?page=inscription&erreur=vide");
                        exit; }
// Redirection vers l'index en incluant la page d'inscription, avec message d'erreur dans l'URL "erreur=vide"
                    } else { // Les données de l'utilisateur existent déjà dans la base de données
                        header("location:../index.php?page=inscription&erreur=existe");
                        exit; }
// Redirection vers l'index en incluant la page d'inscription, avec message d'erreur dans l'URL "erreur=existe"
?>