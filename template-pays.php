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
            <section>
            <?php //vague($footer_couleur_arriere);?>
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
                <h2 class="destination__titre__pays">Destination par pays</h2>
                <div id="api-wrapper" data-method="search" data-value="France" class="destination__list .pays"></div>
            </section>

            <?php endwhile; endif; ?>
            </section>
        </div>
    </section>
<?php get_footer(); ?>