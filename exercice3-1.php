<?php
	if (!isset($_POST['prenom'], $_POST['nom']))
	{
		header('Location: exercice3-1.html');
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ajout d'un utilisateur</title>
</head>
<body>
	<h1>Ajout d'un utilisateur</h1>
	<?php
		$prenom = $_POST['prenom'];
		$nom = $_POST['nom'];

		if (empty($prenom) || empty($nom))
		{?>
			<p>
				Echec de l'ajout, le nom et/ou le prénom n'est pas renseigné <br>
				<a href="exercice3-1.html">Retour</a>
			</p><?php
		}
		else
		{
			$utilisateur = $prenom.';'.$nom."\n";
			$fichier = fopen('utilisateurs.csv', 'a');
			fputs($fichier, $utilisateur);
			fclose($fichier); ?>

			<p>
				Utilisateur ajouté avec succès ! <br>
				<a href="exercice3-1.html">Retour</a>
			</p><?php
		}
	?>
</body>
</html>