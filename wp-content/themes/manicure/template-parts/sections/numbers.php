<section class="section numbers">
    <img class="img-br" src="<?php echo get_template_directory_uri() ?>/assets/images/border-img.png" alt="img">
    <div class="container-fluid">
        <?php if (get_field('numbers-title')): ?>
            <div class="numbers_content shadow-text--light">
                <h3 class="title"><?php the_field('numbers-title') ?></h3>
            </div>
        <?php endif; ?>
        <?php if (have_rows('numbers-list')): ?>
            <ul class="numbers_list">
                <?php while (have_rows('numbers-list')): the_row(); ?>
                    <li class="numbers_item">
                        <?php if (get_sub_field('numbers-count')): ?>
                            <div class="numbers_count js-counter shadow-text">
                                <?php the_sub_field('numbers-count'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (get_sub_field('numbers-desc')): ?>
                            <div class="numbers_desc shadow-text--super-light">
                                <?php the_sub_field('numbers-desc'); ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>