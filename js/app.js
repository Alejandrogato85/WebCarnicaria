const logo = document.querySelector("#menu");
const navegacion = document.querySelector(".nav-li");

logo.addEventListener("click", () => {
    navegacion.classList.toggle("mostrar");
});