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
		function afficherTableau($tableau)
		{
			if (is_array($tableau))
			{
				foreach ($tableau as $valeur)
				{
					echo $valeur.'<br>';
				}
			}
			else
			{
				echo "Le paramètre fourni n'est pas un tableau";
			}
		}
		
		$jours = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
		afficherTableau($jours);
		echo '<hr>';
		afficherTableau(8);
	?>
</body>
</html>