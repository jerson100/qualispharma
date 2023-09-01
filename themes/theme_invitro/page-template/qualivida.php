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

    <section class="banner-bottom">
        <div class="contenedor">
            <div class="banner-bottom__content">
                <div class="banner-bottom__bg-text">
                    <p>
                        <?php echo get_field('descripcion_des') ?>
                    </p>
                </div>
                <div class="banner-bottom__image">
                    <img src="<?php echo get_field('imagen_des')['url'] ?>"
                        alt="<?php echo get_field('imagen_des')['alt'] ?>"
                        title="<?php echo get_field('imagen_des')['title'] ?>"
                        width="<?php echo get_field('imagen_des')['width'] ?>"
                        height="<?php echo get_field('imagen_des')['height'] ?>" class="shadow-img" loading="lazy">
                </div>
            </div>
        </div>
    </section>
    <section class="main-objetives">
        <div class="contenedor">
            <h2>Los principales objetivos son</h2>
            <ul class="main-objetives__list">
                <li class="main-objetives__item">
                    <img src="<?php echo IMG ?>/obj3.svg" alt="">
                    <p>Facilitar el acceso a los medicamentos a los pacientes y permitirles seguir el tratamiento
                        recetado por su médico</p>
                </li>
                <li class="main-objetives__item">
                    <img src="<?php echo IMG ?>/obj2.svg" alt="">
                    <p>Reducir los costos de la atención médica para los pacientes</p>
                </li>
                <li class="main-objetives__item">
                    <img src="<?php echo IMG ?>/obj1.svg" alt="">
                    <p>Aumentar el cumplimiento del tratamiento: Al hacer que los medicamentos seas más asequibles
                        Qualivida busca aumentar la adherencia al tratamiento recetado por el médico</p>
                </li>
            </ul>
        </div>
    </section>
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
                                            imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                                            Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                                            eleifend tellus.</p>
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
            <h2>Accede a tus beneficios Qualivida llamando al:</h2>
            <ul class="beneficts-qualivida__list">
                <li class="beneficts-qualivida__item shadow-card">
                    <img src="<?php echo IMG ?>/qualivida/phone.svg" alt="" class="beneficts-qualivida__item-icon">
                    <span class="beneficts-qualivida__item-title">Nivel Nacional</span>
                    <ul class="beneficts-qualivida__item-list">
                        <li class="beneficts-qualivida__item-number">6270910</li>
                        <li class="beneficts-qualivida__item-number">956209230</li>
                    </ul>
                </li>
                <li class="beneficts-qualivida__item shadow-card">
                    <img src="<?php echo IMG ?>/qualivida/phone.svg" alt="" class="beneficts-qualivida__item-icon">
                    <span class="beneficts-qualivida__item-title">Arequipa</span>
                    <ul class="beneficts-qualivida__item-list">
                        <li class="beneficts-qualivida__item-number">054 695552</li>
                        <li class="beneficts-qualivida__item-number">982888566</li>
                    </ul>
                </li>
                <li class="beneficts-qualivida__item shadow-card">
                    <img src="<?php echo IMG ?>/qualivida/phone.svg" alt="" class="beneficts-qualivida__item-icon">
                    <span class="beneficts-qualivida__item-title">Piura</span>
                    <ul class="beneficts-qualivida__item-list">
                        <li class="beneficts-qualivida__item-number">992798777</li>
                        <li class="beneficts-qualivida__item-number">954700592</li>
                    </ul>
                </li>
                <li class="beneficts-qualivida__item shadow-card">
                    <img src="<?php echo IMG ?>/qualivida/phone.svg" alt="" class="beneficts-qualivida__item-icon">
                    <span class="beneficts-qualivida__item-title">Trujillo</span>
                    <ul class="beneficts-qualivida__item-list">
                        <li class="beneficts-qualivida__item-number">975404636</li>
                        <li class="beneficts-qualivida__item-number">920755308</li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>