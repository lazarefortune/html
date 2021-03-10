<?php
$user = 'root';
$pass = '';

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', $user, $pass);
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}


  $reponse = $bdd->query('SELECT * FROM users');

  $donnees = $reponse->fetchAll();
 // var_dump($donnees);
 //
 //  while ($donnees = $reponse->fetch())
 //  {
 //    echo $donnees['firstname'] . ' | ' . $donnees['lastname']  . '<br />';
 //  }
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Liste des inscrits</title>
	
  </head>
  <body>
    <li> retour à l'<a href="index.php">inscription </a> </li>
    <ul>
      <?php foreach ($donnees as $user) {
        ?>
        <li> <?= $user['firstname'] . ' | ' . $user['lastname'] ?> </li>

        <?php
      } ?>
    </ul>


  </body>
</html>
