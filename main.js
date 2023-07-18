
// Importation des fichiers CSS et JS de Bootstrap
 import 'bootstrap/dist/css/bootstrap.css';
 import 'bootstrap/dist/js/bootstrap.js';
//
// Importation du fichier CSS personnalisé
 import './style.css';
 import 'bootstrap-icons/font/bootstrap-icons.css';

 // Récupérer le formulaire
// Fonction pour valider le formulaire de contact
function validateForm(event) {
    event.preventDefault();
  
    // Récupérer les valeurs des champs du formulaire
    const nom = document.getElementById('nom').value;
    const prenom = document.getElementById('prenom').value;
    const email = document.getElementById('email').value;
    const sujet = document.getElementById('sujet').value;
    const question = document.getElementById('question').value;
    const accepter = document.getElementById('accepter').checked;
  
  
  
    // Réinitialiser le formulaire
    document.getElementById('contact-form').reset();
  
    // Afficher un message de succès
    alert('Votre formulaire a été soumis avec succès!');
  }
  
  // Attacher l'événement de soumission du formulaire à la fonction de validation
  document.getElementById('contact-form').addEventListener('submit', validateForm);
  
    // Vérifier que tous les champs obligatoires sont remplis
    if (nom.trim() === '' || email.trim() === '' || sujet === 'Veuillez sélectionner un sujet' || question.trim() === '' || !accepter) {
      alert('Veuillez remplir tous les champs obligatoires.');
      
    }
  