<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Liste des utilisateurs</title>
</head>
<body>
	<h1>Liste des utilisateurs</h1>
	<?php
		$nomFichier = 'utilisateurs.csv';

		if (file_exists($nomFichier))
		{?>
			<table border="1" cellspacing="0" cellpadding="5">
				<tr>
					<th>Prénom</th>
					<th>Nom</th>
				</tr><?php

			$fichier = fopen($nomFichier, 'r');
			while ($ligne = fgets($fichier))
			{
				$utilisateur = explode(';', $ligne); ?>
				
				<tr>
					<td><?= $utilisateur[0] ?></td>
					<td><?= $utilisateur[1] ?></td>
				</tr><?php
			}?>
			</table><?php
			fclose($fichier);
		}
		else
		{
			echo "Erreur : le fichier contenant les utilisateurs est inexistant";
		}
	?>
</body>
</html>