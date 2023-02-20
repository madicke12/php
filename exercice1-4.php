<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tableaux et Fonctions</title>
</head>
<body>
	<?php
		function listerUtilisateurs($utilisateurs)
		{?>
			<table border="1" cellspacing="0" cellpadding="5">
				<tr>
					<th>Prénom</th>
					<th>Nom</th>
					<th>Login</th>
					<th>Password</th>
				</tr><?php
				foreach ($utilisateurs as $utilisateur)
				{?>
					<tr>
						<td><?= $utilisateur['prenom'] ?></td>
						<td><?= $utilisateur['nom'] ?></td>
						<td><?= $utilisateur['login'] ?></td>
						<td><?= $utilisateur['password'] ?></td>
					</tr><?php
				}?>
			</table><?php
		}
		
		$utilisateur1 = [
			'nom' => 'Fall',
			'prenom' => 'Khadim',
			'login' => 'xadim',
			'password' => 'passer'
		];

		$utilisateur2 = [
			'nom' => 'Mbaye',
			'prenom' => 'Fatou',
			'login' => 'fambaye',
			'password' => 'repasser'
		];
		
		$utilisateur3 = [
			'nom' => 'Mendy',
			'prenom' => 'Geneviève',
			'login' => 'gevi',
			'password' => 'passera'
		];
		
		$utilisateurs = [$utilisateur1, $utilisateur2, $utilisateur3];

		listerUtilisateurs($utilisateurs);
	?>
</body>
</html>