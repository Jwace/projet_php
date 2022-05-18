<?php  
session_start();
require("connexion_bdd.php");
?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur Adopte_un_animal.com</title>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" type="image/jpeg" href="img/logo_64.jpg">
    <script src="https://consent.cookiefirst.com/sites/localhost-f1bbffb7-b5ba-462d-8782-855816bdf9de/consent.js"></script>
</head>
<body>
<nav>
        <label for="menu-mobile" class="menu-mobile"></label>
        <input type="checkbox" id="menu-mobile" role="button">
        <ul>
            <li class="menu-menu"><a href="index.php">Accueil</a></li>
            <li class="menu-animaux"><a href="animaux.php">Nos animaux</a>
            <ul class="submenu">
                    <li><a href="chats.php">Chats</a></li>
                    <li><a href="chiens.php">Chiens</a></li>
                    <li><a href="lapins.php">Lapins</a></li>
                </ul>
            </li>
            <li class="menu-inscription"><a href="form_inscription.php">S'inscrire</a></li>
            <?php
            if(!isset($_SESSION["id_user"])) { ?>
            <li class="menu-adoption"><a href="form_adoption_sans_co.php">Adopter</a>
            <?php } else { ?>
            <li class="menu-adoption"><a href="form_adoption.php">Adopter</a>
            <?php } ?> </li>
            <?php
            if(isset($_SESSION["type"]) == "admin") {
                ?>
                <li class="menu-admin"><a href="read.php">Accès admin</a></li>
            <?php } ?>
            
        </ul>
    </nav>