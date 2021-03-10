<?php
session_start();
$notifications = $_SESSION['notifications'] ?? null;
unset($_SESSION['notifications']);


// ceci est la branche de fortune code
$_SESSION['fortuneCode'] = "la branche de fortune Code";
var_dump($_SESSION['fortuneCode']);
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form action="actions/register.php" method="post">
      <h1>Inscription</h1>

      <p class="message <?= $notifications['type'];  ?>"> <?= $notifications['message'];  ?>  </p>

      <div class="form-group">
        <label for="firstname">Nom</label>
        <input type="text" name="firstname" value="" >
      </div>
      <div class="form-group">
        <label for="lastname">Prénom</label>
        <input type="text" name="lastname" value="" >
      </div>
      <div class="form-group">
        <label for="lastname">Description</label>
        <textarea name="description" rows="4" cols="80" ></textarea>
      </div>
      <button type="submit" name="button" class="valider">Enregistrer</button>
      <button type="reset" name="reset">Réinitialiser</button>
      <p>Voir la <a href="users.php">liste des Utilisateur</a> </p>
    </form>



    <script type="text/javascript">

    </script>
  </body>
</html>
