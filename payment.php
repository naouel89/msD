
<?php 
$titre = "payement";
include 'header.php';
include 'navbar.php';

?>

  <h1>Récapitulatif de la commande</h1>

  <?php
  // Vérifier si le formulaire a été soumis
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les détails de la commande depuis les champs de formulaire
    $cartItemsJson = $_POST["cart_items"];
    $totalPrice = $_POST["total_price"];

    // Convertir les détails du panier depuis JSON en tableau PHP
    $cartItems = json_decode($cartItemsJson, true);

    // Afficher les articles commandés
    echo "<h2>Articles commandés :</h2>";
    echo "<ul>";
    foreach ($cartItems as $item) {
      echo "<li>" . $item["name"] . " - " . $item["price"] . " €</li>";
    }
    echo "</ul>";

    // Afficher le total de la commande
    echo "<h2>Total de la commande :</h2>";
    echo "<p>" . $totalPrice . " €</p>";

    // Simulation du processus de paiement (vous pouvez ajouter ici le traitement réel pour le paiement)
    $paymentSuccess = true; // Simulation de succès du paiement

    if ($paymentSuccess) {
      echo "<h2>Paiement réussi !</h2>";
      echo "<p>Merci pour votre commande. Votre paiement a été traité avec succès.</p>";
      // Ajoutez ici le code pour enregistrer la commande dans la base de données ou effectuer d'autres actions liées au paiement réussi.
    } else {
      echo "<h2>Échec du paiement</h2>";
      echo "<p>Votre paiement n'a pas pu être traité. Veuillez réessayer plus tard.</p>";
      // Ajoutez ici le code pour gérer l'échec du paiement si nécessaire.
    }
  } else {
    // Rediriger l'utilisateur vers la page d'accueil si le formulaire n'a pas été soumis correctement
    header("Location: index.html");
    exit();
  }
 
  ?>
<?php
include 'footer.php';
?>