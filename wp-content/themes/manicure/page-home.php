<?php
/**
 * Template Name: Home Page
 *
 * This is the Home page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package homeful
 */

get_header(); ?>

<?php get_template_part( './template-parts/sections/hero' ); ?>
<?php get_template_part( './template-parts/sections/about' ); ?>
<?php get_template_part( './template-parts/sections/numbers' ); ?>
<?php get_template_part( './template-parts/sections/photo-new' ); ?>
<?php get_template_part( './template-parts/sections/advantages' ); ?>
<?php get_template_part( './template-parts/sections/photo-study-class' ); ?>

<section class="section sub-section back-money-section sub-section--advantages shadow-text--light">
    <img class="img-br" src="<?php echo get_template_directory_uri() ?>/assets/images/border-img.png" alt="img">
    <div class="container-fluid">
        <div class="back-money shadow-text--super-light">
  <h2>Вернем Деньги!</h2>
            <p>Если по окончанию обучения<br>
                Вы не освоите материал</p>
            <hr>
            <div>Мы единственная школа,<br>
                которая дает Финансовую Гарантию!</div>
        </div>
    </div>
    <img class="img-girl" src="<?php echo get_template_directory_uri() ?>/assets/images/girl-image.png" alt="img">
</section>

<?php get_template_part( './template-parts/sections/partners' ); ?>
<?php get_template_part( './template-parts/sections/diplom' ); ?>
<?php get_template_part( './template-parts/sections/program' ); ?>
<?php get_template_part( './template-parts/sections/action' ); ?>
<?php get_template_part( './template-parts/sections/reviews' ); ?>
<?php get_template_part( './template-parts/sections/grafic' ); ?>
<?php get_template_part( './template-parts/sections/teachers' ); ?>

<?php get_template_part( './template-parts/sections/faq' ); ?>
<?php get_template_part( './template-parts/sections/info' ); ?>
<?php get_template_part( './template-parts/sections/realy-study' ); ?>
<?php get_template_part( './template-parts/sections/contacts' ); ?>
<?php //get_template_part( './template-parts/sections/section-pink' ); ?>
<?php //get_template_part( './template-parts/sections/super' ); ?>

<?php //get_template_part( './template-parts/sections/sing-up' ); ?>

<?php //get_template_part( './template-parts/sections/photo2' ); ?>


<?php //get_template_part( './template-parts/sections/text' ); ?>

<?php get_footer();?>
<?php get_template_part( './template-parts/blocks/popup' ); ?>
<?php get_template_part( './template-parts/blocks/alert' ); ?>
</body>

</html>

