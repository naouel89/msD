

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
  function addToCart(burgerName, price) {
    const quantity = parseInt(document.querySelector(`.burger-name=${burgerName} .quantity input`).value);
    const total = price * quantity;
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');

    const itemText = `${quantity}x ${burgerName} - ${total.toFixed(2)} €`;
    const item = document.createElement('li');
    item.innerText = itemText;
    cartItems.appendChild(item);

    let currentTotal = parseFloat(cartTotal.innerText.replace(/[^0-9.]/g, ''));
    currentTotal += total;
    cartTotal.innerText = `Total: ${currentTotal.toFixed(2)} €`;

    // Ajouter l'article au résumé de la commande
    const orderItems = document.getElementById('order-items');
    const orderTotal = document.getElementById('order-total');
    const orderItem = document.createElement('li');
    orderItem.innerText = itemText;
    orderItems.appendChild(orderItem);

    let currentOrderTotal = parseFloat(orderTotal.innerText.replace(/[^0-9.]/g, ''));
    currentOrderTotal += total;
    orderTotal.innerText = `Total: ${currentOrderTotal.toFixed(2)} €`;
  }

  function clearCart() {
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    cartItems.innerHTML = '';
    cartTotal.innerText = 'Total: 0.00 €';

    // Vider également le résumé de la commande
    const orderItems = document.getElementById('order-items');
    const orderTotal = document.getElementById('order-total');
    orderItems.innerHTML = '';
    orderTotal.innerText = 'Total: 0.00 €';
  }

  function checkout() {
    const cartItems = document.getElementById('cart-items').innerHTML;
    const cartTotal = document.getElementById('cart-total').innerText;
    document.getElementById('cart-items-input').value = cartItems;
    document.getElementById('total-price-input').value = cartTotal;
  }

</script>

  <?php include 'footer.php'; ?>

