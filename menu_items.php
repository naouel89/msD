<!-- Burger 1 - CheeseBurgers -->
<div class="col-md-4">
  <div class="category">
    
      <img src="images_the_district(1)/images_the_district/burger.jpg" alt="CheeseBurgers" class="effet">
    </a>
  </div>
  <h3>CheeseBurgers</h3>
  <p>Prix: 5.99 €</p>
  <p>Description: Un délicieux burger garni de fromage fondant.</p>
  <button class="btn btn-primary" onclick="addToCart('CheeseBurgers', 5.99)">Ajouter</button>
  <input type="number" id="quantity-CheeseBurgers" min="1" value="1">
</div>

<!-- Burger 2 - DoubleBurgers -->

<div class="col-md-4">
  <div class="category">
    
  <img src="images_the_district(1)/images_the_district/menu-burger.jpg" alt="Nos Burger" class="effet">
    </a>
  </div>
  <h3>CheeseBurgers</h3>
  <p>Prix: 7.99 €</p>
  <p>Description: Un burger double garni de viande savoureuse.</p>
  <button class="btn btn-primary" onclick="addToCart('CheeseBurgers', 7.99)">Ajouter</button>
  <input type="number" id="quantity-CheeseBurgers" min="1" value="1">
</div>

<div class="col-md-4">
  <div class="category">
    
  <img src="images_the_district(1)/images_the_district/food/cheesburger.jpg" alt="Nos Burger" class="effet">
    </a>
  </div>
<h3>Burgers3</h3>
  <p>Prix: 6.49 €</p>
  <p>Description: Un trio de burgers aux saveurs uniques.</p>
  <button class="btn btn-primary" onclick="addToCart('Burgers3', 7.99)">Ajouter</button>
  <input type="number" id="quantity-Burgers3" min="1" value="1">
</div>
  <!-- ... Other menu items ... -->
</div>

<!-- ... More menu items ... -->
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