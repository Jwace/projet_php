<!-- Include menu fixe -->
<?php
include("header.php");
require("connexion_bdd.php");
?>
<!-- ------------------------------------------ PARTIE MANAGER ANIMAUX ---------------------------------->
<h3>Liste des animaux du refuge :</h3>

<div id="animaux_admin">
    <div id="animal_admin">
        <table>
        <thead>
            <tr>
                <th>Nom de l'animal</th>
                <th>Catégorie</th>
                <th>Age de l'animal</th>
                <th>Sexe</th>
                <th>Vaccination</th>
                <th>Puce</th>
                <th>Disponible à l'adoption</th>
                <th>Futur propriétaire</th>
                <th>Modifier</th>
                <th>Supprimer</th>
        </tr>
    </thead>
    <?php
    $query = $bdd->query("SELECT * FROM Animal, Adoption, User WHERE Animal.id_animal = Adoption.id_animal AND Adoption.id_user = User.id_user");

    $resultat = $query->fetchAll();
    
    foreach ($resultat as $key => $animal) { ?>
            <tr>
                <td><?= $animal["nom_animal"] ?></td>
                <td><?= $animal["categorie"] ?></td>
                <td><?= $animal["age_animal"] ?></td>
                <td><?= $animal["sexe"] ?></td>
                <td><?php if ($animal["vaccination"] == 1) {
            echo "Oui";
        } else {
            echo "Non";}
            $animal["vaccination"] ?></td>
                <td><?php if ($animal["puce"] == 1) {
            echo "Oui";
        } else {
            echo "Non";} $animal["puce"] ?></td>
                <td><?php if ($animal["disponible_adoption"] == 1) {
            echo "Oui";
        } else {
            echo "Non";}$animal["disponible_adoption"] ?></td>
                <td><?= $animal["nom_user"] ?></td>
                <td><a href="update_animal.php?action=modif_animal">M</a></td>
                <td><a href="delete_animal.php?action=supp_animal">S</a></td>

    <?php }?>
            </tr>
        </table>
    </div>
</div>
<br><br>
<div class="ajout"><button><a href="./form_insertion_animal.php?action=animal">Ajouter un animal</a></button></div>

<!-- ------------------------------------ PARTIE MANAGER DES UTILISATEURS ---------------------------->

<h3>Liste des utilisateurs enregistrés :</h3>

<div id="animaux_admin">
    <div id="animal_admin">
        <table>
        <thead>
            <tr>
                <th>Type d'utilisateur</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Modifier</th>
                <th>Supprimer</th>
        </tr>
    </thead>
    <?php
    $query = $bdd->query("SELECT * FROM User");

    $resultat = $query->fetchAll();
    
    foreach ($resultat as $key => $user) { ?>
            <tr>
                <td><?= $user["type_user"] ?></td>
                <td><?= $user["nom_user"] ?></td>
                <td><?= $user["prenom_user"] ?></td>
                <td><?= $user["adresse"] ?></td>
                <td><?= $user["email_user"] ?></td>
                <td><?= $user["telephone_user"] ?></td>
                <td><a href="update_user.php?action=modif_user&id=<?= $user["id_user"] ?>">M</a></td>
                <td><a href="delete_user.php?action=supp_user&id=<?= $user["id_user"] ?>">S</a></td>

    <?php }?>
            </tr>
        </table>
    </div>
</div>
<br><br>
<!-- include footer avec conditions générales, mentions légales, etc. -->
<?php
include("footer.php");
?>