<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package digitaldealers
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">

                <section class="error-404 not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.',
                                'digitaldealers'); ?></h1>
                    </header><!-- .page-header -->

                    <div class="page-content">
                        <p><?php esc_html_e('It looks like nothing was found at this location.', 'digitaldealers'); ?></p>
                        <div class="button-wrap go-back-button">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button button-secondary"><?php _e("Go back to Home page", 'digitaldealers') ?></a>
                        </div>
                    </div><!-- .page-content -->
                </section><!-- .error-404 -->
            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
