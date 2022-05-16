<?php
    include("header.php");
?>

<fieldset>
<legend>Formulaire d'adoption</legend>
<p>En remplissant ce formulaire, vous vous engagez à adopter l'animal que vous avez choisi.
Une fois le formulaire validé, nous vous prions de bien vouloir contacter le refuge à ce numéro : 01.23.45.67.89.
Des frais d'adoption, d'un montant de 50 euros, vous seront demandés afin de participer aux soins et aux frais de stérilisation et puçage des animaux présents dans le refuge.</p>
<form action="form_adoption_sans_co.php?action=ajout_animal" method="POST">
    <label for="nom_adoptant">Indiquez le nom de la personne adoptante :</label>
    <input type="text" name="nom_adoptant" id="nom_adoptant"><br><br>
    <label for="prenom_adoptant">Prénom de l'adoptant:</label>
    <input type="text" name="prenom_adoptant" id="prenom_adoptant"><br><br>
    <label for="adresse_adoptant">Adresse :</label>
    <input type="text" name="adresse_adoptant" id="adresse_adoptant" placeholder="ville de résidence"><br><br>
    <label for="tel_adoptant">Numéro de téléphone :</label>
    <input type="text" name="tel_adoptant" id="tel_adoptant"><br><br>
    <label for="mail_adoptant">Email :</label>
    <input type="text" name="mail_adoptant" id="mail_adoptant"><br><br>
    <label for="password_adoptant">Mot de passe :</label>
    <input type="text" name="password_adoptant" id="password_adoptant"><br><br>
    <label for="conf_password_adoptant">Confirmation de mot de passe :</label>
    <input type="text" name="conf_password_adoptant" id="conf_password_adoptant"><br><br>
    <input type="submit" value="Valider">
</fieldset>
</form>

<?php
include("footer.php");
?>