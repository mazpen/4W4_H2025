<?php
    $footer_mission = get_theme_mod('footer_mission', 'Default Title');
    $footer_couleur_arriere = get_theme_mod('footer_couleur_arriere', '#ec880d');
    /* permet d'afficher une avant le footer */
    vague($footer_couleur_arriere)
?>

<footer style="background-color: <?= $footer_couleur_arriere ?> ">
    
    <div class="piedpage global">
        <section class="piedpage__s1">
         
                <?php wp_nav_menu(array(
                    "menu"=> "externe",
                    "container" => "nav",
                    "container_class" => "piedpage__s1__externe"
                )); ?>
    

            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facere porro veniam vitae, tempore corporis omnis nam 
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>
            </div>
            <div class="piedpage__s1__description">
                <?php echo $footer_mission; ?>
            </div>
        </section>
        <section class="piedpage__s2"></section>


    </div>
</footer>
<?php wp_footer() ?>