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
		// $jours = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
		$jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

		for ($i=0, $taille = count($jours); $i < $taille; $i++)
		{ 
			echo $jours[$i].'<br>';
		}
		
		// foreach ($jours as $jour)
		// {
		// 	echo $jour.'<br>';
		// }
	?>
</body>
</html>