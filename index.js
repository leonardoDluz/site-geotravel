const popUp = document.querySelector("#pop-up");

const botaoCaprichoso = document.querySelector("#caprichoso");
const botaoGarantido = document.querySelector("#garantido");
const botaoFechar = document.querySelector("#fechar");

botaoCaprichoso.addEventListener('click', () => popUpVoto('caprichoso'));
botaoGarantido.addEventListener('click', () => popUpVoto('garantido'));
botaoFechar.addEventListener('click', () => fecharPopUpVoto());


function popUpVoto(voto) {
    const InputVoto = document.querySelector("#voto");

    popUp.style.display = "flex";
    InputVoto.value = voto;
}

function fecharPopUpVoto() {
    popUp.style.display = "none";
}