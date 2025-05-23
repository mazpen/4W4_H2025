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
            <article class="populaire__article">
             
                <h2 class="populaire__titre"><?php the_title(); ?></h2>
                <div class="populaire__contenu"><?php the_content(); ?></div>


                <p>Le conférencier est : <?php the_field('conferencier_pays') ?></p>
                <p>description: <?php the_field('description_pays') ?></p>
                <p>Date et heure: <?php the_field('date_pays'); ?>
                <p>Lieu: <?php the_field('lieu_pays')?></p>

            </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
<?php get_footer(); ?>