<section class="hero">
    <div class="hero-slider">
        <?php if (have_rows('hero_slider')) : while (have_rows('hero_slider')) : the_row(); ?>
            <?php $heroimg = get_sub_field('image') ?>
            <?php if ($heroimg) : ?><img class="hero-img" src="<?php echo $heroimg['url'] ?>" alt=""><?php endif; ?>
        <?php endwhile; endif; ?>
    </div>
    <div class="hero-content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="hero-main">
                        <div class="hero-main-content">
                            <?php if (get_field('hero_title')) :  ?><h1 data-aos="fade-up" data-aos-delay="300"><?php the_field('hero_title') ?></h1><?php endif; ?>
                            <?php if (get_field('hero_text')) :  ?><div data-aos="fade-up" data-aos-delay="400"><?php the_field('hero_text') ?></div><?php endif; ?>
                    <!-- <a data-aos="fade-up" data-aos-delay="500" data-aos-offset="-300" href="#patient-forms" class="button">Learn More About Patient Care <i class="fal fa-heart-circle"></i></a> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>