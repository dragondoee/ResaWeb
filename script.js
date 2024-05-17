
var boutonRight=document.querySelector(".js-nav-right");
var boutonLeft=document.querySelector(".js-nav-left");
var photos=document.querySelector(".js-photos");
var position=-600;
var image=1;
var compteur=1;
photos.style.left="-600px";

boutonRight.addEventListener("click",decaleGauche);
boutonLeft.addEventListener("click",decaleDroite);

document.querySelectorAll(".js-photo").forEach(function (elem){
    compteur++;
})

function retourDebut(){
    photos.style.transition="left 1s ease";
    position=-600;
    image=1;
    photos.style.left="-600px";
}

function retourFin(){
    photos.style.transition="left 1s ease";
    image=compteur-3;
    position=-600*image;
    photos.style.left=position+"px";
}

function retourDebutClone(){
    photos.style.transition="none";
    image=0;
    position=-600*image;
    photos.style.left=position+"px";
    setTimeout(retourDebut,1);
};

function retourFinClone(){
    photos.style.transition="none";
    image=compteur-2;
    position=-600*image;
    photos.style.left=position+"px";
    setTimeout(retourFin,1);
};

//-----------------------------------------------------

function decaleGauche(){
    if (image<compteur-3){
    position-=600;
    image+=1;
    photos.style.left= position+"px";
    } else {
        retourDebutClone();
    }
};

function decaleDroite(){
    if (image>1){
    position+=600;
    image-=1;
    photos.style.left= position+"px";
    } else {
        retourFinClone();
    }
};

// setInterval(decaleGauche,7000)

//-----------------------------------------------------

// FORMULAIRE
// ! Modifier et adapter le code pour faire le formulaire

    // Ajouter la classe "cache" à toutes les pages

    var pages = document.querySelectorAll(".cache");
    pages.forEach(function (page) {
      page.classList.add("cache");
    });

    // Pour changer de page

    // Afficher les différentes pages
    var navigation = document.querySelectorAll("nav li");
    navigation.forEach(function (bouton) {
      bouton.addEventListener("click", function () {

        // récupérer la classe de la page à afficher
        var pageClass = bouton.getAttribute("class");

        // Masquer toutes les pages
        pages.forEach(function (page) {
          page.classList.add("cache");
        });

        // Afficher la page sélectionnée
        var pageAffichage = document.querySelector("#" + pageClass);
        pageAffichage.classList.remove("cache");
        
        // Afficher le rond
        if(document.querySelector("#" + pageClass+" .circleBottom")<document.querySelector("main")){
        document.querySelector("#" + pageClass+" .circleBottom").classList.remove("cache");
        };

      });
    });
    
// -------------------------------------------------------------------------------------------------------------------------

// ! A faire : Bouton précédent et suivant
// Bouton Découvrir

// Pour passer de la page d'accueil aux différentes pages du portrait chinois

var boutonDecouvrir = document.querySelector("#decouvrir");
boutonDecouvrir.addEventListener("click", function () {
  // récupérer la classe de la page à afficher
  var pageClass = boutonDecouvrir.getAttribute("class");
  
  // Masquer la page header
  document.querySelector("header").classList.add("cache");

  // Afficher la page et la barre de navigation
  var pageDebut = document.querySelector("#" + pageClass);
  pageDebut.classList.remove("cache");
  document.querySelector("#" + pageClass+" .circleBottom").classList.remove("cache");

  var Nav = document.querySelector("nav");
  Nav.classList.remove("cache");
  Nav.classList.add("visible");

  // Afficher le bouton retour à l'accueil
  document.querySelector(".maison").classList.remove("cache");
  document.querySelector(".maison").classList.add("visible");

});
