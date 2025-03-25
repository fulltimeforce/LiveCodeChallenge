<?php

// Creamos la función para el post type servicio
function custom_post_servicio()
{
    // Registramos la función 'servicio' según el codex de WP
    register_post_type(
        'servicio',
        // (http://codex.wordpress.org/Function_Reference/register_post_type)
        // Agregamos todas funciones adicionales para el post type servicio
        array(
            'labels' => array(
                'name' => __('Servicios', 'ftf-dev'), /* El título del grupo */
                'singular_name' => __('Servicio', 'ftf-dev'), /* El título en singular */
                'all_items' => __('Todos los servicios', 'ftf-dev'), /* Todos los items del menú */
                'add_new' => __('Agregar nuevo', 'ftf-dev'), /* Agregar uno nuevo */
                'add_new_item' => __('Agregar nuevo servicio', 'ftf-dev'), /* Agregar nuevo con título */
                'edit' => __('Editar', 'ftf-dev'), /* Editar */
                'edit_item' => __('Editar servicio', 'ftf-dev'), /* Editar item */
                'new_item' => __('Nuevo servicio', 'ftf-dev'), /* Nuevo titulo en visualización */
                'view_item' => __('Ver servicio', 'ftf-dev'), /* Ver item */
                'search_items' => __('Buscar servicio', 'ftf-dev'), /* Buscar item */
                'not_found' => __('No se encontraron resultados', 'ftf-dev'), /* Se muestra si aún no hay entradas */
                'not_found_in_trash' => __('No se encontró nada en la Papelera', 'ftf-dev'), /* Se muestra si no hay nada en la papelera */
            ), /* end of arrays */
            'description' => __('Esto es un ejemplo de post type para servicios', 'ftf-dev'), /* Custom Type Description */
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 8, /* Este es el orden en que aparecerán en el menu de admin */
            'menu_icon' => 'dashicons-networking', /* El icono para el menu de admin */
            // Lo podemos agregar por medio de url o desde https://developer.wordpress.org/resource/dashicons
            'rewrite' => array('slug' => 'servicio', 'with_front' => false), /* Se especifica el slug de la url, por lo general es el mismo post type 'servicio' */
            'has_archive' => 'servicio', /* Puede cambiar el nombre del slug */
            'capability_type' => 'post',
            'hierarchical' => false,
            /* Habilitamos ciertos parámetros para el editor de cada servicio */
            'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
        ) /* Fin de las opciones */
    ); /* Fin del registro post type */
}
// Agregando la función al init de WordPress
add_action('init', 'custom_post_servicio');
