<!doctype html>
<html lang="fr">
 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The District: -Nos burger</title>
 
  <link rel="stylesheet" href="dist/assets/index.css">
 
</head>


<body>

<?php include 'header.php';
?>

  
<div id="cart"></div>
<div id="order-summary"></div>

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="category">
          <a class="burger-link" href="#" data-burger="CheeseBurgers">
            <img src="images_the_district(1)/images_the_district/burger.jpg" alt="Nos Burger">
          </a>
          <h3>CheeseBurgers</h3>
          
            <p>Prix: 5.99 €</p>
            <p>Description: Un délicieux burger garni de fromage fondant.</p>
            <a href="#" class="btn btn-primary" onclick="addToCart(event)">Ajouter</a>

          </div>
        
      </div>
 

      <div class="col-md-4">
        <div class="category">
          <a class="burger-link" href="#" data-burger="DoubleBurgers">
            <img src="images_the_district(1)/images_the_district/menu-burger.jpg" alt="Nos Burger">
          </a>
          <h3>DoubleBurgers</h3>
          
            <p>Prix: 7.99 €</p>
            <p>Description: Un burger double garni de viande savoureuse.</p>
            <a href="#" class="btn btn-primary" onclick="addToCart(event)">Ajouter</a>
          </div>

         </div>
      <div class="col-md-4">
        <div class="category">
          <a class="burger-link" href="#" data-burger="Burgers 3">  
            <img src="images_the_district(1)/images_the_district/food/cheesburger.jpg" alt="Nos Burger">
          </a>
          <h3>Burgers 3</h3>
        
            <p>Prix: 6.49 €</p>
            <p>Description: Un trio de burgers aux saveurs uniques.</p>
            <a href="#" class="btn btn-primary" onclick="addToCart(event)">Ajouter</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="category">
          <a class="burger-link" href="#" data-burger="Double Steak Burgers">
            <img src="images_the_district(1)/images_the_district/food/Food-Name-433.jpeg" alt="Nos Burger">
          </a>
          <h3>Double Steak Burgers</h3>
        
            <p>Prix: 8.99  </p>
            <p>Description: Deux steaks juteux dans un seul burger.</p>
            <a href="#" class="btn btn-primary" onclick="addToCart(event)">Ajouter</a>
          </div>
        
      </div>
      <div class="col-md-4">
        <div class="category">
          <a class="burger-link" href="#" data-burger="Geante Burgers">
            <img src="images_the_district(1)/images_the_district/food/hamburger.jpg" alt="Nos Burger">
          </a>
          <h3>Geante Burgers</h3>
        
            <p>Prix: 9.99 €</p>
            <p>Description: Un burger géant pour les plus gros appétits.</p>
            <a href="#" class="btn btn-primary" onclick="addToCart(event)">Ajouter</a>
          </div>
        
      </div>
      <div class="col-md-4">
        <div class="category">
          <a class="burger-link" href="#" data-burger="Burgers 6">
            <img src="images_the_district(1)/images_the_district/food/Food-Name-6340.jpg" alt="Nos Burger">
          </a>
          <h3>Burgers 6</h3>
        
            <p>Prix: 7.49 €</p>
            <p>Description: Six mini burgers aux goûts variés.</p>
            <a href="#" class="btn btn-primary" onclick="addToCart(event)">Ajouter</a>
          </div>
        
      </div>
    </div>
  </div>
  <div class="col-md">
        <div class="category">
  <h2>Panier</h2>
  <ul id="cart-items"></ul>
  <p id="cart-total"></p>

  <button id="checkout-btn">Payer</button>
  
  <div class="parallax-container">

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

<script>

</script>
<script type= "module" src = "dist/assets/index.js"></script>

</body>
</html>