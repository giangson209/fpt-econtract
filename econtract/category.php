<?php
get_header(); 
$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->cat_ID;
$args = array(
    'post_type' => 'post',
    'orderby'   => 'publish_date',
    'order'     => 'DESC',	
    'posts_per_page' => 15,
    'category__in' => array($cat_id)
); 
?>
<main class="page-price">    
    <section class="box-news-list">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-price"><?php echo $category->name; ?></div>
                </div>
                <div class="col-md-8">
                    <div class="list-news">
                        <?php 
                            $my_query = new wp_query($args);
                        ?>
                        <?php if ( $my_query->have_posts() ): ?>
                            <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
                                <div class="item-news">
                                    <div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
                                    <div class="info">
                                        <h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
                                        <p>
                                            <label><span><?php echo $category->name; ?></span><!-- <span>• <?php echo get_the_date('d/m/Y'); ?></span> --></label>
                                        </p>
                                        <div class="desc">
                                            <?php echo get_the_excerpt(); ?>
                                        </div>
                                        <div class="readmore">
                                            <a href="<?php echo get_the_permalink() ?>">
                                                <span><?php pll_e( 'Xem thêm' ); ?></span>
                                                <svg width="35" height="18" viewBox="0 0 35 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 9L33 9" stroke="#828282" stroke-width="2" stroke-linecap="round"/>
                                                    <path d="M25 1L33 9L25 17" stroke="#828282" stroke-width="2" stroke-linecap="round"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile ?>
                        <?php endif;wp_reset_query(); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="side-bar-news text-center">
                        <h4><?php pll_e('Triển khai với Quy trình không chạm - Hợp đồng không giấy','option') ?></h4>
                        <div class="avr-side"><img src="<?php echo get_field('avr_sidebar','option')['url'] ?>" class="img-fluid" alt=""></div>
                        <div class="btn-side"><a href="<?php the_field('link_cta_bar','option') ?>"> <?php pll_e('Dùng ngay') ?></a></div>
                        <div class="side-bott">
                            <ul>
                                <li><a href="tel:<?php the_field('hotline_bar','option') ?>" class="hotline-side">Hotline <?php the_field('hotline_bar','option') ?></a></li>
                                <li><?php the_field('email_bar','option') ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();