<?php
$section_background_color = get_sub_field('section_background_color');
$section_background_image = get_sub_field('section_background_image');
$section_id = get_sub_field('section_id');

$section_main_title = get_sub_field('section_main_title');
$section_description = get_sub_field('section_description');
?>
<section <?php if ( $section_id ) : ?>id="<?php echo $section_id; ?>" <?php endif; ?>class="portfolio-section element-should-be-detected">
    <div class="portfolio-section-wrapper section-wrapper relative"<?php if ( $section_background_color ) : ?> style="background-color:<?php echo $section_background_color; ?>"<?php endif; ?>>
        <?php  if ( $section_background_image ) : ?>
            <div class="portfolio-section-background-image section-background-image" style="background-image: url(<?php echo esc_url($section_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image['alt']); ?>"></div>
        <?php endif; ?>
        <div class="portfolio-section-wrapper-inner">
            <div class="container-fluid">
                <div class="row portfolio-row">
                    <?php if ( $section_main_title || $section_description ) : ?>
                        <header class="entry-header main-header col-md-12 align-center main-header-with-description">
                            <h1 class="main-title"><?php echo $section_main_title; ?></h1>
                            <div class="main-short-description"><?php echo $section_description; ?></div>
                        </header>
                    <?php endif; ?>
                    <?php // if ( $section_description ) : ?>
                        <!-- <div class="entry-content section-description col-md-12">
                            <?php // echo $section_description; ?>
                        </div> -->
                    <?php // endif; ?>
                    <?php if( have_rows('add_portfolio_items') ): ?>
                        <div class="portfolio-items">
                            <?php while ( have_rows('add_portfolio_items') ) : the_row(); ?>
                                <?php 
                                    $add_portfolio_image = get_sub_field('add_portfolio_image');
                                    $add_portfolio_title = get_sub_field('add_portfolio_title');
                                    $add_portfolio_url = get_sub_field('add_portfolio_url');
                                ?>
                                <div class="portfolio-item">
                                    <a href="<?php echo $add_portfolio_url; ?>" class="portfolio-item-inner" target="_blank">
                                        <div class="potfolio-image" style="background-image: url(<?php echo esc_url($add_portfolio_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($add_portfolio_image['alt']); ?>"></div>
                                        <h4 class="portfolio-title"><?php echo $add_portfolio_title; ?></h4>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php  else : ?>
                        
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
