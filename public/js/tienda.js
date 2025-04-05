document.addEventListener("DOMContentLoaded", () => {
    const cartItems = [];
    const cartItemsElement = document.getElementById("cart-items");
    const cartTotalElement = document.getElementById("cart-total");
    const cartCountElement = document.getElementById("cart-count");
    

    // Agregar producto al carrito
    document.querySelectorAll(".add-to-cart").forEach(button => {
        button.addEventListener("click", () => {
            const product = button.getAttribute("data-product");
            const price = parseInt(button.getAttribute("data-price"));
            const image = button.getAttribute("data-image");
            const store = button.getAttribute("data-store");
            const whatsapp = button.getAttribute("data-whatsapp"); // Asegúrate de tener este atributo en tus botones

            cartItems.push({ product, price, image, store, whatsapp });
            updateCart();
        });
    });

    // Actualizar carrito
    function updateCart() {
        cartItemsElement.innerHTML = "";
        let total = 0;

        cartItems.forEach((item, index) => {
            total += item.price;

            const li = document.createElement("li");
            li.innerHTML = `
                <img src="${item.image}" alt="${item.product}" />
                <div>
                    <p>${item.product}</p>
                    <p>Tienda: ${item.store}</p>
                    <p>$${item.price.toLocaleString()}</p>
                </div>
                <div class="cart-item-buttons">
                    <button class="buy-now" data-index="${index}">Compra Directa</button>
                    <button class="remove-item" data-index="${index}">Eliminar</button>
                </div>
            `;
            
            // Botón Eliminar
            li.querySelector(".remove-item").addEventListener("click", () => {
                cartItems.splice(index, 1);
                updateCart();
            });

            // Botón Compra Directa (WhatsApp)
            li.querySelector(".buy-now").addEventListener("click", () => {
                const message = `¡Hola ${item.store}! Estoy interesado en comprar:
                
📌 *Producto:* ${item.product}
💰 *Precio:* $${item.price.toLocaleString()}
🏪 *Tienda:* ${item.store}

Por favor indíqueme disponibilidad y proceso de pago. ¡Gracias!`;

                window.open(`https://wa.me/${item.whatsapp}?text=${encodeURIComponent(message)}`, '_blank');
            });

            cartItemsElement.appendChild(li);
        });

        // Actualizar total y contador
        cartTotalElement.textContent = `$${total.toLocaleString()}`;
        cartCountElement.textContent = cartItems.length;
    }

    // Función para mostrar el modal del carrito
    document.getElementById("cart-icon").addEventListener("click", () => {
        document.getElementById("cart-modal").style.display = "block";
    });

    // Función para cerrar el modal del carrito
    document.getElementById("close-cart").addEventListener("click", () => {
        document.getElementById("cart-modal").style.display = "none";
    });
});