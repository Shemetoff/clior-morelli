<?php

/**
 *  Slider Type 1 Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'slider-1-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'slider-1';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= 'banner align' . $block['align'];
}
$link = get_sub_field('link');
?>
<!-- Home Banner Section Start -->
<?php if(have_rows('items')): $i=1;?>
    <section class="home-slider-common home-slider2 ratio_40 p-0">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <?php while (have_rows('items')): the_row(); ?>
                    <!-- Slide Start -->

                    <div class="swiper-slide">
                        <div class="banner">
                            <div>
                                <?php if(!get_sub_field('type')): ?>
                                    <img class="bg-img img-fluid" src="<?php the_sub_field('bg_image'); ?>" alt="banner" />
                                <?php else: ?>
                                    <video autoplay muted loop id="myVideo-<?=$i; ?>" class="home-slider__video">
                                        <source src="<?php the_sub_field('video'); ?>" type="video/mp4">
                                    </video>
                                <?php endif; ?>
                            </div>

                            <?php if(get_sub_field('left_image')) {
                                echo '<img class="img-fluid banner-left-img d-none d-sm-block" src="'.get_sub_field('left_image')['url'].'" alt="banner" />';
                            } ?>
                            <!-- Banner Image Left -->


                            <!-- Content Box -->
                            <div class="content-box">
                                <?php if (get_sub_field('title')): ?>
                                    <?php if ($i == 1) {
                                        echo '<h1 class="heading">'.get_sub_field('title').'</h1>';
                                    } else {
                                        echo '<h2 class="heading">'.get_sub_field('title').'</h2>';
                                    } ?>
                                <?php endif; ?>
                                <?php if (get_sub_field('subtitle')){
                                    echo '<p class="d-none d-xl-block">'.get_sub_field('subtitle').'</p>';
                                } ?>
                                <?php if(!empty($link)){
                                    echo '<a href="'.$link['url'].'" class="btn-style2">'.$link['title'].'</a>';
                                } ?>

                            </div>

                            <!-- Banner Image Right -->
                            <?php if(get_sub_field('right_image')) {
                                echo '<img class="img-fluid banner-right-img" src="'.get_sub_field('right_image')['url'].'" alt="banner" />';
                            } ?>

                        </div>
                    </div>
                    <!-- Slide End -->
                    <?php $i++; ?>
                <?php endwhile; ?>


            </div>
            <div class="swiper-pagination small"></div>
        </div>
    </section>
    <!-- Home Banner Section End -->
<?php endif; ?>
