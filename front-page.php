<?php
/*
Template Name: Front Page
*/
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
?>
<section id="banner">
    <div class="container">
        <div class="carddeck col-md-8 col-lg-5 p-0">
            <div class="headblock">
                <h2>We are leading consulting company</h2>
                <span>Choose your industry</span>
            </div>
            <ul class="d-flex flex-wrap">
                <li class="item">
                    <a href="#">
                        <picture>
                            <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>icon_education.webp" type="image/webp">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/' ?>icon_education.png" alt="Industry Education Icon">
                        </picture>
                        <div class="title d-flex justify-content-between align-items-center">
                            <h3>Education</h3>
                            <span class="fas fa-chevron-right"></span>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="#">
                        <picture>
                            <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>icon_business.webp" type="image/webp">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/' ?>icon_business.png" alt="Industry Business Icon">
                        </picture>
                        <div class="title d-flex justify-content-between align-items-center">
                            <h3>Bussines</h3>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="#">
                        <picture>
                            <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>icon_technology.webp" type="image/webp">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/' ?>icon_technology.png" alt="Industry Technology Icon">
                        </picture>
                        <div class="title d-flex justify-content-between align-items-center">
                            <h3>Technology</h3>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="#">
                        <picture>
                            <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>icon_real_estate.webp" type="image/webp">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/' ?>icon_real_estate.png" alt="Industry Real Estate Icon">
                        </picture>
                        <div class="title d-flex justify-content-between align-items-center">
                            <h3>Real estate</h3>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a href="#">
                        <picture>
                            <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>icon_banking.webp" type="image/webp">
                            <img src="<?= get_stylesheet_directory_uri() . '/img/' ?>icon_banking.png" alt="Industry Banking Icon">
                        </picture>
                        <div class="title d-flex justify-content-between align-items-center">
                            <h3>Banking</h3>
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </a>
                </li>
                <li class="item-btn d-flex justify-content-center align-items-center">
                    <a class="btn" href="#">View More</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="carousel" class="container-fluid carousel-girls slide m-auto d-none d-lg-block" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active text-center">
                <picture>
                    <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>bg.webp" type="image/webp">
                    <img src="<?= get_stylesheet_directory_uri() . '/img/' ?>bg.jpg" alt="First Backgroud Image">
                </picture>
            </div>
            <div class="carousel-item text-center">
                <picture>
                    <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>bg-2.webp" type="image/webp">
                    <img src="<?= get_stylesheet_directory_uri() . '/img/' ?>bg-2.jpg" alt="Second Backgroud Image">
                </picture>
            </div>
            <div class="carousel-item text-center">
                <picture>
                    <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>bg-3.webp" type="image/webp">
                    <img src="<?= get_stylesheet_directory_uri() . '/img/' ?>bg-3.jpg" alt="Third Backgroud Image">
                </picture>
            </div>
        </div>
    </div>
</section>
<section id="about">
    <div class="container row">
        <div class="about-description col-12 col-md-6 text-left text-md-right">
            <span class="section-description"><?php the_field('section_about_description'); ?></span>
            <h2 class="section-title text-uppercase"><?php the_field('section_about_title'); ?></h2>
            <p><?php the_field('section_about_info'); ?></p>
            <a class="btn mb-3" href="#">Read More</a>
        </div>
        <div class="col-12 col-md-6 d-none d-md-block">
            <?php
            $about_pic = get_field('section_about_image');
            if (!empty($about_pic)) : ?>
                <img src="<?php echo $about_pic['url']; ?>" alt="<?php echo $about_pic['alt']; ?>" />
            <?php endif; ?>
            <div class="badge mx-auto">
                <div class="solid-wrapper">
                    <img class="img-fluid mx-auto d-block mb-3" src="<?= get_stylesheet_directory_uri() . '/img/' ?>badge_icon.png" alt="25 Years Achievment">
                    <span>25</span>
                    <p>year of excellence</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="our-steps">
    <div class="container">
        <span class="section-description"><?php the_field('section_steps_description'); ?></span>
        <h2 class="section-title text-uppercase"><?php the_field('section_steps_title'); ?></h2>
        <?php if (have_rows('new_step')) : ?>
            <ul class="deck row flex-wrap">
                <?php while (have_rows('new_step')) : the_row();
                    $step_icon =  get_sub_field('step_image');
                    $step_number = get_sub_field('step_number');
                    $step_title =  get_sub_field('step_title');
                    $step_info =   get_sub_field('step_description');
                ?>
                    <li class="item col-lg-3 text-center text-md-left">
                        <img src="<?php echo $step_icon['url'] ?>" alt="<?php echo $step_icon['alt'] ?>" />
                        <h4><?php echo $step_number; ?></h4>
                        <h3><?php echo $step_title; ?></h3>
                        <p><?php echo $step_info; ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
