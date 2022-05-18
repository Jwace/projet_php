<?php
session_start();
require("connexion_bdd.php");

if (isset($_GET["action"])) {

    switch ($_GET["action"]) {
        case "supp_user":
            $id=$_GET["id"];
            $query = $bdd->prepare("DELETE FROM user WHERE id_user=:id");
            $success = $query->execute(array("id" => htmlspecialchars(trim($_GET["id"]))));
            if ($success) {
            header("Location:read.php?message=deluser");
                exit;
            } else {
                header("location:read.php?erreur=supp_bdd");
                exit;
            }
            break;
        case "supp_animal":
            $id=$_GET["id"];
            $query = $bdd->prepare("DELETE FROM animal WHERE id_animal=:id");
            $success = $query->execute(array("id" => htmlspecialchars(trim($_GET["id"]))));
            if ($success) {
            header("Location:read.php?message=deluser");
                exit;
            } else {
                header("location:read.php?erreur=supp_bdd");
                exit;
            }
            break;
            default:
            $erreur="erreur delete.php";
        }}