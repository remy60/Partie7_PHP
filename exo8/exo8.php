<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Exercice 8 </title>
</head>
<body>
  <?php
  // Verification des URL + Securité hack & suppression dans barre d'adresse.
  $ext = false;
  if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['choix']) && isset($_FILES['monfichier']))
  {  $infosfichier = pathinfo($_FILES['monfichier']['name']);
    $extension_upload = $infosfichier['extension'];
    $extensions_autorisees = array('pdf');
    if (in_array($extension_upload, $extensions_autorisees)){
      echo  htmlspecialchars($_POST['choix']). ' ' .htmlspecialchars($_POST['nom']). ' ' .htmlspecialchars($_POST['prenom']);
      echo ($_FILES['monfichier']['name']);
      $ext = true;
    }
  }
  if($ext == false) { ?>
    <form class="" action="exo8.php" method="post" enctype="multipart/form-data">
      <select name="choix">
        <option value="Mr">Mr</option>
        <option value="Mme">Mme</option>
      </select>
      <input type="text" name="nom" value="" placeholder="nom">
      <input type="text" name="prenom" value="" placeholder="prenom">
      <input type="file" name="monfichier"/>
      <input type="submit" value="Valider"/>
    </form>
    <?php
  }
  ?>
</body>
</html>
