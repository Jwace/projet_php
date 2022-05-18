<!-- Include menu fixe + connexion à la BDD -->
<?php
include("header.php");
require("connexion_bdd.php");
?>
<h3>Bienvenue, vous trouverez ci-dessous nos animaux actuellement au refuge</h3>

<div id="animaux">
    <?php
    $query = $bdd->query("SELECT * FROM Animal WHERE categorie='chaton' OR categorie='chat adulte' OR categorie='chat senior'");

    $resultat = $query->fetchAll();
    
    foreach ($resultat as $key => $chat) {?>
<div id="contenant">
    <div id="animal_seul">
    <td><?= $chat["nom_animal"] ?></td>
    </div>
</div>
    <?php } ?>
    
</div>

<!-- include footer avec conditions générales, mentions légales, etc. -->
<?php
include("footer.php");
?>