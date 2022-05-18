<!-- Include menu fixe -->
<?php
include("header.php");
?>

<div id="animaux">
    <div id="animal_seul">
<?php
    $query = $pdo->query("SELECT * FROM Animal WHERE id_animal='1001'");

    $resultat = $query->fetchAll();

    foreach ($resultat as $key => $animal) { ?>
    <ul>
        <li>Nom : <?= $animal["nom_animal"] ?></li>
        <li>Age : <?= $animal["age_animal"] ?></li>
        <li>Sexe : <?=$animal["sexe"] ?></li>
        <li>Vaccination : <?php if ($animal["vaccination"] == 1) {
            echo "Oui";
        } else {
            echo "Non";}
            $animal["vaccination"] ?></li>
        <li>Puce : <?php if ($animal["puce"] == 1) {
            echo "Oui";
        } else {
            echo "Non";} $animal["puce"] ?></li>
        <li>Disponible à l'adoption : <?php if ($animal["disponible_adoption"] == 1) {
            echo "Oui";
        } else {
            echo "Non";}$animal["disponible_adoption"] ?></li>
    </ul>
    <?php } ?>         
        </div>
        <div id="animal_seul">
            <img src="../img/rex.jpg">
        </div>
    <p> Âgé de 3 ans, Rex est arrivé dans le refuge il y a un an.
        De nature sportif, Rex aime les balades et l'agility. Sa future famille devra être en capacité de le sortir au minimum 2 heures par jour.<br>
        Il est à l'aise avec d'autres chats et chiens, mais devra être surveillé lors de contacts avec des enfants, surtout en bas âge.</p>

        <?php
        if (!isset($_SESSION["id_user"])) { ?>
        <a href="adoption_sans_co.php"><input type="button" value="J'adopte"></a><br><br>
    <?php } else { ?>
        <a href="adoption.php"><input type="button" value="J'adopte"></a><br><br>
    <?php } ?>
        
<!-- include footer avec conditions générales, mentions légales, etc. -->
<?php
include("footer.php");
?>