<section id="feature-projects">
    <div class="container">
        <h2 class="section-description"><?php the_field('section_featured_projects_description'); ?></h2>
        <span class="section-title text-uppercase"><?php the_field('section_featured_projects_title'); ?></span>
        <div class="row mb-4">
            <ul class="col-12 col-md-6 mt-5">
                <li class="mb-3 mb-xl-0 project-item">
                    <picture>
                        <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>banking.webp" type="image/webp">
                        <img class="img-fluid mx-auto d-block" src="<?= get_stylesheet_directory_uri() . '/img/' ?>banking.png" alt="Banking Industry Picture"> 
                    </picture>
                    <h4>Banking</h4>
                    <div class="project-corner project-banking-corner">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="project-overlay project-banking-overlay">
                        <h3>Banking</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and...</p>
                    </div>
                </li>
            </ul>
            <ul class="col-12 col-md-6 mt-1 mt-md-5 d-flex flex-wrap justify-content-between">
                <li class="project-item project-education mb-3 mb-xl-0 mx-auto mx-xl-0">
                    <picture>
                        <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>education.webp" type="image/webp">
                        <img class="img-fluid mx-auto h-100" src="<?= get_stylesheet_directory_uri() . '/img/' ?>education.png" alt="Education Industry Picture">
                    </picture>
                    <h4>Education</h4>
                    <div class="project-corner project-education-corner">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="project-overlay project-education-overlay">
                        <h3>Education</h3>
                        <p class="w-75">Lorem Ipsum is simply dummy text of the printing and...</p>
                    </div>
                </li>
                <li class="project-item project-technology mb-3 mb-xl-0 mx-auto mx-xl-0">
                    <picture>
                        <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>technology.webp" type="image/webp">
                        <img class="img-fluid mx-auto h-100" src="<?= get_stylesheet_directory_uri() . '/img/' ?>technology.png" alt="Technology Industry Picture">
                    </picture>
                    <h4>Technology</h4>
                    <div class="project-corner project-technology-corner">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="project-overlay project-technology-overlay">
                        <h3>Technology</h3>
                        <p class="w-75">Lorem Ipsum is simply dummy text of the printing and...</p>
                    </div>
                </li>
                <li class="project-item align-self-end mx-auto">
                    <picture>
                        <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>estate.webp" type="image/webp">
                        <img class="img-fluid mx-auto d-block" src="<?= get_stylesheet_directory_uri() . '/img/' ?>estate.png" alt="Real Estate Industry Picture">
                    </picture>
                    <h4>Real estate</h4>
                    <div class="project-corner project-estate-corner">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="project-overlay project-estate-overlay">
                        <h3>Real estate</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and...</p>
                    </div>
                </li>
            </ul>
            <a href="#" class="btn-2 mx-auto mt-4">Full Projects</a>
        </div>
    </div>
