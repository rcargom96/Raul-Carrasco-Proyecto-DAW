const formAbrirBtn= document.querySelector("#form-open"),
formularios= document.querySelector(".formularios"),
formCont= document.querySelector(".form_cont"),
formCerrarBtn= document.querySelector(".form_cerrar"),
registroBtn= document.querySelector("#registro"),
inicioBtn= document.querySelector("#inicio");

formAbrirBtn.addEventListener("click", () => formularios.classList.add("show"))
formCerrarBtn.addEventListener("click", () => formularios.classList.remove("show"))


registroBtn.addEventListener("click", (e) => {e.preventDefault();
    formCont.classList.add("active");
});
inicioBtn.addEventListener("click", (e) => {e.preventDefault();
    formCont.classList.remove("active");
});