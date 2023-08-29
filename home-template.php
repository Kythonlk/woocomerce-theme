<?php
/**
 * Template Name: home
 *
 */

get_header();
?>

<section class="p-4">
    <div class="mx-3">
        <div class="slick-slider">
            <div><img src="<?php echo get_template_directory_uri(); ?>/Big-sale-banner-1.webp" alt="Slide 1"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/Be-cool-in-this-hot-season.webp" alt="Slide 2"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/Home-banner-1430-%C3%97-400-px.webp" alt="Slide 3"></div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="" class="icon-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cat1.png" class="" width="80" height="80" alt="Icon 1">
                    <p class="" >Icon Title 1</p>
                </a>
            </div>
            <div class="col">
                <a href="" class="icon-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cat2.png" width="80" height="80"  alt="Icon 2">
                    <p>Icon Title 2</p>
                </a>
            </div>
            <div class="col">
                <a href="" class="icon-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cat3.png"  width="80" height="80" alt="Icon 2">
                    <p>Icon Title 2</p>
                </a>
            </div>
            <div class="col">
                <a href="" class="icon-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cat4.png"  width="80" height="80" alt="Icon 2">
                    <p>Icon Title 2</p>
                </a>
            </div>
            <div class="col">
                <a href="" class="icon-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cat5.png"  width="80" height="80" alt="Icon 2">
                    <p>Icon Title 2</p>
                </a>
            </div>
            <div class="col">
                <a href="" class="icon-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cat6.png"  width="80" height="80" alt="Icon 2">
                    <p>Icon Title 2</p>
                </a>
            </div>
            <div class="col">
                <a href="" class="icon-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cat7.png"  width="80" height="80" alt="Icon 2">
                    <p>Icon Title 2</p>
                </a>
            </div>
            <div class="col">
                <a href="" class="icon-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/cat8.png" width="80" height="80"  alt="Icon 2">
                    <p>Icon Title 2</p>
                </a>
            </div>
        </div>
    </div>
</section>
<section>    
    <div class="container-fluid my-5">
        <div class="row">
            <h4>Sale Products</h4>
            <hr>
            <?php

            $category_slugs = array('category-slug-1', 'category-slug-2');

            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 12,
                'product_cat' => $category_slugs,
            );
            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();
                global $product;
            ?>
            
            <div class="col-md-2 home-pro-card-catalog-ph">
                <a href="<?php echo get_permalink(); ?>">
                    <div class="card home-pro-card mb-2 home-pro-card-catalog-ph">
                        <div class="card-body home-pro-card-body">
                                <div class="hot-div home-pro-card-sale-b"><span class="home-pro-card-sale-tag">Sale</span></div>
                                <img class="home-pro-card-img  mb-2" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                <p class="card-title home-pro-card-title"><?php echo get_the_title(); ?></p>
                                <p class="card-text home-pro-card-price mb-2">
                                    <?php if ($product->is_on_sale()) : ?>
                                        <span class="card-text home-pro-card-sale-price"><?php echo wc_price($product->get_sale_price()); ?></span>
                                        <span class="card-text home-pro-card-regular-price"><?php echo wc_price($product->get_regular_price()); ?></span>
                                    <?php else : ?>
                                        <span class="card-text home-pro-card-normal-price"><?php echo wc_price($product->get_regular_price()); ?></span>
                                    <?php endif; ?>
                                </p>
                                <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="btn btn-primary">Add to Cart</a>
                        
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
        </div>
</section>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img src="" alt="" class="two-col-image-banner">
            </div>
            <div class="col-md-6">
                <img src="" alt="" class="two-col-image-banner">
            </div>
        </div>
    </div>
</section>

