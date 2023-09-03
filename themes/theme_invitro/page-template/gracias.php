<?php
/*
    Template name: Gracias
*/

get_header();

?>

<main>
    <div class="banner-gracias" style="background-image: url(<?php echo get_field('img_banner')['url'] ?>);">
        <div class="contenedor">
            <div class="banner-gracias__content">
                <h1>¡Gracias por contactarnos!</h1>
                <p class="h3">Nos comunicaremos pronto.</p>
                <button class="button">Volver al Inicio</button>
                <p class="h3">También puedes seguirnos en nuestras redes sociales.</p>
                <ul>
                    <li><svg id="Icon_awesome-facebook-square" data-name="Icon awesome-facebook-square"
                            xmlns="http://www.w3.org/2000/svg" width="44.294" height="44.291"
                            viewBox="0 0 44.294 44.291">
                            <path id="Icon_awesome-facebook-square-2" data-name="Icon awesome-facebook-square"
                                d="M39.548,2.25H4.746A4.746,4.746,0,0,0,0,7V41.8a4.746,4.746,0,0,0,4.746,4.745h13.57V31.483H12.087V24.4h6.229v-5.4c0-6.144,3.658-9.538,9.261-9.538a37.739,37.739,0,0,1,5.489.478v6.031H29.975c-3.046,0-4,1.89-4,3.829v4.6h6.8l-1.088,7.088H25.978V46.541h13.57A4.746,4.746,0,0,0,44.294,41.8V7A4.746,4.746,0,0,0,39.548,2.25Z"
                                transform="translate(0 -2.25)" fill="#fff" />
                        </svg>
                    </li>
                    <li>
                        <svg id="Componente_219_2" data-name="Componente 219 – 2" xmlns="http://www.w3.org/2000/svg"
                            width="45" height="45" viewBox="0 0 45 45">
                            <rect id="Rectángulo_15103" data-name="Rectángulo 15103" width="45" height="45" rx="5"
                                fill="#fff" />
                            <path id="Icon_awesome-instagram" data-name="Icon awesome-instagram"
                                d="M17.575,10.8a9.01,9.01,0,1,0,9.011,9.01A9,9,0,0,0,17.575,10.8Zm0,14.868a5.858,5.858,0,1,1,5.858-5.858A5.869,5.869,0,0,1,17.575,25.667ZM29.056,10.43a2.1,2.1,0,1,1-2.1-2.1A2.1,2.1,0,0,1,29.056,10.43Zm5.968,2.133c-.133-2.815-.776-5.309-2.839-7.363s-4.549-2.7-7.364-2.839c-2.9-.165-11.6-.165-14.5,0-2.808.133-5.3.776-7.364,2.831S.259,9.74.118,12.555c-.165,2.9-.165,11.6,0,14.5.133,2.815.776,5.309,2.839,7.363s4.549,2.7,7.364,2.839c2.9.165,11.6.165,14.5,0,2.815-.133,5.309-.776,7.364-2.839s2.7-4.548,2.839-7.363c.165-2.9.165-11.59,0-14.492Zm-3.749,17.6a5.931,5.931,0,0,1-3.341,3.341c-2.313.917-7.8.706-10.36.706s-8.054.2-10.36-.706a5.931,5.931,0,0,1-3.341-3.341c-.918-2.313-.706-7.8-.706-10.359s-.2-8.053.706-10.359A5.931,5.931,0,0,1,7.216,6.11c2.313-.917,7.8-.706,10.36-.706s8.054-.2,10.36.706A5.931,5.931,0,0,1,31.276,9.45c.918,2.313.706,7.8.706,10.359S32.193,27.862,31.276,30.168Z"
                                transform="translate(5.27 2.596)" fill="#585858" />
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>