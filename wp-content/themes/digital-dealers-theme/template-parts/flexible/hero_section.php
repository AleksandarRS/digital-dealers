<?php
$section_background_color = get_sub_field('section_background_color');
$section_main_image = get_sub_field('section_main_image');
$main_image_link = get_sub_field('main_image_link');
$section_background_image = get_sub_field('section_background_image');
$section_id = get_sub_field('section_id');

// $section_main_title = get_sub_field('section_main_title');
$section_description = get_sub_field('section_description');
?>
<section <?php if ( $section_id ) : ?>id="<?php echo $section_id; ?>" <?php endif; ?>class="hero-section wow fadeIn" data-wow-delay="0.6s" data-wow-duration="1s">
    <div class="hero-section-wrapper section-wrapper relative"<?php if ( $section_background_color ) : ?> style="background-color:<?php echo $section_background_color; ?>"<?php endif; ?>>
        <?php  if ( $section_background_image ) : ?>
            <div class="hero-section-background-image section-background-image" style="background-image: url(<?php echo esc_url($section_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image['alt']); ?>"></div>
        <?php endif; ?>
        <div class="hero-section-wrapper-inner">
            <div class="container">
                <div class="row hero-row">
                    <?php if ( $section_main_image ) : ?>
                        <div class="hero-section-main-image col-md-6 wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="1s">
                            <div class="hero-section-main-image-inner">
                                <?php if ( $main_image_link ) : ?><a href="<?php echo $main_image_link; ?>" target="_blank"><?php endif; ?>
                                    <img src="<?php echo esc_url($section_main_image['url']); ?>" alt="<?php echo esc_attr($section_main_image['alt']); ?>">
                                <?php if ( $main_image_link ) : ?></a><?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ( $section_description ) : ?>
                        <div class="col-md-6 entry-header-entry-content-wrapper wow fadeInLeft" data-wow-delay="0.6s" data-wow-duration="1s">
                            <?php // if ( $section_main_title ) : ?>
                                <!-- <header class="entry-header main-header col-md-12">
                                    <h1 class="main-title"><?php // echo $section_main_title; ?></h1>
                                </header> -->
                            <?php // endif; ?>
                            <?php if ( $section_description ) : ?>
                                <div class="entry-content section-description">
                                    <?php echo $section_description; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
