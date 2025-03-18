<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

    <?php if (is_404()): ?>
        <title><?php esc_attr_e("Error Page - 404"); ?></title>
    <?php else: ?>
        <title><?php echo wp_get_document_title(); ?></title>
    <?php endif; ?>

</head>

<body <?php body_class(); ?>>

    <header>
        <?php //get_search_form(); ?>
        <?php //wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'top-menus-wrapper', 'menu_class' => 'ul_menu')); ?>
    </header>