<?php
/**
 * Template Name: For LP（手動でnoindexとサイトマップ外す）
 * Template Post Type: page
 * 
 * Made By Nissy 2025/7/4
 * Lightning子テーマ直下に配置
 */

// lightning\_g3\header.php
lightning_get_template_part( 'header' );

?>

<div class="<?php lightning_the_class_name( 'site-body' ); ?>">
	<?php do_action( 'lightning_site_body_prepend', 'lightning_site_body_prepend' ); ?>
	<div class="<?php lightning_the_class_name( 'site-body-container' ); ?> container">

		<div class="<?php lightning_the_class_name( 'main-section' ); ?>" id="main" role="main">
			<?php do_action( 'lightning_main_section_prepend', 'lightning_main_section_prepend' ); ?>

			<?php
			if ( apply_filters( 'lightning_is_main_section_template', true, 'main_section_template' ) ) {
				if ( lightning_is_woo_page() ) {
					lightning_get_template_part( 'template-parts/main-woocommerce' );
				} else {
					if ( apply_filters( 'lightning_is_singular', is_singular() ) ) {
						lightning_get_template_part( 'template-parts/main-singular' );
					} else {
						if ( is_404() ) {
							lightning_get_template_part( 'template-parts/main-404' );
						} else {
							lightning_get_template_part( 'template-parts/main-archive' );
						}
					}
				}
			}
			?>

			<?php do_action( 'lightning_main_section_append', 'lightning_main_section_append' ); ?>
		</div><!-- [ /.main-section ] -->

		<?php
		do_action( 'lightning_sub_section_before', 'lightning_sub_section_before' );
		if ( lightning_is_subsection() ) {
			if ( lightning_is_woo_page() ) {
				do_action( 'woocommerce_sidebar' );
			} else {
				lightning_get_template_part( 'sidebar', get_post_type() );
			}
		}
		do_action( 'lightning_sub_section_after', 'lightning_sub_section_after' );
		?>

	</div><!-- [ /.site-body-container ] -->

	<?php do_action( 'lightning_site_body_append', 'lightning_site_body_append' ); ?>

</div><!-- [ /.site-body ] -->

<?php lightning_get_template_part( 'footer' ); ?>
