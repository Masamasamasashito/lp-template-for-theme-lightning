<?php
/**
 * Template Name: For LP（手動でnoindexとサイトマップ外す）
 * Template Post Type: page
 * 
 * Made By Nissy 2025/7/4
 * Lightning子テーマ直下に配置する
 */

// lightning\_g3\header.php
lightning_get_template_part( 'header' );

//不要do_action
//do_action( 'lightning_site_header_before', 'lightning_site_header_before' );

//ロゴとグロナビ を false で読み込み禁止
/*
if ( apply_filters( 'lightning_is_site_header', false, 'site_header' ) ) {
	lightning_get_template_part( 'template-parts/site-header' );
}
*/
//不要do_action
//do_action( 'lightning_site_header_after', 'lightning_site_header_after' );

?>

<? //ここから lightning\_g3\index.php ?>

<?php // if ( ! is_front_page() ) : ?>

	<?php
    //不要do_action
	//do_action( 'lightning_page_header_before', 'lightning_page_header_before' );

	//固定ページ先頭のWideな帯文字をfalseで読み込み禁止
/*
	if ( apply_filters( 'lightning_is_page_header', false, 'page_header' ) ) {
		lightning_get_template_part( 'template-parts/page-header' );
	}
*/
    //不要do_action
	//do_action( 'lightning_page_header_after', 'lightning_page_header_after' );
	?>

	<?php
	//不要do_action
	//do_action( 'lightning_breadcrumb_before', 'lightning_breadcrumb_before' );

	// breadcrumbポジション無効化

/*
	if ( apply_filters( 'lightning_is_breadcrumb_position_normal', false, 'breadcrumb_position_normal' ) ) {

		if ( apply_filters( 'lightning_is_breadcrumb', false, 'breadcrumb' ) ) {
			$vk_breadcrumb      = new VkBreadcrumb();
			$breadcrumb_options = array(
				'id_outer'        => 'breadcrumb',
				'class_outer'     => 'breadcrumb',
				'class_inner'     => 'container',
				'class_list'      => 'breadcrumb-list',
				'class_list_item' => 'breadcrumb-list__item',
			);
			$vk_breadcrumb->the_breadcrumb( $breadcrumb_options );
		}
	}
*/
	//不要do_action
	//do_action( 'lightning_breadcrumb_after', 'lightning_breadcrumb_after' );
	?>

<?php // endif; ?>

<?php 
//不要do_action
//do_action( 'lightning_site_body_before', 'lightning_site_body_before' );
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

<?php
//footer-before-widget は削除済


//不要do_action
//do_action( 'lightning_site_footer_before', 'lightning_site_footer_before' );

//フッター を false で読み込まない様にする
/*
if ( apply_filters( 'lightning_is_site_footer', false, 'site_footer' ) ) {
	lightning_get_template_part( 'template-parts/site-footer' );
}
*
*/

//不要do_action
//do_action( 'lightning_site_footer_after', 'lightning_site_footer_after' );
?>

<?php lightning_get_template_part( 'footer' ); ?>
