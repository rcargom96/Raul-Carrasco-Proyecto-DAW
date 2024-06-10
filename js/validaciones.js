document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('.form-register');

    form.addEventListener('submit', function(event) {
        const email = form.querySelector('input[name="email"]');
        const password = form.querySelector('input[name="contrasena"]');
        const username = form.querySelector('input[name="nombre_usuario"]');
        const phone = form.querySelector('input[name="telefono"]');

        let errors = [];

        // Validar que el campo de correo electrónico no esté vacío y sea válido
        if (email.value === '') {
            errors.push('Por favor, ingresa un correo electrónico.');
        } else if (!isValidEmail(email.value)) {
            errors.push('Por favor, ingresa un correo electrónico válido.');
        }

        // Validar que el campo de contraseña no esté vacío
        if (password.value === '') {
            errors.push('Por favor, ingresa una contraseña.');
        }

        // Validar que el campo de nombre de usuario no esté vacío
        if (username.value === '') {
            errors.push('Por favor, ingresa un nombre de usuario.');
        }

        // Validar que el campo de teléfono no esté vacío y contenga solo números
        if (phone.value === '') {
            errors.push('Por favor, ingresa un número de teléfono.');
        } else if (!/^\d+$/.test(phone.value)) {
            errors.push('El número de teléfono solo puede contener números.');
        }

        if (errors.length > 0) {
            event.preventDefault(); // Evitar que el formulario se envíe
            alert(errors.join('\n')); // Mostrar mensajes de error
        }
    });

    // Función para validar el formato de correo electrónico
    function isValidEmail(email) {
        // Utilizando una expresión regular simple para verificar el formato de correo electrónico
        return /\S+@\S+\.\S+/.test(email);
    }
});
