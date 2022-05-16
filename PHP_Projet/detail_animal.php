<!-- Include menu fixe + connexion à la BDD -->
<?php
include("header.php");
require("connexion_bdd.php");
?>

<div id=detail>
    <div id=infos_animal>
    <?php 
    $query = $pdo->query("SELECT * FROM Animal WHERE id_animal=1001");
    $resultat = $query->fetchAll();
    foreach ($resultat as $key => $animal) { ?>
    <p>Nom de l'animal : <?= $animal["nom_animal"] ?><br>
    Catégorie : <?= $animal["categorie"] ?><br>
    Age : <?= $animal["age_animal"] ?><br>
    Sexe : <?= $animal["sexe"] ?><br>
    Vacciné : <?php if ($animal["vaccination"] == 1) {
            echo "Oui";
        } else {
            echo "Non";}
            $animal["vaccination"] ?><br>
    Pucé : <?php if ($animal["puce"] == 1) {
            echo "Oui";
        } else {
            echo "Non";} $animal["puce"] ?><br>
    Disponible à l'adoption : <?php if ($animal["disponible_adoption"] == 1) {
            echo "Oui";
        } else {
            echo "Non";}$animal["disponible_adoption"] ?><br>
    <?php } ?>
</div>
    <div id="photo_animal">
        <img src="images/ganache.jpg">
</div>

<!-- include footer avec conditions générales, mentions légales, etc. -->
<?php
include("footer.php");
?>