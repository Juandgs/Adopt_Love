document.addEventListener("DOMContentLoaded", () => {
    const formInfoFundacion = document.getElementById("formInfoFundacion");
    
    formInfoFundacion.addEventListener("submit", (event) => {
        event.preventDefault();
        
        // Obtener todos los valores del formulario
        const infoFundacion = {
            nombreFundacion: document.getElementById("nombreFundacion").value,
            telefono: document.getElementById("telefonoFundacion").value,
            correo: document.getElementById("correoFundacion").value,
            direccion: document.getElementById("direccionFundacion").value,
            ciudad: document.getElementById("ciudadFundacion").value,
            descripcion: document.getElementById("descripcionFundacion").value,
            redesSociales: document.getElementById("redesSocialesFundacion").value
        };
        
        // Guardar en localStorage
        let fundaciones = JSON.parse(localStorage.getItem("fundaciones")) || [];
        fundaciones.push(infoFundacion);
        localStorage.setItem("fundaciones", JSON.stringify(fundaciones));
        
        // Redirigir al CRUD - CORRECCIÓN AQUÍ
        // Usa una ruta relativa correcta según tu estructura de carpetas
        window.location.href = "../vistas registros/CRUDFunda.html";
        
        // Alternativa si la anterior no funciona:
        // window.location.href = "CRUDFunda.html";
        // o
        // window.location.href = "./CRUDFunda.html";
    });
});