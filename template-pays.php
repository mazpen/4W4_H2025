<?php
/*
Template Name: Pays
*/
//pays

?>
<?php $vague_pays = get_theme_mod('vague_pays_couleur', '');
;
get_header(); ?>

    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="pays__article">
             
                <h2 class="pays__titre"><?php the_title(); ?></h2>
                <div class="pays__contenu"><?php the_content(); ?></div>


                <p>Le conférencier est : <?php the_field('conferencier_pays') ?></p>
                <p>Date et heure: <?php the_field('date_pays'); ?>
                <p>Lieu: <?php the_field('lieu_pays')?></p>

            </article>
        </div>
    </section>
    <!-- //////////////////////////////////// section destination REST-API -->
    <?php genere_vague_Haut($vague_pays) ?>
    <section class="destination__pays">
        
        <?php $pays = ["France", "États-Unis", "Canada", "Argentine", "Chili", "Belgique", "Maroc", "Mexique", "Japon", "Italie", "Islande", "Chine", "Grèce", "Suisse"]; ?>

        <div class="boutons__pays">
            <?php foreach ($pays as $nom): ?>
                <button 
                    class="btn-pays" 
                    data-pays="<?= htmlspecialchars($nom) ?>">
                    <?= htmlspecialchars($nom) ?>
                </button>
            <?php endforeach; ?>
        </div>

        <section class="destination__pays">
            <h2 class="destination__titre .pays"></h2>
            <div id="api-wrapper" data-method="search" data-value="France" class="destination__list .pays"></div>
        </section>

        <?php endwhile; endif; ?>
    </section>
<?php vague_footer_Bas($vague_pays)?>
<?php get_footer(); ?>