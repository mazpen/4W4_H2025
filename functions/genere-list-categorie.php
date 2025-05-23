<?php
/**
 * Génére une liste de sous-catégories
 * @param string $parent_slug Le slug de la catégorie parente
 */
function categories_liste($parent_slug){
    // Récupérer la catégorie parente à partir de son slug
    $parent_category = get_category_by_slug($parent_slug); 
    // Vérifier si la catégorie parente existe
    if ($parent_category) {
    $parent_id = $parent_category->term_id;
    // Récupérer les sous-catégories de "destination"
    $sous_categories = get_categories(array(
    'parent' => $parent_id, // Filtrer par le parent "destination"
    'hide_empty' => true, // Ne pas afficher les catégories vides
    ));
    // Vérifier s'il y a des sous-catégories
    if (!empty($sous_categories)) {
        echo '<ul class="categorie__ul">';
        foreach ($sous_categories as $categorie) {

             // Exclure la catégorie nommée "Populaire"
        if (strtolower($categorie->name) === 'populaire') continue;
         // Exclure la catégorie nommée "uncategorized"
         if (strtolower($categorie->name) === 'uncategorized') continue;

        // Afficher le nom de chaque sous-catégorie
            echo '<li  data-id="'.esc_html($categorie->term_id).'" class="categorie__ul__li">'.esc_html($categorie->name).'</li>';
        }
        echo '</ul>';
    } 
    }    
}

/**
 * Génére une liste de pays
 * @param string $parent_slug Le slug de la catégorie parente
 */


function genere_vague($couleur){?>
    <svg style="top:10px;" class="vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#91e4a0" fill-opacity="1" d="M0,256L120,218.7C240,181,480,107,720,101.3C960,96,1200,160,1320,192L1440,224L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
    
<?php }
//    <svg style="top:10px;" class="vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="<?= $couleur " fill-opacity="1" d="M0,96L120,106.7C240,117,480,139,720,133.3C960,128,1200,96,1320,80L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
