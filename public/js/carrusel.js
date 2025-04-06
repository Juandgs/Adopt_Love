document.addEventListener("DOMContentLoaded", () => {
    const track = document.getElementById("track");
    const prevButton = document.getElementById("button-prev");
    const nextButton = document.getElementById("button-next");
    const slides = document.querySelectorAll(".carrusel");
    const slideWidth = slides[0].offsetWidth;

    let currentPosition = 0;

    // Carrusel - Botón Anterior
    prevButton.addEventListener("click", () => {
        if (currentPosition < 0) {
            currentPosition += slideWidth;
            track.style.transform = `translateX(${currentPosition}px)`;
        }
    });

    // Carrusel - Botón Siguiente
    nextButton.addEventListener("click", () => {
        if (currentPosition > -(slideWidth * (slides.length - 1))) {
            currentPosition -= slideWidth;
            track.style.transform = `translateX(${currentPosition}px)`;
        }
    });

    // Modal
    const modal = document.getElementById("modal");
    const modalImage = document.getElementById("modalImage");
    const closeBtn = document.querySelector(".close");

    slides.forEach((slide) => {
        slide.addEventListener("click", (e) => {
            e.preventDefault();
            modal.style.display = "flex";
            modalImage.src = e.target.src;
        });
    });

    closeBtn.addEventListener("click", () => {
        modal.style.display = "none";
    });

    modal.addEventListener("click", (e) => {
        if (e.target !== modalImage) {
            modal.style.display = "none";
        }
    });
});