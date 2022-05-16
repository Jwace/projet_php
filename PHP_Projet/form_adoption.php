<?php
include("#");
?>
<fieldset>
    <legend>Formulaire d'adoption</legend>
<div class="ajout">
    <form action="#" method="POST">
        <label for="mail">Nom : </label>
        <input type="email" name="mail" id="mail" placeholder="Votre adresse mail">
        <br>
        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp" id="mdp" placeholder="Votre mot de passe">
        <br><br>
        <button type="submit">Valider</button>
        <br><br>
    </form>
</div>
<?php
include("../view/script-php/footer.php");
?>