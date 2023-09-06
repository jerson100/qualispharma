<?php
/*
    Template name: qualivida
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
                    <?php if (!empty(get_field('description-qualivida-description'))): ?>
                        <p>
                            <?php echo get_field('description-qualivida-description') ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="banner-bottom__image">
                    <?php
                    $img = get_field('description-qualivida-image');
                    if (!empty($img)): ?>
                        <img class="shadow-img" src="<?php echo esc_url($img['url']); ?>"
                            width="<?php echo esc_attr($img['width']); ?>" height="<?php echo esc_attr($img['height']); ?>"
                            alt="<?php echo esc_attr($img['title']); ?>" title="<?php echo esc_attr($img['title']); ?>"
                            loading="lazy" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-celeste">
        <?php get_template_part('inc/main_objetives'); ?>
    </div>
    <section class="why-line-we-handle">
        <div class="contenedor">
            <?php if (!empty(get_field("qualivida_linea_title"))): ?>
                <h2>
                    <?php echo get_field("qualivida_linea_title") ?>
                </h2>
            <?php endif; ?>
            <?php if (have_rows("qualivida_linea_list")): ?>
                <div class="splide splide-navigation-dott why-line-we-handle__splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php while (have_rows("qualivida_linea_list")):
                                the_row();
                                ?>
                                <li class="splide__slide">
                                    <div class="why-line-we-handle__grid">
                                        <div class="why-line-we-handle__left">
                                            <div class="why-line-we-handle__img-container">
                                                <?php
                                                $img = get_sub_field("image");
                                                if (!empty($img)):
                                                    ?>
                                                    <img src="<?php echo $img["url"] ?>" alt="<?php echo $img["alt"] ?>"
                                                        width="<?php echo $img["width"] ?>" height="<?php echo $img["height"] ?>"
                                                        title="<?php echo $img["title"] ?>" class="why-line-we-handle__img" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="why-line-we-handle__right">
                                            <?php if (!empty(get_sub_field("description"))): ?>
                                                <p>
                                                    <?php echo get_sub_field("description") ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="beneficts-qualivida">
        <div class="contenedor">
            <?php if (!empty(get_field("qualivida_numbers_title"))): ?>
                <h2 class="down">
                    <?php echo get_field("qualivida_numbers_title") ?>
                </h2>
            <?php endif; ?>
            <?php
            if (have_rows("qualivida_numbers_departaments")):
                ?>
                <ul class="beneficts-qualivida__list">
                    <?php
                    while (have_rows("qualivida_numbers_departaments")):
                        the_row();
                        ?>
                        <?php
                        if (!empty(get_sub_field("departament"))):
                            ?>
                            <li class="beneficts-qualivida__item shadow-card">
                                <img src="<?php echo IMG ?>/qualivida/phone.svg" alt="ícono de teléfono" title="Ícono de teléfono"
                                    class="beneficts-qualivida__item-icon">
                                <span class="beneficts-qualivida__item-title text">
                                    <?php echo get_sub_field("departament") ?>
                                </span>
                                <?php
                                if (have_rows("numbers")):
                                    ?>
                                    <ul class="beneficts-qualivida__item-list">
                                        <?php while (have_rows("numbers")):
                                            the_row();
                                            if (!empty(get_sub_field("number"))):
                                                ?>
                                                <li class="beneficts-qualivida__item-number text">
                                                    <?php echo get_sub_field("number") ?>
                                                </li>
                                            <?php endif; endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                            <?php
                        endif;
                    endwhile;
                    ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>