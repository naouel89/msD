<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The District: -Contact</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="dist/assets/index-cf548c1d.css">

</head>

<body>

<?php include 'header.php';
?>

      
      

  <!--faire la page Contact-->
  <form id="contact-form">
        <div class="form-group">
          <label for="nom">Nom:</label>
          <input type="text" class="form-control" id="nom" required>
        </div>
        <div class="form-group">
          <label for="prenom">Prénom:</label>
          <input type="text" class="form-control" id="prenom" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="form-group">
          <label for="sujet">Sujet:</label>
          <select class="form-control" id="sujet" required>
            <option disabled selected>Veuillez sélectionner un sujet</option>
            <option>Question générale</option>
            <option>Support technique</option>
            <option>Réclamation</option>
          </select>
        </div>
        <div class="form-group">
          <label for="question">Question:</label>
          <textarea class="form-control" id="question" rows="3" required></textarea>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="accepter" required>
          <label class="form-check-label" for="accepter">J'accepte le traitement de mes données</label>
        </div>
        <button type="submit" class="btn btn-primary">Soumettre</button>
      </form>
    </div>
  </div>

  <!--Fin du Contact-->
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

<script type="module" src = "dist/assets/index-3cfb730f.js"></script>

</body>
</html>