<?php
	if (isset($_POST['login'], $_POST['password']))
	{
		$login = $_POST['login'];
		$password = $_POST['password'];

		if ($login == 'admin' && $password == 'passer')
		{
			session_start();
			$_SESSION['login'] = 'admin';
			$_SESSION['password'] = 'passer';
			header('Location:admin.php');
		}
		else
		{
			header('Location:login.php?logerror');
		}
	}
	else
	{?>
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Connexion</title>
			<style>
				.error
				{
					color: red;
				}
			</style>
		</head>
		<body>
			<h1>Page de connexion</h1>
			<form method="post">
				<fieldset>
					<legend>Connexion</legend>
					<label for="login">Login</label>
					<input type="text" name="login" id="login">
					<label for="password">Mot de passe</label>
					<input type="password" name="password" id="password">
					<input type="submit" value="Connexion">
				</fieldset>
			</form>
			<?php
				if (isset($_GET['logerror']))
				{?>
					<p class="error">Login et/ou mot de passe incorrect</p><?php
				}
			?>
		</body>
		</html><?php
	}
?>