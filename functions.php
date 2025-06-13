<?php 

/** 
    *FullTimeForce
    *@link 
    *@package WordPress
    *@subpackage FullTimeForce
    *@since 1.0.0
    *@version 1.0.0
*/

define('URL',get_stylesheet_directory_uri());
define('IMG',URL.'/images');
define('JS',URL.'/libraries/js');
define('CSS',URL.'/libraries/css');

if(!function_exists ('general_scripts')):
    function general_scripts(){
        wp_register_style('style', get_stylesheet_uri(),array(),'1.0.0','all');
        wp_enqueue_style('style');

        wp_register_style('SplideCSS', CSS.'/splide.min.css', '1.0.0', 'all');
        wp_enqueue_style('SplideCSS');
            
        wp_register_script('SplideJS', JS.'/splide.min.js', array(),'1.0.0',true);
        wp_enqueue_script('SplideJS');
    }
endif;
add_action('wp_enqueue_scripts', 'general_scripts');




// Uso del Core de Wordpress:
// Creación de un Custom Post Type (CPT) con la taxonomy de 'Portafolio', este debe contener todo lo que un
// post suele llevar: CATEGORIAS y ETIQUETAS, y debe listarse en el panel de WP como un nuevo
// modulo en el sidebar.

// Llena el siguiente archivo para crear el CPT
require_once get_template_directory().'/inc/cpt_portafolio.php';








// Uso de PHP (Manipulacion de Array y WP Hooks)
// Filtrar el array de $products para solo quedarnos con los productos cuyos precios son mayor a 50, 
// y posterior a eso, mostrar el array recorrido en un UL > LI, solo en el homepage MEDIANTE UN HOOK DE WORDPRESS

function mostrar_productos_homepage() {

    $products = [
        ['name' => 'Producto A', 'price' => 30],
        ['name' => 'Producto B', 'price' => 60],
        ['name' => 'Producto C', 'price' => 80],
        ['name' => 'Producto D', 'price' => 20],
        ['name' => 'Producto E', 'price' => 90],
        ['name' => 'Producto F', 'price' => 10],
    ];

}