<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 6 </title>
</head>
<body>
  <?php
  $infosfichier = pathinfo($_FILES['monfichier']['name']);
$extension_upload = $infosfichier['extension'];
  // Verification des URL + Securité hack & suppression dans barre d'adresse.
  if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['choix']))
  {
    echo  htmlspecialchars($_GET['choix']). ' ' .htmlspecialchars($_GET['nom']). ' ' .htmlspecialchars($_GET['prenom']);

  }
  else { ?>

    <form class="form" action="exo6.php" method="get">
      <select name="choix">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
      </select>
      <input type="text" name="nom" value="" placeholder="nom">
      <input type="text" name="prenom" value="" placeholder="prenom">
      <input type="submit" value="Valider" />
    </form>
    <?php
  }
  ?>
</body>
</html>
