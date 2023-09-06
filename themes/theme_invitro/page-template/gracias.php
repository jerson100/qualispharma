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
                <?php get_template_part("/inc/social") ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>