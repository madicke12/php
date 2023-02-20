<?php
	session_start();

	if (!isset($_SESSION['login'], $_SESSION['password']))
	{
		header('Location: login.php');
		die();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administration</title>
</head>
<body>
	<h1>Page d'administration</h1>
	<p>
		Bienvenue cher <?= $_SESSION['login'] ?>, vous êtes dans la page d'administration du site ! <hr>
		Vous pouvez vous déconnecter en cliquant <a href="logout.php">ici</a>.
	</p>
</body>
</html>