<?php
/*
    Template name: partners
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
    <?php
    $classDirection = 'banner-bottom' . (get_field('description-qualivida-option') == false ? ' banner-bottom--reverse' : '');
    ?>
    <section class="<?php echo $classDirection ?>">
        <div class="contenedor">
            <?php
            if (!empty(get_field('Description-qualivida-title'))):
                ?>
                <div class="banner-bottom__title">
                    <h2>
                        <?php echo get_field('Description-qualivida-title') ?>
                    </h2>
                </div>
                <?php
            endif;
            ?>
            <div class="banner-bottom__content">
                <div class="banner-bottom__bg-text">
                    <p>
                        <?php echo get_field('description-qualivida-description') ?>
                    </p>
                </div>
                <div class="banner-bottom__image">
                    <?php
                    $img = get_field('description-qualivida-image');
                    if (!empty($img)): ?>
                        <img class="shadow-img" src="<?php echo esc_url($img['url']); ?>"
                            width="<?php echo esc_attr($img['width']); ?>" height="<?php echo esc_attr($img['height']); ?>"
                            alt="<?php echo esc_attr($img['alt']); ?>" title="<?php echo esc_attr($img['title']); ?>"
                            loading="lazy" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <div class="map">
        <div class="contenedor">
            <div class="map__container">
                <div class="map__left">
                    <?php
                    $img = get_field("partners_map_img");
                    if (!empty($img)):
                        ?>
                        <img src="<?php echo $img["url"] ?>" alt="<?php echo $img["alt"] ?>"
                            title="<?php echo $img["title"] ?>" width="<?php echo $img["width"] ?>"
                            height="<?php echo $img["height"] ?>" loading="lazy" />
                    <?php endif; ?>
                </div>
                <div class="map__right">
                    <?php
                    if (get_field("partners_map_description")):
                        ?>
                        <p>
                            <?php echo get_field("partners_map_description") ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part("/inc/partners") ?>
</main>

<?php get_footer(); ?>