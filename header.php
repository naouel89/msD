<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The District: - <?= $titre ?></title>

  <link rel="stylesheet" href="style.css">

 
  <link rel="stylesheet" href="assets/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <?php
// Connexion à la base de données
try {
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=dist', 'root', '1234');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupération des plats
    $requete = $db->prepare("SELECT * FROM plat");
    $requete->execute();
    $plats = $requete->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
<body>