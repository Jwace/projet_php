<?php

class User{

	public $_bdd;

    // Constructeur
	public function __construct()
	{
		try{
			$this->_bdd = new PDO('mysql:host=localhost;dbname=sautre2u_bddphp;charset=utf8', 'root', '');
		}catch(Exception $e){
		    die('Erreur : '.$e->getMessage());
		}
	}

    // Méthodes
    // Sélection utilisateur via son email
	public function selectUser($email)
	{
		$sql = "SELECT id_user, password FROM User WHERE password = ?";
		$req = $this->_bdd->prepare($sql);
		$req->execute(array($email));
		return $req->fetch(PDO::FETCH_ASSOC);
	}

    // Récupération informations utilisateur
	public function getInfosUser($email){
		$sql = "SELECT nom_user, prenom_user, email_user, adresse, email_user, telephone_user FROM User WHERE email = ? ";
		$req = $this->_bdd->prepare($sql);
		$req->execute(array($email));
		$donnees = $req->fetch(PDO::FETCH_ASSOC);
		return $donnees;
	}

    // Récupération informations utilisateur pour être modifiées via son ID
	public function getUser($id){
		$sql = "SELECT id_user, nom_user, prenom_user, adresse, email_user, telephone_user FROM User WHERE id = ? ";
		$req = $this->_bdd->prepare($sql);
		$req->execute(array($id));
		$donnees = $req->fetch(PDO::FETCH_ASSOC);
		return $donnees;
	}

    // Récupération informations de tous les utilisateurs
	public function getAllUser()
	{
		$sql = "SELECT * FROM User";
		$req = $this->_bdd->prepare($sql);
		$req->execute();
		$donnees = $req->fetchall(PDO::FETCH_ASSOC);
		return $donnees;
	}

    // Créer un nouvel utilisateur
	public function createNewUser($nom, $prenom, $adresse, $email, $telephone, $hpassword)
	{
		$sql = "INSERT INTO User(nom_user, prenom_user, adresse, email_user, telephone_user, password) 
        VALUES (?, ?, ?, ?, ?, ?)";
		$req = $this->_bdd->prepare($sql);
		$req->execute(array($nom, $prenom, $adresse, $email, $telephone, $hpassword));
	}

    // Update utilisateur
	public function updateUser($id, $nom, $prenom, $adresse, $email, $telephone, $hpassword)
	{
		$sql = "UPDATE User SET nom_user = ?, prenom_user = ?, adresse = ?, email_user = ?, telephone_user = ?, password = ? WHERE id = ?";
		$req = $this->_bdd->prepare($sql);
		$req->execute(array($nom, $prenom, $adresse, $email, $telephone, $hpassword, $id));
		$donnees = $req->fetch(PDO::FETCH_ASSOC);
	}

    // Suppression utilisateur via son ID
	public function deleteUtilisateur($id)
	{
		$sql = "DELETE FROM User WHERE id_user = ?";
		$req = $this->_bdd->prepare($sql);
		$req->execute(array($id));
		$donnees = $req->fetch(PDO::FETCH_ASSOC);
	}
}