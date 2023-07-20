<?php 
$titre = "nosburger";
include 'header.php';
include 'navbar.php';
?>


  <h1>Menu des burgers</h1>
  <div class="menu">
    <div class="burger-item">
      <span class="burger-name">Burger Classique</span>
      <span class="burger-price">10€</span>
      <button class="add-to-cart" onclick="addToCart('Burger Classique', 10)">Ajouter au panier</button>
    </div>
    <!-- Ajoutez d'autres burgers avec des boutons "Ajouter au panier" similaires -->
  </div>

  <h2>Panier</h2>
  <div id="cart">
    <!-- Ici s'affichera le contenu du panier -->
  </div>

  <script src="script.js"></script>
</body>
</html>


  <?php include 'footer.php'; ?>
<script>
// Tableau pour stocker les éléments du panier
let cartItems = [];

// Fonction pour ajouter un élément au panier
function addToCart(itemName, itemPrice) {
  const quantity = prompt(`Combien de "${itemName}" voulez-vous ajouter au panier?`, "1");
  if (quantity !== null && !isNaN(quantity) && parseInt(quantity) > 0) {
    const newItem = {
      name: itemName,
      price: itemPrice,
      quantity: parseInt(quantity),
    };
    cartItems.push(newItem);
    updateCart();
  } else {
    alert("Quantité invalide. Veuillez entrer un nombre valide.");
  }
}

// Fonction pour mettre à jour l'affichage du panier
function updateCart() {
  const cartDiv = document.getElementById("cart");
  cartDiv.innerHTML = "";

  let totalPrice = 0;
  cartItems.forEach(item => {
    const itemTotal = item.price * item.quantity;
    totalPrice += itemTotal;

    const itemDiv = document.createElement("div");
    itemDiv.textContent = `${item.name} x${item.quantity} - ${itemTotal}€`;
    cartDiv.appendChild(itemDiv);
  });

  if (cartItems.length > 0) {
    const totalPriceDiv = document.createElement("div");
    totalPriceDiv.textContent = `Total : ${totalPrice}€`;
    cartDiv.appendChild(totalPriceDiv);
  } else {
    const emptyCartDiv = document.createElement("div");
    emptyCartDiv.textContent = "Le panier est vide.";
    cartDiv.appendChild(emptyCartDiv);
  }
}</script>
