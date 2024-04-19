<?php
/**
 * Footer
 *
 * @package 0.0.1
 */

defined( 'ABSPATH' ) || exit;
$current_language = pll_current_language();
?>
				<footer class="footer">
					<div class="container foo-core">
						<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1c4-fce8b1c2" class="vert">
							<?php
							$footer_logo_url = get_theme_mod( 'attolabs_footer_logo_settings' );
							if ( ! empty( $footer_logo_url ) ) :
								?>
								<a href="<?php echo esc_url( get_home_url( null, '/' ) ); ?>" class="w-inline-block">
									<img src="<?php echo esc_url( $footer_logo_url ); ?>" loading="lazy" alt class="logo-foo">
								</a>
								<?php
							endif;
							$footer_menu_name  = 'Footer Menu ' . strtoupper( $current_language );
							$footer_menu_items = wp_get_nav_menu_items( $footer_menu_name );
							if ( ! empty( $footer_menu_items ) ) :
								?>
								<div class="menu-vert">
									<?php foreach ( $footer_menu_items as $footer_menu_item ) : ?>
										<a href="<?php echo esc_url( $footer_menu_item->url ); ?>" class="foo-link"><?php echo esc_html( $footer_menu_item->title ); ?></a>
									<?php endforeach; ?>
								</div>
								<?php endif; ?>
						</div>
						<?php
						$branches = attolabs_get_branches_by_lang( $current_language );
						$branches = array_filter(
							$branches,
							function ( $branch ) {
								return $branch['display_in_footer'];
							}
						);
						if ( ! empty( $branches ) ) :
							?>
							<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1d2-fce8b1c2" class="aress-core">
								<?php
								foreach ( $branches as $branch ) :
									$country        = $branch['country'];
									$address_name   = $branch['address_name'];
									$contact_phones = $branch['contact_phones'];
									$contact_email  = $branch['contact_email'];
									?>
									<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1d3-fce8b1c2" class="adress-item">
										<?php if ( ! empty( $country ) ) : ?>
											<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1d4-fce8b1c2" class="p-18-120"><span class="atto"><?php echo esc_html( $country ); ?></span></div>
										<?php endif; ?>
										<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1d7-fce8b1c2" class="adress-item_bottom">
											<?php if ( ! empty( $address_name ) ) : ?>
												<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1d8-fce8b1c2"><?php echo esc_html( $address_name ); ?></div>
											<?php endif; ?>
											<?php if ( ! empty( $contact_phones ) ) : ?>
												<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1da-fce8b1c2" class="adress-item_bottom_ver">
													<?php foreach ( $contact_phones as $contact_phone ) : ?>
														<a href="<?php echo esc_url( attolabs_format_phone_link( $contact_phone['phone_number'] ) ); ?>"><?php echo esc_html( $contact_phone['phone_number'] ); ?></a>
													<?php endforeach; ?>
												</div>
											<?php endif; ?>
											<?php if ( ! empty( $contact_email ) ) : ?>
												<a href="<?php echo esc_url( attolabs_format_email_link( $contact_email ) ); ?>" id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b1df-fce8b1c2"><?php echo esc_html( $contact_email ); ?></a>
											<?php endif; ?>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
						<div id="w-node-_1439d612-918a-ada2-0e4f-0f03fce8b208-fce8b1c2" class="vert">
							<?php
							$legal_menu_name = 'Legal menu ' . strtoupper( $current_language );

							$legal_menu_items = wp_get_nav_menu_items( $legal_menu_name );
							if ( ! empty( $legal_menu_items ) ) :
								foreach ( $legal_menu_items as $legal_menu_item ) :
									?>
								<a href="<?php echo esc_url( $legal_menu_item->url ); ?>" class="foo-link_2"><?php echo esc_html( $legal_menu_item->title ); ?></a>
									<?php
									endforeach;
							endif;
							?>
							<?php
							$copyright = ! empty( get_field( 'copyright', 'option' ) ) ? get_field( 'copyright', 'option' ) : '© ' . get_bloginfo( 'name' );
							if ( ! empty( $copyright ) ) :
								?>
								<div class="foo-text _23"><?php echo esc_html( $copyright ); ?>, <?php echo esc_html( gmdate( 'Y' ) ); ?></div>
								<div class="powered-by">Done by <a href="https://vosk.design" target="_blank" rel="nofollow" class="a-vosk">vosk</a>. powered by attolabs</div>
							<?php endif; ?>
						</div>
						
						<div id="w-node-fb29d952-ecc1-f9d0-1692-f48fbb5e21a0-fce8b1c2" class="vert foo-hirz">
						<?php
						$socials_menu_name = 'Socials menu ' . strtoupper( $current_language );
						$socials           = wp_get_nav_menu_items( $socials_menu_name );
						if ( ! empty( $socials ) ) :
							foreach ( $socials as $social ) :
								?>
								<a href="<?php echo esc_url( $social->url ); ?>" target="_blank" rel="nofollow" class="foo-link_2 soc-links"><?php echo esc_html( $social->title ); ?></a>
								<?php
								endforeach;
							endif;
						?>
							<?php
							$languages = pll_the_languages( array( 'raw' => 1 ) );
							if ( ! empty( $languages ) ) :
								?>
								<div data-hover="false" data-delay="0" class="dropdown foodrop w-dropdown">
									<div class="navlink lang-drop foo-frop w-dropdown-toggle">
										<div><?php echo esc_html( $current_language ); ?></div>
										<img src="<?php echo esc_url( TEMPLATE_PATH . '/images/65d85ded4d043968d9a1a5d9_chevron.svg' ); ?>" loading="lazy" alt class="image-2 lang-sh">
									</div>
									<nav class="dropdown-list foo-drop w-dropdown-list">
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
							<?php endif; ?>
						</div>
					</div>
				</footer>
			</div>
		</div>
		<?php
		$cookie_content = get_field( 'cookie_text_' . $current_language, 'option' );
		if ( ! empty( $cookie_content ) ) :
			?>
			<div class="coocy-block" data-element="cookie">
				<p class="p-12-120 c-grey m10"><?php echo esc_html( $cookie_content ); ?></p>
				<div class="flex-horiz">
					<a href="#" data-button="accept" class="a-12-120"><?php pll_e( 'Accept' ); ?></a>
					<?php
					$privacy_policy_page_id = 3;
					$privacy_policy_url     = get_the_permalink( pll_get_post( $privacy_policy_page_id, $current_language ) );
					?>
					<a href="<?php echo esc_url( $privacy_policy_url ); ?>" class="a-12-120 grey"><?php pll_e( 'Learn more' ); ?></a>
				</div>
			</div>
		<?php endif; ?>
		<!-- FOOTER CODE -->
		<?php
		wp_footer();
		attolabs_footer_code();
		?>
	</body>
</html>
