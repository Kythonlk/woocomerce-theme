<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="top-bar top-bar-v2 hidden-lg-down d-none d-xl-block">
        <div class="container clearfix">
            <ul id="menu-header-support" class="nav nav-inline float-start electro-animate-dropdown flip">
                <li class="customer-support menu-item menu-item-type-custom menu-item-object-custom px-2"><a title="+97125551007" href="tel:0097125551007">+97125551007</a></li>
                <li class="customer-support menu-item menu-item-type-custom menu-item-object-custom px-2 "><a title="help@dev.dhabione.ae" href="mailto:help@dev.dhabione.ae">help@dev.dhabione.ae</a></li>
            </ul>
            <ul id="menu-top-bar-right" class="nav nav-inline float-end electro-animate-dropdown flip">
                <li class="menu-item menu-item-type-custom menu-item-object-custom px-2"><a title="Track Your Order" href="https://dev.dhabione.ae/my-account-2/orders/">Track Your Order</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page px-2"><a title="Shop" href="https://dev.dhabione.ae/shop/">Shop</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-3854 current_page_item menu-item-57940 active"><a title="My Account" href="https://dev.dhabione.ae/my-account/">My Account</a></li>
            </ul>
        </div>
    </div>

    <header id="masthead" class="site-header">
        <div class="stick-this">
            <div class="container hidden-lg-down d-none d-xl-block">
                <div class="masthead row align-items-center">
                    <div class="header-logo-area d-flex justify-content-between align-items-center">
                        <div class="header-site-branding">
                            <a href="/" class="header-logo-link">
                                <img src="https://dev.dhabione.ae/wp-content/uploads/2023/07/dhabione-logo.png" alt="Dhabione" class="img-header-logo" width="295" height="112">
                            </a>
                        </div>

                    </div>

                    <form class="navbar-search col" method="get" action="<?php echo esc_url(home_url('/')); ?>" autocomplete="off">
                        <label class="sr-only screen-reader-text visually-hidden" for="search">Search for:</label>
                        <div class="input-group">
                            <div class="input-search-field">
                                <input type="text" id="search" class="form-control search-field product-search-field" dir="ltr" value="" name="s" placeholder="Search for Products" autocomplete="off" spellcheck="false">
                            </div>
                            <div class="input-group-addon search-categories d-flex">
                                <?php
                                $args = array(
                                    'show_option_none' => 'Select Category',
                                    'taxonomy' => 'product_cat',
                                    'name' => 'product_cat',
                                    'orderby' => 'name',
                                    'hierarchical' => true,
                                    'class' => 'postform resizeselect'
                                );
                                wp_dropdown_categories($args);
                                ?>
                            </div>
                            <div class="input-group-btn">
                                <input type="hidden" id="search-param" name="post_type" value="product">
                                <button type="submit" class="btn btn-secondary btn-serch-bar"><i class="ec ec-search"></i></button>
                            </div>
                        </div>
                    </form>

                    <div class="header-icons col d-flex justify-content-end align-items-center">

                        <div class="header-icon" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Wishlist" data-bs-original-title="" title="">
                            <a href="https://dev.dhabione.ae/wishlist/">
                                <i class="ec ec-favorites"></i>
                            </a>
                        </div>
                        <div class="header-icon header-icon__cart position-relative" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Cart" data-bs-original-title="" title="">
                            <a class="dropdown-toggle" href="https://dev.dhabione.ae/cart/">
                                <i class="ec ec-shopping-bag"></i>
                                <span class="cart-items-count count header-icon-counter">2</span>
                                <span class="cart-items-total-price total-price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">AED </span>2,348.00</bdi></span></span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <nav class="navbar navbar-expand-lg navbar-light mx-auto bg-light">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'nav-bar-menu',
                    'container' => false,
                    'menu_class' => 'navbar-nav ml-auto mx-5',
                    'walker' => new wp_bootstrap_navwalker(),
                ));
                ?>

            </nav>

    </header>
    </div>
    </div>

    </div>


    </div>
    </header>