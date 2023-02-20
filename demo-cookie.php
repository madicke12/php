<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cookies</title>
</head>
<body>
	<h1>Utilisation des cookies</h1>
	<?php
		if (isset($_COOKIE['username']))
		{
			echo 'Bienvenue cher '.$_COOKIE['username'].'<br>';
			echo 'La dernière fois que vous vous étiez connecté c\'était le '.$_COOKIE['last-seen'];
		}
		else
		{
			$expiration = time() + 24 * 3600;
			setcookie('username', "lambda", $expiration);
			setcookie('last-seen', date('d/m/Y à H:i:s'), $expiration);
			echo 'Cookie enregistrée avec succès !';
		}
	?>
</body>
</html>