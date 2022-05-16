<!-- Include menu fixe + connexion à la BDD -->
<?php
include("header.php");
require("connexion_bdd.php");
?>
<h2>Bienvenue, vous trouverez ci-dessous nos animaux actuellement au refuge</h2>

<div id="animaux">
    <?php
    $query = $pdo->query("SELECT * FROM Animal WHERE categorie='chaton' OR categorie='chat adulte' OR categorie='chat senior'");

    $resultat = $query->fetchAll();
    
    foreach ($resultat as $key => $chat) {?>
<div id="contenant">
    <div id="animal_seul">
    <?= $chat["image_animal"]?>
    <?= $chat["nom_animal"] ?>
    </div>
</div>
    <?php } ?>
    
</div>

<!-- include footer avec conditions générales, mentions légales, etc. -->
<?php
include("footer.php");
?>