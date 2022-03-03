<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Savings | ECommerce </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/index.js">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>
<?php wp_head(); ?>

<body>


    <div class="header">

        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"> <?php the_custom_logo(); ?></a>
                </div>

                <nav>
                    <ul id="MenuItems">

                        <?php
                        wp_nav_menu(array(
                            'theme-location' => 'primary'
                        ));
                        ?>


                    </ul>
                </nav>

                <a href="<?php echo wc_get_cart_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/cart.png" width="30px" height="30px"></a>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>

        <?php if (is_front_page()) { ?>
            <div class="row">
                <div class="col-2">
                    <h1>
                        Welcome to Big Savings!
                    </h1>

                    <p>
                        Savings so good you'll feel like you scored a goal!
                        Allow miles wound place the leave had.
                        To sitting subject no improve studied limited.<br>
                        Ye indulgence unreserved connection alteration appearance my an astonished.
                    </p>
                    <a href="https://moduleszone.com/school2test/shop" class="btn">Explore Now</a>
                </div>

                <div class="col-2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image1.png">
                </div>
            </div>
        <?php } ?>
    </div>