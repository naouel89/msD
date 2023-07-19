
<?php 
$titre = "contact";
include 'header.php';
include 'navbar.php';
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


  <?php include 'footer.php';
?>


