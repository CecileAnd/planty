<?php
/*
 * This is the child theme for OceanWP theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
// =======================
 // Fonction pour ajouter un lien "Admin" dans le menu
 // =======================
function add_admin_menu_link($items, $args) {
     // Vérifie si l'utilisateur est connecté à WordPress
    if (is_user_logged_in()) {
         // Crée un lien vers la page d'administration avec l'URL de tableau de bord WordPress
        $admin_link = '<li class="menu-item"><a href="' . admin_url() . '">Admin</a></li>';

        // Insère le lien "Admin" juste avant le lien contenant "Commander"
        // Utilisation de preg_replace pour trouver l'élément de menu "Commander" et y insérer le lien "Admin"
        $items = preg_replace('/(<li[^>]*>\s*<a[^>]*href="[^"]*commander[^"]*"[^>]*>)/', $admin_link . '$1', $items);
    }
    // Retourne les éléments de menu modifiés
    return $items;
}
// Ajoute la fonction au filtre wp_nav_menu_items pour modifier le menu de navigation avant son affichage
// Le filtre prend 2 arguments : les éléments du menu et les arguments du menu
add_filter('wp_nav_menu_items', 'add_admin_menu_link', 10, 2);

// =======================
 // Fonction pour ajouter une classe CSS personnalisée au lien "Commander"
 // =======================
function add_custom_menu_classes($classes, $item, $args) {
    // Vérifie si l'URL de l'élément du menu contient le mot "commander"
    if (strpos($item->url, 'commander') !== false) {
        // Si oui, ajoute la classe CSS 'commander-link' à cet élément de menu
        $classes[] = 'commander-link';
    }
    // Retourne les classes modifiées pour l'élément de menu
    return $classes;
}
// Ajoute la fonction au filtre nav_menu_css_class pour ajouter la classe CSS à l'élément du menu avant l'affichage
// Le filtre prend 3 arguments : les classes CSS, l'élément de menu, et les arguments du menu
add_filter('nav_menu_css_class', 'add_custom_menu_classes', 10, 3);
