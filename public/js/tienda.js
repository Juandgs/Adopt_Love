document.addEventListener("DOMContentLoaded", function() {
    // 1. Variables esenciales
    const cartItems = [];
    const cartModal = document.getElementById("cart-modal");
    const cartItemsElement = document.getElementById("cart-items");
    const cartTotalElement = document.getElementById("cart-total");
    const cartCountElement = document.getElementById("cart-count");
    
    // 2. Función mejorada para identificar productos únicos
    function getProductUniqueId(product, store, price, image) {
        return `${product}-${store}-${price}-${image}`.toLowerCase()
            .replace(/\s+/g, '-')
            .replace(/[^\w-]/g, '');
    }

    // 3. Configuración precisa de botones (versión corregida)
    function setupCartButtons() {
        document.querySelectorAll(".add-to-cart").forEach(button => {
            // Obtener datos exactos del producto
            const product = button.getAttribute("data-product");
            const store = button.getAttribute("data-store");
            const price = button.getAttribute("data-price");
            const image = button.getAttribute("data-image");
            const productId = getProductUniqueId(product, store, price, image);
            
            // Verificar estado actual
            const isInCart = cartItems.some(item => item.id === productId);
            
            // Configurar estado visual
            button.disabled = isInCart;
            button.textContent = isInCart ? "✔ En carrito" : "Agregar al Carrito";
            button.style.backgroundColor = isInCart ? "#4CAF50" : "";
            
            // Solo agregar evento si no está en el carrito
            if (!isInCart) {
                button.addEventListener("click", function() {
                    const whatsapp = this.getAttribute("data-whatsapp");
                    
                    // Validación final antes de agregar
                    if (!cartItems.some(item => item.id === productId)) {
                        cartItems.push({
                            id: productId,
                            product,
                            price: parseInt(price),
                            image,
                            store,
                            whatsapp
                        });
                        
                        // Actualizar interfaz
                        this.disabled = true;
                        this.textContent = "✔ En carrito";
                        this.style.backgroundColor = "#4CAF50";
                        updateCart();
                    }
                });
            }
        });
    }

    // 4. Actualización del carrito (versión definitiva)
    function updateCart() {
        cartItemsElement.innerHTML = "";
        let total = 0;

        cartItems.forEach(item => {
            total += item.price;
            
            const li = document.createElement("li");
            li.className = "cart-item";
            li.innerHTML = `
                <img src="${item.image}" alt="${item.product}" class="cart-item-img" />
                <div class="cart-item-info">
                    <h4>${item.product}</h4>
                    <p>Tienda: ${item.store}</p>
                    <p>Precio: $${item.price.toLocaleString()}</p>
                </div>
                <div class="cart-item-actions">
                    <button class="cart-btn buy-now" data-id="${item.id}">Comprar</button>
                    <button class="cart-btn remove" data-id="${item.id}">Eliminar</button>
                </div>
            `;
            
            // Eliminar producto exacto
            li.querySelector(".remove").addEventListener("click", function() {
                const itemId = this.getAttribute("data-id");
                const index = cartItems.findIndex(item => item.id === itemId);
                if (index !== -1) {
                    cartItems.splice(index, 1);
                    updateCart();
                    setupCartButtons(); // Actualizar todos los botones
                }
            });
            
            // Compra directa
            li.querySelector(".buy-now").addEventListener("click", function() {
                const item = cartItems.find(item => item.id === this.getAttribute("data-id"));
                if (item) {
                    const message = `¡Hola ${item.store}! Quiero comprar:\n\n` +
                                `📌 Producto: ${item.product}\n` +
                                `💰 Precio: $${item.price.toLocaleString()}\n` +
                                `🏪 Tienda: ${item.store}\n\n` +
                                `Por favor indíqueme cómo proceder. ¡Gracias!`;
                    window.open(`https://wa.me/${item.whatsapp}?text=${encodeURIComponent(message)}`, '_blank');
                }
            });
            
            cartItemsElement.appendChild(li);
        });

        // Actualizar totales
        cartTotalElement.textContent = `$${total.toLocaleString()}`;
        cartCountElement.textContent = cartItems.length;
    }

    // 5. Filtrado de productos (versión definitiva)
    function filterProducts(category) {
        document.querySelectorAll('.product-item').forEach(item => {
            item.style.display = (!category || item.dataset.category === category) 
                ? 'block' 
                : 'none';
        });
        
        // Esperar a que se actualice el DOM
        setTimeout(setupCartButtons, 10);
    }

    // 6. Eventos principales (configuración robusta)
    document.getElementById("product-category")?.addEventListener("change", function() {
        filterProducts(this.value);
    });

    document.getElementById("cart-icon")?.addEventListener("click", function(e) {
        e.preventDefault();
        cartModal.style.display = "block";
    });

    document.getElementById("close-cart")?.addEventListener("click", function() {
        cartModal.style.display = "none";
    });

    // Cerrar al hacer clic fuera del modal
    window.addEventListener('click', function(e) {
        if (e.target === cartModal) {
            cartModal.style.display = "none";
        }
    });

    // Inicialización final
    filterProducts('');
    setupCartButtons();
    updateCart();
});
