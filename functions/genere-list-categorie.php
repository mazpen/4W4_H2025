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

$footer_couleur_bas = get_theme_mod('footer_couleur_arriere', '#ec880d');
$couleur_vague_pays = get_theme_mod('vague_pays_couleur', '#91e4a0');

//version vague generique haut
function genere_vague_Haut($couleur_vague_pays){?>
    <svg 
    style="top:10px;" class="vague" 
    xmlns="http://www.w3.org/2000/svg" 
    viewBox="0 0 1440 320">
    <path 
    fill="<?= $couleur_vague_pays ?>" 
    fill-opacity="1" 
    d="M0,96L48,117.3C96,139,192,181,288,202.7C384,224,480,224,576,197.3C672,171,768,117,864,80C960,43,1056,21,1152,53.3C1248,85,1344,171,1392,213.3L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
<?php
}

//version vague generique bas
function genere_vague_Bas($couleur){?>
<svg 
style="top:10px;" class="vague" 
xmlns="http://www.w3.org/2000/svg" 
viewBox="0 0 1440 320">
<path 
fill="<?= $couleur ?>"         
fill-opacity="1" 
d="M0,96L48,117.3C96,139,192,181,288,202.7C384,224,480,224,576,197.3C672,171,768,117,864,80C960,43,1056,21,1152,53.3C1248,85,1344,171,1392,213.3L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    
<?php }

//version vague footer haut
function vague_footer_Haut($footer_couleur_arriere){ ?>
<svg 
xmlns="http://www.w3.org/2000/svg" class="vague"
style="top:11px;"
viewBox="0 0 1440 320">
    <path fill="<?= $footer_couleur_arriere ?>" 
        fill-opacity="1" 
        d="M0,128L26.7,128C53.3,128,107,128,160,149.3C213.3,171,267,213,320,224C373.3,235,427,213,480,176C533.3,139,587,85,640,64C693.3,43,747,53,800,85.3C853.3,117,907,171,960,170.7C1013.3,171,1067,117,1120,117.3C1173.3,117,1227,171,1280,202.7C1333.3,235,1387,245,1413,250.7L1440,256L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
    </path>
</svg>

<?php }
//version vague footer bas
function vague_footer_Bas($couleur_vague_pays){ ?>
<svg 
xmlns="http://www.w3.org/2000/svg" 
class="vague"
style="top:-5px;"
viewBox="0 0 1440 320">
    <path 
        fill="<?= $couleur_vague_pays ?>" 
        fill-opacity="1" 
        d="M0,128L26.7,128C53.3,128,107,128,160,149.3C213.3,171,267,213,320,224C373.3,235,427,213,480,176C533.3,139,587,85,640,64C693.3,43,747,53,800,85.3C853.3,117,907,171,960,170.7C1013.3,171,1067,117,1120,117.3C1173.3,117,1227,171,1280,202.7C1333.3,235,1387,245,1413,250.7L1440,256L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z">
    </path>
</svg>

<?php }
