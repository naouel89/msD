<?php 
$titre = "Restaurant Order";
include 'header.php';
include 'navbar.php';
?>
<?php
// Vérifiez si l'ID du plat a été transmis via GET
if (isset($_GET['id'])) {
    $plat_id = $_GET['id'];

    // Assurez-vous que l'ID du plat est valide (par exemple, une vérification supplémentaire peut être nécessaire pour s'assurer que le plat existe)
    
    // Démarrer ou reprendre la session (si ce n'est pas déjà fait)
    session_start();

    // Ajoutez le plat au panier (utilisez un tableau associatif pour stocker les articles)
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }

    // Vérifiez si le plat est déjà dans le panier
    if (isset($_SESSION['panier'][$plat_id])) {
        // Si le plat est déjà dans le panier, augmentez la quantité
        $_SESSION['panier'][$plat_id]['quantite']++;
    } else {
        // Si le plat n'est pas encore dans le panier, ajoutez-le
        $_SESSION['panier'][$plat_id] = array(
            'id' => $plat_id,
            'quantite' => 1,
        );
    }
}

// Redirigez l'utilisateur vers la page du menu
header("Location: resto.php");
exit();
?>
