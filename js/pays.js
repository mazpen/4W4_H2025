(function(){
    console.log("vive Javascript")
    
        let paysID = 3; // Remplacez par l'ID de la catégorie souhaitée
        //const domaine = "http://localhost/4w4-gr1"
        const domaine = window.location.href
        //const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${paysID}`;
        let apiUrl =  `${domaine}wp-json/wp/v2/posts?pays=${paysID}`;
        const pays__ul__li = document.querySelectorAll(".pays__ul__li")
        console.log("pays__ul__li.length", pay1__ul__li.length)
        mon_fetch(apiUrl)
        pays1__ul__li.forEach(li => {
            li.addEventListener("mousedown",function(){
               console.log(li.dataset.id) 
               paysID = li.dataset.id
               apiUrl = `${domaine}wp-json/wp/v2/posts?pays=${paysID}`;
               console.log("apiUrl = ", apiUrl)
               mon_fetch(apiUrl)
            })
            
        })

        function mon_fetch(apiUrl)
        {
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                //  <div>${article.excerpt.rendered}</div>
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = ""
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.innerHTML = `
                        <h3 class="destination__titre">${article.title.rendered}</h3>
                        <div class="destination__description">
                            <p>${article.excerpt.rendered}</p>
                        </div>
                        <a href="${article.link}">Lire plus</a>
                    `;

                    // Ajoute l'événement pour l'accordéon
                    const titre = articleElement.querySelector('.destination__titre');
                    const description = articleElement.querySelector('.destination__description');

                    titre.addEventListener('click', function () {
                        description.classList.toggle('open');
                    });

                    destinationList .appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
        }

})()