<section class="partners">
    <div class="contenedor">
        <div class="partners__content">
            <h2>
                <?php echo get_field("partner-list-title", "option") ?>
            </h2>
            <section class="splide splide_partners" aria-label="Slider de nuestros partners">
                <div class="splide__track">
                    <?php if (have_rows("parter_list_items", "option")): ?>
                        <ul class="splide__list">
                            <?php
                            while (have_rows("parter_list_items", "option")) {
                                the_row();
                                $img = get_sub_field("image");
                                $alt = $img["alt"];
                                $title = $alt;
                                $src = $img["url"];
                                $width = $img["width"];
                                $height = $img["height"];
                                ?>
                                <li class="splide__slide">
                                    <img src="<?php echo $src ?>" alt="<?php echo $alt ?>" title="<?php echo $title ?>"
                                        width="<?php echo $width ?>" height="<?php echo $height ?>" />
                                </li>
                            <?php } ?>
                        </ul>
                    <?php endif ?>
                </div>
            </section>
        </div>
    </div>
</section>