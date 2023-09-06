<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <?php if (is_404()): ?>
        <title>
            <?php esc_attr_e(get_bloginfo('name') . " | Página de Error"); ?>
        </title>
    <?php else: ?>
        <title>
            <?php the_title(); ?>
        </title>
    <?php endif; ?>

</head>

<body <?php body_class(); ?>>

    <header>
        <div class="contenedor">
            <div class="row">
                <a class="logo" href="<?php echo esc_url(home_url('/')) ?>" title="<?php echo get_bloginfo('name'); ?>"
                    alt="<?php echo get_bloginfo('name'); ?>">
                    <img src="<?php echo IMG; ?>/logo.svg" title="<?php echo get_bloginfo('name'); ?>"
                        alt="<?php echo get_bloginfo('name'); ?>">
                </a>
                <div class="navbar">
                    <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'navbar_links', 'menu_class' => 'ul_menu')); ?>
                    <div class="burger">
                        <button id="burger">
                            <div></div>
                            <div></div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="aside_bg aside_close"></div>
    <aside class="aside">
        <div class="container">
            <div class="aside_box">
                <button class="aside_action aside_close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32" d="M368 368L144 144M368 144L144 368" />
                    </svg>
                </button>
                <div class="aside__top">
                    <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'aside_links', 'menu_class' => 'ul_menu')); ?>
                </div>
                <?php wp_nav_menu(array('theme_location' => 'sidebar-menu', 'container_class' => 'aside_links', 'menu_class' => 'ul_menu')); ?>
                <?php get_template_part("/inc/social") ?>
            </div>
        </div>
    </aside>