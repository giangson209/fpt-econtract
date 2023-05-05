<?php
/**
 * Template Name: Support
 */

get_header();
?>

    <main class="page-price">
        <section class="box-bread">
            <div class="container">
                <ul>
                    <li>
                        <a href="/"><?php pll_e( 'Trang chủ' ); ?></a>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L10 8L6 4" stroke="#828282" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </li>
                    <li><a href="javascript:void(0)"><span><?php the_title(); ?></span></a></li>
                </ul>
            </div>
        </section>
        <section class="box-case-study news-study">
            <div class="container">
                <div class="title-price"><?php the_field('title_hddt'); ?></div>
                <div class="slide-support dot-circle">
                    <?php
                    $args_nb=array(
                        'category_name' => 'Hướng dẫn dùng thử',
                        'post_type' => 'post',
                        'orderby'   => 'publish_date',
                        'order'     => 'DESC',
                        // 'posts_per_page' => 10, 
                    );
                    $my_query_nb = new wp_query($args_nb);
                    ?>
                    <?php if ( $my_query_nb->have_posts() ): ?>
                        <?php while ($my_query_nb->have_posts()):$my_query_nb->the_post(); ?>
                            <div class="item-slide">
                                <div class="item-case">
                                    <div class="avarta"><a href="<?php echo get_the_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a></div>
                                    <div class="info">
                                        <h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile ?>
                    <?php endif;wp_reset_query(); ?>
                </div>
            </div>
        </section>
        <section class="box-case-study news-study">
            <div class="container">
                <div class="title-price"><?php the_field('title_hdsd'); ?></div>
                <div class="slide-casestudy dot-circle">
                    <?php
                    $args=array(
                        'category_name' => 'Hướng dẫn sử dụng phần mềm',
                        'post_type' => 'post',
                        'orderby'   => 'publish_date',
                        'order'     => 'DESC',
                        // 'posts_per_page' => 10, 
                    );
                    $my_query = new wp_query($args);
                    ?>
                    <?php if ( $my_query->have_posts() ): ?>
                        <?php
                            $index_sp = 1; 
                        ?>  
                        <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
                            <div class="item-slide">
                                <div class="item-case">
                                    <div class="avarta">
                                        <div class="icon-play" style="z-index: 2"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/play.png" class="img-fluid" alt=""></div>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-video-support-<?php echo $index_sp++ ?>"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid w-100" alt=""></a>
                                    </div>
                                    <div class="info">
                                        <h3><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
                                    </div>
                                </div>
                                
                            </div>
                        <?php endwhile ?>
                    <?php endif;wp_reset_query(); ?>
                </div>
            </div>
            <?php if ( $my_query->have_posts() ): ?>
                <?php
                    $index_md = 1; 
                ?>  
                <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
                    <div class="modal fade md-video" id="modal-video-support-<?php echo $index_md++ ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!-- <h4 class="modal-title">Modal Heading</h4> -->
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="content-popup-video"><?php the_field('video_popup') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile ?>
            <?php endif;wp_reset_query(); ?>
            <!-- <div class="modal fade md-video" id="modal-video-support-<?php echo $index_md++ ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="content-popup-video"><?php the_field('video_popup') ?></div>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
        <section class="box-download text-center">
            <div class="container">
                <div class="info-download">
                    <h3><?php the_field('title_download') ?></h3>
                    <div class="desc"><?php the_field('desc_down') ?></div>
                    <div class="btn-tool-download">
                        <ul>
                            <li><a href="<?php the_field('link_nut_download') ?>" class="tool_down">
                                    <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M29.6276 14.4364C29.656 14.5271 29.6845 14.6179 29.7034 14.7123C29.786 15.1296 29.8327 15.5589 29.8327 16.0003C29.8327 16.4109 29.7847 16.8149 29.71 17.2136C29.6935 17.3045 29.6713 17.3915 29.649 17.4788C29.639 17.5182 29.6289 17.5577 29.6194 17.5976C29.5527 17.8629 29.474 18.1229 29.3767 18.3776C29.326 18.5096 29.274 18.6389 29.2154 18.7669C29.0993 19.0203 28.9647 19.2629 28.8167 19.5016C28.7937 19.5386 28.7718 19.5762 28.7499 19.6137C28.7135 19.6763 28.677 19.7389 28.6353 19.7989C28.6232 19.8162 28.6128 19.8341 28.6026 19.8519C28.5915 19.8712 28.5805 19.8903 28.5674 19.9083C28.5571 19.923 28.5427 19.9324 28.5285 19.9417C28.517 19.9493 28.5057 19.9568 28.4967 19.9669C27.2807 21.5963 25.3554 22.6669 23.166 22.6669H23.15C23.118 22.0456 22.882 21.4336 22.418 20.9536C21.9193 20.4349 21.2193 20.1376 20.4993 20.1376C20.0247 20.1376 19.5674 20.2616 19.166 20.4949V16.0003C19.166 14.5296 17.97 13.3336 16.4993 13.3336C15.03 13.3336 13.8327 14.5296 13.8327 16.0003V20.3549C13.4313 20.1243 12.9753 20.0003 12.4993 20.0003C11.7873 20.0003 11.118 20.2776 10.614 20.7816C10.094 21.3003 9.83402 21.9843 9.83402 22.6669H9.83268C7.64335 22.6669 5.71802 21.5963 4.50335 19.9669C4.494 19.957 4.48261 19.9496 4.47119 19.9422C4.45654 19.9328 4.44184 19.9232 4.43135 19.9083C4.41725 19.889 4.40563 19.8684 4.39395 19.8478C4.38465 19.8314 4.37532 19.8149 4.36468 19.7989C4.32212 19.7376 4.28446 19.6736 4.24682 19.6097C4.2255 19.5735 4.2042 19.5373 4.18202 19.5016C4.03535 19.2629 3.89935 19.0203 3.78335 18.7669C3.72657 18.643 3.67728 18.5179 3.62702 18.3903L3.62202 18.3776C3.52602 18.1229 3.44602 17.8629 3.38068 17.5976C3.37225 17.5639 3.36353 17.5304 3.35483 17.497C3.33054 17.4037 3.30636 17.3108 3.28868 17.2136C3.21535 16.8149 3.16602 16.4109 3.16602 16.0003C3.16602 15.5589 3.21402 15.1296 3.29535 14.7123C3.31478 14.6151 3.34438 14.5217 3.37398 14.4283C3.3911 14.3743 3.40821 14.3203 3.42335 14.2656C3.42892 14.2451 3.43448 14.2246 3.44003 14.2042C3.5036 13.9699 3.56717 13.7355 3.65668 13.5136C3.70498 13.3929 3.76427 13.2799 3.82375 13.1666C3.84966 13.1172 3.8756 13.0678 3.90068 13.0176C3.90921 13.0006 3.91772 12.9837 3.92621 12.9668C4.01991 12.7802 4.11221 12.5964 4.22468 12.4216C4.30971 12.2871 4.40603 12.1629 4.50243 12.0387C4.52545 12.0091 4.54847 11.9794 4.57135 11.9496L4.57607 11.9435C4.70513 11.7776 4.8331 11.613 4.97668 11.4589C5.10532 11.3202 5.24349 11.1958 5.38332 11.0699C5.39132 11.0627 5.39933 11.0555 5.40735 11.0483C5.56468 10.9069 5.72468 10.7709 5.89535 10.6456C6.05402 10.5283 6.21668 10.4216 6.38602 10.3203C6.57268 10.2056 6.76335 10.1029 6.96068 10.0083C7.13402 9.92426 7.30735 9.84826 7.48868 9.78026C7.70468 9.69759 7.92735 9.63226 8.15402 9.57359C8.33402 9.52559 8.51002 9.47893 8.69668 9.44826C8.73191 9.4418 8.76611 9.4325 8.8003 9.42319C8.84374 9.41138 8.88717 9.39956 8.93268 9.39359C10.0273 6.21493 13.0593 4.00026 16.4993 4.00026C19.9407 4.00026 22.9727 6.21493 24.066 9.39359C24.1116 9.39957 24.1556 9.41143 24.1995 9.42327C24.2338 9.43255 24.2682 9.44182 24.3033 9.44826C24.4887 9.47893 24.666 9.52559 24.8447 9.57359C25.0714 9.63226 25.294 9.69759 25.51 9.78026C25.6913 9.84826 25.866 9.92426 26.038 10.0083C26.2353 10.1029 26.426 10.2056 26.6127 10.3203C26.782 10.4216 26.946 10.5283 27.1047 10.6456C27.274 10.7709 27.434 10.9069 27.5914 11.0483C27.7407 11.1816 27.886 11.3123 28.0233 11.4589C28.1687 11.6149 28.298 11.7816 28.4273 11.9496C28.4443 11.9714 28.4612 11.9931 28.4781 12.0148C28.5813 12.1471 28.6837 12.2784 28.7754 12.4216C28.8862 12.5957 28.9781 12.7788 29.0714 12.9646C29.0802 12.9822 29.0891 12.9999 29.098 13.0176C29.1231 13.0678 29.149 13.1172 29.1749 13.1665C29.2344 13.2799 29.2937 13.3928 29.342 13.5136C29.433 13.7362 29.4968 13.9713 29.5606 14.2063C29.5659 14.2261 29.5713 14.2458 29.5767 14.2656C29.5921 14.323 29.6098 14.3797 29.6276 14.4364ZM17.8332 23.5251L19.5732 21.8451C20.1038 21.3344 20.9478 21.3491 21.4585 21.8784C21.9705 22.4091 21.9558 23.2531 21.4265 23.7637L17.4265 27.6264C17.1665 27.8744 16.8332 27.9997 16.4998 27.9997C16.1585 27.9997 15.8172 27.8704 15.5572 27.6091L11.5572 23.6091C11.0358 23.0891 11.0358 22.2451 11.5572 21.7237C12.0772 21.2037 12.9212 21.2037 13.4425 21.7237L15.1665 23.4477V15.9997C15.1665 15.2624 15.7638 14.6664 16.4998 14.6664C17.2358 14.6664 17.8332 15.2624 17.8332 15.9997V23.5251Z" fill="white"/>
                                    </svg>
                                    <span> <?php the_field('down_title') ?></span>
                                </a></li>
                            <li><a href="<?php the_field('link_support') ?>" class="tool_support">
                                    <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.1673 5.30353L24.1567 10.6662H20.1193C19.594 10.6662 19.1673 10.1582 19.1673 9.53286V5.30353ZM26.822 9.77067L20.8953 3.10401C20.6433 2.82534 20.2846 2.66667 19.9086 2.66667H9.24198C7.36198 2.66667 5.83398 4.16267 5.83398 6.00001V26C5.83398 27.8373 7.36198 29.3333 9.24198 29.3333H23.7593C25.6393 29.3333 27.1673 27.8373 27.1673 26V10.6667C27.1673 10.3347 27.0446 10.016 26.822 9.77067Z" fill="#2E6CF6"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M26.822 9.77067L20.8953 3.10401C20.6433 2.82534 20.2846 2.66667 19.9086 2.66667H9.24198C7.36198 2.66667 5.83398 4.16267 5.83398 6.00001V26C5.83398 27.8373 7.36198 29.3333 9.24198 29.3333H23.7593C25.6393 29.3333 27.1673 27.8373 27.1673 26V10.6667C27.1673 10.3347 27.0446 10.016 26.822 9.77067ZM26.822 9.77067L20.8953 3.10401C20.6433 2.82534 20.2846 2.66667 19.9086 2.66667H9.24198C7.36198 2.66667 5.83398 4.16267 5.83398 6.00001V26C5.83398 27.8373 7.36198 29.3333 9.24198 29.3333H23.7593C25.6393 29.3333 27.1673 27.8373 27.1673 26V10.6667C27.1673 10.3347 27.0446 10.016 26.822 9.77067Z" fill="#2E6CF6"/>
                                        <path d="M9.83398 17.3333H21.1673" stroke="white"/>
                                        <path d="M9.83398 21.3333H21.1673" stroke="white"/>
                                    </svg>
                                    <span><?php the_field('use_title') ?></span>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="box-support-cate">
            <div class="container">
                <div class="title-price">
                    <h2><?php the_field('title_question'); ?></h2>
                </div>
                <div class="box-search-quess">
                    <form class="button-question">
                        <input type="text" class="s" placeholder="<?php the_field('title_search'); ?>">
                        <input type="submit" class="d-none"/>
                    </form>
                    </button>
                    <button>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.33336 13.3333C3.33336 7.81833 7.81836 3.33333 13.3334 3.33333C18.8484 3.33333 23.3334 7.81833 23.3334 13.3333C23.3334 18.8483 18.8484 23.3333 13.3334 23.3333C7.81836 23.3333 3.33336 18.8483 3.33336 13.3333ZM29.5117 27.155L23.8533 21.495C25.6083 19.2383 26.6667 16.41 26.6667 13.3333C26.6667 5.98167 20.685 0 13.3333 0C5.98167 0 0 5.98167 0 13.3333C0 20.685 5.98167 26.6667 13.3333 26.6667C16.41 26.6667 19.2383 25.6083 21.495 23.8533L27.155 29.5117C27.48 29.8367 27.9067 30 28.3333 30C28.76 30 29.1867 29.8367 29.5117 29.5117C30.1633 28.86 30.1633 27.8067 29.5117 27.155Z" fill="#2E3A59"/>
                        </svg>
                    </button>
                </div>
                <div class="contenet-quess">
                    <div class="box-quess w-100">
                        <div id="accordion">
                            <?php
                            $count_head = 1;
                            $count_coll = 1;  
                            ?>
                            <?php while ( has_sub_field('list_quess_box','option')) : ?> 
                                <div class="card-quess">
                                    <div class="head-quess">
                                        <button class="<?php echo $count_head == 1 ? null : 'collapsed'; ?>" data-toggle="collapse" data-target="#collapse-<?php echo $count_head++ ?>" aria-expanded="true">
                                            <span class="icon"></span>
                                            <label>
                                            <?php
                                            if (get_locale() == 'vi') {
                                                echo get_sub_field('cau_hoi_item');
                                            }else{
                                                echo get_sub_field('cau_hoi_item_en');
                                            }
                                            ?>
                                            </label>
                                        </button>
                                    </div>
                                    <div id="collapse-<?php echo $count_coll++ ?>" class="collapse <?php echo $count_coll == 2 ? 'show' : null; ?>" data-parent="#accordion">
                                        <div class="content-answer">
                                            <?php
                                            if (get_locale() == 'vi') {
                                                echo get_sub_field('tra_loi_item');
                                            }else{
                                                echo get_sub_field('tra_loi_item_en');
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>  
                            <a class="load-search d-none"><h2 id="title-bg"><span><?php pll_e( 'Đang lấy dữ liệu' ); ?> </span></h2></a>
                        </div> 
                        <!-- <div class="load-more text-center"><a href="javascript:void(0)">LOAD MORE</a></div>  -->
                    </div>
                </div> 
            </div>
        </section>
        <section class="box-contact" style="padding-top: 60px">
            <div class="container">
                <div class="title-price wow fadeInUp wHighlight" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><?php the_field('title_forrm'); ?></div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                         <?php echo do_shortcode( '[contact-form-7 id="2357" title="Form Hỗ trợ"]' ) ?>
                    </div>
                    <div class="col-md-6 text-center">
                        <div class="avarta"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/contact.png" class="img-fluid" alt=""></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner-qc">
        <div class="container">
            <div class="content-qc">
                <div class="logo-qc"><img src="<?php echo get_field('logo_bott','option')['url'] ?>" class="img-fluid" alt=""></div>
                <h3><?php pll_e( 'TIÊN PHONG GIẢI PHÁP SỐ HOÁ DOANH NGHIỆP' ); ?></h3>
                <div class="link-more">
                    <a href="<?php the_field('title_bott_copy2','option') ?>">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.6">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.999 12.0054C16.999 12.0034 17 12.0024 17 12.0004C17 11.9674 16.984 11.9404 16.981 11.9084C16.973 11.8124 16.961 11.7164 16.924 11.6264C16.897 11.5584 16.851 11.5044 16.81 11.4444C16.779 11.4004 16.762 11.3494 16.724 11.3094L13.861 8.30943C13.479 7.90943 12.847 7.89543 12.447 8.27643C12.048 8.65743 12.033 9.29043 12.414 9.69043L13.664 11.0004H7.99996C7.44796 11.0004 6.99996 11.4474 6.99996 12.0004C6.99996 12.5524 7.44796 13.0004 7.99996 13.0004H13.586L12.293 14.2934C11.902 14.6834 11.902 15.3164 12.293 15.7074C12.488 15.9024 12.744 16.0004 13 16.0004C13.256 16.0004 13.512 15.9024 13.707 15.7074L16.707 12.7074C16.798 12.6164 16.872 12.5064 16.922 12.3854C16.973 12.2644 16.998 12.1354 16.999 12.0054ZM12 20C7.58896 20 3.99996 16.411 3.99996 12C3.99996 7.58901 7.58896 4.00001 12 4.00001C16.411 4.00001 20 7.58901 20 12C20 16.411 16.411 20 12 20ZM12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12C22 6.486 17.514 2 12 2Z"
                                    fill="white" />
                            </g>
                        </svg>
                        <span><?php pll_e( 'Xem chi tiết' ); ?></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    </main>

<?php
get_footer();
