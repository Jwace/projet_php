<!-- Include menu fixe -->
<?php
include("header.php");
require("script-php/connexion_bdd.php");
?>

<div id="animaux">
    <div id="animal_seul">
<?php
    $query = $pdo->query("SELECT * FROM Animal WHERE id_animal='1006'");

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
            <img src="images/teddy.jpg">
        </div>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia accusantium officiis placeat culpa, aliquam soluta ea, atque cumque ducimus consequuntur necessitatibus optio animi, alias nobis ad nam maiores possimus aliquid!</p>

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