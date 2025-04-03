(function(){
    console.log("vive javascript")


        const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
        const domaine = window.location.href;
        let apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
        //const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
        console.log("categorie__ul__li",categorie__ul__li);
        categorie__ul__li.forEach(li => {

            li.addEventListener('click', function(){
            console.log(li.dataset.id);
            categoryId = li.dataset.id;
            apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${li.dataset.id}`;
            })
        })
    
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.innerHTML = `
                        <h3>${article.title.rendered}</h3>
                        <div>${article.excerpt.rendered}</div>
                        <a href="${article.link}">Lire plus</a>
                    `;
                    destinationList .appendChild(articleElement);
                });/**
                *  Script js permettant d'extraite des destinations de voyage
                */
               (function(){
                   console.log("destination.js")
                   const categoryId = 3; // Remplacez par l'ID de la catégorie souhaitée
                   const domaine = window.location.href
                   const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
                   console.log(apiUrl)
               function parcourrir_bouton(){
                   const categorie__ul__li = document.querySelectorAll(".categorie__ul__li")
                   categorie__ul__li.forEach(elm => {
                       
                   })
               }
               
               
                   fetch(apiUrl)
                       .then(response => response.json())
                       .then(data => {
                           const destinationList = document.querySelector('.destination__list');
                           data.forEach(article => {
                               const articleElement = document.createElement('div');
                               console.log(article.title.rendered)
                               // <div>${article.excerpt.rendered}</div>
                               articleElement.innerHTML = `
                                   <h3>${article.title.rendered}</h3>
               
                                   <a href="${article.link}">Lire plus</a>
                               `;
                               destinationList .appendChild(articleElement);
                           });
                       })
                       .catch(error => console.error('Erreur lors de la récupération des articles:', error));
                   })()
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));


}); //()