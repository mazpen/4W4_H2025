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
//////////////////////////////////////////////////////// l'auteur
$wp_customize->add_setting('hero_auteur', array(
  'default' => __('Azpen Sbrizzi', 'theme_TP4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('hero_auteur', array(
  'label' => __('Auteur', 'theme_TP4w4'),
  'section' => 'hero_section',
  'type' => 'text',
));

////////////////////////////////////////////////// image en background de la zone hero
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




////////////////////////////////////////////////// couleur du texte de la zone hero
$wp_customize->add_setting('hero_couleur', array(
  'default' => '',
  'sanitize_callback' => 'esc_url_raw',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
  'label' => __('Couleur du texte', 'theme_TP4w4'),
  'section' => 'hero_section',
)));

//////////////////////////////////////////////////////// Nouvelle section footer

  $wp_customize->add_section('footer_section', array(
    'title' => __('Section pied de page', 'theme_TP4w4'),
    'priority' => 30,
));
////////////////////////////////////////////////////////// Champ mission
$wp_customize->add_setting('footer_mission', array(
  'default' => __('Mission du club de voyage', 'theme_TP4w4'),
  'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('footer_mission', array(
  'label' => __('Mission', 'theme_TP4w4'),
  'section' => 'footer_section',
  'type' => 'textarea',
));

}

add_action('customize_register', 'theme_TP4w4_customize_register');