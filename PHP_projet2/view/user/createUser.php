<div class="col-12">
	<form method="POST" action="index.php?page=createUser&action=create">
		<input type="text" name="nom" class="form-control mt-4" placeholder="Nom">
		<input type="text" name="prenom" class="form-control mt-4" placeholder="Prénom">
        <input type="text" name="adresse" class="form-control mt-4" placeholder="lieu de résidence">
		<input type="text" name="email" class="form-control mt-4" placeholder="Email">
        <input type="number" name="telephone" class="form-control mt-4" placeholder="Téléphone portable">
		<input type="password" name="password" class="form-control mt-4" placeholder="Mot de passe">

		<div class="d-flex mt-4">
		<button type="submit" class="btn btn-success me-4">
			<i class="fas fa-save"></i> Enregistrer			
		</button>
		<a href="index.php?page=user" class="btn btn-secondary">
			<i class="fa-solid fa-rotate-left"></i> Retour
		</a>
	</form>
</div>