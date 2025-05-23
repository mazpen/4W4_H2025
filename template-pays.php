<?php
/*
Template Name: Pays
*/
//pays

?>
<?php get_header(); ?>

    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="pays__article">
             
                <h2 class="pays__titre"><?php the_title(); ?></h2>
                <div class="pays__contenu"><?php the_content(); ?></div>


                <p>Le conférencier est : <?php the_field('conferencier_pays') ?></p>
                <p>description: <?php the_field('description_pays') ?></p>
                <p>Date et heure: <?php the_field('date_pays'); ?>
                <p>Lieu: <?php the_field('lieu_pays')?></p>

            </article>

            <!-- //////////////////////////////////// section destination REST-API -->
            <?php vague($footer_couleur_arriere);?>
            <?php categories_liste("destination"); ?>
            <section class="destination__pays">
                <h2 class="destination__titre__pays">Destination par pays</h2>
                <div <?php //date($methode = $categories)?> class="destination__list__pays"></div>
            </section>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer(); ?>