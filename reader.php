<?php 
$motif =NULL;
if(isset($_POST['motif'])):
    $motif= $_POST['motif'];
endif;

$fileName=null;
if (isset($_POST['file'])):
    $fileName= $_POST['file'];
   // var_dump($file);
endif;    
if(!empty($fileName)):
   $file = fopen($fileName,'r');
endif;
function highlight_occurrence($motif, $ligne) {
    $recherche = '/(' . preg_quote($motif, '/') . ')/i';
    $remplacement = '<span style="background-color: yellow;">$1</span>';
    $texte_formate = preg_replace($recherche, $remplacement, $ligne);
    return $texte_formate;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reader</title>
</head>
<body>
     <h1>Bienvenue</h1>

     <form action="" method='post'>
        <input type="file" placeholder="choissessez un fichier" name='file' >
        <h2>Entrez le motif a rechercher</h2>
        <input type="text" name="motif" placeholder="Le motif a rechercher">
        <button type="submit">Soumettre</button>

     </form>


     <pre>
    <?php 
    if(!empty($file)):
          while (!feof($file))
          {
              $ligne = fgets($file);
              $ligne= highlight_occurrence($motif,$ligne);
              echo $ligne.'<br>';
          } 
    endif;
    ?>
</pre>


  

</body>
</html>