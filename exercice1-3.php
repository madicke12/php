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
		function sommeTableau($tableau)
		{
			if (is_array($tableau))
			{
				$somme = 0;
				foreach ($tableau as $valeur)
				{
					$somme += $valeur;
				}
				return $somme;
			}
		}

		function produitTableau($tableau)
		{
			if (is_array($tableau))
			{
				$produit = 1;
				foreach ($tableau as $valeur)
				{
					$produit *= $valeur;
				}
				return $produit;
			}
		}
		
		$jours = [1, 3, 5];
		echo 'La somme des éléments du tableau vaut : ' . sommeTableau($jours);
		echo '<hr>';
		echo 'Le produit des éléments du tableau vaut : ' . produitTableau($jours);
	?>
</body>
</html>