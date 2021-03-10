<?php
session_start();
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // On stock les données
  $firstname = htmlspecialchars($_POST['firstname']);
  $lastname = htmlspecialchars($_POST['lastname']);
  $description = htmlspecialchars($_POST['description']);

if (!empty($firstname) and !empty($lastname) and !empty($description) ){


  $req = $bdd->prepare('INSERT INTO users(firstname, lastname, description) VALUES (? , ?, ? )');
  $req->execute(array($_POST['firstname'], $_POST['lastname'], $_POST['description']));

  $_SESSION['notifications'] = [
    'type' => 'success',
    'message' => 'Utilisateur ajouté avec succès',
  ];
  header("Location: ../index.php");
  die();

  $reponse = $bdd->query('SELECT * FROM users');

  // $donnees = $reponse->fetch();

  while ($donnees = $reponse->fetch())
  {
    echo $donnees['firstname'] . ' | ' . $donnees['lastname']  . '<br />';
  }

  var_dump($donnees);
}else{

  $_SESSION['notifications'] = [
    'type' => 'erreur',
    'message' => 'Veuillez remplir tous les champs',
  ];
  header("Location: ../index.php");
  die();
}



}
