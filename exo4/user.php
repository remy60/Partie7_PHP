<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>User.php</title>
</head>
<body>
  <?php
  if (isset($_POST['nom']) && isset($_POST['prenom'])){
    echo htmlspecialchars($_POST['nom']). ' ' .htmlspecialchars($_POST['prenom']);
  }
  else {
    echo "Saisie incorrect";
  }
  ?>
  <a href="exo4.php">Retour formulaire</a>
</body>
</html>
