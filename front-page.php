<?php get_header() ?>
    <h1>front-page.php</h1>
    <?php  
        $hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 
        $hero_background = get_theme_mod('hero_background', 'Default Title'); 
    ?>
    <section class="hero" style="background-image: url('<?php echo $hero_background ?>'); background-repeat: no-repeat" >
        <div class="hero__contenu global">
            <h1 class="hero__titre">
                <?php  bloginfo('name'); ?>
            </h1>
            <p class="hero__description">
            <?php  bloginfo('description'); ?>
            </p>
            <a href="" class="hero__courriel">
                info@cmaisonneuve.qc.ca
            </a>
            <button class="hero__bouton">
                Inscription
            </button>
            <div class="hero__icone-app">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=paypal&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=stackoverflow&color=000000" width="20" height="20">
            </div>
            <p>Auteur:<?php echo $hero_auteur;  ?></p>
        </div>
    </section>
    <section class="galerie">
        <figure class="galerie__fig">
            <img src="" alt="">
        </figure>
    </section>

    <section class="populaire">
        <div class="boiteflex global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if (in_category('galerie'))  {
                the_content() ;
            } else {  ?>
            <?php get_template_part( 'gabarit/carte' ); ?>
            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>

    <!--// Section REST-API //-->
    <?php  categories_liste("destination");   ?>
    <section class="destination">
        <h2 class="destination__titre">Articles de la catégorie</h2>
        <div class="destination__list"></div>
    </section>

    <?php get_footer(); ?>

</body>
</html>