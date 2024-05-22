"use strict"
//-----------------------------------------------------

// ! Détection adresse mail temporaire
// TODO : Voir tp 


// Avec un split, vérifier après le @ s'il est dans la liste ou pas 

//-----------------------------------------------------

// ! Filtre


//-----------------------------------------------------
// ! Affiche formulaire 1 page : Slider

// Variables
const boutonsRight = document.querySelectorAll(".button-next");
const boutonsLeft = document.querySelectorAll(".button-before");
const photos = document.querySelector(".slider-content");
var position = 0;
var image = 0;
var compteur = 0;

// Événement 
boutonsRight.forEach(function (bouton) {
  bouton.addEventListener("click", decaleGauche);
})
boutonsLeft.forEach(function (bouton) {
  bouton.addEventListener("click", decaleDroite);
})

// Fonction de déplacement
function decaleGauche() {
  position -= 500
  image += 1
  photos.style.left = position + "px"
};

function decaleDroite() {
  position += 500
  image -= 1
  photos.style.left = position + "px"
};


// ----------------------------------------------------
// ! Choix de boissons dans le formulaire


// Variables
const formBoisson = document.querySelector(".form-boisson");
const boutonAdd = document.querySelector(".add-drink");
const boutonsRemove = document.querySelectorAll(".remove-drink");

boutonAdd.addEventListener("click", ajouterBoisson);


function ajouterBoisson() {
  // console.log("ajouter bouton");
  const boissonsDiv = document.getElementById('boissons');
  const nouvelleBoisson = document.createElement('div');
  nouvelleBoisson.classList.add('boisson-container');
  nouvelleBoisson.innerHTML = `
      <label>Boisson: <input type="text" name="boisson[]"></label>
      <label>Quantité: <input type="number" name="quantite[]" min="1"></label>
      <button type="button" class="remove-drink" >Retirer</button>
  `;
  boissonsDiv.appendChild(nouvelleBoisson);
  // Ajout de l'événement de retrait au nouveau bouton "Retirer"
  nouvelleBoisson.querySelector('.remove-drink').addEventListener('click', function() {
    retirerBoisson(this);
});
};


function retirerBoisson(button) {
  // console.log("retirer la boisson");
  const boissonContainer = button.closest('.boisson-container');
  if (boissonContainer) {
    boissonContainer.remove();
  }
};

// -------------------------------------------------------------------------------------------------------------------------

// Slider nouveauté

// Tri

// Affichage des infos de tri