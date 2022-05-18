<div class="col-12">
	<a class="btn btn-primary" href="index.php?page=createUser">
		<i class="fa-solid fa-circle-plus"></i> Créer un utilisateur
	</a>
</div>

<div class="col-12 mt-4">
	<table class="table">
		<thead>
			<tr>
				<th>Nom</th>
				<th>Prénom</th>
                <th>Adresse</th>
				<th>Email</th>
                <th>Téléphone</th>
				<th class="text-center">Modifier</th>
				<th class="text-center">Supprimer</th>
			</tr>
		</thead>

		<tbody>
			<?php
				foreach($users as $user){
			?>
				<tr>
					<td><?php echo $user['nom_user'];?></td>
					<td><?php echo $user['prenom_user'];?></td>
					<td><?php echo $user['adresse'];?></td>
					<td><?php echo $user['email_user'];?></td>
                    <td><?php echo $user['telephone_user'];?></td>
					<td class="text-center">
						<a class="btn btn-primary" href="index.php?page=updateUser&id=<?php echo $utilisateur['id'];?>">
							<i class="fas fa-edit"></i>
						</a>
					</td>
					<td class="text-center">
						<a href="index.php?page=user&action=delete&id=<?php echo $utilisateur['id'];?>" class="btn btn-danger">
							<i class="fas fa-trash-alt"></i>
						</a>
					</td>
				</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>