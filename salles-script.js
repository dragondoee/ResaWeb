



// Filtre salle

let salles=document.querySelectorAll(".salle");
let salleData = [];

let filtre="";

document.querySelector("#filtrer").addEventListener("click",function(){
    salles.forEach(function(salle){
    filtre=document.querySelector("#filtre").value
    console.log(filtre)
    if(filtre=="0"){
        salle.style.display="block"
    } else if(salle.dataset["ambiance"]!==filtre){
        salle.style.display="none"
    }  else {
        salle.style.display="block"
    }
});
})



 