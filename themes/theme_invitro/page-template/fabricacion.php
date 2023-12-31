<?php
/*
    Template name: fabricacion
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
    <?php if (!empty(get_field("fabricacion_message"))): ?>
        <div class="banner-message">
            <div class="contenedor">
                <p class="banner-message__text">
                    <?php echo get_field("fabricacion_message") ?>
                </p>
            </div>
        </div>
    <?php endif; ?>
    <div class="nuestras-plantas">
        <div class="contenedor">
            <div class="nuestras-plantas__content">
                <?php if (!empty(get_field("fabricacion_plantas_title"))): ?>
                    <h2 class="nuestras-plantas__title">
                        <?php echo get_field("fabricacion_plantas_title") ?>
                    </h2>
                <?php endif; ?>
                <?php
                if (have_rows("fabricacion_labor_list_plantas")):
                    ?>
                    <section class="splide nuestras-plantas__splide splide-navigation-dott" aria-label="Nuestras plantas">
                        <div class="splide__track">
                            <ul class="splide__list nuestras-plantas__list">
                                <?php while (have_rows("fabricacion_labor_list_plantas")):
                                    the_row();
                                    ?>
                                    <li class="splide__slide nuestras-plantas__item">
                                        <div class="nuestras-plantas__left">
                                            <?php
                                            $img = get_sub_field("image");
                                            ?>
                                            <img src="<?php echo $img["url"] ?>" alt="<?php echo $img["alt"] ?>"
                                                title="<?php echo $img["title"] ?>" width="<?php echo $img["width"] ?>"
                                                height="<?php echo $img["height"] ?>" loading="lazy
                                                class=" shadow-img">
                                        </div>
                                        <div class="nuestras-plantas__right">
                                            <div class="nuestras-plantas__right-top">
                                                <h3>
                                                    <?php echo get_sub_field("title") ?>
                                                </h3>
                                                <span>
                                                    <?php echo get_sub_field("subtitle") ?>
                                                </span>
                                            </div>
                                            <p>
                                                <?php echo get_sub_field("description") ?>
                                            </p>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </section>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>