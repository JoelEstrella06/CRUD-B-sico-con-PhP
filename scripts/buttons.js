const buttonAdd = document.getElementById("add");
const modal = document.getElementById("modal");
const btnClose = document.getElementById("btn__close");

buttonAdd.addEventListener("click",function() {
    modal.classList.toggle("oculto");
});

btnClose.addEventListener("click",function() {
    modal.classList.toggle("oculto");
});