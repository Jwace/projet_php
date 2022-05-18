<!-- Include menu fixe -->
<?php
include("header.php");
require("connexion_bdd.php");
?>
<h3>Vous trouverez sur cette page tous nos animaux actuellement au refuge, cliquez sur la photo pour obtenir le descriptif de l'animal</h3>

<div id="animaux">
    <div id="animal_seul">
        <p><a href="rex.php"><img src="img/rex2_300.jpg"></a></p>
        <p>Rex</p>
    </div>
    <div id="animal_seul">
        <p><a href="lola.php"><img src="img/lola300.jpg"></a></p>
        <p>Lola</p>
    </div>
    <div id="animal_seul">
        <p><a href="bunny.php"><img src="img/bunny300.jpg"></a></p>
        <p>Bunny</p>
    </div>
    <div id="animal_seul">
        <p><a href="maxi.php"><img src="img/maxi300.jpg"></a></p>
        <p>Maxi</p>
    </div>
    <div id="animal_seul">
        <p><a href="mimolette.php"><img src="img/mimolette300.jpg"></a></p>
        <p>Mimolette</p>
    </div>
    <div id="animal_seul">
        <p><a href="gus.php"><img src="img/gus300.jpg"></a></p>
        <p>Gus</p>
    </div>
    <div id="animal_seul">
        <p><a href="teddy.php"><img src="img/teddy_300.jpg"></a></p>
        <p>Teddy</p>
    </div>
    <div id="animal_seul">
        <p><a href="minette.php"><img src="img/minette_300.jpg"></a></p>
        <p>Minette</p>
    </div>
</div>

<?php 
if(!isset($_SESSION["id_user"])) { ?>
    <div class="adopter"><p><button><a href="form_adoption_sans_co.php">Formulaire d'adoption</a></button></p></div>
<?php } else { ?>
    <div class="adopter"><button><a href="form_adoption.php">Formulaire d'adoption</a></button></div>
<?php } ?>
</p>


<!-- include footer avec conditions générales, mentions légales, etc. -->
<?php
include("footer.php");
?>