<?php

require 'model/AnimalModel.php';

class ControllerController{

	public $controller;

	// Affichage animaux
	public function __construct()
	{
		$this->_animal = new Animal();
	}
	


	/*
	 * Charge le bon controller en fonction de la $_GET['page']
	 * Si pas de match, on charge le front controller
	 */
	public function controllerCharger()
	{
		if(!empty($_GET['page'])){
			if($_GET['page'] === 'connexion'){
				include 'ConnexionController.php';
				return new ConnexionController();
			}elseif($_GET['page'] === 'user' || $_GET['page'] === 'utilisateurs_create' || $_GET['page'] === 'utilisateurs_update'){
				include 'UtilisateurController.php';
				return new UtilisateurController();
			}elseif($_GET['page'] === 'jeux_video' || $_GET['page'] === 'jeux_video_create' || $_GET['page'] === 'jeux_video_update'){
				include 'JeuxVideoController.php';
				return new JeuxVideoController();
			}else{
				return new FrontController();
			}
		}else{
			return new FrontController();
		}
	}


	/*
	 * Affiche la vue en fonction de la $_GET['page']
	 * si pas de vue, on affiche la page erreurs.php
	 */
	public function render($get_page)
	{
		if(empty($get_page)){
			$jeux_videos = $this->_jeux_video->getAllJeuxVideo();
			include './views/accueil.php';
		}
		else{
			$jeux_videos = $this->_jeux_video->getAllJeuxVideo();
			if(file_exists('./views/' .$get_page. '.php')){
				include('./views/' .$get_page. '.php');
			}else{
				include('./views/erreurs.php');
			}
		}
	}
}