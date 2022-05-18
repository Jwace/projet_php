<div class="col-12">
	<form method="POST" action="index.php?page=updateUser&action=update&id=<?php echo $User['id_user'];?>">
		<input type="text" name="nom" class="form-control mt-4" placeholder="Nom" value="<?php echo $User['nom_user'];?>">
		<input type="text" name="prenom" class="form-control mt-4" placeholder="Prénom" value="<?php echo $User['prenom_user'];?>">
        <input type="text" name="adresse" class="form-control mt-4" placeholder="Lieu de résidence" value="<?php echo $User['adresse'];?>">
		<input type="text" name="email" class="form-control mt-4" placeholder="Email" value="<?php echo $User['email'];?>">
        <input type="number" name="telephone" class="form-control mt-4" placeholder="Téléphone portable" value="">
		<input type="password" name="password" class="form-control mt-4" placeholder="Mot de passe" value="">

		<div class="d-flex mt-4">
		<button type="submit" class="btn btn-success me-4">
			<i class="fas fa-save"></i> Enregistrer			
		</button>
		<a href="index.php?page=user" class="btn btn-secondary">
			<i class="fa-solid fa-rotate-left"></i> Retour
		</a>
	</form>
</div>