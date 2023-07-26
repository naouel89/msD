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


<button class="btn btn-danger" onclick="clearCart()">Vider le panier</button>

<?php include 'footer.php'; ?>


<script>
// on essai


let cartItems = [];

function addToCart(burgerName, burgerPrice) {
const quantity = parseFloat(document.getElementById('quantity-' + burgerName).value);
const totalPrice = burgerPrice * quantity;
const cartItem = { name: burgerName, price: totalPrice };
cartItems.push(cartItem);
updateCartUI();
}

function updateCartUI() {
const cartItemsList = document.getElementById('cart-items');
const cartTotal = document.getElementById('cart-total');
let cartItemsHTML = '';
let cartTotalAmount = 0;

for (const item of cartItems) {
cartItemsHTML += `<li>${item.name} - ${item.price.toFixed(2)} €</li>`;
cartTotalAmount += item.price;
}

cartItemsList.innerHTML = cartItemsHTML;
cartTotal.innerText = `Total: ${cartTotalAmount.toFixed(2)} €`;
document.getElementById('cart-items-input').value = JSON.stringify(cartItems);
document.getElementById('total-price-input').value = cartTotalAmount.toFixed(2);

updateOrderSummaryUI();
}

function updateOrderSummaryUI() {
const orderItemsList = document.getElementById('order-items');
const orderTotal = document.getElementById('order-total');
let orderItemsHTML = '';
let orderTotalAmount = 0;

for (const item of cartItems) {
orderItemsHTML += `<li>${item.name} - ${item.price.toFixed(2)} €</li>`;
orderTotalAmount += item.price;
}

orderItemsList.innerHTML = orderItemsHTML;
orderTotal.innerText = `Total: ${orderTotalAmount.toFixed(2)} €`;
}

function clearCart() {
cartItems = [];
updateCartUI();
}
</script>