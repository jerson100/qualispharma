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
    <div class="banner-bottom">
        <div class="contenedor">
            <div class="banner-bottom__content">
                <div class="banner-bottom__bg-text">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                        mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                        quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                        rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.
                        Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend
                        tellus.</p>
                </div>
                <div class="banner-bottom__image">
                    <img src="<?php echo IMG ?>/fabricacion/the-coronavirus-or-covid-vaccine-researched-by-pha-2021-12-09-22-08-34-utc.jpg"
                        alt="" class="shadow-img">
                </div>
            </div>
        </div>
    </div>
    <div class="banner-message">
        <div class="contenedor">
            <p class="banner-message__text">Tu salud es nuestra prioridad, por eso conservamos la más alta calidad para
                todos nuestros productos.
            </p>
        </div>
    </div>
    <div class="nuestras-plantas">
        <div class="contenedor">
            <div class="nuestras-plantas__content">
                <h2 class="nuestras-plantas__title">Nuestras Plantas</h2>
                <section class="splide nuestras-plantas__splide splide-navigation-dott" aria-label="Nuestras plantas">
                    <div class="splide__track">
                        <ul class="splide__list nuestras-plantas__list">
                            <li class="splide__slide nuestras-plantas__item">
                                <div class="nuestras-plantas__left">
                                    <img src="<?php echo IMG ?>/fabricacion/interior-of-a-lab-in-a-pharmacy-2022-12-16-22-20-16-utc.jpg"
                                        class="shadow-img" alt="">
                                </div>
                                <div class="nuestras-plantas__right">
                                    <div class="nuestras-plantas__right-top">
                                        <h3>Vadodara, Gujarat, INDIA</h3>
                                        <span>EU GMP</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget
                                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                        montes,
                                        nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                                        pretium
                                        quis,
                                        sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                        nec,
                                        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                        justo.
                                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                                        Vivamus
                                        elementum semper nisi. Aenean vulputate eleifend tellus.</p>
                                </div>
                            </li>
                            <li class="splide__slide nuestras-plantas__item">
                                <div class="nuestras-plantas__left">
                                    <img src="<?php echo IMG ?>/fabricacion/interior-of-a-lab-in-a-pharmacy-2022-12-16-22-20-16-utc.jpg"
                                        class="shadow-img" alt="">
                                </div>
                                <div class="nuestras-plantas__right">
                                    <div class="nuestras-plantas__right-top">
                                        <h3>Vadodara, Gujarat, INDIA</h3>
                                        <span>EU GMP</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget
                                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                        montes,
                                        nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                                        pretium
                                        quis,
                                        sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                        nec,
                                        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                        justo.
                                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                                        Vivamus
                                        elementum semper nisi. Aenean vulputate eleifend tellus.</p>
                                </div>
                            </li>
                            <li class="splide__slide nuestras-plantas__item">
                                <div class="nuestras-plantas__left">
                                    <img src="<?php echo IMG ?>/fabricacion/interior-of-a-lab-in-a-pharmacy-2022-12-16-22-20-16-utc.jpg"
                                        class="shadow-img" alt="">
                                </div>
                                <div class="nuestras-plantas__right">
                                    <div class="nuestras-plantas__right-top">
                                        <h3>Vadodara, Gujarat, INDIA</h3>
                                        <span>EU GMP</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                                        eget
                                        dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient
                                        montes,
                                        nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                                        pretium
                                        quis,
                                        sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet
                                        nec,
                                        vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae,
                                        justo.
                                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                                        Vivamus
                                        elementum semper nisi. Aenean vulputate eleifend tellus.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>

            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>