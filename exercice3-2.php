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
		if (file_exists('utilisateurs.csv'))
		{?>
			<pre><?= file_get_contents('utilisateurs.csv') ?></pre><?php
			// <pre><?php echo file_get_contents('utilisateurs.csv') ?></pre><?php
		}
		else
		{
			echo "Erreur : le fichier contenant les utilisateurs est inexistant";
		}
	?>
</body>
</html>