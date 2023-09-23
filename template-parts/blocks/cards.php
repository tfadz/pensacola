<section class="cards-section">
    <div class="container">
        <div class="row">
            <?php if (have_rows('cards')) : while (have_rows('cards')) : the_row(); ?>
                <?php $link = get_sub_field('link');$icon = get_sub_field('icon');  ?>
                <div class="col-md-6 col-lg-4">
                <a href="<?php if($link) : ?><?php echo $link['url'] ?><?php endif; ?>" class="card">
                    <div>
                        <div class="card-icon"><?php echo $icon; ?></div>
                        <?php $icon = get_sub_field('select_icon'); ?>
                        <?php if ($icon == 'globe') : ?>
                            <i class="fas fa-globe"></i>
                        <?php elseif ($icon == 'document') : ?>
                            <i class="far fa-file"></i>
                        <?php elseif ($icon == 'arrow') : ?>
                            <i class="fas fa-chevron-right"></i>
                        <?php elseif ($icon == 'video') : ?>
                            <i class="fas fa-video"></i>
                        <?php elseif ($icon == 'people') : ?>
                            <i class="fas fa-users"></i>
                        <?php elseif ($icon == 'person') : ?>
                            <i class="fas fa-user"></i>
                            
                        <?php endif; ?>
                        <div class="subhead"><?php the_sub_field('subhead') ?></div>
                        <h3><?php the_sub_field('title') ?></h3>
                    </div>
                </a>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>