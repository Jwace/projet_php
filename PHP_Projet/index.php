<!-- Include menu fixe -->
<?php
include("header.php");
require("connexion_bdd.php");
?>

<?php
if (isset($_SESSION["type"])) {
    if($_SESSION["type_user"] == "admin") {
        echo "Bonjour ".$_SESSION["type_user"]. " " .$_SESSION["prenom_user"] . " " . $_SESSION["nom_user"] . ", Bienvenue !";
    } else {
        echo "Bonjour ".$_SESSION["prenom_user"] . " " . $_SESSION["nom_user"] . ", Bienvenue !";
    }
}

?>
<!-- PARTIE VISIBLE VISITEUR -->
    <h1>Bienvenue sur notre site adopte un animal.com</h1>

    <fieldset>
    <legend>Authentification</legend>
    <form action="#" method="POST" style="text-align:center;">
        <label for="mail">Email : </label>
        <input type="email" name="mail" id="mail" placeholder="Votre adresse email"><br>
        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp" id="mdp" placeholder="Votre mot de passe">
        <br><br>
        <button type="submit">Valider</button>
        <br>
    </form>
    </fieldset>

    <p>Vous pouvez également visiter le site sans connexion, en cliquant <a href="animaux.php">ici</a></p>
    </div>

<!-- TEST PDO A ENLEVER APRES -->
<?php /*
if (extension_loaded('PDO')) {
    echo "PDO OK";
} else {
    echo "PDO KO";
} */
?>

<!-- include footer avec conditions générales, mentions légales, etc. -->
<?php
include("footer.php");
?>


