<?php 
$titre = "Restaurant Order";
include 'header.php';
include 'navbar.php';
?>

<div class="container">
  <div class="row">
    <?php include 'menu_items.php'; ?>
  </div>

  <div class="col-md">
    <div class="category">
      <h2>Panier</h2>
      <ul id="cart-items"></ul>
      <p id="cart-total">Total: 0.00 €</p>

      <div id="order-summary">
        <h3>Résumé de la commande :</h3>
        <ul id="order-items"></ul>
        <p id="order-total"></p>
      </div>

      <form action="payment.php" method="post">
        <input type="hidden" name="cart_items" id="cart-items-input" value="">
        <input type="hidden" name="total_price" id="total-price-input" value="">

        <!-- Bouton pour valider la commande -->
        <button id="checkout-btn" type="submit" class="btn btn-success">Payer</button>
      </form>
    </div>
  </div>
</div>

<button class="btn btn-danger" onclick="clearCart()">Vider le panier</button>

<?php include 'footer.php'; ?>


