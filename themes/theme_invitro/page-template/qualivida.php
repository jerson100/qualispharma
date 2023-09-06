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
            <h2>¿Qué línea manejamos?</h2>
            <div class="splide splide-navigation-dott why-line-we-handle__splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php $i = 0;
                        while (++$i <= 3) { ?>
                            <li class="splide__slide">
                                <div class="why-line-we-handle__grid">
                                    <div class="why-line-we-handle__left">
                                        <div class="why-line-we-handle__img-container">
                                            <img src="" alt="" class="why-line-we-handle__img">
                                        </div>
                                    </div>
                                    <div class="why-line-we-handle__right">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                            eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                            montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                            eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,
                                            fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut,
                                            imperdiet a, venenatis vitae, justo.</p>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="beneficts-qualivida">
        <div class="contenedor">
            <h2 class="down">Accede a tus beneficios Qualivida llamando al:</h2>
            <ul class="beneficts-qualivida__list">
                <li class="beneficts-qualivida__item shadow-card">
                    <img src="<?php echo IMG ?>/qualivida/phone.svg" alt="" class="beneficts-qualivida__item-icon">
                    <span class="beneficts-qualivida__item-title text">Nivel Nacional</span>
                    <ul class="beneficts-qualivida__item-list">
                        <li class="beneficts-qualivida__item-number text">6270910</li>
                        <li class="beneficts-qualivida__item-number text">956209230</li>
                    </ul>
                </li>
                <li class="beneficts-qualivida__item shadow-card">
                    <img src="<?php echo IMG ?>/qualivida/phone.svg" alt="" class="beneficts-qualivida__item-icon">
                    <span class="beneficts-qualivida__item-title text">Arequipa</span>
                    <ul class="beneficts-qualivida__item-list">
                        <li class="beneficts-qualivida__item-number text">054 695552</li>
                        <li class="beneficts-qualivida__item-number text">982888566</li>
                    </ul>
                </li>
                <li class="beneficts-qualivida__item shadow-card">
                    <img src="<?php echo IMG ?>/qualivida/phone.svg" alt="" class="beneficts-qualivida__item-icon">
                    <span class="beneficts-qualivida__item-title text">Piura</span>
                    <ul class="beneficts-qualivida__item-list">
                        <li class="beneficts-qualivida__item-number text">992798777</li>
                        <li class="beneficts-qualivida__item-number text">954700592</li>
                    </ul>
                </li>
                <li class="beneficts-qualivida__item shadow-card">
                    <img src="<?php echo IMG ?>/qualivida/phone.svg" alt="" class="beneficts-qualivida__item-icon">
                    <span class="beneficts-qualivida__item-title text">Trujillo</span>
                    <ul class="beneficts-qualivida__item-list">
                        <li class="beneficts-qualivida__item-number text">975404636</li>
                        <li class="beneficts-qualivida__item-number text">920755308</li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>