<?php
$titre = "nosburger";
include 'header.php';
include 'navbar.php';
?>

<div id="cart"></div>
<div id="order-summary"></div>

<div class="container">
  <div class="row">
    <!-- Burger 1 - CheeseBurgers -->
    <div class="col-md-4">
      <div class="category">
        <a class="burger-link" href="#" data-burger="CheeseBurgers">
          <img src="images_the_district(1)/images_the_district/burger.jpg" alt="Nos Burger" class="effet">
        </a>
      </div>
      <h3>CheeseBurgers</h3>
      <p>Prix: 5.99 €</p>
      <p>Description: Un délicieux burger garni de fromage fondant.</p>
      <button class="btn btn-primary" onclick="addToCart('CheeseBurgers')">Ajouter</button>
      <input type="number" id="quantity-CheeseBurgers" min="1" value="1">
    </div>



    <!-- Burger 2 - DoubleBurgers -->
    <div class="col-md-4">
      <div class="category">
        <a class="burger-link" href="#" data-burger="DoubleBurgers">
          <img src="images_the_district(1)/images_the_district/menu-burger.jpg" alt="Nos Burger" class="effet">
        </a>
      </div>
      <h3>DoubleBurgers</h3>
      <p>Prix: 7.99 €</p>
      <p>Description: Un burger double garni de viande savoureuse.</p>
      <button class="btn btn-primary" onclick="addToCart('DoubleBurgers')">Ajouter</button>
      <input type="number" id="quantity-DoubleBurgers" min="1" value="1">
    </div>

  
    <!-- Burger 3 - Burgers 3 -->
    <div class="col-md-4">
      <div class="category">
        <a class="burger-link" href="#" data-burger="Burgers3">
          <img src="images_the_district(1)/images_the_district/food/cheesburger.jpg" alt="Nos Burger" class="effet">
        </a>
      </div>
      <h3>Burgers 3</h3>
      <p>Prix: 6.49 €</p>
      <p>Description: Un trio de burgers aux saveurs uniques.</p>
      <button class="btn btn-primary" onclick="addToCart('Burgers3')">Ajouter</button>
      <input type="number" id="quantity-Burgers3" min="1" value="1">

    </div>
  </div>

  <div class="row">
    <!-- Burger 4 - Double Steak Burgers -->
    <div class="col-md-4">
      <div class="category">
        <a class="burger-link" href="#" data-burger="DoubleSteakBurgers">
          <img src="images_the_district(1)/images_the_district/food/Food-Name-433.jpeg" alt="Nos Burger" class="effet">
        </a>
      </div>
      <h3>Double Steak Burgers</h3>
      <p>Prix: 8.99 €</p>
      <p>Description: Deux steaks juteux dans un seul burger.</p>
      <button class="btn btn-primary" onclick="addToCart('DoubleSteakBurgers')">Ajouter</button>
      <input type="number" id="quantity-DoubleSteakBurgers" min="1" value="1">
    </div>


    <!-- Burger 5 - Geante Burgers -->
    <div class="col-md-4">
      <div class="category">
        <a class="burger-link" href="#" data-burger="GeanteBurgers">
          <img src="images_the_district(1)/images_the_district/food/hamburger.jpg" alt="Nos Burger" class="effet">
        </a>
      </div>
      <h3>Geante Burgers</h3>
      <p>Prix: 9.99 €</p>
      <p>Description: Un burger géant pour les plus gros appétits.</p>
      <button class="btn btn-primary" onclick="addToCart('GeanteBurgers')">Ajouter</button>
      <input type="number" id="quantity-GeanteBurgers" min="1" value="1">

    </div>

    <!-- Burger 6 - Burgers 6 -->
    <div class="col-md-4">
      <div class="category">
        <a class="burger-link" href="#" data-burger="Burgers6">
          <img src="images_the_district(1)/images_the_district/food/Food-Name-6340.jpg" alt="Nos Burger">
        </a>
      </div>
      <h3>Burgers 6</h3>
      <p>Prix: 7.49 €</p>
      <p>Description: Six mini burgers aux goûts variés.</p>
      <button class="btn btn-primary" onclick="addToCart('Burgers6')">Ajouter</button>
      <input type="number" id="quantity-Burgers6" min="1" value="1">
    </div>
  </div>

</div>

    <form action="payment.php" method="post">
      <input type="hidden" name="cart_items" id="cart-items-input" value="">
      <input type="hidden" name="total_price" id="total-price-input" value="">
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
        <button id="checkout-btn" type="submit">Payer</button>
      </form>
    </div>
  </div>
</div>

<button class="btn btn-danger" onclick="clearCart()">Vider le panier</button>

<?php include 'footer.php'; ?>

<script>
  function addToCart(burger) {
    const priceElement = document.querySelector(`[data-burger="${burger}"] p:nth-child(2)`);
    const price = parseFloat(priceElement.innerText.replace(/[^0-9.]/g, ''));
    const quantity = document.getElementById('quantity-' + burger).value;
    const total = price * quantity;
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');

    const itemText = `${quantity}x ${burger} - ${total.toFixed(2)} €`;
    const item = document.createElement('li');
    item.innerText = itemText;
    cartItems.appendChild(item);

    let currentTotal = parseFloat(cartTotal.innerText.replace(/[^0-9.]/g, ''));
    currentTotal += total;
    cartTotal.innerText = `Total: ${currentTotal.toFixed(2)} €`;

    updateOrderSummaryUI();
  }

  function clearCart() {
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    cartItems.innerHTML = '';
    cartTotal.innerText = 'Total: 0.00 €';

    updateOrderSummaryUI();
  }

  function updateOrderSummaryUI() {
    const cartItems = document.getElementById('cart-items');
    const orderItemsList = document.getElementById('order-items');
    const orderTotal = document.getElementById('order-total');
    let orderItemsHTML = '';
    let orderTotalAmount = 0;

    for (let i = 0; i < cartItems.children.length; i++) {
      const itemText = cartItems.children[i].innerText;
      const total = parseFloat(itemText.match(/[0-9.]+/)[0]);
      orderItemsHTML += `<li>${itemText}</li>`;
      orderTotalAmount += total;
    }

    orderItemsList.innerHTML = orderItemsHTML;
    orderTotal.innerText = `Total: ${orderTotalAmount.toFixed(2)} €`;
  }
</script>
