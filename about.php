<?php
/**
 * Template name: About
 *
 * @package 0.0.1
 */

defined( 'ABSPATH' ) || exit;

get_header(
	null,
	array(
		'data-wf-page' => '65ae67e0e00057e5d2111407',
	)
);

the_post();
$tabs             = get_field( 'tabs' );
$text_section     = get_field( 'text_section' );
$our_values_block = get_field( 'our_values_block' );
$branches         = get_field( 'branches', 'option' );
?>
				<div data-w-id="f63cc638-65a6-6b47-a6cb-493087ba41e4" class="scroll-mom-container">
					<div class="styk-anim">
						<div class="ovf-a">
							<div class="anima-scroll">
								<section data-w-id="55190ab3-513e-5d8f-8125-8044187d946c" class="section main-section _2">
									<div data-w-id="79284580-e454-7642-0e1a-43be8a2c8342" class="main-bg-opsd">
										<div class="main-img_2">
											<?php
											the_post_thumbnail(
												'full',
												array(
													'loading' => 'eager',
													'class'   => 'img-cover',
												)
											);
											?>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div class="styk-container">
						<?php
						$description = get_field( 'description' );
						if ( ! empty( $description ) ) :
							?>
							<p id="w-node-eb2db2d6-7b50-331a-6394-29520d486fe3-d2111407" class="paragraph-2 p-18-120"><?php echo esc_html( $description ); ?></p>
							<?php
						endif;
						unset( $description );
						?>
						<?php if ( ! empty( $tabs ) ) : ?>
							<div id="w-node-_154d0722-9e61-5b06-6ddd-c00ecc8ec810-d2111407" data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
								<div class="tabs-menu w-tab-menu">
									<?php foreach ( $tabs as $index => $tab ) : ?>
										<a data-w-tab="Tab <?php echo esc_attr( $index + 1 ); ?>" class="taba w-inline-block w-tab-link <?php echo 0 === $index ? 'w--current' : ''; ?>">
											<div><?php echo esc_html( $tab['name'] ); ?></div>
										</a>
									<?php endforeach; ?>
								</div>
								<div class="w-tab-content">
									<?php foreach ( $tabs as $index => $tab ) : ?>
										<div data-w-tab="Tab <?php echo esc_attr( $index + 1 ); ?>" class="w-tab-pane <?php echo 0 === $index ? 'w--tab-active' : ''; ?>">
											<div class="text-block-2"><?php echo esc_html( $tab['content'] ); ?></div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						<?php endif; ?>
						<div class="red-scroll-line"></div>
					</div>
					<?php if ( ! empty( $tabs ) ) : ?>
						<div class="tabs-trugger">
							<?php foreach ( $tabs as $tab ) : ?>
								<div class="tabs-trigger"></div>
							<?php endforeach; ?>
							<div data-w-id="3b7c657b-d33f-64bc-6cf3-257acbe9bf04" class="div-block-12"></div>
						</div>
					<?php endif; ?>
					<div class="div-block-11">
						<h1 class="h1-btn"><?php the_title(); ?></h1>
					</div>
				</div>
				<?php
				if ( ! empty( $text_section['content'] ) ) :
					$small_heading = $text_section['small_heading'];
					$content       = $text_section['content'];
					$description   = $text_section['description'];
					$hover_images  = $text_section['hover_images'];
					?>
					<section class="section bg--fff7f3">
						<div class="styk-100vh">
							<div class="container secnd _23">
								<?php if ( ! empty( $small_heading ) ) : ?>
									<h2 class="h2"><?php echo esc_html( $small_heading ); ?></h2>
								<?php endif; ?>
								<div class="p-76-92 wht"><?php echo apply_filters( 'text_with_hover_links', $content ); ?></div>
								<!-- <p class="p-76-92 wht">At AttoLabs, we transformE-Government and Logistics through projects like <a href="#" class="scroll-link abo-ix">the Unified Volunteer Platform</a> and <a href="#" class="scroll-link abo-ix">Smart Logistics Network</a>, optimizing information retrieval, enhancing community engagement, and streamlining operations.</p> -->
								<?php if ( ! empty( $description ) ) : ?>
									<p class="p-18-120 blk under"><?php echo esc_html( $description ); ?></p>
								<?php endif; ?>
							</div>
						</div>
						<?php if ( ! empty( $hover_images ) ) : ?>
							<div class="imger-mom">
								<?php foreach ( $hover_images as $index => $hover_image ) : ?>
									<div class="imger">
										<?php
										$classes = 'verter';
										if ( $index > 0 ) {
											$classes .= ' _' . $index + 1;
										}
										?>
										<div class="<?php echo esc_attr( $classes ); ?>">
											<div class="project-img img-man rel">
												<?php
												echo wp_get_attachment_image(
													$hover_image['image'],
													'full',
													false,
													array(
														'loading' => 'eager',
														'class'   => 'img-cover pixel-abo',
													)
												);
												?>
												<div class="canvas-tops">
													<div id="w-node-d799c485-a5e6-e7a1-764d-e28473bc3638-d2111407" class="blt"></div>
													<div id="w-node-d799c485-a5e6-e7a1-764d-e28473bc3639-d2111407" class="blt"></div>
													<div id="w-node-d799c485-a5e6-e7a1-764d-e28473bc363a-d2111407" class="blt"></div>
													<div id="w-node-d799c485-a5e6-e7a1-764d-e28473bc363b-d2111407" class="blt"></div>
													<div id="w-node-d799c485-a5e6-e7a1-764d-e28473bc363c-d2111407" class="blt"></div>
													<div id="w-node-d799c485-a5e6-e7a1-764d-e28473bc363d-d2111407" class="blt"></div>
													<div id="w-node-d799c485-a5e6-e7a1-764d-e28473bc363e-d2111407" class="blt"></div>
													<div id="w-node-d799c485-a5e6-e7a1-764d-e28473bc363f-d2111407" class="blt"></div>
													<div id="w-node-d799c485-a5e6-e7a1-764d-e28473bc3640-d2111407" class="blt"></div>
													<div id="w-node-d799c485-a5e6-e7a1-764d-e28473bc3641-d2111407" class="blt"></div>
													<div id="w-node-d799c485-a5e6-e7a1-764d-e28473bc3642-d2111407" class="blt"></div>
												</div>
											</div>
											<div class="p-12-120 absp">Unified Volunteer Platform</div>
										</div>
									</div>
								<?php endforeach; ?>
								<!-- <div class="imger">
									<div class="verter _2">
										<div class="project-img img-man rel">
											<img src="<?php echo get_template_directory_uri(); ?>/images/65e9d38498a521ef243a6cf9_image2022720(5).webp" loading="eager" alt class="img-cover pixel-abo">
											<div class="canvas-tops">
												<div id="w-node-cd7df422-465b-1c19-8dd6-f4495aff0f7f-d2111407" class="blt"></div>
												<div id="w-node-cd7df422-465b-1c19-8dd6-f4495aff0f80-d2111407" class="blt"></div>
												<div id="w-node-cd7df422-465b-1c19-8dd6-f4495aff0f81-d2111407" class="blt"></div>
												<div id="w-node-cd7df422-465b-1c19-8dd6-f4495aff0f82-d2111407" class="blt"></div>
												<div id="w-node-cd7df422-465b-1c19-8dd6-f4495aff0f83-d2111407" class="blt"></div>
												<div id="w-node-cd7df422-465b-1c19-8dd6-f4495aff0f84-d2111407" class="blt"></div>
												<div id="w-node-cd7df422-465b-1c19-8dd6-f4495aff0f85-d2111407" class="blt"></div>
												<div id="w-node-cd7df422-465b-1c19-8dd6-f4495aff0f86-d2111407" class="blt"></div>
												<div id="w-node-cd7df422-465b-1c19-8dd6-f4495aff0f87-d2111407" class="blt"></div>
												<div id="w-node-cd7df422-465b-1c19-8dd6-f4495aff0f88-d2111407" class="blt"></div>
												<div id="w-node-cd7df422-465b-1c19-8dd6-f4495aff0f89-d2111407" class="blt"></div>
											</div>
										</div>
										<div class="p-12-120 absp">Smart Logistics Network</div>
									</div>
								</div> -->
							</div>
						<?php endif; ?>
					</section>
					<?php
				endif;
				if ( ! empty( $our_values_block['values'] ) ) :
					$values = $our_values_block['values'];
					?>
					<section class="section bg--fff7f3-2 _3">
						<div class="container secnd _3 abpage">
							<?php
							$heading = $our_values_block['heading'];
							if ( ! empty( $heading ) ) :
								?>
								<h2 class="p-76-92"><?php echo esc_html( $heading ); ?></h2>
							<?php endif; ?>
							<div class="fw-div _2">
								<h2 class="p-18-120 n-pc">Our values</h2>
								<p class="paragraph p-18-120 n-mob"> </p>
								<div id="w-node-b16eb019-dbb6-68af-5eed-55fb4de5cc77-d2111407" class="citas _2">
									<?php foreach ( $values as $index => $value ) : ?>
										<div id="w-node-b16eb019-dbb6-68af-5eed-55fb4de5cc78-d2111407" class="cita">
											<?php
											$name        = $value['name'];
											$description = $value['description'];
											if ( ! empty( $name ) ) :
												?>
												<div class="p-12-120 red"><?php echo esc_html( $index + 1 ); ?>: <?php echo esc_html( $name ); ?></div>
												<?php
											endif;
											if ( ! empty( $description ) ) :
												?>
												<p class="p-18-120 blk vals"><?php echo esc_html( $description ); ?></p>
											<?php endif; ?>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
						<div class="abs">
							<div class="styk-block">
								<h2 class="p-18-120">Our values</h2>
							</div>
						</div>
					</section>
				<?php endif; ?>
				<div class="div-block-4">
					<div class="div-block-6"></div>
					<div class="stik-diver">
						<section class="section">
							<div class="container">
								<div class="horiz-liner">
									<h2 class="h2 h2-offices">Our Branches</h2>
									<div class="aress-core offices-vert-grid">
										<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42de3-d2111407" class="adress-item">
											<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42de4-d2111407" class="p-18-120">Switzerland</div>
											<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42de6-d2111407" class="adress-item_bottom">
												<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42de7-d2111407">Schanzenstraße 41 51063 Köln, Germany</div>
												<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42de9-d2111407" class="adress-item_bottom_ver"><a href="#">+49 176 4445 0770</a><a href="#">+49 2238 4780 6118</a></div>
												<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42dee-d2111407">contact@attolabs.de</div>
											</div>
											<div class="project-img img-addr">
												<img src="<?php echo esc_url( TEMPLATE_PATH . '/images/65e9d4797d4c91d9d0b04c06_GettyImages-906499516-5bc6570d46e0fb0026d6f1e020320(1).webp' ); ?>" loading="eager" alt class="img-cover pixel-addr">
												<div class="canvas-tops">
													<div id="w-node-c99c1fef-47da-6d6c-61a5-6f2b9e737a49-d2111407" class="blt"></div>
													<div id="w-node-c99c1fef-47da-6d6c-61a5-6f2b9e737a4a-d2111407" class="blt"></div>
													<div id="w-node-c99c1fef-47da-6d6c-61a5-6f2b9e737a4b-d2111407" class="blt"></div>
													<div id="w-node-c99c1fef-47da-6d6c-61a5-6f2b9e737a4c-d2111407" class="blt"></div>
													<div id="w-node-c99c1fef-47da-6d6c-61a5-6f2b9e737a4d-d2111407" class="blt"></div>
													<div id="w-node-c99c1fef-47da-6d6c-61a5-6f2b9e737a4e-d2111407" class="blt"></div>
													<div id="w-node-c99c1fef-47da-6d6c-61a5-6f2b9e737a4f-d2111407" class="blt"></div>
													<div id="w-node-c99c1fef-47da-6d6c-61a5-6f2b9e737a50-d2111407" class="blt"></div>
													<div id="w-node-c99c1fef-47da-6d6c-61a5-6f2b9e737a51-d2111407" class="blt"></div>
													<div id="w-node-c99c1fef-47da-6d6c-61a5-6f2b9e737a52-d2111407" class="blt"></div>
													<div id="w-node-c99c1fef-47da-6d6c-61a5-6f2b9e737a53-d2111407" class="blt"></div>
												</div>
											</div>
											<div id="w-node-_6d0d9638-7f3f-9ced-31ad-06dc4e253206-d2111407" class="adr-trigger"></div>
										</div>
										<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42df0-d2111407" class="adress-item">
											<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42df1-d2111407" class="p-18-120">Germany</div>
											<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42df3-d2111407" class="adress-item_bottom">
												<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42df4-d2111407">Schanzenstraße 41 51063 Köln, Germany</div>
												<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42df6-d2111407" class="adress-item_bottom_ver"><a href="#">+49 176 4445 0770</a><a href="#">+49 2238 4780 6118</a></div>
												<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42dfb-d2111407">contact@attolabs.de</div>
											</div>
										</div>
										<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42dfd-d2111407" class="adress-item">
											<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42dfe-d2111407" class="p-18-120">Türkiye</div>
											<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42e00-d2111407" class="adress-item_bottom">
												<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42e01-d2111407">Schanzenstraße 41 51063 Köln, Germany</div>
												<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42e03-d2111407" class="adress-item_bottom_ver"><a href="#">+49 176 4445 0770</a><a href="#">+49 2238 4780 6118</a></div>
												<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42e08-d2111407">contact@attolabs.de</div>
											</div>
										</div>
										<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42e0a-d2111407" class="adress-item">
											<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42e0b-d2111407" class="p-18-120">Uzbekiston</div>
											<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42e0d-d2111407" class="adress-item_bottom">
												<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42e0e-d2111407">Schanzenstraße 41 51063 Köln, Germany</div>
												<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42e10-d2111407" class="adress-item_bottom_ver"><a href="#">+49 176 4445 0770</a><a href="#">+49 2238 4780 6118</a></div>
												<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42e15-d2111407">contact@attolabs.de</div>
											</div>
											<div id="w-node-c0b15f6e-f9c3-2b69-155c-2022518ef18f-d2111407" class="adr-trigger"></div>
										</div>
										<div id="w-node-bc5ffd5e-d788-bd6b-5a35-379b1dbdfa34-d2111407" class="adress-item">
											<div id="w-node-bc5ffd5e-d788-bd6b-5a35-379b1dbdfa35-d2111407" class="p-18-120">Tojikiston, Khujand</div>
											<div id="w-node-bc5ffd5e-d788-bd6b-5a35-379b1dbdfa37-d2111407" class="adress-item_bottom">
												<div id="w-node-bc5ffd5e-d788-bd6b-5a35-379b1dbdfa38-d2111407">Schanzenstraße 41 51063 Köln, Germany</div>
												<div id="w-node-bc5ffd5e-d788-bd6b-5a35-379b1dbdfa3a-d2111407" class="adress-item_bottom_ver"><a href="#">+49 176 4445 0770</a><a href="#">+49 2238 4780 6118</a></div>
												<div id="w-node-bc5ffd5e-d788-bd6b-5a35-379b1dbdfa3f-d2111407">contact@attolabs.de</div>
											</div>
										</div>
										<div id="w-node-f29c91b3-7945-5185-b05d-0c75b938f20f-d2111407" class="adress-item">
											<div id="w-node-f29c91b3-7945-5185-b05d-0c75b938f210-d2111407" class="p-18-120">Tojikiston, Dushanbe</div>
											<div id="w-node-f29c91b3-7945-5185-b05d-0c75b938f212-d2111407" class="adress-item_bottom">
												<div id="w-node-f29c91b3-7945-5185-b05d-0c75b938f213-d2111407">Schanzenstraße 41 51063 Köln, Germany</div>
												<div id="w-node-f29c91b3-7945-5185-b05d-0c75b938f215-d2111407" class="adress-item_bottom_ver"><a href="#">+49 176 4445 0770</a><a href="#">+49 2238 4780 6118</a></div>
												<div id="w-node-f29c91b3-7945-5185-b05d-0c75b938f21a-d2111407">contact@attolabs.de</div>
											</div>
											<div class="project-img img-addr _2">
												<img src="<?php echo esc_url( TEMPLATE_PATH . '/images/65e9d4a941843385ce346660_GettyImages-906499516-5bc6570d46e0fb0026d6f1e020220(1).webp' ); ?>" loading="eager" alt class="img-cover pixel-addr">
												<div class="canvas-tops">
													<div id="w-node-_407e8d39-2e51-d54f-4d61-5aacfb626cd6-d2111407" class="blt"></div>
													<div id="w-node-_407e8d39-2e51-d54f-4d61-5aacfb626cd7-d2111407" class="blt"></div>
													<div id="w-node-_407e8d39-2e51-d54f-4d61-5aacfb626cd8-d2111407" class="blt"></div>
													<div id="w-node-_407e8d39-2e51-d54f-4d61-5aacfb626cd9-d2111407" class="blt"></div>
													<div id="w-node-_407e8d39-2e51-d54f-4d61-5aacfb626cda-d2111407" class="blt"></div>
													<div id="w-node-_407e8d39-2e51-d54f-4d61-5aacfb626cdb-d2111407" class="blt"></div>
													<div id="w-node-_407e8d39-2e51-d54f-4d61-5aacfb626cdc-d2111407" class="blt"></div>
													<div id="w-node-_407e8d39-2e51-d54f-4d61-5aacfb626cdd-d2111407" class="blt"></div>
													<div id="w-node-_407e8d39-2e51-d54f-4d61-5aacfb626cde-d2111407" class="blt"></div>
													<div id="w-node-_407e8d39-2e51-d54f-4d61-5aacfb626cdf-d2111407" class="blt"></div>
													<div id="w-node-_407e8d39-2e51-d54f-4d61-5aacfb626ce0-d2111407" class="blt"></div>
												</div>
											</div>
											<div id="w-node-_196584f8-3fb1-f3d7-ba9c-46241b40024c-d2111407" class="adr-trigger"></div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
				<div id="styker" class="div-block-3">
					<div class="form-tracker"></div>
					<a id="idid" href="#">Text Link</a>
				</div>
				<div class="styk-form">
					<div class="form-ceeper">
						<div class="styk-form-mom _1 w-form">
							<form method="get" fs-formsubmit-element="form-1" name="email-form" data-name="Email Form" id="email-form" fs-formsubmit-reset="4000" class="form" data-wf-page-id="65ae67e0e00057e5d2111407" data-wf-element-id="b3e640d9-2269-9bed-5643-84a089146b83">
								<div data-delay="4000" data-animation="slide" class="form-slider first-slide w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="0" data-infinite="true">
									<div class="w-slider-mask">
										<div class="form-slide w-slide">
											<div class="_100vhctnter _1st">
												<div class="p-12-120 whtx">Empower the Future with Us</div>
												<textarea required placeholder="tell us how we could help you to emprower the future?" maxlength="5000" id="field-2" name="field-2" data-name="Field 2" class="text-field w-input"></textarea>
											</div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">How to get in touch with you?</div>
												<input class="text-field w-input" maxlength="256" name="field-3" data-name="Field 3" placeholder="Enter your email" type="email" id="field-3" required>
											</div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">What can I call you?</div>
												<input class="text-field w-input" maxlength="256" name="field-3" data-name="Field 3" placeholder="Enter your name" type="text" id="field-3" required>
											</div>
										</div>
									</div>
									<div class="l-arrow w-slider-arrow-left">
										<div class="red-form-line"></div>
										<div class="text-block-6">BAck</div>
									</div>
									<div class="right-arrow w-slider-arrow-right">
										<div>Next</div>
									</div>
									<div class="none w-slider-nav w-round w-num"></div>
								</div>
								<input type="submit" data-wait="Please wait..." fs-formsubmit-element="reset" class="submit fs_formsubmit_button w-button" value="Submit">
							</form>
							<div class="success-message w-form-done">
								<div class="div-block-8">
									<div class="text-field">Thank you! <br>Your submission has been received!</div>
								</div>
							</div>
							<div class="w-form-fail">
								<div>Oops! Something went wrong while submitting the form.</div>
							</div>
						</div>
						<div class="styk-form-mom _2 w-form">
							<form method="get" fs-formsubmit-element="form-2" name="email-form" data-name="Email Form" id="email-form2" fs-formsubmit-reset="4000" class="form" data-wf-page-id="65ae67e0e00057e5d2111407" data-wf-element-id="b3e640d9-2269-9bed-5643-84a089146ba8">
								<div data-delay="4000" data-animation="slide" class="form-slider first-slide w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="0" data-infinite="true">
									<div class="w-slider-mask">
										<div class="form-slide w-slide">
											<div class="_100vhctnter _1st">
												<div class="p-12-120 whtx">share your vision</div>
												<textarea required placeholder="How do you envision shaping the future with us?" maxlength="5000" id="field-2" name="field-2" data-name="Field 2" class="text-field w-input"></textarea>
											</div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">How to get in touch with you?</div>
												<input class="text-field w-input" maxlength="256" name="field-3" data-name="Field 3" placeholder="Enter your email" type="email" id="field-3" required>
											</div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">What can I call you?</div>
												<input class="text-field w-input" maxlength="256" name="field-3" data-name="Field 3" placeholder="Enter your name" type="text" id="field-3" required>
											</div>
										</div>
									</div>
									<div class="l-arrow w-slider-arrow-left">
										<div class="red-form-line"></div>
										<div class="text-block-6">BAck</div>
									</div>
									<div class="right-arrow w-slider-arrow-right">
										<div>Next</div>
									</div>
									<div class="none w-slider-nav w-round w-num"></div>
								</div>
								<input type="submit" data-wait="Please wait..." fs-formsubmit-element="reset" class="submit fs_formsubmit_button w-button" value="Submit">
							</form>
							<div class="success-message w-form-done">
								<div class="div-block-8">
									<div class="text-field">Thank you! <br>Your submission has been received!</div>
								</div>
							</div>
							<div class="w-form-fail">
								<div>Oops! Something went wrong while submitting the form.</div>
							</div>
						</div>
						<div class="styk-form-mom _3 w-form">
							<form method="get" fs-formsubmit-element="form-3" name="email-form" data-name="Email Form" id="email-form3" fs-formsubmit-reset="4000" class="form" data-wf-page-id="65ae67e0e00057e5d2111407" data-wf-element-id="b3e640d9-2269-9bed-5643-84a089146bcd">
								<div data-delay="4000" data-animation="slide" class="form-slider first-slide w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="0" data-infinite="true">
									<div class="w-slider-mask">
										<div class="form-slide w-slide">
											<div class="_100vhctnter _1st">
												<div class="p-12-120 whtx">Describe your project</div>
												<textarea required placeholder="What is special about what you’re doing?" maxlength="5000" id="field-2" name="field-2" data-name="Field 2" class="text-field w-input"></textarea>
											</div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">How to get in touch with you?</div>
												<input class="text-field w-input" maxlength="256" name="field-3" data-name="Field 3" placeholder="Enter your email" type="email" id="field-3" required>
											</div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">What can I call you?</div>
												<input class="text-field w-input" maxlength="256" name="field-3" data-name="Field 3" placeholder="Enter your name" type="text" id="field-3" required>
											</div>
										</div>
									</div>
									<div class="l-arrow w-slider-arrow-left">
										<div class="red-form-line"></div>
										<div class="text-block-6">BAck</div>
									</div>
									<div class="right-arrow w-slider-arrow-right">
										<div>Next</div>
									</div>
									<div class="none w-slider-nav w-round w-num"></div>
								</div>
								<input type="submit" data-wait="Please wait..." fs-formsubmit-element="reset" class="submit fs_formsubmit_button w-button" value="Submit">
							</form>
							<div class="success-message w-form-done">
								<div class="div-block-8">
									<div class="text-field">Thank you! <br>Your submission has been received!</div>
								</div>
							</div>
							<div class="w-form-fail">
								<div>Oops! Something went wrong while submitting the form.</div>
							</div>
						</div>
						<div class="top-stykert">
							<div class="tline ll">
								<a href="#" class="tlink main-tlink formpp">Empower the Future with Us</a><a href="#" class="tlink main-tlink formpp">share your vision</a><a href="#" class="tlink main-tlink formpp">Describe your project</a>
								<div class="div-block-2"></div>
								<a href="/projects" class="tlink">All projects</a>
							</div>
							<a href="#" class="close-form w-inline-block">
								<div class="text-block-5">CLOSE</div>
							</a>
						</div>
					</div>
				</div>
				<?php get_footer(); ?>
