<?php 
$titre = "Restaurant Order";
include 'header.php';
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Menu du restaurant</title>
    <link rel="stylesheet" href="style.css"> <!-- Ajoutez votre fichier CSS externe ici -->
</head>
<body>
    <header>
        <h1>Menu du restaurant</h1>
    </header>
    
    <section class="menu-container">
        <?php foreach ($plats as $plat): ?>
            <div class="menu-item">
                <div class="menu-image">
                    <img src="<?= $plat->image ?>" alt="<?= $plat->image ?>">
                </div>
                <div class="menu-details">
                    <h2><?= $plat->libelle ?></h2>
                    <p><strong>Prix:</strong> <?= $plat->prix ?> €</p>
                    <p><strong>Description:</strong> <?= $plat->description ?></p>
                    <a href="details_plat.php?id=<?= $plat->id ?>" class="btn btn-primary">Détails</a>
                    <a href="ajouter_au_panier.php?id=<?= $plat->id ?>" class="btn btn-success">Ajouter au panier</a>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
    
    <!-- Vous pouvez ajouter le code pour afficher le panier ici -->
    
</body>
</html>
