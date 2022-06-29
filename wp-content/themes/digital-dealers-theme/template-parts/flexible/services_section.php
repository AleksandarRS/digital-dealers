<?php
$section_background_color = get_sub_field('section_background_color');
$section_background_image = get_sub_field('section_background_image');
$section_id = get_sub_field('section_id');

$section_main_title = get_sub_field('section_main_title');
$section_description = get_sub_field('section_description');
?>
<section <?php if ( $section_id ) : ?>id="<?php echo $section_id; ?>" <?php endif; ?>class="services-section">
    <div class="services-section-wrapper section-wrapper relative"<?php if ( $section_background_color ) : ?> style="background-color:<?php echo $section_background_color; ?>"<?php endif; ?>>
        <?php  if ( $section_background_image ) : ?>
            <div class="services-section-background-image section-background-image" style="background-image: url(<?php echo esc_url($section_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image['alt']); ?>"></div>
        <?php endif; ?>
        <div class="services-section-wrapper-inner">
            <div class="container">
                <div class="row services-row">
                    <?php if ( $section_main_title ) : ?>
                        <header class="entry-header main-header col-md-12 align-center">
                            <h1 class="main-title"><?php echo $section_main_title; ?></h1>
                        </header>
                    <?php endif; ?>
                    <?php  if ( $section_description ) : ?>
                        <div class="entry-content section-description col-md-12">
                            <?php echo $section_description; ?>
                        </div>
                    <?php endif; ?>
                    <?php if( have_rows('add_services_here') ): ?>
                        <div class="services-item-wrap col-md-12">
                            <div class="row services-items-row">
                                <?php while ( have_rows('add_services_here') ) : the_row(); ?>
                                <?php $add_service_icon = get_sub_field('add_service_icon'); ?>
                                    <div class="col-md-3 services-item align-center">
                                        <div class="services-item-inner">
                                            <?php  if ( $add_service_icon ) : ?>
                                                <div class="services-item-icon">
                                                    <img src="<?php echo esc_url($add_service_icon['url']); ?>" alt="<?php echo esc_attr($add_service_icon['alt']); ?>">
                                                </div>
                                            <?php endif;?>
                                            <?php  if ( get_sub_field('add_service_title') ) : ?>
                                                <header class="services-header" data-equal="equal-title">
                                                    <h2 class="services-title"><?php the_sub_field('add_service_title'); ?></h2>
                                                </header>
                                            <?php endif;?>
                                            <?php  if ( get_sub_field('add_service_description') ) : ?>
                                                <div class="services-item-description">
                                                    <?php the_sub_field('add_service_description'); ?>
                                                </div>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php  else : ?>
                        <p>No services added!</p>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