<section>    
    <div class="container-fluid my-5">
        <div class="row">
            <h4>One catagorey Products</h4>
            <hr>
            <?php

            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 12,
            );
            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();
                global $product;
            ?>
            <div class="col-md-2 home-pro-card-catalog-ph">
                <a href="<?php echo get_permalink(); ?>">
                    <div class="card home-pro-card mb-2 home-pro-card-catalog-ph">
                        <div class="card-body home-pro-card-body">
                                <div class="hot-div home-pro-card-sale-b"><span class="home-pro-card-sale-tag">Sale</span></div>
                                <img class="home-pro-card-img  mb-2" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                <p class="card-title home-pro-card-title"><?php echo get_the_title(); ?></p>
                                <p class="card-text home-pro-card-price mb-2">
                                    <?php if ($product->is_on_sale()) : ?>
                                        <span class="card-text home-pro-card-sale-price"><?php echo wc_price($product->get_sale_price()); ?></span>
                                        <span class="card-text home-pro-card-regular-price"><?php echo wc_price($product->get_regular_price()); ?></span>
                                    <?php else : ?>
                                        <span class="card-text home-pro-card-normal-price"><?php echo wc_price($product->get_regular_price()); ?></span>
                                    <?php endif; ?>
                                </p>
                                <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="btn btn-primary">Add to Cart</a>
                        
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
        </div>
</section>
<section>    
    <div class="container-fluid my-5">
        <div class="row">
            <h4>Two catagorey Products</h4>
            <hr>
            <?php

            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 12,
            );
            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();
                global $product;
            ?>
            <div class="col-md-2 home-pro-card-catalog-ph">
                <a href="<?php echo get_permalink(); ?>">
                    <div class="card home-pro-card mb-2 home-pro-card-catalog-ph">
                        <div class="card-body home-pro-card-body">
                                <div class="hot-div home-pro-card-sale-b"><span class="home-pro-card-sale-tag">Sale</span></div>
                                <img class="home-pro-card-img  mb-2" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                <p class="card-title home-pro-card-title"><?php echo get_the_title(); ?></p>
                                <p class="card-text home-pro-card-price mb-2">
                                    <?php if ($product->is_on_sale()) : ?>
                                        <span class="card-text home-pro-card-sale-price"><?php echo wc_price($product->get_sale_price()); ?></span>
                                        <span class="card-text home-pro-card-regular-price"><?php echo wc_price($product->get_regular_price()); ?></span>
                                    <?php else : ?>
                                        <span class="card-text home-pro-card-normal-price"><?php echo wc_price($product->get_regular_price()); ?></span>
                                    <?php endif; ?>
                                </p>
                                <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="btn btn-primary">Add to Cart</a>
                        
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
        </div>
</section>
<section>    
    <div class="container-fluid my-5">
        <div class="row">
            <h4>Three catagorey Products</h4>
            <hr>
            <?php

            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 12,
            );
            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();
                global $product;
            ?>
            <div class="col-md-2 home-pro-card-catalog-ph">
                <a href="<?php echo get_permalink(); ?>">
                    <div class="card home-pro-card mb-2 home-pro-card-catalog-ph">
                        <div class="card-body home-pro-card-body">
                                <div class="hot-div home-pro-card-sale-b"><span class="home-pro-card-sale-tag">Sale</span></div>
                                <img class="home-pro-card-img  mb-2" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                                <p class="card-title home-pro-card-title"><?php echo get_the_title(); ?></p>
                                <p class="card-text home-pro-card-price mb-2">
                                    <?php if ($product->is_on_sale()) : ?>
                                        <span class="card-text home-pro-card-sale-price"><?php echo wc_price($product->get_sale_price()); ?></span>
                                        <span class="card-text home-pro-card-regular-price"><?php echo wc_price($product->get_regular_price()); ?></span>
                                    <?php else : ?>
                                        <span class="card-text home-pro-card-normal-price"><?php echo wc_price($product->get_regular_price()); ?></span>
                                    <?php endif; ?>
                                </p>
                                <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" class="btn btn-primary">Add to Cart</a>
                        
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
        </div>
</section>
<?php
get_footer();
