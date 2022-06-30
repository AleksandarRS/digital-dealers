<?php
$section_background_color = get_sub_field('section_background_color');
$section_background_image = get_sub_field('section_background_image');
$section_id = get_sub_field('section_id');

$main_image = get_sub_field('main_image');
$section_main_title = get_sub_field('section_title');
$section_short_description = get_sub_field('section_short_description');
$section_description = get_sub_field('section_description');
?>
<section class="about-us-section element-should-be-detected"<?php if ( $section_background_color ) : ?> style="background-color:<?php echo $section_background_color; ?>"<?php endif; ?>>
    <div class="about-us-section-wrapper section-wrapper relative">
        <?php  if ( $section_background_image ) : ?>
            <div class="about-us-section-background-image" style="background-image: url(<?php echo esc_url($section_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image['alt']); ?>"></div>
        <?php endif; ?>
        <div <?php if ( $section_id ) : ?>id="<?php echo $section_id; ?>" <?php endif; ?>class="about-us-section-wrapper-inner">
            <div class="container">
                <div class="row about-us-row">
                    <?php if ( $section_main_title || $section_short_description ) : ?>
                        <header class="entry-header main-header col-md-12 align-center main-header-with-description">
                            <h1 class="main-title"><?php echo $section_main_title; ?></h1>
                            <div class="main-short-description"><?php echo $section_short_description; ?></div>
                        </header>
                    <?php endif; ?>
                    <?php if ( $main_image ) : ?>
                        <div class="col-md-6 about-us-section-main-image" style="background-image: url(<?php echo esc_url($main_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($main_image['alt']); ?>">
                        </div>
                    <?php endif; ?>
                    <?php if ( $section_main_title || $section_description ) : ?>
                        <div class="col-md-6 about-us-section-main-description">
                            <?php  if ( $section_description ) : ?>
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
