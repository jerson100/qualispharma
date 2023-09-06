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
    <div class="banner-bottom">
        <div class="contenedor">
            <div class="banner-bottom__content">
                <div class="banner-bottom__bg-text">
                    <?php if (!empty(get_field("partners_labor_description"))): ?>
                        <p>
                            <?php echo get_field("partners_labor_description") ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="banner-bottom__image">
                    <?php
                    $img = get_field("partners_labor_image");
                    if (!empty($img)):
                        ?>
                        <img src="<?php echo $img["url"] ?>" alt="<?php echo $img["alt"] ?>"
                            title="<?php echo $img["title"] ?>" width="<?php echo $img["width"] ?>"
                            height="<?php echo $img["height"] ?>" loading="lazy" class="shadow-img">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
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