<?php

/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>
<section id="title">
	<div class="container">
		<h2 class="title-head text-uppercase"><?= __('Blog Post', 'understrap') ?></h2>
	</div>
</section>
<div class="wrapper" id="single-wrapper">
	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">
		<div class="row">
			<?php get_template_part('global-templates/left-sidebar-check'); ?>
			<main class="site-main" id="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_post_thumbnail('post_head_image'); ?>
						<h1 class="post-title text-uppercase"><?php the_title() ?></h1>
						<time class="post-time" date="<?php the_time('d, M, Y'); ?>"><?php the_time('d-M-Y'); ?></time>
						<div class="content">
							<?php the_content(); ?>
						</div>
					<?php endwhile;
				else : ?>
					<p>Записей нет.</p>
				<?php endif; ?>
				<div class="sharebtn-group dropleft pb-5 pt-5">
					<button type="button" class="dropdown-toggle" data-toggle="dropdown"></button>
					<div class="dropdown-menu">
						<ul class="social d-flex">
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-google"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="releated-posts d-flex flex-wrap flex-md-nowrap pb-4">
					<?php
					$posts = get_posts(array(
						'numberposts' => 3,
						'orderby'     => 'date',
						'order'       => 'DESC',
						'post_type'   => 'post',
						'suppress_filters' => true,
					));
					foreach ($posts as $post) {
						setup_postdata($post);
					?>
						<div class="post-item mr-1">
							<a class="item-link" href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(array(263, 165)); ?>
								<h2 class="item-title text-uppercase w-75"><?php the_title(); ?></h2>
								<time class="item-time" date="<?php the_time('d, M, Y'); ?>"><?php the_time('d-M-Y'); ?></time>
							</a>
						</div>
					<?php }
					wp_reset_postdata();
					?>
				</div>
				<div class="comments">
					<span class="section-description">Visitors</span>
					<h2 class="section-title text-uppercase">Comments</h2>
					<?php
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;
					?>
				</div>
			</main>
			<?php get_template_part('global-templates/right-sidebar-check'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>