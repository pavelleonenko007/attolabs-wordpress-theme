<?php
/**
 * Template name: Work With Us
 *
 * @package 0.0.1
 */

defined( 'ABSPATH' ) || exit;

get_header(
	null,
	array(
		'data-wf-page'            => '65e6e12621e6c89c61412de6',
		'container-extra-classes' => 'blackmenu',
	)
);

the_post();
?>
		<section class="section">
			<div class="container wrk">
				<h1 class="p-76-92"><?php echo esc_html( attolabs_get_page_title( get_the_ID() ) ); ?></h1>
				<div class="cont-container">
					<?php
					$persons = get_field( 'persons' );
					if ( ! empty( $persons ) ) :
						foreach ( $persons as $person ) :
							$name     = $person['name'];
							$image    = $person['image'];
							$email    = $person['email'];
							$phone    = $person['phone'];
							$position = $person['position'];
							?>
					<div id="w-node-_01c1a107-6e6e-255a-1f03-fc85be7fd5a1-61412de6" class="cont-item">
						<h2 class="h2 cont-line"><?php echo esc_html( $position ); ?></h2>
						<div class="man-pover">
							<p class="p-76-92"><a href="#" class="scroll-link contr"><?php echo esc_html( $name ); ?></a></p>
							<div class="project-img img-man wokpage">
								<?php
								echo attolabs_remove_width_height_attribute(
									wp_get_attachment_image(
										$image,
										'full',
										false,
										array(
											'loading' => 'eager',
											'class'   => 'pixel-pep',
										)
									)
								);
								?>
								<div class="canvas-tops">
									<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c81-61412de6" class="blt"></div>
									<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c82-61412de6" class="blt"></div>
									<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c83-61412de6" class="blt"></div>
									<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c84-61412de6" class="blt"></div>
									<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c85-61412de6" class="blt"></div>
									<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c86-61412de6" class="blt"></div>
									<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c87-61412de6" class="blt"></div>
									<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c88-61412de6" class="blt"></div>
									<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c89-61412de6" class="blt"></div>
									<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c8a-61412de6" class="blt"></div>
									<div id="w-node-_569430db-7a2e-00b3-0b0c-5a9fa76d2c8b-61412de6" class="blt"></div>
								</div>
							</div>
						</div>
						<p class="p-76-92"><a href="<?php echo esc_url( attolabs_format_email_link( $email, 'Hello' ) ); ?>" class="scroll-link contr"><?php echo esc_html( $email ); ?></a></p>
						<p class="p-76-92"><a href="<?php echo esc_url( attolabs_format_phone_link( $phone ) ); ?>" class="scroll-link contr pc-prevent"><?php echo esc_html( $phone ); ?></a></p>
					</div>
							<?php
						endforeach;
endif;
					?>
				</div>
			</div>
		</section>
		<?php get_footer(); ?>
