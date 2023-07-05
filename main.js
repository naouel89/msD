// Importation des fichiers CSS et JS de Bootstrap
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap/dist/js/bootstrap.js';

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

  // Vérifier que tous les champs obligatoires sont remplis
  if (nom.trim() === '' || email.trim() === '' || sujet === 'Veuillez sélectionner un sujet' || question.trim() === '' || !accepter) {
    alert('Veuillez remplir tous les champs obligatoires.');
    return;
  }

  // Afficher les informations 
  window.alert('Nom:', nom);
  window.alert ('Prénom:', prenom);
  window.alert('Email:', email);
  window.alert('Sujet:', sujet);
  window.alert('Question:', question);
  window.alert('Accepter le traitement:', accepter);

  // Réinitialiser le formulaire
  document.getElementById('contact-form').reset();

  // Afficher un message de succès
  alert('Votre formulaire a été soumis avec succès!');
}

// Attacher l'événement de soumission du formulaire à la fonction de validation
document.getElementById('contact-form').addEventListener('submit', validateForm);

// PANIER commande

$(document).ready(function() {
  // Fonction pour ajouter un article au panier
  function addToCart(event) {
    event.preventDefault();
    
    // Récupérer les informations de l'article à partir des éléments HTML
    const burger = $(this).closest('.burger');
    const burgerName = burger.find('.burger-name').text();
    const burgerPrice = burger.find('.burger-price').text();
    const quantity = parseInt(burger.find('.quantity input').val());
    
    // Vérifier si la quantité est valide
    if (quantity <= 0) {
      alert("Veuillez entrer une quantité valide.");
      return;
    }
    
    // Créer un nouvel élément li pour afficher l'article dans le panier avec la quantité
    const li = $('<li>').text(`${burgerName} - ${burgerPrice} x ${quantity}`);
    
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
      const price = parseFloat(itemText.split('$')[1]);
      const quantity = parseInt(itemText.split('x')[1]);
      
      total += price * quantity;
    });
    
    $('#cart-total').text('Total: $' + total.toFixed(2));
  }
  
  // Écouter les clics sur les boutons "Ajouter" pour ajouter les articles au panier
  $('.add-to-cart').click(addToCart);
  
  // Écouter le clic sur le bouton "Payer"
  $('#checkout-btn').click(function() {
    const total = parseFloat($('#cart-total').text().split('$')[1]);
    alert('Total à payer: $' + total.toFixed(2));
  });
});
