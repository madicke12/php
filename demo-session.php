<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Les sessions</title>
</head>
<body>
	<h1>Les sessions</h1>
	<?php
		if (isset($_SESSION['username'], $_SESSION['password'], $_SESSION['age'])) 
		{?>
			<p>
				Bonjour cher<?= $_SESSION['username'] ?> ! <hr>
				Vous avez<?= $_SESSION['age'] ?> ans et votre mot de passe est :<?= $_SESSION['password'] ?>
			</p><?php
		}
		else
		{
			$_SESSION['username'] = 'ghost';
			$_SESSION['password'] = 'realghost';
			$_SESSION['age'] = 998;
			
			echo 'Données de session initialisées avec succès !';
		}
	?>
</body>
</html>