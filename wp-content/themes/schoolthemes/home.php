<?php

/**
 * Template Name: Home
 * 
 */
?>

<?php get_header();
$taxonomy     = 'product_cat';
$orderby      = 'name';
$show_count   = 0;      // 1 for yes, 0 for no
$pad_counts   = 0;      // 1 for yes, 0 for no
$hierarchical = 1;      // 1 for yes, 0 for no  
$title        = '';
$empty        = 0;

$args = array(
    'taxonomy'     => $taxonomy,
    'orderby'      => $orderby,
    'show_count'   => $show_count,
    'pad_counts'   => $pad_counts,
    'hierarchical' => $hierarchical,
    'title_li'     => $title,
    'hide_empty'   => $empty
);
$all_categories = get_categories($args);
?>
<div class="categories">

    <div class="small-container">
        <div class="row">
            <?php
            foreach ($all_categories as $cat) {
                if ($cat->category_parent == 0) {
                    $category_id = $cat->term_id;
                    $thumbnail_id = get_term_meta($cat->term_id, 'thumbnail_id', true);
                    // get the image URL
                    $image = wp_get_attachment_url($thumbnail_id);
            ?>
                    <div class="col-3">
                        <a href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>"><img src="<?php echo $image; ?>"></a>
                    </div>
            <?php
                }
            }
            ?>
        </div>

    </div>
</div>

<!--- products -->
<!---Change product images and names-->

<div class="small-container">
    <h2 class="title">Featured Prodcuts</h2>
    <div class="row">
        <?php
        $args = array('post_type' => 'product', 'posts_per_page' => 4, 'product_tag' => 'feature');
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            global $product; ?>
            <div class="col-4"><a href="<?php echo $product->get_permalink(); ?>">
                    <?php if (has_post_thumbnail($loop->post->ID))
                        echo  get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                    else echo '<img src="' . $woocommerce->plugin_url() . '/assets/images/placeholder.png" alt="Placeholder" width="' . $woocommerce->get_image_size('shop_catalog_image_width') . 'px" height="' . $woocommerce->get_image_size('shop_catalog_image_height') . 'px" />';
                    ?></a>
                <h4><?php echo $product->get_name(); ?></h4>

                <p><?php echo $product->get_price_html(); ?></p>
            </div>
        <?php endwhile; ?>
    </div>

    <h2 class="title">Latest Products</h2>
    <div class="row">
        <?php
        $args = array('post_type' => 'product', 'posts_per_page' => 8, 'product_tag' => 'latest');
        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            global $product; ?>
            <div class="col-4"><a href="<?php echo $product->get_permalink(); ?>">
                    <?php if (has_post_thumbnail($loop->post->ID))
                        echo  get_the_post_thumbnail($loop->post->ID, 'shop_catalog');
                    else echo '<img src="' . $woocommerce->plugin_url() . '/assets/images/placeholder.png" alt="Placeholder" width="' . $woocommerce->get_image_size('shop_catalog_image_width') . 'px" height="' . $woocommerce->get_image_size('shop_catalog_image_height') . 'px" />';
                    ?></a>
                <h4><?php echo $product->get_name(); ?></h4>

                <p><?php echo $product->get_price_html(); ?></p>
            </div>
        <?php endwhile; ?>
    </div>

</div>
<?php if (have_posts()) : while (have_posts()) : the_post();
        the_content();
    endwhile;
else : ?>
    <p>!Sorry no posts here</p>
<?php endif; ?>
<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-godrej.png">

            </div>

            <div class="col-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-oppo.png">

            </div>

            <div class="col-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-coca-cola.png">

            </div>

            <div class="col-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-paypal.png">

            </div>

            <div class="col-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-philips.png">

            </div>
        </div>
    </div>
</div>
<!---offer-->

<?php get_footer();   ?>