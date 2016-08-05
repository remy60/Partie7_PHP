<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Exercice 5 </title>
</head>
<body>
  <form class="" action="exo5.php" method="get">
    <select name="choix">
      <option value="Mr">Mr</option>
      <option value="Mme">Mme</option>
    </select>
    <input type="text" name="nom" value="" placeholder="nom">
    <input type="text" name="prenom" value="" placeholder="prenom">
    <input type="submit" value="Valider" />
  </form>
  <?php
  // Verification des URL + Securité hack & suppression dans barre d'adresse.
  if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['choix'])){
    echo  htmlspecialchars($_GET['choix']). ' ' .htmlspecialchars($_GET['nom']). ' ' .htmlspecialchars($_GET['prenom']);
  }
  else {
    echo "Saisie incorrect";
  }
  ?>
  <a href="exo5.php">Retour formulaire</a>
</body>
</html>
