<!-- Include menu fixe + connexion à la BDD -->
<?php
include("header.php");
require("connexion_bdd.php");
?>
<h2>Bienvenue, vous trouverez ci-dessous nos animaux actuellement au refuge</h2>

<div id="animaux">
    <?php
    $query = $bdd->query("SELECT * FROM Animal WHERE categorie='chien adulte' OR categorie='chiot'");

    $resultat = $query->fetchAll();
    
    foreach ($resultat as $key => $chien) {?>
<div id="contenant">
    <div id="animal_seul">
    <?= $chien["nom_animal"] ?>
    </div>
</div>
    <?php } ?>
    
</div>

<!-- include footer avec conditions générales, mentions légales, etc. -->
<?php
include("../footer.php");
?>