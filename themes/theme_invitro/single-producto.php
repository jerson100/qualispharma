<?php

get_header();

$productId = get_the_ID();


?>

<main>
    <section class="banner" style="background: url(<?php echo IMG ?>/banner-single-product.jpg);">
        <div class="contenedor">
            <h1>
                <?php echo get_the_title(); ?>
            </h1>
        </div>
    </section>
    <div class="single-product">
        <div class="single-product__header">
            <div class="contenedor">
                <div class="single-product__header-content">
                    <div class="left">
                        <p class="single-product__header-title">
                            <?php echo get_the_title(); ?>
                        </p>
                        <?php if (get_field("single_product_via_administration", $productId)): ?>
                            <p>
                                <?php echo get_field("single_product_via_administration", $productId) ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="right">
                        <?php
                        $image_field = get_field("single_product_vista", $productId);
                        if ($image_field):
                            ?>
                            <img src="<?php echo $image_field["url"] ?>" alt="<?php echo $image_field["alt"] ?>"
                                title="<?php echo $image_field["title"] ?>" width="<?php echo $image_field["width"] ?>"
                                height="<?php echo $image_field["height"]
                                    ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="contenedor">
            <div class="single-product__body">
                <div class="single-product__body-left">
                    <?php
                    if (the_content()):
                        ?>
                        <div class="single-product__body-description">
                            <?php echo the_content(); ?>
                        </div>
                    <?php endif; ?>
                    <?php
                    if (have_rows('single_product_items', $productId)):
                        ?>
                        <ul class="single-product__body-list text">
                            <?php
                            while (have_rows('single_product_items', $productId)):
                                the_row();
                                ?>
                                <li>
                                    <span>
                                        <?php echo get_sub_field('name', $productId) ?>
                                    </span>
                                    <?php echo get_sub_field('value', $productId); ?>
                                </li>
                                <?php
                            endwhile;
                            ?>
                        </ul>
                    <?php else: ?>
                        <p class="text">No se encontraron detalles.</p>
                    <?php endif; ?>
                    <?php if (!empty(get_field("single_product_donwload"))): ?>
                        <div class="single-product__body-donwload">
                            <a href="<?php echo get_field("single_product_donwload")["url"] ?>"
                                title="<?php echo get_field("single_product_donwload")["title"] ?>"
                                donwload="<?php echo get_field("single_product_donwload")["title"] ?>"
                                class="button button--size-small  button-variant-contained-verde button--download">
                                <svg class="button__icon" xmlns="http://www.w3.org/2000/svg" width="45.89" height="60.583"
                                    viewBox="0 0 45.89 60.583">
                                    <g id="Grupo_13812" data-name="Grupo 13812" transform="translate(0 0)">
                                        <g id="Grupo_13811" data-name="Grupo 13811">
                                            <path id="Trazado_7695" data-name="Trazado 7695"
                                                d="M404.89,811.674q0-12.6,0-25.2a4.79,4.79,0,0,1,3.6-4.906,5.926,5.926,0,0,1,1.5-.183q10.67,0,21.34,0a5.219,5.219,0,0,1,3.864,1.594q6.972,7,13.969,13.971a5.289,5.289,0,0,1,1.613,3.92q-.007,17.984,0,35.967a4.831,4.831,0,0,1-5.125,5.127q-17.825.007-35.65,0a4.845,4.845,0,0,1-5.108-5.148Q404.885,824.243,404.89,811.674Zm3.836,0q0,12.571,0,25.142c0,1.054.254,1.306,1.31,1.307q17.8,0,35.591,0c1.058,0,1.311-.251,1.311-1.305q0-17.416.012-34.831c0-.594-.153-.8-.778-.8-3.462.027-6.924.017-10.386.011a4.672,4.672,0,0,1-4.83-4.833c-.006-3.42,0-6.84,0-10.259,0-.887,0-.889-.917-.889H410.217c-1.312,0-1.491.181-1.491,1.506Q408.725,799.2,408.725,811.678Zm26.041-23.6c-.1.116-.052.269-.052.41q0,3.825,0,7.65c0,.964.362,1.311,1.355,1.312q3.762.005,7.524,0c.174,0,.377.081.494-.055Z"
                                                transform="translate(-404.889 -781.382)" fill="#fff" />
                                            <path id="Trazado_7696" data-name="Trazado 7696"
                                                d="M467.79,935.22q-6.175,0-12.349,0c-1.487,0-2.426-.73-2.447-1.894s.943-1.94,2.464-1.941q12.381,0,24.762,0a2.435,2.435,0,0,1,1.771.529,1.875,1.875,0,0,1-.662,3.177,3.4,3.4,0,0,1-1.126.133Q474,935.218,467.79,935.22Z"
                                                transform="translate(-444.87 -906.05)" fill="#fff" />
                                            <path id="Trazado_7697" data-name="Trazado 7697"
                                                d="M467.785,997.278q-6.268,0-12.537,0a2.891,2.891,0,0,1-.941-.083,1.9,1.9,0,0,1-1.3-1.894,1.921,1.921,0,0,1,1.645-1.755,3.87,3.87,0,0,1,.569-.024q12.6,0,25.2,0a1.971,1.971,0,0,1,2.048,1.177,1.834,1.834,0,0,1-1.64,2.574c-.928.034-1.857.011-2.786.011Z"
                                                transform="translate(-444.874 -957.69)" fill="#fff" />
                                            <path id="Trazado_7698" data-name="Trazado 7698"
                                                d="M467.915,1055.67q6.3,0,12.6,0a2.042,2.042,0,0,1,1.623.552,1.773,1.773,0,0,1,.442,1.924,1.867,1.867,0,0,1-1.593,1.271,3.486,3.486,0,0,1-.506.016q-12.6,0-25.2,0a2,2,0,0,1-1.967-1.005,1.836,1.836,0,0,1,1.558-2.745c.885-.035,1.773-.013,2.659-.013Z"
                                                transform="translate(-444.939 -1009.343)" fill="#fff" />
                                            <path id="Trazado_7699" data-name="Trazado 7699"
                                                d="M460.151,869.693c1.667,0,3.334-.008,5,0a1.858,1.858,0,0,1,2.021,1.876,1.935,1.935,0,0,1-2.05,1.876q-5.033.012-10.066,0a1.9,1.9,0,0,1-2-1.653,1.863,1.863,0,0,1,1.219-2,2.417,2.417,0,0,1,.874-.1Q457.65,869.69,460.151,869.693Z"
                                                transform="translate(-444.903 -854.777)" fill="#fff" />
                                        </g>
                                    </g>
                                </svg>

                                Descarga <br>
                                Ficha Técnica
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="single-product__body-right">
                    <div class="single-product__body-cotizar">
                        <a title="Cotizar ahora" href="<?php echo esc_url(home_url() . "/contacto") ?>"
                            class="button button-variant-contained-verde">Cotizar ahora</a>
                        <p>Disponible en:</p>
                        <img src="<?php echo IMG ?>/producto/inkafarma.jpg" alt="Logo de Inkafarma"
                            title="Logo de Inkafarma">
                    </div>
                </div>
            </div>

        </div>

        <?php
        $args = array(
            'post_type' => 'producto',
            'posts_per_page' => 10,
            'post__not_in' => array(get_the_ID()), // Excluir el producto actual
        );

        $similars = new WP_Query($args);

        if ($similars->have_posts()): ?>
            <section class="similares">
                <div class="contenedor">
                    <h2>Ver otros productos</h2>
                    <div class="splide" id="similares">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php while ($similars->have_posts()):
                                    $similars->the_post(); ?>
                                    <?php
                                    $thumbID = get_post_thumbnail_id($post->ID);
                                    $imgDestacada = wp_get_attachment_image_src($thumbID, 'thumbnail');
                                    if (!empty($imgDestacada)):
                                        ?>
                                        <li class="splide__slide">
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
                                                        <a href="<?php the_permalink(); ?>"
                                                            title=" <?php echo get_the_title(); ?>">Ver más</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                                <?php wp_reset_query(); ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>
        <?php endif; ?>
</main>

<?php get_footer(); ?>