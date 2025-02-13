<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */

?>
<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
	<!-- Définit l'encodage du site -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<!-- Lien vers le profil XFN pour indiquer les relations entre les auteurs et les sites -->
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Insère automatiquement les scripts et styles nécessaires ajoutés par WordPress ou des plugins -->
	<?php wp_head(); ?>

	<!-- Préconnecte les serveurs Google Fonts pour améliorer la vitesse de chargement -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<!-- Intègre une police Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap" rel="stylesheet">

	<!-- Lien vers la feuille de style principale du thème -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" type="text/css" media="all">
</head>

<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

	<!-- Ajoute un hook pour les extensions ou fonctionnalités qui nécessitent une action au début du body -->
	<?php wp_body_open(); ?>

<header id="en-tete">
    <!-- Logo cliquable menant à la page d'accueil -->
    <a id="logo" href='http://planty.local/page-daccueil/'>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/Logo source.png" alt="Logo">
    </a>

    <!-- Menu de navigation principal -->
    <nav id="menu">
        <?php 
        // Définition des arguments pour l'affichage du menu
        $args = array(
            'theme_location'=> 'header', // Emplacement du menu défini dans functions.php
            'menu_id'       => 'salut', // ID du menu dans le HTML généré
        ); 
        ?>
        
        <!-- Affiche le menu de navigation défini dans le back-office de WordPress -->
        <?php wp_nav_menu( $args ); ?>    
    </nav>
</header>
