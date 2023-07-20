

<?php 
$titre = "categorie";
include 'header.php';
include 'navbar.php';
?>


<div class="container">
    <h2>Menu</h2>
    <div class="burger">
      <h3 class="burger-name">CheeseBurger</h3>
      <p class="burger-price">Prix: $5.99</p>
      <div class="quantity">
        Quantité: <input type="number" value="1" min="1">
      </div>
      <button class="add-to-cart" onclick="addToCart('CheeseBurger', 5.99)">Ajouter</button>
    </div>

    <div class="burger">
      <h3 class="burger-name">DoubleBurgers</h3>
      <p class="burger-price">Prix: $7.99</p>
      <div class="quantity">
        Quantité: <input type="number" value="1" min="1">
      </div>
      <button class="add-to-cart" onclick="addToCart('DoubleBurgers', 7.99)">Ajouter</button>
    </div>

    <!-- ... Ajouter les autres burgers ici ... -->

    <h2>Panier</h2>
    <ul id="cart-items"></ul>
    <p id="cart-total"></p>

    <h2>Résumé de la commande :</h2>
    <ul id="order-items"></ul>
    <p id="order-total"></p>

    <form action="payment.php" method="post">
      <input type="hidden" name="cart_items" id="cart-items-input" value="">
      <input type="hidden" name="total_price" id="total-price-input" value="">

      <!-- Bouton pour valider la commande -->
      <button id="checkout-btn" type="submit">Payer</button>
    </form>
  </div>

  <div class="parallax-container">
    <div class="nav">
      <div class="video-container">
        <video autoplay muted loop style="width: 50%; height: 100%;">
          <source src="video/pexels-rdne-stock-project-5780437-3840x2160-24fps.mp4" type="video/mp4">
        </video>
      </div>
    </div>
  </div>
  <script>
 let cartItems = [];

function addToCart(burgerName, burgerPrice) {
  const quantity = parseInt(document.querySelector(`.burger-name:contains(${burgerName}) + .quantity input`).value);
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
    cartItemsHTML += `<li>${item.name} - $${item.price}</li>`;
    cartTotalAmount += item.price;
  }

  cartItemsList.innerHTML = cartItemsHTML;
  cartTotal.textContent = `Total: $${cartTotalAmount.toFixed(2)}`;
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
    orderItemsHTML += `<li>${item.name} - $${item.price}</li>`;
    orderTotalAmount += item.price;
  }

  orderItemsList.innerHTML = orderItemsHTML;
  orderTotal.textContent = `Total: $${orderTotalAmount.toFixed(2)}`;
}
</script>

  <?php include 'footer.php'; ?>

