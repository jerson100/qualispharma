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
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                        mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                        quis enim.</p>
                </div>
                <div class="banner-bottom__image">
                    <img src="<?php echo IMG ?>/partner/feliz-medico-adulto-medio-hombre-negocios-senior-dandose-mano-despues-acuerdo-clinica.jpg"
                        alt="" class="shadow-img">
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <div class="contenedor">
            <div class="map__container">
                <div class="map__left">
                    <img src="<?php echo IMG ?>/partner/Grupo 13889.png" alt="">
                </div>
                <div class="map__right">
                    <p>Contamos con partners especializados en el extranjero</p>
                </div>
            </div>
        </div>
    </div>
    <section class="partners">
        <div class="contenedor">
            <div class="partners__content">
                <h2>Nuestros Partners</h2>
                <section class="splide splide_partners" aria-label="Slider de nuestros partners">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php
                            $i = 0;
                            while (++$i <= 6) {
                                ?>
                                <li class="splide__slide"><img src="<?php echo IMG ?>/partner/<?php echo $i ?>.jpg" alt="">
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>