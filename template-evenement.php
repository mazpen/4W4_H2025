<?php
/*
Template Name: Événement
*/
//evenement
?>
<?php get_header(); ?>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="populaire__article">
             
                <h2 class="populaire__titre"><?php the_title(); ?></h2>
                <div class="populaire__contenu"><?php the_content(); ?></div>


                <p>Titre de l'événement: <?php the_field('titre_evenement') ?></p>
                <p>Le conférencier est : <?php the_field('conferencier_evenement') ?></p>
                <p>description: <?php the_field('description_evenement') ?></p>
                <p>Date et heure: <?php the_field('date_evenement'); ?>
                <p>Lieu: <?php the_field('lieu_evenement')?></p>

            </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer(); ?>