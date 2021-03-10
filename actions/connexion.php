<?php

$user = 'root';
$pass = '';

// $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);


try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
