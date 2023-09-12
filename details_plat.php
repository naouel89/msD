<?php
// Vérifiez si l'ID du plat a été transmis via GET
if (isset($_GET['id'])) {
    $plat_id = $_GET['id'];

    // Assurez-vous que l'ID du plat est valide (par exemple, une vérification supplémentaire peut être nécessaire pour s'assurer que le plat existe)

    // Connexion à la base de données (utilisez vos informations de connexion)
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=THEDISTRICT1', 'votre_nom_utilisateur', 'votre_mot_de_passe');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupération des détails du plat depuis la base de données
    $requete = $db->prepare("SELECT * FROM plat WHERE id = :plat_id");
    $requete->bindParam(':plat_id', $plat_id);
    $requete->execute();
    $plat = $requete->fetch(PDO::FETCH_OBJ);

    // Assurez-vous que le plat existe avant de l'afficher
    if ($plat) {
        // Affichez les détails du plat
        ?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <title>Détails du plat</title>
            <link rel="stylesheet" href="style.css"> <!-- Ajoutez votre fichier CSS externe ici -->
        </head>
        <body>
            <header>
                <h1><?= $plat->libelle ?></h1>
            </header>

            <section class="plat-details">
                <div class="plat-image">
                    <img src="<?= $plat->image ?>" alt="<?= $plat->libelle ?>">
                </div>
                <div class="plat-info">
                    <h2><?= $plat->libelle ?></h2>
                    <p><strong>Prix:</strong> <?= $plat->prix ?> €</p>
                    <p><strong>Description:</strong> <?= $plat->description ?></p>
                </div>
            </section>

            <a href="ajouter_au_panier.php?id=<?= $plat->id ?>" class="btn btn-success">Ajouter au panier</a>
        </body>
        </html>
        <?php
    } else {
        // Redirigez l'utilisateur vers une page d'erreur ou de menu
        header("Location: resto.php");
        exit();
    }
} else {
    // Redirigez l'utilisateur vers une page d'erreur ou de menu si l'ID du plat n'a pas été spécifié
    header("Location: resto.php");
    exit();
}
?>
