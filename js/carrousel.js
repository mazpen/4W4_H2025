(function () {
    console.log("carrousel.js chargé");

    const radios = document.querySelectorAll(".hero__radio__input"); 
    const slides = document.querySelectorAll(".hero__carrousel");    
    let currentIndex = 0; 

    // Fonction pour mettre à jour l'affichage du carrousel
    function updateCarrousel(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove("hero__carrousel--active");

            if (i === index) {
                slide.classList.add("hero__carrousel--active");
                radios[i].checked = true;
            }
        });

        // Met à jour l'index courant
        currentIndex = index;
    }

    // Ajoute un événement à chaque bouton radio
    radios.forEach((radio, index) => {
        radio.addEventListener("change", () => {
            updateCarrousel(index); 
        });
    });

    // Animation automatique toutes les 5 secondes (1 point)
    setInterval(() => {
        const nextIndex = (currentIndex + 1) % slides.length; 
        updateCarrousel(nextIndex);
    }, 5000);

    // Démarre sur la première image au chargement
    updateCarrousel(0);
})();