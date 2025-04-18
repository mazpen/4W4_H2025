<?php  
$hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); 

for ($k=0; $k<3; $k++){
$hero_background[$k] = get_theme_mod('hero_background_' . $k, 'Default Title'); 
}
?>
<section class="hero">
    <!-- hero__carrousel -->
    <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[0] ?>)"></div>
        <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[1] ?>)"></div>
        <div class="hero__carrousel" style="background-image: url(<?php echo $hero_background[2] ?>)"></div>
        <div class="hero__radio">
            <input  class="hero__radio__input" data-id_radio="0" type="radio" name="carroussel"  checked="checked">
            <input  class="hero__radio__input" data-id_radio="1" type="radio" name="carroussel">
            <input  class="hero__radio__input" data-id_radio="2" type="radio" name="carroussel">
        </div>
        <script>
            console.log("test inline JS OK");
        </script>
    <!-- hero__contenu -->
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