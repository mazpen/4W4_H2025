<?php
/**
 * Ajout de nouveaux champs dans le customizer
 */

function theme_TP4w4_customize_register($wp_customize) {
  // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
  $wp_customize->add_section('hero_section', array(
    'title' => __('Hero Section', 'theme_TP4w4'),
    'priority' => 30,
));
////////// l'auteur
$wp_customize->add_setting('hero_auteur', array(
  'default' => __('Azpen Sbrizzi', 'theme_TP4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('hero_auteur', array(
  'label' => __('Auteur', 'theme_TP4w4'),
  'section' => 'hero_section',
  'type' => 'text',
));

////////// image en background de la zone hero
for ($k=0; $k<3; $k++)
{
  $wp_customize->add_setting('hero_background_' . $k, array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_' . $k, array(
    'label' => __('Image en background ' . ($k+1) , 'theme_TP4w4'),
    'section' => 'hero_section',
  )));

}


////////// couleur du texte de la zone hero
$wp_customize->add_setting('hero_couleur', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
  'label' => __('Couleur du texte', 'theme_TP4w4'),
  'section' => 'hero_section',
)));

$wp_customize->add_setting('vague_pays_couleur', array(
  'default' => '#91e4a0',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vague_pays_couleur', array(
  'label' => __('Couleur Vague Pays', 'theme_TP4w4'),
  'section' => 'hero_section',
)));

////////// Nouvelle section footer /////////////////////////
// Création d'une nouvelle section dans le customizer
$wp_customize->add_section('footer_section', array(
  'title' => __('Section Footer', 'theme_TP4w4'),
  'priority' => 30,
));

////////// ajout de la donnée (adresse)
$wp_customize->add_setting('footer_adresse', array(
  'default' => __('3800, Sherbrooke Est, Montréal, Québec, H1X 2A2', 'theme_TP4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));
////////// ajout du controle de la donnée
$wp_customize->add_control('footer_adresse', array(
  'label' => __('Footer Adresse', 'theme_TP4w4'),
  'section' => 'footer_section',
  'type' => 'text',
));

////////// ajout de la donnée (telephone)
$wp_customize->add_setting('footer_telephone', array(
  'default' => __('(514) 254-7131', 'theme_TP4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));
////////// ajout du controle de la donnée
$wp_customize->add_control('footer_phone', array(
  'label' => __('Footer Téléphone', 'theme_TP4w4'),
  'section' => 'footer_section',
  'type' => 'text',
));

////////// ajout de la donnée (mission)
$wp_customize->add_setting('footer_mission', array(
  'default' => __('vide', 'theme_TP4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));
////////// ajout du controle de la donnée
$wp_customize->add_control('footer_mission', array(
  'label' => __('Footer Mission', 'theme_TP4w4'),
  'section' => 'footer_section',
  'type' => 'text',
));

////////// couleur d'arriere-plan de la zone footer
$wp_customize->add_setting('footer_couleur_arriere', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_couleur_arriere', array(
  'label' => __('Couleur arriere-plan', 'theme_TP4w4'),
  'section' => 'footer_section',
)));



///////// Image dans le footer 
$wp_customize->add_setting('footer_image', array(
  'default' => '',
  'sanitize_callback' => 'absint',
));

$wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'footer_image', array(
  'label' => __('Image de destination pour le pied de page', 'theme_TP4w4'),
  'section' => 'footer_section',
  'mime_type' => 'image',
)));

////////// ERREUR 404 ///////////////////
// Création d'une nouvelle section dans le customizer
$wp_customize->add_section('erreur_404_section', array(
  'title' => __('Section Erreur 404', 'theme_TP4w4'),
  'priority' => 30,
));

////////// ajout de la donnée (titre)
$wp_customize->add_setting('erreur_404_titre', array(
  'default' => __('Erreur 404', 'theme_TP4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));
////////// ajout du controle de la donnée
$wp_customize->add_control('erreur_404_titre', array(
  'label' => __('Titre de la page 404', 'theme_TP4w4'),
  'section' => 'erreur_404_section',
  'type' => 'text',
));

////////// ajout de la donnée (texte)
$wp_customize->add_setting('erreur_404_texte', array(
  'default' => __('Lorem ipsum', 'theme_TP4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));
////////// ajout du controle de la donnée
$wp_customize->add_control('erreur_404_texte', array(
  'label' => __('Texte de la page 404', 'theme_TP4w4'),
  'section' => 'erreur_404_section',
  'type' => 'text',
));

////////// ajout image en arrière plan
$wp_customize->add_setting('erreur_404_background', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));
////////// ajout du controle de la donnée
$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_404_background', array(
  'label' => __('Image en arriere plan', 'theme_TP4w4'),
  'section' => 'erreur_404_section',
)));

////////// ajout de la donnée (couleur du texte)
$wp_customize->add_setting('erreur_404_texte_couleur', array(
  'default' => '#000000',
  'sanitize_callback' => 'sanitize_hex_color',
));
////////// ajout du controle de la donnée
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur_404_texte_couleur', array(
  'label' => __('Couleur du texte', 'theme_TP4w4'),
  'section' => 'erreur_404_section',
)));


}

add_action('customize_register', 'theme_TP4w4_customize_register');