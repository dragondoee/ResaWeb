"use strict"

// * Sommaire : 

// 1. Vérification des infos du formulaire
// 2. Détection adresse mail temporaire
// 3. Affiche formulaire 1 page : Slider
// 4. Choix de boissons dans le formulaire
// 5. Filtre
// 6. Fonctionnalité Bonus


//-----------------------------------------------------

// ! Vérification des infos du formulaire

// Variable pour vérifier que les infos obligatoires sont données et correct avant de passé à la page suivante
var pageValide = 'False';

// User
const boutonUser = document.querySelector(".user")

boutonUser.addEventListener("click", function () {
  var nom = document.querySelector("#nom").value;
  var prenom = document.querySelector("#prenom").value;
  var mail = document.querySelector("#mail").value;
  if (nom == "" || prenom == "" || mail == "") {
    // TODO: À modifier ? : Si l'utilisateur met un espace ça fonctionne
    console.log("il manque un truc là");
    pageValide = 'False';
    console.log(prenom)
  } else {
    console.log("all good");
    manualVerifMail(mail)
    // verifMail(mail);
  }
});


// Réservation
// TODO : vérifier que les champs obligatoires ont été remplis

//-----------------------------------------------------

// ! Détection adresse mail temporaire

// Liste des nom de domaine d'adresse mail temporaire
var mailTempo = ["uooos.com", "doolk.com", "nthrw.com", "bbitq.com", "ckptr.com", "alldrys.com", "moabuild.com", "moongit.com", "20minutemail.it", "diolang.com", "aosod.com", "huleos.com", "sharklasers.com", "guerrillamail.info", "grr.la", "guerrillamail.biz", "guerrillamail.com", "guerrillamail.de", "guerrillamail.net", "guerrillamail.org", "guerrillamailblock.com", "pokemail.net", "spam4.me", "musiccode.me", "lyricspad.net", "citmo.net", "vusra.com", "gufum.com", "best-john-boats.com", "pirolsnet.com", "trickyfucm.com", "entipat.com", "smartinbox.online", "goonby.com", "plexfirm.com", "neixos.com", "10mail.org", "firste.ml", "zeroe.ml", "dropmail.me", "vintomaper.com", "labworld.org", "fillallin.com", "dockleafs.com", "mailsac.com", "mails.omvvim.edu.in", "onetimeusemail.com", "midiharmonica.com", "fthcapital.com", "yopmail.com", "crazymailing.com", "exbts.com", "wemel.site", "mybx.site", "emeil.top", "mywrld.top", "matra.top", "memsg.site", "mybx.site", "emailnax.com", "emailbbox.pro", "inboxbear.com", "getnada.com", "guysmail.com", "guysmail.com", "trashmail.fr", "trashmail.se", "my10minutemail.com"]

function manualVerifMail(mail) {
  // console.log("manuel Check")
  var positionArobase = mail.indexOf("@");
  var urlMail = mail.substring(positionArobase + 1, mail.length);
  // console.log(urlMail);
  // console.log(mailTempo);

  var i = 0;
  while (i < mailTempo.length) {
    if (urlMail == mailTempo[i]) {
      console.log(mailTempo[i]);
      console.log("mail pas valide")
      pageValide = 'False';
      // TODO : Mettre un message pour avertir l'utilisateur de la non conformité de l'adresse mail
    } else {
      pageValide = 'True';
    }
    i++;
  }
};



// Fonction pas 100% fiable 
// function verifMail(mail) {
// console.log(mail);
//   fetch("https://disposable.debounce.io/?email=" + mail).then(function (response) {
//     response.json().then(function (data) {
//       console.log("Réponse reçue : ");
//       console.log(data);
//     });
//   });
// };



//-----------------------------------------------------
// Affiche formulaire 1 page : Slider

// Variables
const boutonsNext = document.querySelectorAll(".button-next");
const boutonsBefore = document.querySelectorAll(".button-before");
const photos = document.querySelector(".slider-content");
var position = 0;
var image = 0;
var compteur = 0;

// Événement 
boutonsNext.forEach(function (bouton) {
  bouton.addEventListener("click", decaleGauche);
})
boutonsBefore.forEach(function (bouton) {
  bouton.addEventListener("click", decaleDroite);
})

// Fonction de déplacement
function decaleGauche() {
  if (pageValide == 'True') {
    position -= 500
    image += 1
    photos.style.left = position + "px"
  }

};

function decaleDroite() {
  position += 500
  image -= 1
  photos.style.left = position + "px"
};


// ----------------------------------------------------
// Choix de boissons dans le formulaire


// Variables
const formBoisson = document.querySelector(".form-boisson");
const boutonAdd = document.querySelector(".add-drink");
const boutonsRemove = document.querySelectorAll(".remove-drink");

boutonAdd.addEventListener("click", ajouterBoisson);


function ajouterBoisson() {
  // console.log("ajouter bouton");
  const boissonsDiv = document.getElementById('boissons');
  const nouvelleBoisson = document.createElement('div');
  const boisson1 = document.querySelector(".boisson");
  nouvelleBoisson.classList.add('boisson-container');
  nouvelleBoisson.innerHTML = boisson1.innerHTML + ` <button type="button" class="remove-drink" >Retirer</button>`;
  boissonsDiv.appendChild(nouvelleBoisson);
  // Ajout de l'événement de retrait au nouveau bouton "Retirer"
  nouvelleBoisson.querySelector('.remove-drink').addEventListener('click', function () {
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


//-----------------------------------------------------

// ! Filtre


// -------------------------------------------------------------------------------------------------------------------------

// BONUS

// Slider nouveauté

// Tri

// Affichage des infos de tri