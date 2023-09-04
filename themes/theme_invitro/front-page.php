<?php
/*
    Template name: inicio
*/

get_header();
?>

<main>
    <section class="hero relative">
        <?php if (have_rows('fondos')): ?>
            <div class="splide splide-navigation-dott splide-navigation-dott--content splide-navigation-dott--verde wh-100"
                id="main">
                <div class="splide__track wh-100">
                    <ul class="splide__list wh-100">
                        <?php while (have_rows('fondos')):
                            the_row(); ?>
                            <li class="splide__slide wh-100">
                                <img src="<?php echo get_sub_field('imagen_fondo')['url'] ?>"
                                    title="<?php echo get_sub_field('imagen_fondo')['title'] ?>"
                                    alt="<?php echo get_sub_field('imagen_fondo')['alt'] ?>"
                                    width="<?php echo get_sub_field('imagen_fondo')['width'] ?>"
                                    height="<?php echo get_sub_field('imagen_fondo')['height'] ?>" loading="lazy"
                                    class="wh-100">
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
        <div class="contenedor">
            <div class="contenido">
                <h1>Nuestra prioridad es la salud de nuestros pacientes</h1>
                <p>Variedad en productos, calidad, compromiso y confiabilidad.</p>
                <a href="<?php echo esc_url(home_url() . "/contacto") ?>">Más información</a>
            </div>
        </div>
    </section>

    <?php
    $wp_query = new WP_Query(
        array(
            'post_type' => 'producto',
            'posts_per_page' => 100,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'ASC'
        )
    );
    ?>

    <?php if (have_posts($wp_query)): ?>
        <section class="our_products">
            <div class="contenedor">
                <h2>Nuestros productos</h2>
                <div class="splide" id="productos">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php while (have_posts($wp_query)):
                                the_post($wp_query); ?>
                                <?php if (!empty(get_field('vista'))): ?>
                                    <li class="splide__slide">
                                        <div class="card_product relative">
                                            <div class="card_product_bg absolute"></div>
                                            <div class="card_product_content">
                                                <div class="card_product_info">
                                                    <p>
                                                        <?php echo get_the_title(); ?>
                                                    </p>
                                                    <p>
                                                        <?php echo get_the_excerpt(); ?>
                                                    </p>
                                                    <a href="<?php the_permalink() ?>">Ver más</a>
                                                </div>
                                                <div class="card_product_image">
                                                    <img src="<?php echo get_field('single_product_vista')['url'] ?>"
                                                        title="<?php echo get_field('single_product_vista')['title'] ?>"
                                                        alt="<?php echo get_field('single_product_vista')['alt'] ?>"
                                                        width="<?php echo get_field('single_product_vista')['width'] ?>"
                                                        height="<?php echo get_field('single_product_vista')['height'] ?>"
                                                        loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <section class="banner-bottom banner-bottom-nosotros">
        <div class="contenedor">
            <div class="banner-bottom__content">
                <div class="banner-bottom__bg-text">
                    <h2>Nosotros:</h2>
                    <p>
                        Somos una empresa farmacéutica con altos estándares de calidad, ofrecemos productos innovadores,
                        productos de alta calidad que provienen de plantas certificadas por países de alta vigilancia.
                        Todos nuestros productos cuentan con estudios de bioequivalencia.
                    </p>
                    <div class="center">
                        <a href="<?php
                        $inicio_url = home_url();
                        echo esc_url($inicio_url . "/nosotros") ?>" class="button button-variant-contained-verde">Ver
                            más</a>
                    </div>
                </div>
                <div class="banner-bottom__image">
                    <img src="<?php echo IMG ?>/inicio/enfermera.jpg" class="shadow-img" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <section class="banner-bottom banner-bottom--reverse">
        <div class="contenedor">
            <div class="banner-bottom__title">
                <h2>Qualivida</h2>
            </div>
            <div class="banner-bottom__content">
                <div class="banner-bottom__bg-text">
                    <p>
                        El programa Qualivida ha sido diseñado para apoyar a los pacientes a obtener los medicamentos
                        recetados por el médico a un precio asequible, mejorar la adherencia al tratamiento y mejorar la
                        calidad de vida de los pacientes.
                    </p>
                </div>
                <div class="banner-bottom__image">
                    <img src="<?php echo IMG ?>/qualivida/shot-of-a-young-pharmacist-helping-an-elderly-cust-2022-12-12-19-38-43-utc.jpg"
                        class="shadow-img" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="partners">
        <div class="contenedor">
            <h2 class="down">Nuestros Partners</h2>
            <div class="splide" id="partners">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="card_partner">
                                <img src="<?php echo IMG; ?>/partner/1.jpg">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card_partner">
                                <img src="<?php echo IMG; ?>/partner/2.jpg">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card_partner">
                                <img src="<?php echo IMG; ?>/partner/3.jpg">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card_partner">
                                <img src="<?php echo IMG; ?>/partner/4.jpg">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card_partner">
                                <img src="<?php echo IMG; ?>/partner/5.jpg">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="card_partner">
                                <img src="<?php echo IMG; ?>/partner/6.jpg">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->

    <?php get_template_part("/inc/main_objetives") ?>

    <?php get_template_part("/inc/partners") ?>

    <?php get_template_part('/inc/contacto'); ?>

    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
    );

    $similars = new WP_Query($args);
    ?>
    <?php if ($similars->have_posts()): ?>
        <section class="articles">
            <div class="contenedor">
                <h2>Entérate más del mundo farmacéutico:</h2>
                <ul class="articles__list">
                    <?php while ($similars->have_posts()):
                        $similars->the_post(); ?>
                        <li class="articles__item">
                            <div class="articles__bg">
                                <?php
                                $thumbID = get_post_thumbnail_id($post->ID);
                                $imgDestacada = wp_get_attachment_image_src($thumbID, 'thumbnail');
                                if (!empty($imgDestacada)) {
                                    echo '<img src="' . $imgDestacada[0] . '" title="' . get_the_title() . '" alt="' . get_the_title() . '" class="w-100">';
                                } else {
                                    echo '';
                                }
                                ?>
                                <div class="articles__title">
                                    <p>
                                        <?php echo get_the_title(); ?>
                                    </p>
                                    <a href="<?php the_permalink() ?>" title="<?php echo get_the_title(); ?>"
                                        alt="<?php echo get_the_title(); ?>" class="button button-variant-contained-verde">Ver
                                        más</a>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <div class="articles__ver-mas">
                    <a href="<?php
                    $inicio_url = home_url();
                    echo esc_url($inicio_url . "/blog") ?>" class="button button-variant-contained-verde">Ver más</a>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php
    get_header();

    $args = array(
        'post_type' => 'noticia',
        'posts_per_page' => 3,
    );

    $noticias = new WP_Query($args);
    ?>
    <?php if ($similars->have_posts()): ?>
        <section class="articles articles--bg-celeste">
            <div class="contenedor">
                <h2>Últimas noticias:</h2>
                <ul class="articles__list">
                    <?php while ($noticias->have_posts()):
                        $noticias->the_post(); ?>
                        <li class="articles__item">
                            <div class="articles__bg">
                                <?php
                                $thumbID = get_post_thumbnail_id($post->ID);
                                $imgDestacada = wp_get_attachment_image_src($thumbID, 'thumbnail');
                                if (!empty($imgDestacada)) {
                                    echo '<img src="' . $imgDestacada[0] . '" title="' . get_the_title() . '" alt="' . get_the_title() . '" class="w-100">';
                                } else {
                                    echo '';
                                }
                                ?>
                                <div class="articles__title">
                                    <p>
                                        <?php echo get_the_title(); ?>
                                    </p>
                                    <a href="<?php the_permalink() ?>" title="<?php echo get_the_title(); ?>"
                                        alt="<?php echo get_the_title(); ?>" class="button button-variant-contained-verde">Ver
                                        más</a>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <div class="articles__ver-mas">
                    <a href="<?php
                    $inicio_url = home_url();
                    echo esc_url($inicio_url . "/noticias") ?>" class="button button-variant-contained-verde">Ver
                        más</a>
                </div>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php //get_template_part('inc/section'); ?>

<?php get_footer(); ?>