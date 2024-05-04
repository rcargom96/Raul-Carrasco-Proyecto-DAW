const formOpenBtn= document.querySelector("#form-open"),
formularios= document.querySelector(".formularios"),
formContainer= document.querySelector(".form_container"),
formCloseBtn= document.querySelector(".form_close"),
signupBtn= document.querySelector("#signup"),
loginBtn= document.querySelector("#login");

formOpenBtn.addEventListener("click", () => formularios.classList.add("show"))
formCloseBtn.addEventListener("click", () => formularios.classList.remove("show"))


signupBtn.addEventListener("click", (e) => {e.preventDefault();
    formContainer.classList.add("active");
});
loginBtn.addEventListener("click", (e) => {e.preventDefault();
    formContainer.classList.remove("active");
});