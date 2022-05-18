<h3><a href="index.php?page=createAnimal">Ajouter un animal</a></h3>

<table class="table">
		<thead>
			<tr>
				<th>Nom</th>
				<th>Catégorie</th>
                <th>Âge</th>
                <th>Sexe</th>
                <th>Vaccination</th>
                <th>puce</th>
				<th class="text-center">Modifier</th>
				<th class="text-center">Supprimer</th>
			</tr>
		</thead>

		<tbody>
			<?php
				foreach($animal as $animal){
			?>
				<tr>
					<td><?php echo $animal["nom"];?></td>
					<td><?php echo $animal["categorie"];?></td>
					<td><?php echo $animal["age_animal"];?></td>
                    <td><?php echo $animal["sexe"];?></td>
                    <td><?php if ($animal["vaccination"] == 1) {
                        echo "Oui";
                        } else {
                        echo "Non";} $animal["vaccination"] ?></td>
                    <td><?php if ($animal["puce"] == 1) {
                        echo "Oui";
                        } else {
                    echo "Non";} $animal["puce"] ?></td>
					<td class="text-center">
						<a class="btn btn-primary" href="index.php?page=createAnimal&id=<?php echo $jeux_video['id'];?>">
						</a>
					</td>
					<td class="text-center">
						<a href="index.php?page=animal&action=delete&id=<?php echo $animal['id'];?>" class="btn btn-danger">
						</a>
					</td>
				</tr>
			<?php
				}
			?>
		</tbody>
	</table>