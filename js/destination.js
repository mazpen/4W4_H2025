(function(){
    console.log("vive Javascript")
    
        let categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
        
        const wrapper = document.querySelector("#api-wrapper");
        const method = wrapper.dataset.method;    // "search" ou "categories"
        const value = wrapper.dataset.value;


        const domaine = document.querySelector('base').href;
        const apiUrl = `${domaine}/wp-json/wp/v2/posts?${method}=${encodeURIComponent(value)}`;
        //const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
        console.log("URL API générée dynamiquement :", apiUrl);
        
        mon_fetch(apiUrl)
        
        // Gestion des clics sur les éléments de catégorie
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li")
        console.log("categorie__ul__li.length", categorie__ul__li.length)

        categorie__ul__li.forEach(li => {
            li.addEventListener("mousedown",function(){
               console.log(li.dataset.id) 
               categoryId = li.dataset.id
               const urlCategories = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
               console.log("urlCategories = ", urlCategories)
               mon_fetch(urlCategories)
            })
            
        })

        // Écoute des clics sur chaque bouton-pays
        document.querySelectorAll('.btn-pays').forEach(button => {
            button.addEventListener('click', () => {
                const pays = button.dataset.pays;
                const wrapper = document.querySelector('#api-wrapper');
                const method = wrapper.dataset.method; // déjà "search"

                // Met à jour dynamiquement data-value
                wrapper.dataset.value = pays;

                // Reconstruit l'URL et appelle mon_fetch
                const domaine = window.location.origin + "/4w4-h2025";
                const apiUrl = `${domaine}/wp-json/wp/v2/posts?${method}=${encodeURIComponent(pays)}`;
                console.log("Nouvelle URL appelée :", apiUrl);

                mon_fetch(apiUrl); // Recharge les destinations
            });
        });


        // Fonction pour charger et afficher les articles
        function mon_fetch(apiUrl)
        {
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Sélectionne la liste où afficher les destinations
                const destinationList = document.querySelector('.destination__list');
                // Vide la liste existante
                destinationList.innerHTML = ""
                // Boucle sur les articles reçus
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