<?php get_header(); ?>

  <p class="erreur_404_texte">
    <br>
    <strong>Oups !</strong> Il semblerait que vous ayez atterri sur une page qui n'existe pas.
  Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !
  </p>
  <p class="bouton_acceuil">
    <!-- Bouton accueil -->
    <a href="<?php echo home_url(); ?>">Revenir à l'accueil</a> 
  </p>
  <?php wp_nav_menu(array(
                    'menu' => 'erreur_404',
                    'container' => 'nav',
                    'container_class' => 'erreur_404_menu'
  )); ?>
</section>

<?php get_footer(); ?>