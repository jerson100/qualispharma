<?php
/*
    Template name: nosotros
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

    <section class="somos">
        <div class="contenedor">
            <div class="contenido">
                <h2>¿Quiénes somos?</h2>
                <p>Somos una empresa farmacéutica con altos estándares de calidad, ofrecemos productos innovadores,
                    productos de alta calidad que provienen de plantas certificadas por países de alta vigilancia. Todos
                    nuestros productos cuentan con estudios de bioequivalencia</p>
            </div>
        </div>
    </section>
    <section class="informacion">
        <div class="contenedor">
            <div class="informacion__content">
                <section class="card-information">
                    <div class="card-information__header">
                        <svg class="card-information__logo" id="Grupo_13780" data-name="Grupo 13780"
                            xmlns="http://www.w3.org/2000/svg" width="178.685" height="178.666"
                            viewBox="0 0 178.685 178.666">
                            <path id="Trazado_5349" data-name="Trazado 5349"
                                d="M-595.537,834.576a111.826,111.826,0,0,1,15.063,2.679c1.456.4,2.929.761,4.344,1.276a4.568,4.568,0,0,1,3.034,5.679,4.516,4.516,0,0,1-5.773,3.108,83.183,83.183,0,0,0-25.773-3.581A78.676,78.676,0,0,0-652.081,860.6c-16.777,13.116-26.8,30.371-30.1,51.363a80,80,0,0,0,40.661,82.155,78.466,78.466,0,0,0,43.79,9.774,80,80,0,0,0,73.456-64.247,78.62,78.62,0,0,0-1.616-38.089c-.161-.558-.324-1.116-.459-1.681a4.57,4.57,0,0,1,3.159-5.752,4.532,4.532,0,0,1,5.666,3.054,65.052,65.052,0,0,1,2.578,10.3c4.493,26.327-1.117,50.315-17.492,71.412-14.366,18.51-33.419,29.816-56.615,33.229-30.829,4.536-57.367-4.681-78.973-27.092-13.334-13.831-20.992-30.641-23.545-49.724-.184-1.377-.379-2.753-.569-4.129V916.526c.462-3.152.718-6.35,1.416-9.449q12.168-54.04,65.318-69.776a95.415,95.415,0,0,1,15.216-2.725Z"
                                transform="translate(692.134 -834.576)" fill="#fff" />
                            <path id="Trazado_5350" data-name="Trazado 5350"
                                d="M-552.5,919.879a52.81,52.81,0,0,0-52.072,44.082,53.224,53.224,0,0,0,41.438,60.912,53.258,53.258,0,0,0,63.307-42.509,57.641,57.641,0,0,0,.648-13.017,4.749,4.749,0,0,1,1.912-4.425,4.331,4.331,0,0,1,4.617-.449,4.756,4.756,0,0,1,2.752,4.314,58.729,58.729,0,0,1-7.4,33.879c-9.368,16.835-23.6,27.379-42.475,31.385-26.087,5.537-53.542-7.052-66.638-30.315a61.5,61.5,0,0,1-8.107-34.11,62.433,62.433,0,0,1,51.539-58.286,49.92,49.92,0,0,1,14.9-.722,4.94,4.94,0,0,1,4.53,5.232c-.136,2.486-2.06,4.051-4.942,4.031C-549.827,919.871-551.162,919.879-552.5,919.879Z"
                                transform="translate(641.701 -883.864)" fill="#fff" />
                            <path id="Trazado_5351" data-name="Trazado 5351"
                                d="M-417.981,898.387c0-2.323.021-4.647,0-6.969a5.425,5.425,0,0,1,1.663-4.069q13.064-13.056,26.123-26.118a4.539,4.539,0,0,1,5.226-1.3,4.72,4.72,0,0,1,3.02,4.675c.064,3.6.077,7.2,0,10.8-.029,1.45.489,1.934,1.921,1.906,3.6-.07,7.2-.06,10.8.005a4.712,4.712,0,0,1,4.665,3.034c.813,2.033.15,3.741-1.314,5.225q-.245.248-.491.5-12.567,12.568-25.12,25.149a6.627,6.627,0,0,1-5.107,2.142c-4.355-.076-8.712.017-13.068-.047a3.9,3.9,0,0,0-3.056,1.289q-13.822,13.9-27.705,27.739a5.811,5.811,0,0,1-3.166,2.024,4.58,4.58,0,0,1-4.986-2.383,4.64,4.64,0,0,1,1-5.583q7.853-7.918,15.76-15.782c4.23-4.231,8.445-8.477,12.705-12.677a3.461,3.461,0,0,0,1.142-2.765C-418.028,902.918-417.983,900.652-417.981,898.387Zm26.776-22.251-.627-.1q-8.194,8.17-16.39,16.339a2.08,2.08,0,0,0-.492,1.614c0,2.845.046,5.692-.02,8.536-.029,1.264.514,1.592,1.669,1.569q4.092-.08,8.187,0a3.132,3.132,0,0,0,2.447-1.049c4.991-5.029,10.013-10.026,15.012-15.046.29-.291.829-.507.579-1.162-2.011-.093-4.041-.1-6.05-.3a4.277,4.277,0,0,1-4.286-4.388C-391.328,880.158-391.205,878.142-391.205,876.136Z"
                                transform="translate(534.021 -850.839)" fill="#fff" />
                            <path id="Trazado_5352" data-name="Trazado 5352"
                                d="M-502.369,1049.094a26.3,26.3,0,0,0,26.439-25.777c.1-3.24,2.014-5.34,4.8-5.27,2.693.067,4.427,2.2,4.471,5.384a31.47,31.47,0,0,1-.788,6.908c-3.253,15.5-17.046,27.079-32.825,28.036a35.747,35.747,0,0,1-37.611-31.218A35.706,35.706,0,0,1-507.646,987.3a29.445,29.445,0,0,1,5.032-.34,4.677,4.677,0,0,1,4.86,4.461,4.617,4.617,0,0,1-4.577,4.752,34.286,34.286,0,0,0-7.219,1.027,26.59,26.59,0,0,0-19.256,27.733c.695,11.174,9.893,21.618,21.412,23.762A26.5,26.5,0,0,0-502.369,1049.094Z"
                                transform="translate(591.964 -933.71)" fill="#fff" />
                        </svg>
                        <h3 class="card-information__title">Misión</h3>
                    </div>
                    <div class="card-information__body">
                        <p>Nos comprometemos a garantizar la seguridad de nuestros productos y a cumplir con los
                            estándares regulatorios y de calidad en todas nuestras operaciones</p>
                    </div>
                </section>
                <section class="card-information card-information--yellow">
                    <div class="card-information__header">
                        <svg class="card-information__logo" id="Grupo_13781" data-name="Grupo 13781"
                            xmlns="http://www.w3.org/2000/svg" width="178.755" height="178.662"
                            viewBox="0 0 178.755 178.662">
                            <path id="Trazado_5353" data-name="Trazado 5353"
                                d="M-10.254,1001.913c2.662-4.223,6.212-7.675,9.831-11.025a129.425,129.425,0,0,1,47.735-28.344A98.561,98.561,0,0,1,81.923,957.3a106.932,106.932,0,0,1,39.28,9.211,129.5,129.5,0,0,1,40.777,27.833c1.711,1.735,3.328,3.572,4.88,5.452,2.187,2.649,2.189,5.072.007,7.724a109.686,109.686,0,0,1-21.747,19.744c-14.95,10.559-31.253,18.008-49.364,21.27a96.638,96.638,0,0,1-46.611-3.219A127.617,127.617,0,0,1-3.783,1013.13a39.336,39.336,0,0,1-6.471-7.73Zm89.313-33.726a35.469,35.469,0,1,0,35.43,35.548A35.526,35.526,0,0,0,79.059,968.188Zm37.533,62.633c.8-.259,1.022-.315,1.231-.4.641-.272,1.286-.536,1.914-.838a130.559,130.559,0,0,0,34.666-24.547c1.093-1.065,1.131-1.654.021-2.744a127.909,127.909,0,0,0-34.817-24.618c-.811-.385-1.646-.72-2.47-1.079a49.156,49.156,0,0,1,8.271,27.047A46.21,46.21,0,0,1,116.591,1030.821ZM41.23,976.507a72.442,72.442,0,0,0-9.363,4.561,131.672,131.672,0,0,0-28.425,21.417c-.944.923-.956,1.5.017,2.361,1.611,1.418,3.106,2.966,4.695,4.411A123.473,123.473,0,0,0,39.012,1029.9a3.484,3.484,0,0,0,2.052.638C29.77,1012.567,29.766,994.74,41.23,976.507Z"
                                transform="translate(10.254 -914.383)" fill="#fff" />
                            <path id="Trazado_5354" data-name="Trazado 5354"
                                d="M236.915,834.576a6.113,6.113,0,0,1,3.658,6.318c-.144,3.651-.012,7.312-.045,10.969a5.365,5.365,0,1,1-10.713,0c-.033-3.657.1-7.318-.045-10.968a6.109,6.109,0,0,1,3.659-6.317Z"
                                transform="translate(-145.898 -834.576)" fill="#fff" />
                            <path id="Trazado_5355" data-name="Trazado 5355"
                                d="M118.46,856.233a5.087,5.087,0,0,1,4.264,2.68c2.39,4.107,4.775,8.218,7.047,12.39a5.394,5.394,0,0,1-9.317,5.433c-2.508-4.169-4.959-8.383-7.211-12.694C111.352,860.423,113.965,856.277,118.46,856.233Z"
                                transform="translate(-69.688 -848.666)" fill="#fff" />
                            <path id="Trazado_5356" data-name="Trazado 5356"
                                d="M338.6,856.235c4.378.027,7.148,3.891,5.526,7.33a116.994,116.994,0,0,1-7.743,13.628,5.36,5.36,0,0,1-9.2-5.327c2.4-4.577,5.014-9.043,7.669-13.477A4.525,4.525,0,0,1,338.6,856.235Z"
                                transform="translate(-208.945 -848.667)" fill="#fff" />
                            <path id="Trazado_5357" data-name="Trazado 5357"
                                d="M118.462,1280.922c-4.347-.057-7.1-3.959-5.477-7.356a124.412,124.412,0,0,1,7.726-13.591,5.232,5.232,0,0,1,6.841-1.473c2.39,1.336,3.661,4.289,2.4,6.714-2.4,4.622-5.046,9.124-7.728,13.593A4.489,4.489,0,0,1,118.462,1280.922Z"
                                transform="translate(-69.619 -1109.941)" fill="#fff" />
                            <path id="Trazado_5358" data-name="Trazado 5358"
                                d="M338.7,1280.9a5.062,5.062,0,0,1-4.125-2.644c-2.4-4.116-4.788-8.239-7.067-12.422a5.4,5.4,0,0,1,9.34-5.4c2.485,4.131,4.912,8.305,7.151,12.573C345.945,1276.717,343.278,1280.938,338.7,1280.9Z"
                                transform="translate(-209.045 -1109.926)" fill="#fff" />
                            <path id="Trazado_5359" data-name="Trazado 5359"
                                d="M229.882,1291.43c0-2.088-.037-4.176.012-6.262a5.431,5.431,0,0,1,5.367-5.281,5.368,5.368,0,0,1,5.314,5.154q.113,6.434,0,12.872a5.179,5.179,0,0,1-5.354,5.043,5.267,5.267,0,0,1-5.329-5.089q-.009-.174-.009-.348Q229.879,1294.474,229.882,1291.43Z"
                                transform="translate(-145.969 -1124.292)" fill="#fff" />
                            <path id="Trazado_5360" data-name="Trazado 5360"
                                d="M193.584,1056.461a18.05,18.05,0,1,1,17.969,18.051A18.183,18.183,0,0,1,193.584,1056.461Zm18.084-7.193a7.193,7.193,0,1,0,7.159,7.312A7.4,7.4,0,0,0,211.668,1049.268Z"
                                transform="translate(-122.362 -967.188)" fill="#fff" />
                        </svg>
                        <h3 class="card-information__title">Visión</h3>
                    </div>
                    <div class="card-information__body">
                        <p>Nos enfocamos en satisfacer las necesidades y expectativas de los pacientes y en
                            ofrecerles
                            un tratamiento efectivo y seguro</p>
                    </div>
                </section>
                <section class="informacion__valores">
                    <h3 class="informacion__valores-section-title">Valores</h3>
                    <ul class="informacion__valores-list">
                        <li class="informacion__valores-item">
                            <img src="<?php echo IMG ?>/nosotros/01.svg" alt="" class="informacion__valores-img" />
                            <p class="informacion__valores-title">Calidad</p>
                        </li>
                        <li class="informacion__valores-item">
                            <img src="<?php echo IMG ?>/nosotros/02.svg" alt="" class="informacion__valores-img" />
                            <p class="informacion__valores-title">Compromiso</p>
                        </li>
                        <li class="informacion__valores-item">
                            <img src="<?php echo IMG ?>/nosotros/03.svg" alt="" class="informacion__valores-img" />
                            <p class="informacion__valores-title">Seguridad</p>
                        </li>
                        <li class="informacion__valores-item">
                            <img src="<?php echo IMG ?>/nosotros/04.svg" alt="" class="informacion__valores-img" />
                            <p class="informacion__valores-title">Orientación al paciente</p>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </section>
    <section class="capacidades">
        <div class="contenedor">
            <h2>Capacidades</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                massa.
                Cum sociis natoque penatibus et magnis dis parturient montes</p>
            <div class="capacidades__content">
                <div class="capacidades__left">
                    <ul>
                        <li>Lorem ipsum</li>
                        <li>Lorem ipsum</li>
                        <li>Lorem ipsum</li>
                        <li>Lorem ipsum</li>
                        <li>Lorem ipsum</li>
                        <li>Lorem ipsum</li>
                    </ul>
                </div>
                <div class="capacidades__right">
                    <img src="<?php echo IMG ?>/nosotros/young-caucasian-pharmacist-and-indian-female-pharm-2022-10-21-21-00-40-utc.jpg"
                        alt="">
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>