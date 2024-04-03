<?php
/**
 * Navbar
 *
 * @package 0.0.1
 */

defined( 'ABSPATH' ) || exit;
$current_language = pll_current_language();
?>
<div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="nav w-nav">
	<header class="header">
		<a href="<?php echo esc_url( get_home_url( null, '/' ) ); ?>" aria-current="page" class="brand w-nav-brand">
			<?php
			// @codingStandardsIgnoreStart
			echo attolabs_get_site_logo();
			// @codingStandardsIgnoreEnd ?>
		</a>
		<?php
		$header_menu_name  = 'Header menu ' . strtoupper( $current_language );
		$header_menu_items = wp_get_nav_menu_items( $header_menu_name );

		if ( ! empty( $header_menu_items ) ) :
			?>
			<nav role="navigation" class="w-nav-menu">
				<?php foreach ( $header_menu_items as $header_menu_item ) : ?>
					<a href="<?php echo esc_url( $header_menu_item->url ); ?>" class="navlink w-nav-link"><?php echo esc_html( $header_menu_item->title ); ?></a>
				<?php endforeach; ?>
				<?php $languages = pll_the_languages( array( 'raw' => 1 ) ); ?>
				<div data-hover="false" data-delay="0" class="dropdown w-dropdown">
					<div class="navlink lang-drop w-dropdown-toggle">
						<div><?php echo esc_html( $current_language ); ?></div>
						<img src="<?php echo esc_url( TEMPLATE_PATH . '/images/65d85ded4d043968d9a1a5d9_chevron.svg' ); ?>" loading="lazy" alt class="image-2 lang-sh">
					</div>
					<nav class="dropdown-list w-dropdown-list">
						<?php
						foreach ( $languages as $language ) :
							$classes = attolabs_is_current_url( $language['url'] ) ? 'lang-line active w-inline-block' : 'lang-line w-inline-block';
							?>
							<a href="<?php echo esc_url( $language['url'] ); ?>" class="<?php echo esc_attr( $classes ); ?>">
								<div><?php echo esc_html( $language['name'] ); ?></div>
								<div class="radio-button"></div>
							</a>
						<?php endforeach; ?>
					</nav>
				</div>
			</nav>
		<?php endif; ?>
		<div class="menu-b">
			<div class="dot-m _1"></div>
			<div class="dot-m _2"></div>
			<div class="dot-m _3"></div>
			<div class="dot-m _4"></div>
		</div>
		<a href="#" class="close-menu">Close</a>
	</header>
	<div class="menu-block">
		<?php
		$header_mobile_menu_name  = 'Header Mobile menu ' . strtoupper( $current_language );
		$header_menu_mobile_items = wp_get_nav_menu_items( $header_mobile_menu_name );

		if ( ! empty( $header_menu_mobile_items ) ) :
			?>
			<div class="div-block-13">
				<?php foreach ( $header_menu_mobile_items as $header_menu_mobile_item ) : ?>
					<a href="<?php echo esc_url( $header_menu_mobile_item->url ); ?>" class="menu-link"><?php echo esc_html( $header_menu_mobile_item->title ); ?></a>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
		<div class="bottom-nav">
			<div id="w-node-eedec887-cf2f-9a27-6944-d976b6188996-58975f82" class="adress-item">
				<div id="w-node-eedec887-cf2f-9a27-6944-d976b6188997-58975f82" class="p-18-120 _222">Contacts</div>
				<div id="w-node-eedec887-cf2f-9a27-6944-d976b6188999-58975f82" class="adress-item_bottom">
					<div id="w-node-eedec887-cf2f-9a27-6944-d976b618899a-58975f82">Schanzenstraße 41 51063 Köln, Germany</div>
					<div id="w-node-eedec887-cf2f-9a27-6944-d976b618899c-58975f82" class="adress-item_bottom_ver">
						<a href="#">+49 176 4445 0770</a>
						<a href="#">+49 2238 4780 6118</a>
					</div>
					<div id="w-node-eedec887-cf2f-9a27-6944-d976b61889a1-58975f82">contact@attolabs.de</div>
				</div>
			</div>
			<div id="w-node-_6f0c7519-0018-f7f0-0117-8a8f518ee231-58975f82" class="vert">
				<?php
				$legal_menu_name  = 'Legal menu ' . strtoupper( $current_language );
				$legal_menu_items = wp_get_nav_menu_items( $legal_menu_name );
				if ( ! empty( $legal_menu_items ) ) :
					foreach ( $legal_menu_items as $legal_menu_item ) :
						?>
						<a href="<?php echo esc_url( $legal_menu_item->url ); ?>" class="foo-link_2"><?php echo esc_html( $legal_menu_item->title ); ?></a>
						<?php
						endforeach;
					endif;
				?>
			</div>
			<?php
			$copyright = get_field( 'copyright', 'option' );
			if ( ! empty( $copyright ) ) :
				?>
				<div id="w-node-_6d4226e5-071d-3179-c4da-f21becda97b7-58975f82" class="foo-text"><?php echo esc_html( $copyright ); ?>, <?php echo esc_html( gmdate( 'Y' ) ); ?></div>
			<?php endif; ?>
		</div>
	</div>
</div>
