<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Commande</title>
 
  <!-- Lien vers votre fichier CSS personnalisé -->

  <link rel="stylesheet" href="dist/assets/index.css">
</head>


<body>

<?php include 'header.php';
?>


<body>
  <div class="container">
    <h2>Menu</h2>
    <div class="burger">
      <h3 class="burger-name">CheeseBurger</h3>
      <p class="burger-price">Prix: $5.99</p>
      <div class="quantity">
        Quantité: <input type="number" value="1" min="1">
      </div>
      <button class="add-to-cart">Ajouter</button>
    </div>

    <div class="burger">
      <h3 class="burger-name">DoubleBurgers</h3>
      <p class="burger-price">Prix: $7.99</p>
      <div class="quantity">
        Quantité: <input type="number" value="1" min="1">
      </div>
      <button class="add-to-cart">Ajouter</button>
    </div>

    <div class="burger">
      <h3 class="burger-name">Burgers 3</h3>
      <p class="burger-price">Prix: $6.49</p>
      <div class="quantity">
        Quantité: <input type="number" value="1" min="1">
      </div>
      <button class="add-to-cart">Ajouter</button>
    </div>

    <div class="burger">
      <h3 class="burger-name">Double Steak Burgers</h3>
      <p class="burger-price">Prix: $8.99</p>
      <div class="quantity">
        Quantité: <input type="number" value="1" min="1">
      </div>
      <button class="add-to-cart">Ajouter</button>
    </div>

    <h2>Panier</h2>
    <ul id="cart-items"></ul>
    <p id="cart-total"></p>

    <button id="checkout-btn">Payer</button>
  </div>
  </div>  <div class="parallax-container">

    <div class="nav">
        <div class="video-container">
            <video autoplay muted loop style="width: 50%; height: 100%;">
                <source src="video/pexels-rdne-stock-project-5780437-3840x2160-24fps.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</div>

<?php include 'footer.php';
?>

<script>  $(document).ready(function() {
    // Fonction pour ajouter un article au panier
    function addToCart(event) {
      event.preventDefault();

      // Récupérer les informations de l'article à partir des éléments HTML
      const burger = $(this).closest('.burger');
      const burgerName = burger.find('.burger-name').text();
      const burgerPrice = parseFloat(burger.find('.burger-price').text().replace("Prix: $", ""));
      const quantity = parseInt(burger.find('.quantity input').val());

      // Vérifier si la quantité est valide
      if (quantity <= 0) {
        alert("Veuillez entrer une quantité valide.");
        return;
      }

      // Créer un nouvel élément li pour afficher l'article dans le panier avec la quantité
      const li = $('<li>').text(`${burgerName} - ${burgerPrice.toFixed(2)} x ${quantity}`);

      // Ajouter l'élément li au panier (ul avec l'ID "cart-items")
      $('#cart-items').append(li);

      // Calculer le total du panier
      updateCartTotal();

      // Réinitialiser la quantité à 1
      burger.find('.quantity input').val(1);
    }

    // Fonction pour mettre à jour le total du panier
    function updateCartTotal() {
      let total = 0;

      $('#cart-items li').each(function() {
        const itemText = $(this).text();
        const price = parseFloat(itemText.split(' - ')[1].split(' x ')[0]);
        const quantity = parseInt(itemText.split(' x ')[1]);

        total += price * quantity;
      });

      $('#cart-total').text('Total: $' + total.toFixed(2));
      $('#navbar-total').text(total.toFixed(2)); // Mettre à jour le total sur la navbar
    }

    // Écouter les clics sur les boutons "Ajouter" pour ajouter les articles au panier
    $('.add-to-cart').click(addToCart);

    // Écouter le clic sur le bouton "Payer"
    $('#checkout-btn').click(function() {
      const total = parseFloat($('#cart-total').text().split('$')[1]);
      // Envoyer le total à une page PHP pour le traitement
      window.location.href = `checkout.php?total=${total}`;
    });
  });
</script>


 <script type= "module" src = "dist/assets/index.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  <script></script>

>>>>>>> 73e197d5e8bc226b2076977c798640e71c423506
</body>
</html>