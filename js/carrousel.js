(function(){
    console.log ("carrousel.js")
    
    lethero__radio__input = document.querySelectorAll(".hero__radio__input")
    console.log("lethero__radio__input.length =", hero__radio__input.length);

    hero__radio__input.forEach(element => {
        console.log("element.dataset.id_carrousel =",element.dataset.id_carrousel)
    });
    
    })()