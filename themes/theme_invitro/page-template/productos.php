<?php
/*
    Template name: productos
*/

get_header();

?>

<main>
    <section class="banner" style="background: url(<?php echo get_field('img_banner')['url'] ?>);">
        <div class="contenedor">
            <h1>
                <?php echo get_the_title(); ?>
            </h1>
        </div>
    </section>
    <section class="productos-alert">
        <div class="contenedor">
            <div class="productos-alert__content">
                <h2>¡Hola! ¿Eres personal de salud?</h2>
                <div class="productos-alert__buttons">
                    <button id="btnSi" class="button button-variant-outlined-celeste">Sí</button>
                    <button id="btnNo" class="button button-variant-outlined-celeste">No</button>
                </div>
            </div>
        </div>
        <div class="productos-alert__modal">
            <div class="productos-alert__modal-content">
                <img src="<?php echo IMG ?>/logo.svg" width="365" height="78" alt="Logo de Qualispharma"
                    title="Logo de Qualispharma">
                <p>Lo sentimos, nuestro portal de productos está dirigido solo para personal de la salud. Te invitamos a
                    seguir conociendo más de Qualis Pharma</p>
                <a href="<?php echo esc_url(home_url() . "/") ?>" title="Ir al inicio"
                    class="button button-variant-contained-verde">Volver
                    al inicio</a>
            </div>
        </div>
    </section>
    <div class="productos-main-container">
        <section class="product-search">
            <div class="contenedor">
                <div class="product-search__content">
                    <div class="custom-select-link text">
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
                            <?php
                            $terms = get_terms(
                                array(
                                    'taxonomy' => 'productosgenero',
                                    'hide_empty' => false,
                                )
                            );
                            if (!empty($terms) && !is_wp_error($terms)) {
                                echo '<ul class="custom-select-link__list">';
                                foreach ($terms as $term) {
                                    echo '<li class="custom-select-link__item"><a title="' . $term->name . '" href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
                                }
                                echo '</ul>';
                            }
                            ?>
                        </div>
                    </div>
                    <?php get_search_form(); ?>
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
        <section class="productos">
            <div class="contenedor">
                <?php if (have_posts($wp_query)): ?>
                    <div class="productos_grid">
                        <?php while (have_posts($wp_query)):
                            the_post($wp_query); ?>
                            <?php
                            $thumbID = get_post_thumbnail_id($post->ID);
                            $imgDestacada = wp_get_attachment_image_src($thumbID, 'thumbnail');
                            if (!empty($imgDestacada)):
                                ?>
                                <div class="product">
                                    <div class="product_image">
                                        <?php echo '<img src="' . $imgDestacada[0] . '" title="' . get_the_title() . '" alt="' . get_the_title() . '">'; ?>
                                    </div>
                                    <div class="product_info w-100">
                                        <div class="product_info_content">
                                            <p>
                                                <?php echo get_the_title(); ?>
                                            </p>
                                            <p><b>Vildagliptina 50 mg + Metformina 1000 mg</b>Caja x 30 tabletas</p>
                                        </div>
                                        <div class="product_info_link">
                                            <a href="<?php the_permalink(); ?>" title="<?php echo get_the_title() ?>">Ver más</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php else: ?>
                    <div class="w-100">
                        <p class="no-one">No hay productos disponibles</p>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <?php get_template_part('inc/contacto'); ?>
    </div>
</main>

<script>
    window.addEventListener("DOMContentLoaded", e => {
        const btnSi = document.getElementById("btnSi");
        const btnNo = document.getElementById("btnNo");
        const productosAlert = document.querySelector(".productos-alert");
        const productosC = document.querySelector(".productos-main-container");
        const modalC = document.querySelector(".productos-alert__modal");

        btnSi?.addEventListener("click", ee => {
            productosC?.classList.add("active");
            productosAlert?.remove();
        });

        btnNo?.addEventListener("click", ee => {
            modalC?.classList.add("open");
        });

    });
</script>

<?php get_footer(); ?>