<?php
//permet d'afficher le contenu de la page d'accueil

?>

<?php get_header() ?>
<h1>front-page.php</h1>
    <section class="hero">
        <div class="hero__contenu global">
            <h1 class="hero__titre">
                <?php  bloginfo('name'); ?>
            </h1>
            <p class="hero__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aspernatur est officiis, mollitia minus asperiores quas libero saepe consequuntur at blanditiis et eligendi, sequi sit quae laboriosam, ex delectus nesciunt.
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
        </div>
    </section>
    <section class="galerie">
        <figure class="galerie__fig">
            <img src="" alt="">
        </figure>
    </section>
 
    <section class="populaire">
        <div class="boiteflex global">
            <?php 
            if (have_posts()) : while (have_posts()) : the_post(); 
            ?>
            <?php 
            if(in_category('galerie'))
            { 
                the_content(); 
            } else { ?>

                <div class="carte carte--grande">
                <figure class="carte__image">
                    <img src="img1.jpg" alt="Image de voyage">
                </figure>
                <div class="carte__contenu">
                    <h2 class="carte__titre"><?php the_title(); ?></h2>
                    <p class="carte__description"><?php  echo wp_trim_words(get_the_content(), 20, "...") ; ?></p>
                    <button class="carte__bouton carte__bouton--actif">Suite</button>
                </div>
            <?php } ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>