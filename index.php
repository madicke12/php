<?php
$nom= null;
if (!empty($_COOKIE['utilisateur'])):
    $nom = $_COOKIE['utilisateur'];
endif;
if (!empty($_POST['prenom'])):
    setcookie('utilisateur',$_POST['prenom']);
   // $nom = $_COOKIE['utilisateur'];
endif;
unset($_POST['prenom']);
?>

<?php if($nom) {?>
    <h1>Bonjour <?=$nom?></h1>
<?php }?>

<?php if(!$nom){ ?>
    <form action="" method='POST'>
        <input type="text" placeholder='name' name= prenom>
        <button type='submit'>submit</button>
    </form>
<?php }?>

