document.addEventListener("DOMContentLoaded", function() {
    // Elementos del DOM
    const modal = document.getElementById('animalModal');
    const animalImage = document.getElementById('animalImage');
    const animalMessage = document.getElementById('animalMessage');
    const whatsappButton = document.getElementById('whatsappButton');
    const closeButton = document.getElementById('closeModal');
    
    // Variable para almacenar datos del animal actual
    let currentAnimal = {};
    
    // Configurar todos los botones de adopción
    const adoptButtons = document.querySelectorAll('.adopt-button');
    adoptButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Obtener datos del animal desde los atributos data
            currentAnimal = {
                image: this.getAttribute('data-image'),
                message: this.getAttribute('data-message'),
                name: this.getAttribute('data-name'),
                age: this.getAttribute('data-age'),
                whatsapp: this.getAttribute('data-whatsapp')
            };
            
            // Mostrar datos en el modal
            animalImage.src = currentAnimal.image;
            animalMessage.textContent = currentAnimal.message;
            
            // Mostrar modal
            modal.style.display = 'block';
        });
    });
    
    // Configurar botón de WhatsApp
    whatsappButton.addEventListener('click', function() {
        if(currentAnimal.whatsapp) {
            const message = `¡Hola! Estoy interesado en adoptar a ${currentAnimal.name} (${currentAnimal.age}).
            
${currentAnimal.message}

Por favor indíqueme los requisitos. ¡Gracias!`;
            
            window.open(`https://wa.me/${currentAnimal.whatsapp}?text=${encodeURIComponent(message)}`, '_blank');
        } else {
            alert('Por favor selecciona un animal primero');
        }
    });
    
    // Cerrar modal
    closeButton.addEventListener('click', function() {
        modal.style.display = 'none';
    });
    
    // Cerrar al hacer clic fuera del modal
    window.addEventListener('click', function(event) {
        if(event.target === modal) {
            modal.style.display = 'none';
        }
    });
    // ========== Código para el botón flotante de donaciones ==========
    const whatsappDonation = document.querySelector('.whatsapp-donation-icon');
    
    whatsappDonation.addEventListener('click', function() {
        const whatsappNumber = this.getAttribute('data-whatsapp');
        const message = `¡Hola! Estoy interesado en hacer una donación. ¿Podrían indicarme cómo puedo ayudar?`;
        
        window.open(`https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`, '_blank');
    });
});
