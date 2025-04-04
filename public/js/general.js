document.addEventListener("DOMContentLoaded", () => {
    // Función para manejar el registro
    const manejarRegistro = (formulario, tipoUsuario) => {
        formulario.addEventListener("submit", (event) => {
            event.preventDefault(); // Evitar recargar la página

            // Obtener valores de los campos del formulario
            const nombre = formulario.querySelector(`#nombre${tipoUsuario.charAt(0).toUpperCase() + tipoUsuario.slice(1)}`)?.value || "";
            const apellido = formulario.querySelector(`#apellido${tipoUsuario.charAt(0).toUpperCase() + tipoUsuario.slice(1)}`)?.value || "";
            const telefono = formulario.querySelector(`#telefono${tipoUsuario.charAt(0).toUpperCase() + tipoUsuario.slice(1)}`)?.value || "";
            const correo = formulario.querySelector(`#correo${tipoUsuario.charAt(0).toUpperCase() + tipoUsuario.slice(1)}`)?.value || "";
            const password = formulario.querySelector(`#password${tipoUsuario.charAt(0).toUpperCase() + tipoUsuario.slice(1)}`)?.value || "";

            if (!correo || !password) {
                alert("Por favor, completa todos los campos obligatorios.");
                return;
            }

            // Crear objeto del usuario
            const usuario = { tipo: tipoUsuario, nombre, apellido, telefono, correo, password };

            // Guardar en localStorage
            let usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];
            usuarios.push(usuario);
            localStorage.setItem("usuarios", JSON.stringify(usuarios));

            // Mostrar mensaje de confirmación
            alert("Información guardada correctamente.");
            formulario.reset();

            // Redirigir al inicio de sesión correspondiente
            if (tipoUsuario === "cliente") {
                window.location.href = "../vistas registros/html/indexdos.html";
            } else if (tipoUsuario === "fundacion") {
                window.location.href = "../vistas registros/RFormuFundacion.html";
            } else if (tipoUsuario === "vendedor") {
                window.location.href = "../vistas registros/html/index.html";
            }
        });
    };

    // Función para manejar el inicio de sesión
    const manejarInicioSesion = (formulario, tipoUsuario) => {
        formulario.addEventListener("submit", (event) => {
            event.preventDefault(); // Evitar recargar la página

            // Obtener valores de los campos del formulario
            const correo = formulario.querySelector(`#correoInicio${tipoUsuario.charAt(0).toUpperCase() + tipoUsuario.slice(1)}`)?.value;
            const password = formulario.querySelector(`#passwordInicio${tipoUsuario.charAt(0).toUpperCase() + tipoUsuario.slice(1)}`)?.value;

            if (!correo || !password) {
                alert("Por favor, completa todos los campos.");
                return;
            }

            // Verificar los datos contra los guardados en localStorage
            const usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];
            const usuarioValido = usuarios.find(
                (usuario) => usuario.tipo === tipoUsuario && usuario.correo === correo && usuario.password === password
            );

            if (usuarioValido) {
                alert(`¡Inicio de sesión exitoso como ${tipoUsuario}!`);
                // Redirigir a la página específica según el tipo de usuario
                if (tipoUsuario === "fundacion") {
                    window.location.href = "../vistas registros/RFormuFundacion.html";
                } else if (tipoUsuario === "cliente") {
                    window.location.href = "../vistas registros/html/indexdos.html";
                } else if (tipoUsuario === "vendedor") {
                    window.location.href = "../vistas registros/DashboardVende.html";
                }
            } else {
                alert("Correo o contraseña incorrectos.");
            }
        });
    };

    

    // Selección y manejo de formularios según la página actual
    const formularioRegistro = document.querySelector("#formCliente, #formFundacion, #formVendedor");
    const formularioLogin = document.querySelector("#loginCliente, #loginFundacion, #loginVendedor");
    const formularioRecuperarPassword = document.querySelector("#recuperarPasswordCliente, #recuperarPasswordFundacion, #recuperarPasswordVendedor");

    if (formularioRegistro) {
        const tipoUsuario = formularioRegistro.getAttribute("data-tipo");
        manejarRegistro(formularioRegistro, tipoUsuario);
    }

    if (formularioLogin) {
        const tipoUsuario = formularioLogin.getAttribute("data-tipo");
        manejarInicioSesion(formularioLogin, tipoUsuario);
    }

    if (formularioRecuperarPassword) {
        const tipoUsuario = formularioRecuperarPassword.getAttribute("data-tipo");
        manejarRecuperarPassword(formularioRecuperarPassword, tipoUsuario);
    }
});