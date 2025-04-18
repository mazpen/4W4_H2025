(function(){
    console.log ("carrousel.js")
    
    lethero__radio__input = document.querySelectorAll(".hero__radio__input")
    console.log("hero__radio__input.length =", hero__radio__input.length);

    hero__radio__input.forEach(element => {
        console.log("element.dataset.id_carrousel =",element.dataset.id_carrousel)
    });
    
    // Fonction pour mettre à jour l'affichage du carrousel
    function updateCarrousel(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove("hero__carrousel--active");
            if (i === index) {
                slide.classList.add("hero__carrousel--active");
                radios[i].checked = true;
            }
        });
        currentIndex = index;
    }

    // Sélection des éléments du carrousel au bouton radio
    radios.forEach((radio, index) => {
        radio.addEventListener("change", () => {
            updateCarrousel(index);
        });
    });

    // Lancement automatique toutes les 5 secondes
    setInterval(() => {
        let nextIndex = (currentIndex + 1) % slides.length;
        updateCarrousel(nextIndex);
    }, 5000);

    // Initialisation
    updateCarrousel(0);

})()