<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  
  <title>User.php</title>
</head>
<body>
  <?php
  if (isset($_GET['prenom']) && isset($_GET['nom'])){
    echo htmlspecialchars($_GET['prenom']). ' ' .htmlspecialchars($_GET['nom']);
  }
  else {
    echo "Saisie incorrect";
  }
  ?>
  <a href="exo1.php">Retour formulaire</a>
</body>
</html>
