<!-- Include menu fixe -->
<?php
include("header.php");
require("connexion_bdd.php");
?>

<!-- PARTIE VISIBLE VISITEUR -->
    <h1>Bienvenue sur notre site adopte un animal.com</h1>

    <fieldset>
    <legend>Authentification</legend>
    <form action="login.php" method="POST" style="text-align:center;">
        <label for="mail">Email : </label>
        <input type="email" name="mail" id="mail" placeholder="Votre adresse email"><br>
        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp" id="mdp" placeholder="Votre mot de passe">
        <br><br>
        <button type="submit">Valider</button>
        <br>
    </form>
    </fieldset>

    <p>Vous pouvez également visiter le site sans connexion, en cliquant <a href="animaux.php">ici</a> !</p>
    </div>

<!-- include footer avec conditions générales, mentions légales, etc. -->
<?php
include("footer.php");
?>


