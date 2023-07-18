<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Commande</title>
 
  <!-- Lien vers votre fichier CSS personnalisé -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="dist/assets/index-39b39ede.css">
</head>

<body>
<?php 
include 'header.php'
?>

  <div class="container">
    <h1>Burgers</h1>
    
    <div class="row">
      <div class="col-md-6">
        <div class="burger">
          <img src="burger1.jpg" alt="Burger 1">
          <h3 class="burger-name">Burger 1</h3>
          <p class="burger-price">$10</p>
          <div class="quantity">
            <label for="quantity-1">Quantité:</label>
            <input type="number" id="quantity-1" min="1" value="1">
          </div>
          <button class="btn btn-primary add-to-cart">Ajouter au panier</button>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="burger">
          <img src="burger2.jpg" alt="Burger 2">
          <h3 class="burger-name">Burger 2</h3>
          <p class="burger-price">$12</p>
          <div class="quantity">
            <label for="quantity-2">Quantité:</label>
            <input type="number" id="quantity-2" min="1" value="1">
          </div>
          <button class="btn btn-primary add-to-cart">Ajouter au panier</button>
        </div>
      </div>
    </div>
    
    <div class="mt-4">
      <h2>Panier</h2>
      <ul id="cart-items"></ul>
      <p id="cart-total">Total: $0.00</p>
      <button id="checkout-btn" class="btn btn-success">Payer</button>
    </div>
    </div>  <div class="parallax-container">


</div>
<?php
include 'footer.php'
?>
<script type= "module" src = "main.js"></script>

  <script type="module" src= "/assets/index-b45031cb.js"></script>
   <script>


   </script>
</body>
</html>