</section>
<section id="testimonials">
    <div class="container">
        <h2 class="text-white">Happy CLients</h2>
        <span class="section-title text-uppercase">Testimonials</span>
        <div id="separate-slider" class="carousel slide">
            <ul class="carousel-inner">
                <li class="carousel-item active">
                    <div class="testimonials-description d-flex justify-content-between">
                        <picture>
                            <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>icon_quote_l.webp" type="image/webp">
                            <img class="d-none d-xl-block" src="<?= get_stylesheet_directory_uri() . '/img/' ?>icon_quote_l.png" alt="Left Quote Icon">
                        </picture>
                        <p class="w-75 mb-5">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type speci book. It has
                            survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially.
                        </p>
                        <picture>
                            <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>icon_quote_r.webp" type="image/webp">
                            <img class="d-none d-xl-block" src="<?= get_stylesheet_directory_uri() . '/img/' ?>icon_quote_r.png" alt="Right Quote Icon">
                        </picture>
                    </div>
                </li>
                <li class="carousel-item">
                    <div class="testimonials-description d-flex justify-content-between">
                        <picture>
                            <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>icon_quote_l.webp" type="image/webp">
                            <img class="d-none d-xl-block" src="<?= get_stylesheet_directory_uri() . '/img/' ?>icon_quote_l.png" alt="Left Quote Icon">
                        </picture>
                        <p class="w-75 mb-5">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type speci book. It has
                            survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially.
                        </p>
                        <picture>
                            <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>icon_quote_r.webp" type="image/webp">
                            <img class="d-none d-xl-block" src="<?= get_stylesheet_directory_uri() . '/img/' ?>icon_quote_r.png" alt="Right Quote Icon">
                        </picture>
                    </div>
                </li>
                <li class="carousel-item">
                    <div class="testimonials-description d-flex justify-content-between">
                        <picture>
                            <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>icon_quote_l.webp" type="image/webp">
                            <img class="d-none d-xl-block" src="<?= get_stylesheet_directory_uri() . '/img/' ?>icon_quote_l.png" alt="Left Quote Icon">
                        </picture>
                        <p class="w-75 mb-5">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type speci book. It has
                            survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially.
                        </p>
                        <picture>
                            <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>icon_quote_r.webp" type="image/webp">
                            <img class="d-none d-xl-block" src="<?= get_stylesheet_directory_uri() . '/img/' ?>icon_quote_r.png" alt="Right Quote Icon">
                        </picture>
                    </div>
                </li>
            </ul>
            <ul class="carousel-indicators text-center text-md-left align-items-center flex-wrap">
                <li data-target="#separate-slider" data-slide-to="0" class="active indicator-item d-md-flex align-items-center">
                    <picture>
                        <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>client_1.webp" type="image/webp">
                        <img class="mr-md-4" src="<?= get_stylesheet_directory_uri() . '/img/' ?>client_1.png" alt="Client Photo 1">
                    </picture>
                    <div class="title-wrapper col pt-2">
                        <h3>Client Name</h3>
                        <p>Designation</p>
                    </div>
                </li>
                <li data-target="#separate-slider" data-slide-to="1" class="indicator-item d-md-flex align-items-center">
                    <picture>
                        <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>client_2.webp" type="image/webp">
                        <img class="mr-md-4" src="<?= get_stylesheet_directory_uri() . '/img/' ?>client_2.png" alt="Client Photo 2">
                    </picture>
                    <div class="title-wrapper col pt-2">
                        <h3>Client Name</h3>
                        <p>Designation</p>
                    </div>
                </li>
                <li data-target="#separate-slider" data-slide-to="2" class="indicator-item d-md-flex align-items-center">
                    <picture>
                        <source srcset="<?= get_stylesheet_directory_uri() . '/webp/' ?>client_3.webp" type="image/webp">
                        <img class="mr-md-4" src="<?= get_stylesheet_directory_uri() . '/img/' ?>client_3.png" alt="Client Photo 3">
                    </picture>
                    <div class="title-wrapper col pt-2">
                        <h3>Client Name</h3>
                        <p>Designation</p>
                    </div>
                </li>
                <li class="indicator-item last-indicator d-none d-lg-flex active">
                    <ul class="carousel-indicators inner-pagination">
                        <li data-target="#separate-slider" data-slide-to="0"></li>
                        <li data-target="#separate-slider" data-slide-to="1"></li>
                        <li data-target="#separate-slider" data-slide-to="2"></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>
<section id="our-blog">
    <div class="container-fluid row">
        <div class="offset-xl-2 col">
            <span class="section-description ml-lg-0 ml-xl-5"><?php the_field('section_our_blog_description'); ?></span>
            <h2 class="section-title text-uppercase ml-xl-5"><?php the_field('section_our_blog_title'); ?></h2>
            <div class="posts">
                <?php
                $posts = get_posts(array(
                    'numberposts' => 4,
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'post_type'   => 'post',
                    'suppress_filters' => true,
                ));
                foreach ($posts as $post) {
                    setup_postdata($post);
                ?>
                    <div class="post-links ml-xl-5">
                        <time class="post-time" date="<?php the_time('F d, Y'); ?>"><?php the_time('F'); ?> <span><?php the_time('d, Y'); ?></span></time>
                        <a class="item-link" href="<?php the_permalink(); ?>">
                            <h2 class="post-title text-uppercase"><?php the_title(); ?></h2>
                        </a>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                <?php }
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="pic d-none d-lg-block col-lg-6 p-0">
            <img src="<?php the_field('section_image'); ?>">
        </div>
    </div>
</section>
<section id="contact-us">
    <div class="container">
        <span class="section-description"><?php the_field('section_description'); ?></span>
        <h2 class="section-title text-uppercase"><?php the_field('section_title'); ?></h2>
        <?php if (have_rows('new_contact')) : ?>
            <ul class="card-deck d-flex flex-column flex-lg-row">
                <?php while (have_rows('new_contact')) : the_row();
                    $title = get_sub_field('contact_title');
                    $image = get_sub_field('contact_image');
                    $info = get_sub_field('contact_info');
                ?>
                    <li class="d-md-flex align-items-start mx-auto text-center mb-3">
                        <img src="<?php echo $image ?>" alt="">
                        <p class="ml-md-4"><span class="d-block"><?php echo $title; ?></span>
                            <a href="mailto:<?php echo $info; ?>"><?php echo $info; ?></a></p>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
<?php get_footer(); ?>