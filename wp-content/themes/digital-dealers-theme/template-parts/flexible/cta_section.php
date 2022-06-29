<?php
$section_background_color = get_sub_field('section_background_color');
$section_background_image = get_sub_field('section_background_image');
$section_id = get_sub_field('section_id');

$section_main_title = get_sub_field('section_main_title');
$section_description = get_sub_field('section_description');
$add_form_here = get_sub_field('add_form_here');
?>
<section <?php if ( $section_id ) : ?>id="<?php echo $section_id; ?>" <?php endif; ?>class="cta-section">
    <div class="cta-section-wrapper section-wrapper relative"<?php if ( $section_background_color ) : ?> style="background-color:<?php echo $section_background_color; ?>"<?php endif; ?>>
        <?php  if ( $section_background_image ) : ?>
            <div class="cta-section-background-image section-background-image" style="background-image: url(<?php echo esc_url($section_background_image['url']); ?>);" role="img" aria-label="<?php echo esc_attr($section_background_image['alt']); ?>"></div>
        <?php endif; ?>
        <div class="cta-section-wrapper-inner">
            <div class="container">
                <div class="row cta-row">
                    <?php if ( $section_main_title || $section_description ) : ?>
                        <div class="col-md-5 cta-section-entry-header-entry-content-wrapper">
                            <?php if ( $section_main_title ) : ?>
                                <header class="entry-header main-header">
                                    <h1 class="main-title"><?php echo $section_main_title; ?></h1>
                                </header>
                            <?php endif; ?>
                            <?php  if ( $section_description ) : ?>
                                <div class="entry-content section-description">
                                    <?php echo $section_description; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <?php  if ( $add_form_here ) : ?>
                        <div class="entry-content-form col-md-7">
                            <?php echo $add_form_here; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
