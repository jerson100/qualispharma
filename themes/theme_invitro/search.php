<?php
/*
    Template name: search
*/

get_header();

$s = get_search_query();

global $wp_query;
$query = new WP_Query(
    array(
        's' => $s,
        'post_type' => 'producto',
        // 'posts_per_page' => 30,
        'post_status' => 'publish'
    )
);

?>
<main>
    <section class="banner" style="background: url(<?php echo IMG ?>/banner-product.jpg);">
        <div class="contenedor">
            <h1>
                <?php echo get_the_title(); ?>
            </h1>
        </div>
    </section>
    <section class="product-search">
        <div class="contenedor">
            <div class="product-search__content">
                <div class="custom-select-link">
                    <div class="custom-select-link__screen"></div>
                    <div class="custom-select-link__front">
                        <span class="custom-select-link__text">Categorías</span>
                        <div class="custom-select-link__icon">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M256 294.1L383 167c9.4-9.4 24.6-9.4 33.9 0s9.3 24.6 0 34L273 345c-9.1 9.1-23.7 9.3-33.1.7L95 201.1c-4.7-4.7-7-10.9-7-17s2.3-12.3 7-17c9.4-9.4 24.6-9.4 33.9 0l127.1 127z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="custom-select-link__back">
                        <!-- <ul class="custom-select-link__list"> -->
                        <?php
                        // Obtener todas las categorías de la taxonomía 'productosgenero'
                        $terms = get_terms(
                            array(
                                'taxonomy' => 'productosgenero',
                                'hide_empty' => false,
                                // Mostrar incluso las categorías sin entradas
                            )
                        );



                        if (!empty($terms) && !is_wp_error($terms)) {
                            echo '<ul class="custom-select-link__list">';
                            foreach ($terms as $term) {
                                echo '<li class="custom-select-link__item"><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
                            }
                            echo '</ul>';
                        }
                        ?>
                        <!-- <li class="custom-select-link__item">
                                    <a href="">Línea Diabetes</a>
                                </li>
                                <li class="custom-select-link__item">
                                    <a href="">Línea Cardio</a>
                                </li> -->
                        <!-- </ul> -->
                    </div>
                </div>
                <?php get_search_form(); ?>
            </div>
        </div>
    </section>
    <section class="productos">
        <div class="contenedor">
            <?php if ($query->have_posts()): ?>
                <div class="productos_grid">
                    <?php while ($query->have_posts()):
                        $query->the_post(); ?>
                        <?php
                        $thumbID = get_post_thumbnail_id($post->ID);
                        $imgDestacada = wp_get_attachment_image_src($thumbID, 'thumbnail');
                        // if (!empty($imgDestacada)):
                        ?>
                        <div class="product">
                            <div class="product_image">

                            </div>
                            <div class="product_info w-100">
                                <div class="product_info_content">
                                    <p>
                                        <?php echo get_the_title(); ?>
                                    </p>
                                    <p><b>Vildagliptina 50 mg + Metformina 1000 mg</b>Caja x 30 tabletas</p>
                                </div>
                                <div class="product_info_link">
                                    <a href="<?php the_permalink(); ?>">Ver más</a>
                                </div>
                            </div>
                        </div>
                        <?php //endif; ?>
                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            <?php else: ?>
                <div class="w-100">
                    <p class="no-one">No hay productos disponibles</p>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>


<?php get_footer(); ?>