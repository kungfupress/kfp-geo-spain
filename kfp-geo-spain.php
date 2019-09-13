<?php
/**
 * Plugin Name:  KFP Geo Spain
 * Description:  Taxonomías con las toponimias de España (provincias, capitales, municipios)
 * Version:      0.1.1
 * Author:       Juanan Ruiz
 * Author URI:   https://kungfupress.com/
 */

// Register Custom Taxonomy
function Kfp_Taxonomy_provinces()
{
    $labels = array(
        'name' => _x('Provincias', 'Taxonomy General Name', 'kfp_provinces'),
        'singular_name' => _x('Provincia', 'Taxonomy Singular Name', 'kfp_provinces'),
        'menu_name' => __('Provincias', 'kfp_provinces'),
        'all_items' => __('Todas las provincias', 'kfp_provinces'),
        'new_item_name' => __('Nueva provincia', 'kfp_provinces'),
        'add_new_item' => __('Añadir nueva provincia', 'kfp_provinces'),
        'edit_item' => __('Editar provincia', 'kfp_provinces'),
        'update_item' => __('Actualizar provincia', 'kfp_provinces'),
        'view_item' => __('Ver provincia', 'kfp_provinces'),
        'separate_items_with_commas' => __('Separar provincias con comas', 'kfp_provinces'),
        'add_or_remove_items' => __('Añadir o eliminar provincias', 'kfp_provinces'),
        'choose_from_most_used' => __('Elige entre las más usadas', 'kfp_provinces'),
        'popular_items' => __('Provincias más frecuentes', 'kfp_provinces'),
        'search_items' => __('Buscar provincias', 'kfp_provinces'),
        'not_found' => __('No encontrada', 'kfp_provinces'),
        'no_terms' => __('No hay provincias', 'kfp_provinces'),
        'items_list' => __('Lista de provincias', 'kfp_provinces'),
        'items_list_navigation' => __('Items list navigation', 'kfp_provinces'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
    );
    register_taxonomy('provincias', array('post', 'vti_idea'), $args);
}
add_action('init', 'Kfp_Taxonomy_provinces', 0);

function Kfp_Provinces_add()
{
	$provincias = array('Álava', 'Albacete', 'Alicante', 'Almería', 'Asturias',
		'Ávila', 'Badajoz', 'Barcelona', 'Burgos', 'Cáceres', 'Cádiz', 
		'Cantabria', 'Castellón', 'Ciudad Real', 'Córdoba', 'La Coruña', 
		'Cuenca', 'Gerona', 'Granada', 'Guadalajara', 'Guipúzcoa', 'Huelva', 
		'Huesca', 'Islas Baleares', 'Jaén', 'León', 'Lérida', 'Lugo', 'Madrid', 
		'Málaga', 'Murcia', 'Navarra', 'Orense', 'Palencia', 'Las Palmas', 
		'Pontevedra', 'La Rioja', 'Salamanca', 'Segovia', 'Sevilla', 'Soria', 
		'Tarragona', 'Santa Cruz de Tenerife', 'Teruel', 'Toledo', 'Valencia', 
		'Valladolid', 'Vizcaya', 'Zamora', 'Zaragoza');
	foreach ($provincias as $provincia) {
		wp_insert_term($provincia, 'provincias');
	}
}
add_action('init', 'Kfp_Provinces_add', 1);
