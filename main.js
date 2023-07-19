
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
  

    // panier

    function addToCart(event) {
      event.preventDefault();
      var burger = event.target.parentNode;
      var burgerName = burger.querySelector("h3").textContent;
      var burgerPrice = parseFloat(burger.querySelector("p:nth-of-type(1)").textContent.replace("Prix: ", ""));
      
      // Créer un nouvel élément pour le panier
      var cartItem = document.createElement("div");
      cartItem.classList.add("cart-item");
      
      // Contenu de l'élément du panier
      var itemContent = `
        <p>${burgerName}</p>
        <p>${burgerPrice.toFixed(2)} €</p>
      `;
      cartItem.innerHTML = itemContent;
      
      // Ajouter l'élément au panier
      var cart = document.getElementById("cart");
      cart.appendChild(cartItem);
      
      // Mettre à jour le détail de la commande et le total
      updateOrderSummary();
    }
    
    // Fonction pour mettre à jour le détail de la commande et le total
    function updateOrderSummary() {
      var cartItems = document.getElementsByClassName("cart-item");
      var total = 0;
      
      var orderSummary = document.getElementById("order-summary");
      orderSummary.innerHTML = ""; // Réinitialiser le contenu du détail de la commande
      
      // Parcourir les éléments du panier et calculer le total
      for (var i = 0; i < cartItems.length; i++) {
        var itemPrice = parseFloat(cartItems[i].querySelector("p:nth-of-type(2)").textContent.replace(" €", ""));
        total += itemPrice;
        
        // Ajouter les éléments au détail de la commande
        var orderItem = document.createElement("div");
        orderItem.innerHTML = cartItems[i].innerHTML;
        orderSummary.appendChild(orderItem);
      }
      
      // Ajouter le total au détail de la commande
      var totalElement = document.createElement("div");
      totalElement.innerHTML = `
        <p><strong>Total:</strong></p>
        <p>${total.toFixed(2)} €</p>
      `;
      orderSummary.appendChild(totalElement);
    }
    
    // Lier la fonction addToCart aux boutons "Ajouter" des burgers
    var addToCartButtons = document.querySelectorAll(".btn-primary");
    addToCartButtons.forEach(function(button) {
      button.addEventListener("click", addToCart);
    });
    