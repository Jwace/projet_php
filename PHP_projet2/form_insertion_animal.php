<?php
require("connexion_bdd.php"); // Recherche du fichier connexion.php
    if(isset($_GET["action"])) { 
        switch ($_GET["action"]) {
            case "animal" : ?>
<!-- Formulaire d'ajout de livres = titre + rayon + nombre d'exemplaires + liste déroulante avec les auteurs de la base de données -->
            <form action="create_animal.php" method="POST">
                <label for="nom">Nom :</label>
                <?php 
    $select="SELECT * FROM Animal"; // Remplissage de la liste des auteurs avec les données de la base de données
    foreach($bdd -> query($select) as $animal) { ?>
<!-- Recherche dans la base de données de la liste des auteurs -->
                <option value="<?= $animal["nom_animal"]?>"> <!-- Ne s'affiche pas, c'est juste l'option de la liste -->
                <?=$animal["nom_animal"]?> <!-- Affichage dans la liste du nom et prénom de l'auteur -->
                </option>
<?php } ?> <!-- Fermeture accolade du foreach -->
            </select>
                <label for="categorie">Catégorie :</label>
                
                <input type="text" name="categorie" id="categorie"><br><br>
                <label for="age">Âge :</label>
                <input type="number" name="age" id="age"><br><br>
            <select name="auteur"> <!-- Création d'une listbox avec sélection -->
<?php 
    $select="SELECT * FROM Animal"; // Remplissage de la liste des auteurs avec les données de la base de données
    foreach($bdd -> query($select) as $animal) { ?>
<!-- Recherche dans la base de données de la liste des auteurs -->
                <option value="<?= $animal["nom_animal"]?>"> <!-- Ne s'affiche pas, c'est juste l'option de la liste -->
                <?=$animal["nom_animal"]?> <!-- Affichage dans la liste du nom et prénom de l'auteur -->
                </option>
<?php } ?> <!-- Fermeture accolade du foreach -->
            </select>
                <input type="submit" value="Valider">
            </form>
<?php       break;
}} ?>