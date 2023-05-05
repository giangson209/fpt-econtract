<?php
/**
 * Template Name: Home
 */

get_header();
?>
<main>
    <section class="box-banner">
        <div class="container"> 
            <div class="slide-banner">
                <?php while ( has_sub_field('danh_sach_slide')) : ?>
                    <div class="item-slide">
                        <div class="item-banner">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="txt-banner">
<!--                                        <h3 class="wow fadeInDown wHighlight" data-wow-delay=".2s">--><?php //the_sub_field('title_blue') ?><!--</h3> -->
                                        <h2 class="wow fadeInDown wHighlight" data-wow-delay=".2s"><?php the_sub_field( 'title_slide'); ?></h2>
                                        <div class="desc wow fadeInUp wHighlight" data-wow-delay=".2s"><?php the_sub_field( 'desc_slide'); ?>FPT cung cấp miễn phí dịch vụ ký hợp đồng từ xa cho doanh nghiệp trong 3 tháng</div>
                                        <div class="btn-banner wow fadeInUp wHighlight" data-wow-delay=".3s">
                                            <ul>
                                                <li><a href="<?php the_sub_field( 'link_slide'); ?>" class="btn-main-blue"><?php the_sub_field( 'button_cta'); ?></a></li>
                                                <li><a href="<?php the_sub_field( 'link_slide'); ?>" class="btn-main-gray"><?php the_sub_field( 'button_cta'); ?></a></li>
                                            </ul>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="avar text-center wow fadeInRight wHighlight" data-wow-delay=".2s"><img src="<?php echo get_sub_field( 'avr_slide' )['url']; ?>" class="img-fluid" alt=""></div> 
                                </div> 
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section class="box-trial">
        <div class="container">
            <p>
                <span>FPT.eContract đạt giải thưởng Asia Pacific Stevie Awards. Tặng 3 tháng dùng thử - Áp dụng cho người dùng mới.</span>
                <a href="" target="_blank">Dùng thử ngay</a>
                <label>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4141 12L17.7071 7.70701C18.0981 7.31601 18.0981 6.68401 17.7071 6.29301C17.3161 5.90201 16.6841 5.90201 16.2931 6.29301L12.0001 10.586L7.70713 6.29301C7.31613 5.90201 6.68413 5.90201 6.29313 6.29301C5.90213 6.68401 5.90213 7.31601 6.29313 7.70701L10.5861 12L6.29313 16.293C5.90213 16.684 5.90213 17.316 6.29313 17.707C6.48813 17.902 6.74413 18 7.00013 18C7.25613 18 7.51213 17.902 7.70713 17.707L12.0001 13.414L16.2931 17.707C16.4881 17.902 16.7441 18 17.0001 18C17.2561 18 17.5121 17.902 17.7071 17.707C18.0981 17.316 18.0981 16.684 17.7071 16.293L13.4141 12Z" fill="white"/>
                    </svg>
                </label>
            </p>
        </div>
    </section>
    <section class="box-video">
        <div class="container"> 
            <div class="content-video">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="txt-video">
                            <h3 class="desc wow fadeInUp wHighlight" data-wow-delay=".2s"><?php the_field('title_video') ?></h3>
                            <div class="info-txt-video">
                                <?php while ( has_sub_field('content_video')) : ?>
                                    <div class="item-txt-video wow fadeInUp wHighlight" data-wow-delay=".2s">
                                        <div class="icon"><img src="<?php echo get_sub_field( 'icon_video' )['url']; ?>" class="img-fluid" alt=""></div>
                                        <div class="info">
                                            <h4><?php the_sub_field('title_ctn_video') ?></h4>
                                            <ul>
                                                <?php while ( has_sub_field('content_ctn_video')) : ?>
                                                    <li><?php the_sub_field('item_video') ?></li>
                                                <?php endwhile; ?>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="iframe-video">
                            <svg width="72" height="71" viewBox="0 0 72 71" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.92091 0H71.2069V70.1684H13.2936C5.59452 70.1684 -0.30822 63.252 0.8159 55.5478L8.92091 0Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M71.2938 0H8.33082L0.140632 55.528C-0.996619 63.2384 4.90835 70.1684 12.6155 70.1684H71.2938V53.8224H22.654C16.3728 53.8224 11.6062 48.0989 12.6731 41.8378L15.1601 27.2426C15.9975 22.3286 20.2112 18.7382 25.1411 18.7382H46.3111C52.5053 18.7382 57.2388 24.3284 56.2868 30.5194C55.5218 35.4934 51.2876 39.1615 46.3111 39.1615H30.3714C28.6299 39.1615 27.2181 37.7336 27.2181 35.9721C27.2181 34.2106 28.6299 32.7826 30.3714 32.7826H46.3111C48.1789 32.7826 49.7681 31.4058 50.0552 29.539C50.4126 27.2153 48.636 25.1171 46.3111 25.1171H25.1411C23.2809 25.1171 21.6909 26.4719 21.3749 28.3261L18.8879 42.9213C18.4853 45.2838 20.2839 47.4434 22.654 47.4434H71.2938V0Z"
                                    fill="#3981F3" />
                            </svg>
                            <?php  the_field('iframe_video'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="box-feature-hot">
        <div class="container">
            <div class="title-price text-center">
                <p>Tính năng nổi bật</p>
                <div class="desc-title">Nền tảng ký kết hợp đồng điện tử đa tiện ích giúp dễ dàng vận hành <br>và phát triển công việc kinh doanh.</div>
            </div>
            <div class="list-feature text-center">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item-feature">
                            <div class="avarta">
                                <div class="avr"><img src="http://localhost/econtract/wp-content/uploads/2022/12/step-1.png" class="img-fluid" alt=""></div>
                            </div>
                            <div class="info">
                                <h4>Full Service – One – <br>stop – solution</h4>
                                <div class="desc">Tổ chức quản lý khởi tạo, điều chỉnh, phê duyệt, Dễ dàng quản lý, khởi tạo, tìm kiếm hợp đồng</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-feature">
                            <div class="avarta">
                                <div class="avr"><img src="http://localhost/econtract/wp-content/uploads/2022/12/step-2.png" class="img-fluid" alt=""></div>
                            </div>
                            <div class="info">
                                <h4>Hỗ trợ, tích hợp mọi <br>chuẩn chữ ký số</h4>
                                <div class="desc">Nền tảng hỗ trợ ký kết với mọi chữ ký số và mọi loại hình ký số</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-feature">
                            <div class="avarta">
                                <div class="avr"><img src="http://localhost/econtract/wp-content/uploads/2022/12/step-3.png" class="img-fluid" alt=""></div>
                            </div>
                            <div class="info">
                                <h4>Quản lý hợp đồng <br>thông minh</h4>
                                <div class="desc">Chia sẻ tài liệu, phân luồng ký, thiết lập luồng xem, quản lý người dùng/nhóm người dùng</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="item-feature">
                            <div class="avarta">
                                <div class="avr"><img src="http://localhost/econtract/wp-content/uploads/2022/12/step-4.png" class="img-fluid" alt=""></div>
                            </div>
                            <div class="info">
                                <h4>Tích hợp hệ thống định <br>danh điện tử</h4>
                                <div class="desc">Hỗ trợ, tích hợp các hệ thống định danh điện tử eKYC, CRM, ERP</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="btn-banner">
                            <a href="" class="btn-main-gray">Tìm hiểu thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-benefit">
        <div class="container">
            <div class="title-price text-center">Lợi ích khi sử dụng eContract</div>
        </div>
    </section>




    <section class="box-number-hot">
        <div class="svg-abs svg-1"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/abs-1.png" class="img-fluid" alt=""></div>
        <div class="container">
            <div class="number-top" id="counter">
                <div class="row">
                    <?php while ( has_sub_field('number_top' ) ) : ?>
                        <div class="col-md-6 col-sm-6 pt-3">
                            <div class="item-number-top">
                                <div class="icon"><img src="<?php echo get_sub_field( 'icon_numb_top' )['url']; ?>" class="img-fluid" alt=""></div>
                                <div class="info">
                                    <h4><span class="count counter-value" data-count="<?php the_sub_field( 'number_count' ); ?>"></span>+</h4>
                                    <div class="desc"><?php the_sub_field( 'desc_numb' ); ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="number-bott">
                <div class="row">
                    <?php $count_numb = 0; ?>
                    <?php while ( has_sub_field('number_bott' ) ) : ?>
                        <div class="col-md-3 col-6 col-sm-6 wow fadeInUp wHighlight" data-wow-delay=".<?php echo $count_numb++?>5s">
                            <div class="item-nb text-center">
                                <div class="icon"><img src="<?php echo get_sub_field( 'icon_numb_bott' )['url']; ?>" class="img-fluid" alt=""></div>
                                <div class="desc">
                                    <h4><?php the_sub_field( 'title_numb_bott' ); ?></h4>
                                    <p><?php the_sub_field( 'desc_numb_bott' ); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="box-step">
        <div class="container">
            <div class="title-price text-center wow fadeInUp wHighlight" data-wow-delay=".2s"><?php echo the_field('title_program'); ?></div>
            <div class="list-step">
                <div class="row">
                    <?php 
                        $list_prog = 1;
                        $anm_prog = 5;
                    ?>
                    <?php while ( has_sub_field('list_program' ) ) : ?>
                        <div class="col-md-3 wow fadeInLeft wHighlight" data-wow-delay=".<?php echo $anm_prog-=1 ?>s">
                            <div class="item-step">
                                <span class="numb-step"><?php echo $list_prog++ ?></span>
                                <h3 class="text-center"><?php the_sub_field( 'title_item_prog' ); ?></h3>
                                <div class="icon-avr"><img src="<?php echo get_sub_field( 'icon_prog')['url']; ?>" class="img-fluid" alt=""></div>
                                <div class="desc">
                                    <ul>
                                        <?php while ( has_sub_field('mo_ta_prog' ) ) : ?>
                                            <li><?php the_sub_field('txt_mt_prog') ?></li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <div class="col-md-12">
                        <div class="btn-buy text-center wow fadeInUp wHighlight" data-wow-delay=".2s"><a href="<?php the_field('link_cta_step') ?>"
                                class="btn-main text-uppercase"><?php the_field('button_cta_step') ?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-juridical">
        <div class="svg-abs svg-2 wow fadeInUp wHighlight" data-wow-delay=".2s"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/abs-2.png"
                class="img-fluid" alt=""></div>
        <div class="container">
            <div class="content-juridical">
                <div class="icon wow fadeInUp wHighlight" data-wow-delay=".2s"><img src="<?php echo get_field('avr_phaply')['url'] ?>" class="img-fluid" alt=""></div>
                <div class="info">
                    <h3 class="wow fadeInUp wHighlight" data-wow-delay=".2s"><?php echo the_field('title_ply') ?></h3>
                    <ul>
                        <?php while ( has_sub_field('content_ply' ) ) : ?>
                            <li class=" wow fadeInUp wHighlight" data-wow-delay=".2s">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.4967 10.8032H22.5002C23.1431 10.8032 23.6657 11.3235 23.6669 11.9663C23.6762 15.0825 22.4711 18.0167 20.2731 20.2263C18.0762 22.436 15.1502 23.6575 12.0341 23.6668H12.0002C8.89572 23.6668 5.97555 22.4628 3.77405 20.273C1.56438 18.0762 0.342883 15.1502 0.33355 12.034C0.324217 8.91666 1.52938 5.98366 3.72738 3.774C5.92422 1.56433 8.85022 0.342829 11.9664 0.333496C12.8939 0.347496 13.8389 0.440829 14.7442 0.657829C15.3696 0.809496 15.7557 1.4395 15.6041 2.066C15.4536 2.69133 14.8201 3.07633 14.1971 2.927C13.4726 2.752 12.7037 2.6785 11.9734 2.66683C9.48022 2.67383 7.13872 3.6515 5.38172 5.419C3.62355 7.1865 2.65988 9.53383 2.66688 12.027C2.67388 14.5202 3.65155 16.8605 5.41905 18.6187C7.18072 20.3698 9.51638 21.3335 12.0002 21.3335H12.0271C14.5202 21.3265 16.8617 20.3488 18.6187 18.5813C20.3769 16.8127 21.3406 14.4665 21.3336 11.9733C21.3324 11.3293 21.8527 10.8043 22.4967 10.8032ZM7.67538 11.1752C8.13155 10.719 8.86888 10.719 9.32505 11.1752L11.9431 13.7932L19.2896 5.39787C19.7142 4.91604 20.4504 4.86471 20.9357 5.28937C21.4199 5.71287 21.4689 6.45021 21.0442 6.93554L12.8776 16.2689C12.6652 16.5115 12.3619 16.655 12.0387 16.6667H12.0002C11.691 16.6667 11.3947 16.5442 11.1754 16.3249L7.67538 12.8249C7.21922 12.3687 7.21922 11.6314 7.67538 11.1752Z"
                                        fill="#2E6CF6" />
                                </svg>
                                <span><?php the_sub_field( 'item_ply' ); ?></span>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="box-optimal">
        <div class="container">
            <div class="content-optimal">
                <div class="row">
                    <div class="col-md-6 pr-0">
                        <div class="info-opt">
                            <h3 class=" wow fadeInUp wHighlight" data-wow-delay=".2s"><?php the_field('title_antoan') ?>
                            </h3>
                            <ul>
                                <?php while ( has_sub_field('content_antoan' ) ) : ?>
                                <li class=" wow fadeInUp wHighlight" data-wow-delay=".2s">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M22.4967 10.8032H22.5002C23.1431 10.8032 23.6657 11.3235 23.6669 11.9663C23.6762 15.0825 22.4711 18.0167 20.2731 20.2263C18.0762 22.436 15.1502 23.6575 12.0341 23.6668H12.0002C8.89572 23.6668 5.97555 22.4628 3.77405 20.273C1.56438 18.0762 0.342883 15.1502 0.33355 12.034C0.324217 8.91666 1.52938 5.98366 3.72738 3.774C5.92422 1.56433 8.85022 0.342829 11.9664 0.333496C12.8939 0.347496 13.8389 0.440829 14.7442 0.657829C15.3696 0.809496 15.7557 1.4395 15.6041 2.066C15.4536 2.69133 14.8201 3.07633 14.1971 2.927C13.4726 2.752 12.7037 2.6785 11.9734 2.66683C9.48022 2.67383 7.13872 3.6515 5.38172 5.419C3.62355 7.1865 2.65988 9.53383 2.66688 12.027C2.67388 14.5202 3.65155 16.8605 5.41905 18.6187C7.18072 20.3698 9.51638 21.3335 12.0002 21.3335H12.0271C14.5202 21.3265 16.8617 20.3488 18.6187 18.5813C20.3769 16.8127 21.3406 14.4665 21.3336 11.9733C21.3324 11.3293 21.8527 10.8043 22.4967 10.8032ZM7.67538 11.1752C8.13155 10.719 8.86888 10.719 9.32505 11.1752L11.9431 13.7932L19.2896 5.39787C19.7142 4.91604 20.4504 4.86471 20.9357 5.28937C21.4199 5.71287 21.4689 6.45021 21.0442 6.93554L12.8776 16.2689C12.6652 16.5115 12.3619 16.655 12.0387 16.6667H12.0002C11.691 16.6667 11.3947 16.5442 11.1754 16.3249L7.67538 12.8249C7.21922 12.3687 7.21922 11.6314 7.67538 11.1752Z"
                                            fill="#2E6CF6" />
                                    </svg>
                                    <span><?php the_sub_field( 'item_antoan' ); ?></span>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                            <div class="btn-banner text-uppercase wow fadeInUp wHighlight" data-wow-delay=".2s">
                                <ul>
                                    <li class="p-0 mb-0"><a href="<?php the_field('link_cta_1') ?>" class="btn-main-blue" style="min-width: 280px"><?php the_field('cta_antoan_1') ?></a></li>
                                    <li class="p-0 mb-0"><a href="javascript:void(0)"  data-toggle="modal" data-target="#myModal-form" class="btn-main-gray"><?php the_field('cta_antoan_2') ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="avr wow fadeInRight wHighlight" data-wow-delay=".2s"><img src="<?php echo get_field('avr_antoan')['url'] ?>"
                                class="img-fluid" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-tool-step">
        <div class="container">
            <div class="slide-tool dot-circle">
                <?php while ( has_sub_field('ds_dv' ) ) : ?>
                <div class="item-slide wow fadeInUp wHighlight" data-wow-delay=".2s">
                    <!-- <div class="item-tool text-center" data-toggle="modal" data-target="#myModal-form"> -->
                    <div class="item-tool text-center"> 
                        <a href="<?php the_sub_field('link') ?>" class="link-abs-tool" target="_blank"></a>
                        <div class="icon"><img src="<?php the_sub_field( 'image' ); ?>" class="img-fluid" alt=""></div>
                        <p><?php the_sub_field( 'tieu_de' ); ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        
    </section>
    <section class="box-price price-home">
        <div class="container">
            <div class="box-price-1">
                <div class="title-price text-center wow fadeInUp wHighlight" data-wow-delay=".2s"><?php pll_e( 'Bảng giá Gói Ký hợp đồng, tài liệu điện tử FPT.eContract' ); ?></div>
                <div class="list-package-price">
                    <div class="slide-pack">
                        <?php $key = 0; ?>
						    <?php while ( has_sub_field('danh_sach_slide', 'option') ) : ?>
							<div class="item-slide">
								<div class="item-pack text-center">
                                    <div class="name-pack"><?php the_sub_field( 'ten_goi' ); ?></div>
									<div class="desc">
                                        <?php if( get_locale() == 'vi' ):?>
                                        <p><?php the_sub_field( 'desc_pack' ); ?></p>
                                        <?php else: ?>
                                        <p><?php the_sub_field( 'desc_pack_en' ); ?></p>
                                        <?php endif; ?>
                                        <div class="price-pack"><?php echo (int) get_sub_field( 'price_pack' ) > 0 ? number_format( (int) get_sub_field( 'price_pack' ), 0, '', '.').'<span>đ</span>' : pll_e( 'Liên hệ' ); ?></div>
										<div class="btn-pack"><a href="/bao-gia/#price-scroll" class=""><?php pll_e( 'Chọn mua' ); ?>
											<svg width="10" height="12" viewBox="0 0 10 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M9.07084 5.14251C9.71818 5.53091 9.71818 6.46909 9.07085 6.85749L2.0145 11.0913C1.34797 11.4912 0.5 11.0111 0.5 10.2338L0.5 1.76619C0.5 0.988896 1.34797 0.508783 2.0145 0.908698L9.07084 5.14251Z" fill="#2E6CF6"/>
											</svg>
										</a></div>
									</div>
								</div>
							</div>
							<?php $key++ ; ?>
						<?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-tab">
        <div class="container">
            <div class="title-price text-center wow fadeInUp wHighlight" data-wow-delay=".2s"><?php the_field('title_tab') ?></div>
            <div class="list-tab-acc">
                <ul>
                    <?php 
                        $list_tab = 1;
                    ?>
                    <?php while ( has_sub_field('content_tab_rep' ) ) : ?>
                        <li class="wow fadeInUp wHighlight" data-wow-delay=".2s"><a href="javascript:void(0)" class="<?php echo $list_tab == 1 ? 'active' : null; ?>" data-tab="tab-<?php echo $list_tab++ ?>"><?php the_sub_field( 'title_tab_ctn' ); ?></a></li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="tab-content-acc wow fadeInUp wHighlight" data-wow-delay=".2s">
                <?php 
                    $content_tab = 1;
                ?>
                <?php while ( has_sub_field('content_tab_rep' ) ) : ?>
                    <div class="tab-content <?php echo $content_tab == 1 ? 'active' : null; ?>" id="tab-<?php echo $content_tab++ ?>">
                        <div class="info-tab">
                            <ul>
                                <?php while ( has_sub_field('desc_tab' ) ) : ?>
                                    <li>
                                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M24.4967 12.8032H24.5002C25.1431 12.8032 25.6657 13.3235 25.6669 13.9663C25.6762 17.0825 24.4711 20.0167 22.2731 22.2263C20.0762 24.436 17.1502 25.6575 14.0341 25.6668H14.0002C10.8957 25.6668 7.97555 24.4628 5.77405 22.273C3.56438 20.0762 2.34288 17.1502 2.33355 14.034C2.32422 10.9167 3.52938 7.98366 5.72738 5.774C7.92422 3.56433 10.8502 2.34283 13.9664 2.3335C14.8939 2.3475 15.8389 2.44083 16.7442 2.65783C17.3696 2.8095 17.7557 3.4395 17.6041 4.066C17.4536 4.69133 16.8201 5.07633 16.1971 4.927C15.4726 4.752 14.7037 4.6785 13.9734 4.66683C11.4802 4.67383 9.13872 5.6515 7.38172 7.419C5.62355 9.1865 4.65988 11.5338 4.66688 14.027C4.67388 16.5202 5.65155 18.8605 7.41905 20.6187C9.18072 22.3698 11.5164 23.3335 14.0002 23.3335H14.0271C16.5202 23.3265 18.8617 22.3488 20.6187 20.5813C22.3769 18.8127 23.3406 16.4665 23.3336 13.9733C23.3324 13.3293 23.8527 12.8043 24.4967 12.8032ZM9.67538 13.1752C10.1316 12.719 10.8689 12.719 11.3251 13.1752L13.9431 15.7932L21.2896 7.39787C21.7142 6.91604 22.4504 6.86471 22.9357 7.28937C23.4199 7.71287 23.4689 8.45021 23.0442 8.93554L14.8776 18.2689C14.6652 18.5115 14.3619 18.655 14.0387 18.6667H14.0002C13.691 18.6667 13.3947 18.5442 13.1754 18.3249L9.67538 14.8249C9.21922 14.3687 9.21922 13.6314 9.67538 13.1752Z"
                                                fill="#2E6CF6" />
                                        </svg>
                                        <span><?php the_sub_field('desc_ctn_tab'); ?></span> 
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <section class="box-case-study">
        <div class="container">
            <div class="title-price text-center wow fadeInUp wHighlight" data-wow-delay=".2s">Case Study</div>
            <div class="slide-casestudy dot-circle wow fadeInUp wHighlight" data-wow-delay=".2s">
                <?php 
                    $args_nb=array(
                        'category_name' => 'casestudy', 
                        'post_type' => 'post',
                        'orderby'   => 'publish_date',
                        'order'     => 'DESC',
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
    <section class="box-feedback"> 
        <div class="container">
            <div class="kep-svg">
                <svg width="84" height="77" viewBox="0 0 84 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 56.8966C0 67.5172 3.94545 74.092 11.8364 76.6207C13.6182 76.8736 15.2727 77 16.8 77C24.1818 77 29.2727 73.4598 32.0727 66.3793C32.8364 63.8506 33.2182 61.4483 33.2182 59.1724C32.9636 50.8276 28.7636 45.2644 20.6182 42.4828C21.8909 32.1149 27.3636 20.1034 37.0364 6.44828L29.0182 0C14.5091 13.6552 5.21818 29.0805 1.14545 46.2759C0.381818 50.069 0 53.6092 0 56.8966ZM46.9636 56.8966C46.9636 67.5172 50.9091 74.092 58.8 76.6207C60.5818 76.8736 62.2364 77 63.7636 77C71.1455 77 76.2364 73.4598 79.0364 66.3793C79.8 63.8506 80.1818 61.4483 80.1818 59.1724C79.9273 50.8276 75.7273 45.2644 67.5818 42.4828C68.8545 32.1149 74.3273 20.1034 84 6.44828L75.9818 0C61.4727 13.6552 52.1818 29.0805 48.1091 46.2759C47.3455 50.069 46.9636 53.6092 46.9636 56.8966Z" fill="white"/>
                </svg>

            </div>  
            <div class="swiper-container">        
                <div class="swiper-wrapper">
                    <?php while ( has_sub_field('danh_sach_feedback' ) ) : ?>
                        <div class="swiper-slide">
                            <div class="item-slide">
                                <div class="item-feed">
                                    <div class="icon-fb"><img src="<?php echo get_sub_field('avr_fb')['url']; ?>" class="img-fluid" alt=""></div>
                                    <div class="info">
                                        <div class="desc">
                                            <?php the_sub_field( 'content_fb' ); ?>
                                        </div>
                                        <div class="fb-bott text-right">
                                            <h6><?php the_sub_field( 'name_fb' ); ?></h6>
                                            <label><?php the_sub_field( 'cd_fb' ); ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="swiper-pagination"></div> 
            </div>
        </div>
    </section>
    <section class="box-part">
        <div class="container">
            <div class="title-price wow fadeInUp wHighlight" data-wow-delay=".2s"><?php pll_e( 'Khách hàng tiêu biểu' ); ?></div>
            <div class="slide-partner dot-circle wow fadeInUp wHighlight" data-wow-delay=".2s">
                <?php 
                    $array = get_field('img_kh','option');
                ?>
                <?php foreach (array_chunk($array, 2) as $chunk): ?>
                    <div class="item-slide">
                        <?php foreach ($chunk as $key => $value): ?>
                            <div class="item-partner"><a href=""><img src="<?php echo $value['list_img_kh']['url'] ?>" class="img-fluid" alt=""></a></div>
                        <?php endforeach ?>
                    </div>
                <?php endforeach ?> 
            </div>
            <div class="price-button justify-content-center">
                <a href="<?php the_field('cta_link_part','option') ?>" class="btn-buy text-uppercase"><?php pll_e( 'Mua ngay' ); ?></a>
            </div>
        </div>
    </section>
    <section class="box-proce">
        <div class="svg-abs svg-3"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/abs-3.png" class="img-fluid" alt=""></div>
        <div class="container">
            <div class="title-price wow fadeInUp wHighlight" data-wow-delay=".2s"><?php the_field('title_tk') ?></div>
            <div class="content-proce">
                <div class="row">
                    <div class="col-md-6">
                        <div class="list-proce">
                            <ul>
                                <?php while ( has_sub_field('danh_sach_tk') ) : ?>
                                    <li class="wow fadeInUp wHighlight" data-wow-delay=".2s">
                                        <div class="item-proce text-center">
                                            <div class="icon"><img src="<?php echo get_sub_field( 'icon_tk')['url']; ?>" class="img-fluid" alt=""></div>
                                            <div class="info">
                                                <h5><?php echo the_sub_field( 'title_item_tk'); ?></h5>
                                                <p><?php echo the_sub_field( 'content_item_tk'); ?></p>
                                            </div> 
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="avarta wow fadeInRight wHighlight" data-wow-delay=".2s"><img
                                src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/avr-proce.png" class="img-fluid" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-contact">
        <div class="svg-abs svg-4"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/images/abs-4.png" class="img-fluid" alt=""></div>
        <div class="container">
            <div class="title-price wow fadeInUp wHighlight" data-wow-delay=".2s"><?php the_field('title_contact') ?></div>
            <div class="row">
                <div class="col-md-6">
                    <?php echo do_shortcode( '[contact-form-7 id="9" title="Form tư vấn"]' ) ?>
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
