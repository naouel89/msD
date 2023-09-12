<?php
// Démarrer la session
session_start();

// Vérifier si le pseudo est stocké dans la variable de session
if (isset($_SESSION["pseudo"])) {
    $pseudo = $_SESSION["pseudo"];
} else {
    // Rediriger vers la page de connexion si le pseudo n'est pas défini
    header("Location: connexion.php");
    exit();
}

// Fonction de déconnexion
if (isset($_GET["logout"])) {
    session_destroy(); // Détruire toutes les données de la session
    header("Location: connexion.php");
    exit();
}

?>

   




<?php 
$titre = "accueil";
include 'header.php';
include 'navbar.php';
?>


                <div class="main-content">
                <h2 style='text-align:center'>Bienvenue sur le site, <?php echo $pseudo; ?> !</h2>
                </div>   
<section class="banner">
<div class="container">
<div class="row">
<div class="col-lg-6">
<h1>Bienvenue au District</h1>
<p>Découvrez nos délicieux plats faits maison.</p>
<p>Fusion exquise de saveurs rapides et de satisfaction gourmande où chaque bouchée vous transporte vers un
  monde de délices.</p>
  <a href="categorie.php" class="btn btn-primary">Catégorie</a>
</div>
</div>
</div>
</section>

<section class="featured-section">
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="featured-item">
  <i class="fas fa-hamburger"></i>
  <a href="resto.php" class="btn btn-primary" ><h3>Nos Burgers</h3></a>
  <p>Dégustez nos hamburgers savoureux préparés avec des ingrédients frais.</p>
</div>
</div>
<div class="col-lg-4">
<div class="featured-item">
  <i class="fas fa-pizza-slice"></i>
  <a href="" class="btn btn-primary"><h3>Nos Pizzas</h3></a>
  <p>Savourez nos délicieuses pizzas cuites au four avec des garnitures de qualité.</p>
</div>
</div>
<div class="col-lg-4">
<div class="featured-item">
  <i class="fas fa-utensils"></i>
  <a href="" class="btn btn-primary"><h3>Cuisine Asiatique</h3></a>
  <p>Découvrez les saveurs exotiques de la cuisine asiatique dans nos plats authentiques.</p>
</div>

</div>
</div>
</div>
</section>

<section class="featured-section">
<div class="container">
  <div class="row">

  <div class="col-lg-4">
    <div class="featured-item">
      <i class="fas fa-utensils"></i>
      <a href="" class="btn btn-primary"><h3>Nos Pâtes</h3></a>
      <p>Dégustez nos délicieuses pâtes préparées avec des sauces savoureuses et des ingrédients de qualité.</p>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="featured-item">
      <i class="fas fa-carrot"></i>
      <a href="" class="btn btn-primary"><h3>Nos Salades</h3></a>
      <p>Savourez nos salades fraîches et croquantes avec des mélanges uniques d'ingrédients et de vinaigrettes.</p>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="featured-item">
      <i class="fas fa-sandwich"></i>
      <a href="" class="btn btn-primary"> <h3>Nos Sandwichs</h3></a>
      <p>Découvrez nos délicieux sandwichs préparés avec des pains frais et des garnitures savoureuses.</p>
    </div>
  </div>
</div>
</div>
</section>
<section class="featured-section">
  <div class="container">
    <div class="row">
  <div class="col-lg-4">
    <div class="featured-item">
      <i class="fas fa-birthday-cake"></i>
     <a href="" class="btn btn-primary"> <h3>Nos Desserts</h3></a>
      <p>Régalez-vous avec nos desserts sucrés et gourmands, parfaits pour terminer votre repas en beauté.</p>
    </div>

</div>
</div>
</section>

<?php include 'footer.php';
?>

</body>
</html>
</body>
</html>