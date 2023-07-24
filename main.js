
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

    let cartItems = [];

    function addToCart(burgerName, burgerPrice) {
    const quantity = parseFloat(document.getElementById('quantity-' + burgerName).value);
    const totalPrice = burgerPrice * quantity;
    const cartItem = { name: burgerName, price: totalPrice };
    cartItems.push(cartItem);
    updateCartUI();
    }
    
    function updateCartUI() {
    const cartItemsList = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    let cartItemsHTML = '';
    let cartTotalAmount = 0;
    
    for (const item of cartItems) {
    cartItemsHTML += `<li>${item.name} - ${item.price.toFixed(2)} €</li>`;
    cartTotalAmount += item.price;
    }
    
    cartItemsList.innerHTML = cartItemsHTML;
    cartTotal.innerText = `Total: ${cartTotalAmount.toFixed(2)} €`;
    document.getElementById('cart-items-input').value = JSON.stringify(cartItems);
    document.getElementById('total-price-input').value = cartTotalAmount.toFixed(2);
    
    updateOrderSummaryUI();
    }
    
    function updateOrderSummaryUI() {
    const orderItemsList = document.getElementById('order-items');
    const orderTotal = document.getElementById('order-total');
    let orderItemsHTML = '';
    let orderTotalAmount = 0;
    
    for (const item of cartItems) {
    orderItemsHTML += `<li>${item.name} - ${item.price.toFixed(2)} €</li>`;
    orderTotalAmount += item.price;
    }
    
    orderItemsList.innerHTML = orderItemsHTML;
    orderTotal.innerText = `Total: ${orderTotalAmount.toFixed(2)} €`;
    }
    
    function clearCart() {
    cartItems = [];
    updateCartUI();
    }