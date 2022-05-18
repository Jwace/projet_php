<?php

class Animal {

	public $_bdd;

    // Constructeur
	public function __construct()
	{
		try{
			$this->_bdd = new PDO('mysql:host=localhost;dbname=sautre2u_bddphp;charset=utf8','root',"");
		}catch(Exception $e){
		    die('Erreur : '.$e->getMessage());
		}
	}


    // Méthodes
    // GETTERS
    // Get 1 animal
	public function getAnimal($id){
		$sql = "SELECT id_animal, nom_animal, categorie, age_animal, sexe, vaccination, puce FROM Animal WHERE id = ? ";
		$req = $this->_bdd->prepare($sql);
		$req->execute(array($id));
		$donnees = $req->fetch(PDO::FETCH_ASSOC);
		return $donnees;
	}

    // Get tous les animaux
	public function getAllAnimal()
	{
		$sql = "SELECT * FROM Animal";
		$req = $this->_bdd->prepare($sql);
		$req->execute();
		$donnees = $req->fetchall(PDO::FETCH_ASSOC);
		return $donnees;
	}

    // Insertion Animal
	public function CreateNewAnimal($id, $nom, $categorie, $age, $sexe, $vaccination, $puce)
	{
		$sql = "INSERT INTO Animal(id_animal, nom_animal, categorie, age_animal, sexe, vaccination, puce)
				VALUES ('$id', '$nom', '$categorie', $age, $sexe, $vaccination, $puce)";
		$req = $this->_bdd->prepare($sql);
		$req->execute(array($id, $nom, $categorie, $age, $sexe, $vaccination, $puce));
	}

	// Update Animal
	public function updateAnimal($id, $nom, $categorie, $age, $sexe, $vaccination, $puce)
	{
		$sql = "UPDATE Animal SET nom_animal = '$nom', categorie='$categorie', age_animal= '$age', sexe = '$sexe', vaccination ='$vaccination', puce = '$puce' WHERE id = ?";
		$req = $this->_bdd->prepare($sql);
		$req->execute(array($id));
		$donnees = $req->fetch(PDO::FETCH_ASSOC);
	}

    // Suppression Animal
	public function deleteAnimal($id)
	{
		$sql = "DELETE FROM Animal WHERE id = ?";
		$req = $this->_bdd->prepare($sql);
		$req->execute(array($id));
		$donnees = $req->fetch(PDO::FETCH_ASSOC);
	}
}