// Función para cambiar las secciones al hacer clic en el menú lateral
const links = document.querySelectorAll("#menuLateral a");
const sections = document.querySelectorAll("section");

links.forEach(link => {
  link.addEventListener("click", function(e) {
    e.preventDefault();
    
    // Remover la clase 'd-none' de todas las secciones y agregarla a las que no sean seleccionadas
    const target = link.getAttribute("data-target");
    
    sections.forEach(section => {
      if (section.id === target) {
        section.classList.remove("d-none");
      } else {
        section.classList.add("d-none");
      }
    });

    // Resaltar el ítem seleccionado
    links.forEach(l => l.classList.remove("active"));
    link.classList.add("active");
  });
});

// Inicialización de los gráficos
const grafico1 = new Chart(document.getElementById("grafico1"), {
  type: 'bar',
  data: {
    labels: ['Tiendas', 'Fundaciones'],
    datasets: [{
      label: 'Cantidad Registrada',
      data: [5, 3],
      backgroundColor: ['#ff6384', '#36a2eb']
    }]
  }
});

const grafico3 = new Chart(document.getElementById("grafico3"), {
  type: 'line',
  data: {
    labels: ['Enero', 'Febrero', 'Marzo', 'Abril'],
    datasets: [{
      label: 'Pagos Mensuales',
      data: [100, 150, 200, 250],
      borderColor: '#ff6384',
      fill: false
    }]
  }
});

// Función para cerrar sesión
document.getElementById('logoutBtn').addEventListener('click', function(e) {
  e.preventDefault();
  ['userToken', 'userData', 'cartItems'].forEach(item => localStorage.removeItem(item));
  sessionStorage.clear();
  window.location.href = '../Proyecto/login.html';
});

let grafico2; // Declarar fuera

document.addEventListener("DOMContentLoaded", function () {
  const elemento = document.getElementById('datos');
  const datos = JSON.parse(elemento.dataset.conteo);
  const etiquetas = Object.keys(datos);
  const valores = Object.values(datos);

  const ctx = document.getElementById("grafico2").getContext("2d");

  grafico2 = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: etiquetas,
      datasets: [{
        label: 'Productos Disponibles',
        data: valores,
        backgroundColor: ['#00405d', '#6f0f00', '#29005d', '#6f0f00']
      }]
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
    const elemento = document.getElementById('datosA');
    const datos = JSON.parse(elemento.dataset.conteo);
    const etiquetas = Object.keys(datos);
    const valores = Object.values(datos);
  
    const ctx = document.getElementById("grafico2").getContext("2d");
  
    grafico2 = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: etiquetas,
        datasets: [{
          label: 'Productos Disponibles',
          data: valores,
          backgroundColor: ['#00405d', '#6f0f00', '#29005d', '#6f0f00']
        }]
      }
    });
  });
  
  