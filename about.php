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
$tabs                   = get_field( 'tabs' );
$text_section           = get_field( 'text_section' );
$our_values_block       = get_field( 'our_values_block' );
$current_language       = pll_current_language();
$branches               = attolabs_get_branches_by_lang( $current_language );
$projects_page_id       = 56;
$projects_page          = pll_get_post( $projects_page_id, $current_language );
$privacy_policy_page_id = 3;
$privacy_policy_page    = pll_get_post( $privacy_policy_page_id, $current_language );
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
											<?php
											$image_description = $hover_image['image_description'];
											if ( ! empty( $image_description ) ) :
												?>
												<div class="p-12-120 absp"><?php echo esc_html( $image_description ); ?></div>
											<?php endif; ?>
										</div>
									</div>
								<?php endforeach; ?>
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
								<h2 class="p-18-120 n-pc"><?php pll_e( 'Our values' ); ?></h2>
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
								<h2 class="p-18-120"><?php pll_e( 'Our values' ); ?></h2>
							</div>
						</div>
					</section>
				<?php endif; ?>
				<?php
				if ( ! empty( $branches ) ) :
					$our_branches = is_array( get_field( 'our_branches' ) ) ? get_field( 'our_branches' ) : array();
					?>
					<div class="div-block-4">
						<div class="div-block-6"></div>
						<div class="stik-diver">
							<section class="section">
								<div class="container">
									<div class="horiz-liner">
										<h2 class="h2 h2-offices"><?php pll_e( 'Our Branches' ); ?></h2>
										<div class="aress-core offices-vert-grid">
											<?php
											foreach ( $branches as $index => $branch ) :
												$country        = $branch['country'];
												$address_name   = $branch['address_name'];
												$contact_phones = $branch['contact_phones'];
												$contact_email  = $branch['contact_email'];
												?>
												<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42de3-d2111407" class="adress-item">
													<?php if ( ! empty( $country ) ) : ?>
														<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42de4-d2111407" class="p-18-120"><?php echo esc_html( $country ); ?></div>
													<?php endif; ?>
													<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42de6-d2111407" class="adress-item_bottom">
														<?php if ( ! empty( $address_name ) ) : ?>
															<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42de7-d2111407"><?php echo esc_html( $address_name ); ?></div>
														<?php endif; ?>
														<?php if ( ! empty( $contact_phones ) ) : ?>
															<div id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42de9-d2111407" class="adress-item_bottom_ver">
																<?php foreach ( $contact_phones as $contact_phone ) : ?>
																	<a href="<?php echo esc_url( attolabs_format_phone_link( $contact_phone['phone_number'] ) ); ?>"><?php echo esc_html( $contact_phone['phone_number'] ); ?></a>
																<?php endforeach; ?>
															</div>
														<?php endif; ?>
														<?php if ( ! empty( $contact_email ) ) : ?>
															<a href="<?php echo esc_url( attolabs_format_email_link( $contact_email ) ); ?>" id="w-node-_5d1a3da3-4d55-87c4-4e27-13cecdd42dee-d2111407"><?php echo esc_html( $contact_email ); ?></a>
														<?php endif; ?>
													</div>
													<?php
													$first_image = isset( $our_branches['first_image'] ) ? $our_branches['first_image'] : null;
													if ( 0 === $index && ! empty( $first_image ) ) :
														?>
														<div class="project-img img-addr">
															<?php
															echo wp_get_attachment_image(
																$first_image,
																'full',
																false,
																array(
																	'loading' => 'eager',
																	'class' => 'img-cover pixel-addr',
																)
															);
															?>
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
													<?php endif; ?>
													<?php
													$second_image = isset( $our_branches['second_image'] ) ? $our_branches['second_image'] : null;
													if ( 5 === $index && ! empty( $second_image ) ) :
														?>
														<div class="project-img img-addr _2">
															<?php
															echo wp_get_attachment_image(
																$second_image,
																'full',
																false,
																array(
																	'loading' => 'eager',
																	'class' => 'img-cover pixel-addr',
																)
															);
															?>
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
													<?php endif; ?>
												</div>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				<?php endif; ?>
				<div id="styker" class="div-block-3">
					<div class="form-tracker"></div>
				</div>
				<div class="styk-form">
					<div class="form-ceeper">
						<div class="styk-form-mom _1">
							<form id="email-form" data-form="slider" class="form" data-wf-page-id="65ae67e0e00057e5d2111407" data-wf-element-id="b3e640d9-2269-9bed-5643-84a089146b83">
								<div data-delay="4000" data-animation="slide" class="form-slider first-slide w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="0" data-infinite="true">
									<div class="w-slider-mask">
										<div class="form-slide w-slide">
											<div class="_100vhctnter _1st">
												<div class="p-12-120 whtx"><?php pll_e( 'Empower the Future with Us' ); ?></div>
												<div class="input-keeper bigger">
													<textarea required placeholder="<?php pll_e( 'Tell us how we could help you to empower the future?' ); ?>" maxlength="5000" id="how-to-help" name="how-to-help" class="text-field w-input"></textarea>
												</div>
											</div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx"><?php pll_e( 'How to get in touch with you?' ); ?></div>
												<div class="input-keeper bigger">
													<input class="text-field w-input" maxlength="256" name="email" placeholder="<?php pll_e( 'Enter your email' ); ?>" type="email" id="email" required>
												</div>
											</div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx"><?php pll_e( 'What can I call you?' ); ?></div>
												<div class="input-keeper bigger">
													<input class="text-field w-input" maxlength="256" name="name" placeholder="<?php pll_e( 'Enter your name' ); ?>" type="text" id="name" required>
												</div>
												<span class="sticky-form-privacy-link"><?php pll_e( 'By clicking “Submit” you agree to our' ); ?> <a href="<?php echo esc_url( get_the_permalink( $privacy_policy_page ) ); ?>" target="_blank"><?php echo esc_html( get_the_title( $privacy_policy_page ) ); ?></a></span>
											</div>
										</div>
									</div>
									<div class="l-arrow w-slider-arrow-left">
										<div class="red-form-line"></div>
										<div class="text-block-6"><?php pll_e( 'Back' ); ?></div>
									</div>
									<div class="right-arrow w-slider-arrow-right">
										<div><?php pll_e( 'Next' ); ?></div>
									</div>
									<div class="none w-slider-nav w-round w-num"></div>
								</div>
								<input type="submit" data-wait="Please wait..." fs-formsubmit-element="reset" class="submit fs_formsubmit_button w-button" value="><?php pll_e( 'Submit' ); ?>">
								<input type="hidden" name="action" value="submit_contact_form" />
								<?php $message = ! empty( $forms ) && ! empty( $forms['empower_future_with_us'] ) ? $forms['empower_future_with_us'] : 'Your message has been sent successfully'; ?>
								<input type="hidden" name="message" value="<?php echo esc_attr( $message ); ?>">
								<?php wp_nonce_field( '_submit_contact_form', '_contact_form_nonce' ); ?>
							</form>
							<div class="success-message w-form-done">
								<div class="div-block-8">
									<div class="text-field"><?php pll_e( 'Thank you! <br>Your submission has been received!' ); ?></div>
								</div>
							</div>
							<div class="w-form-fail">
								<div><?php pll_e( 'Oops! Something went wrong while submitting the form.' ); ?></div>
							</div>
						</div>
						<div class="top-stykert">
							<div class="tline ll">
								<a href="#" class="tlink main-tlink formpp"><?php pll_e( 'Empower the Future with Us' ); ?></a>
								<a href="#" class="tlink main-tlink formpp"><?php pll_e( 'Share your vision' ); ?></a>
								<a href="#" class="tlink main-tlink formpp"><?php pll_e( 'Describe your project' ); ?></a>
								<div class="div-block-2"></div>
								<a href="<?php echo esc_url( get_the_permalink( $projects_page ) ); ?>" class="tlink"><?php echo esc_html( get_the_title( $projects_page ) ); ?></a>
							</div>
							<a href="#" class="close-form w-inline-block">
								<div class="text-block-5"><?php pll_e( 'Close' ); ?></div>
							</a>
						</div>
					</div>
				</div>
				<?php get_footer(); ?>
