<?php
include("header.php");
?>

<form action="inscription.php" method="POST" style="text-align:center;">
<fieldset>
            <legend>Formulaire d'inscription</legend>
<br>
<div class="center">
    <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="nom">
<br>
    <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" placeholder="prenom">
<br>
    <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" placeholder="ville de résidence">
<br>
    <label for="email">Email :</label>
        <input type="email" id="mail" name="mail" placeholder="votreemail@test.fr">
<br>
    <label for="telephone">Téléphone :</label>
        <input type="number" id="telephone" name="telephone" placeholder="Téléphone portable">
<br>
    <label for="mdp">Mot de Passe :</label>
        <input type="password" id="mdp" name="mdp" placeholder="mot de passe">
<br>
    <label for="mdp_conf">Confirmation du Mot de Passe :</label>
        <input type="password" id="mdp_conf" name="mdp_conf" placeholder="confirmez le mot de passe">
<br>
<br>
            <input type="submit" value="Valider">
<br>

</fieldset>
</form>

<?php
include("footer.php");
?>