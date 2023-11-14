//Pop Up
let caprichoso = document.querySelector(".caprichoso");
let garantido = document.querySelector(".garantido");

function voto(voto) {
    if(voto == "caprichoso"){
        caprichoso.style.display = "flex";
    }else if(voto == "garantido"){
        garantido.style.display = "flex";
    }else if(voto == "Xcaprichoso"){
        caprichoso.style.display = "none";
    }else if(voto == "Xgarantido"){
        garantido.style.display = "none";
    }
}