<?php
/*
    Template name: inicio
*/

get_header();
?>

<main>
    <section class="hero relative">
        <?php if (have_rows('fondos')): ?>
            <div class="splide wh-100" id="main">
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
                <a href="#">Más información</a>
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
                                                    <img src="<?php echo get_field('vista')['url'] ?>"
                                                        title="<?php echo get_field('vista')['title'] ?>"
                                                        alt="<?php echo get_field('vista')['alt'] ?>"
                                                        width="<?php echo get_field('vista')['width'] ?>"
                                                        height="<?php echo get_field('vista')['height'] ?>" loading="lazy">
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
                        <a href="#" class="button button-variant-contained-verde">Ver más</a>
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

</main>

<?php //get_template_part('inc/section'); ?>

<?php get_footer(); ?>