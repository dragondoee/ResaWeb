
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
