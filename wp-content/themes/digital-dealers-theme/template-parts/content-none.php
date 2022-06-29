<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package digitaldealers
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'digitaldealers' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'digitaldealers' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms.', 'digitaldealers' ); ?></p>
			<div class="button-wrap go-back-button">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button button-secondary"><?php _e("Go back to Home page", 'digitaldealers') ?></a>
			</div>
			<?php // get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'digitaldealers' ); ?></p>
			<div class="button-wrap go-back-button">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button button-secondary"><?php _e("Go back to Home page", 'digitaldealers') ?></a>
			</div>
			<?php // get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
