
//-----------------------------------------------------

// ! Détection adresse mail temporaire
// TODO : Voir tp 

//-----------------------------------------------------

// ! Filtre


//-----------------------------------------------------

// ! Choix de boissons dans le formulaire


//-----------------------------------------------------

// FORMULAIRE 1 page
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
        

      });
    });
    
// -------------------------------------------------------------------------------------------------------------------------

// Slider nouveauté

// Tri

// Affichage des infos de tri