<section class="section about-school" id="about">
    <img class="img-br" src="<?php echo get_template_directory_uri() ?>/assets/images/border-img.png" alt="img">
    <?php if (get_field('about-us-img')): ?>
        <img src=" <?php the_field('about-us-img') ?>" alt="img" class="about-school_bg">
    <?php endif; ?>
    <div class="container-fluid">
        <div class="about-school_content shadow-text--super-light">
            <?php if (get_field('about-us-title')): ?>
                <h3 class="title"><?php the_field('aabout-us-title') ?></h3>
            <?php endif; ?>
            <div class="about-school_video-block">
                <?php if (get_field('about-video_link')): ?>
                    <div class="about-school_video">
<!--                        <video poster="--><?php //the_field('about-img-video') ?><!--" id="video-about-school" muted playsinline-->
<!--                               preload="auto" loop="loop" controls="controls">-->
<!--                            <source type="video/mp4" src="--><?php //the_field('about-video') ?><!--">-->
<!--                            <source type="video/webm" src="--><?php //the_field('about-video') ?><!--">-->
<!--                        </video>-->
                        <iframe width="560" height="315" src="<?php the_field('about-video_link') ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                <?php endif; ?>
                <div class="about-school_desc shadow-text--super-light">
                    <?php if (get_field('about-desc-title')): ?>
                        <div class="about-school_desc-title"><?php the_field('about-desc-title') ?></div>
                    <?php endif; ?>
                    <?php if (get_field('about-desc-text')): ?>
                        <div class="about-school_desc-text">
                            <?php the_field('about-desc-text') ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="about-school_icon-block">
                <?php if (have_rows('about-block-icon')): ?>
                <ul class="about-school_list">
                    <?php while (have_rows('about-block-icon')): the_row(); ?>

                    <li class="about-school_item shadow-text--super-light">
                        <?php if (get_sub_field('about-block-icon-img')): ?>
                        <div class="about-school_item-block">
                            <img src=" <?php the_sub_field('about-block-icon-img'); ?>" alt="icon" class="about-school_icon">
                        </div>
                        <?php endif; ?>
                        <?php the_sub_field('about-block-icon-desc'); ?>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>