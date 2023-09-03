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