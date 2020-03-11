<?php
/*
Template Name: Single Project Page
Template Post Type: specializations
*/
defined('ABSPATH') || exit;
get_header();
$container = get_theme_mod('understrap_container_type');
?>
<section id="title">
    <div class="container">
        <h2 class="title-head text-uppercase"><?php 'Project' . the_title() ?></h2>
    </div>
</section>
<div class="wrapper" id="project-wrapper">
    <div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">
        <main class="site-main" id="main">
            <?php
            $posts = get_posts(array(
                'numberposts' => 1,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'post_type'   => 'specializations',
                'suppress_filters' => true,
            ));
            foreach ($posts as $post) {
                setup_postdata($post);
            ?>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="featured-image-section">
                            <?php the_post_thumbnail('post_thumbnail'); ?>
                        </div>
                        <div class="content row">
                            <div class="col-sm-7 col-xs-12">
                                <?php the_content(); ?>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
                wp_reset_postdata();
            ?>
        </main>
    </div>
</div>
<?php get_footer(); ?>