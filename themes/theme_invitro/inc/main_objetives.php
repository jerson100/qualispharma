<section class="main-objetives">
    <div class="contenedor">
        <h2>
            <?php echo get_field("main-objetives-title", "option") ?>
        </h2>
        <?php
        if (have_rows("main-objetives-list", "option")): ?>
            <ul class="main-objetives__list">
                <?php
                while (have_rows("main-objetives-list", "option")):
                    the_row();
                    $image = get_sub_field("icon");
                    if ($image):
                        ?>
                        <li class="main-objetives__item">
                            <?php
                            $url = $image["alt"];
                            $alt = $image["alt"];
                            $width = $image["width"];
                            $height = $image["height"];
                            $src = $image["url"];
                            $title = $image["title"];
                            ?>
                            <img src="<?php echo $src ?>" alt="<?php echo $alt ?>" width="<?php echo $width ?>"
                                height="<?php echo $height ?>" title="<?php echo $title ?>">
                            <p>
                                <?php echo get_sub_field("description") ?>
                            </p>
                        </li>
                    <?php endif; ?>
                <?php endwhile ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
<!-- <section class="objetivos">
    <div class="contenedor">
        <h2 class="down">Los principales objetivos son:</h2>
        <div class="row">
            <div class="objetivo">
                <div class="objetivo_img">
                    <img src="<?php echo IMG; ?>/obj3.svg" class="wh-100">
                </div>
                <div class="objetivo_txt">
                    <p>Facilitar el acceso a los medicamentos a los pacientes y permitirles seguir el tratamiento
                        recetado por su médico</p>
                </div>
            </div>
            <div class="objetivo">
                <div class="objetivo_img">
                    <img src="<?php echo IMG; ?>/obj2.svg" class="wh-100">
                </div>
                <div class="objetivo_txt">
                    <p>Reducir los costos de la atención médica para los pacientes</p>
                </div>
            </div>
            <div class="objetivo">
                <div class="objetivo_img">
                    <img src="<?php echo IMG; ?>/obj1.svg" class="wh-100">
                </div>
                <div class="objetivo_txt">
                    <p>Aumentar el cumplimiento del tratamiento: Al hacer que los medicamentos seas más asequibles
                        Qualivida busca aumentar la adherencia al tratamiento recetado por el médico</p>
                </div>
            </div>
        </div>
    </div>
</section> -->