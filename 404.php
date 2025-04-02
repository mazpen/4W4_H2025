<?php get_header(); ?>

<?php 
$erreur404_background = get_theme_mod("erreur_background","Default Title"); ?>

<section class="erreur404" style="background-image: url(<?php echo $erreur404_background ?>)";>
  <div>
  <p class="erreur404_titre">
  Oops, vous avez échoué sur l'île 404 !
  </p>
  <p class="erreur404_texte">
    Il semblerait que vous ayez atterri sur une page qui n'existe pas. Pas de panique, cher membre explorateur ! Vous avez dérivé un peu trop loin des destinations de rêve que notre club a soigneusement sélectionnées pour vous. Reprenez votre périple en cliquant sur 'Accueil' pour découvrir à nouveau nos voyages d’exception !
  </p>

</div>
  <p class="erreur404 bouton_acceuil">
    <!-- Bouton accueil -->
    <a href="<?php echo home_url(); ?>">Revenir à l'accueil</a> 
  </p>

  <div class="erreur404_menu menu"> 
    <?php wp_nav_menu(array(
      'menu' => 'erreur_404',
      'container' => 'nav',
      'container_class' => 'erreur_404_menu'
    )); ?>
  </div>

  <div class="erreur404_recherche">
  <?php get_search_form();   ?>
  </div>



</section>

<?php get_footer(); ?>