<?php get_header(); ?>
<?php anps_left_sidebar(); ?>

<?php
while (have_posts()) : the_post();
    $num_of_sidebars = anps_num_sidebars();
    $class = '';

    if( $num_of_sidebars > 0 ) {
        $class = 'page-content';
    }

    ?>
	<div class="<?php echo $class; ?> col-md-<?php echo 12-esc_attr($num_of_sidebars)*3; ?>">
        <?php get_template_part( 'templates/portfolio', get_option('anps_portfolio_single', 'style-1')); ?>
    </div>
<?php endwhile; ?>

<?php anps_right_sidebar(); ?>
<?php get_footer();
