<?php
    $footer_mission = get_theme_mod('footer_mission', 'Default Title');
    $footer_adresse = get_theme_mod('footer_adresse', 'Default Address');
    $footer_telephone = get_theme_mod('footer_telephone', 'Default Phone');
    $footer_couleur_bas = get_theme_mod('footer_couleur_arriere', '#ec880d');
    /* permet d'afficher une avant le footer */
    vague($footer_couleur_bas);
?>

<!-- Footer Image -->
<?php
        $image_id = get_theme_mod('footer_image');

        if ($image_id) {
            echo '<div class="footer-image-container">';
            echo wp_get_attachment_image($image_id, 'medium', false, array('class' => 'footer-image'));
            echo '</div>';
        }
        
    ?>

<footer style="background-color: <?= $footer_couleur_arriere ?> ">
    
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1 titre">
                    Liens sur le voyages
            </div>
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                "menu"=> "externe",
                "container" => "nav",
                "container_class" => "piedpage__s1__externe"
                )); ?>
            </div>
        </section>
        <section class="piedpage__s2">
                <div class="piedpage__s2 titre">
                    Adresse et recherche
                </div>
                <div class="piedpage__s2__adresse">
                        <div class="piedpage__s2__adresse__coord">
                            <?php echo $footer_adresse; ?>
                        </div>
                        <div class="piedpage__s2__adresse__telephone">
                            Tel: <?php echo($footer_telephone); ?>
                        </div>
                        <div class="piedpage__s2__adresse__recherche">
                            <?php get_search_form();   ?>
                        </div>
                </div>
            </section>
            <section class="piedpage__s3">
                <div class="piedpage__s3 titre">
                    Missions du club
                </div>
                <div class="piedpage__s3__mission">
                    <?php echo($footer_mission); ?>
                </div>
            </section> 


    </div>
</footer>
<?php wp_footer() ?>