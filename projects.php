<?php
/**
 * Template name: Projects template
 *
 * @package 0.0.1
 */

defined( 'ABSPATH' ) || exit;
get_header(
	null,
	array(
		'data-wf-page'            => '65d843633dee84076acaaba9',
		'container-extra-classes' => 'blackmenu',
	)
);
?>
				<div class="div-block-4 obsf ob1">
					<div class="div-block-6"></div>
					<div class="stik-diver ggh">
						<section class="section">
							<div class="container secnd top-op">
								<h1 class="p-76-92">Projects</h1>
								<?php
								$query_args = array(
									'post_type'      => 'project',
									'posts_per_page' => -1,
								);

								if ( isset( $_GET['services'] ) && ! empty( $_GET['services'] ) ) {
									$query_args['tax_query'][] = array(
										'taxonomy' => 'service',
										'field'    => 'term_id',
										'terms'    => is_array( $_GET['services'] ) ? $_GET['services'] : array( $_GET['services'] ),
									);
								}

								if ( isset( $_GET['industries'] ) && ! empty( $_GET['industries'] ) ) {
									$query_args['tax_query'][] = array(
										'taxonomy' => 'industry',
										'field'    => 'term_id',
										'terms'    => is_array( $_GET['industries'] ) ? $_GET['industries'] : array( $_GET['industries'] ),
									);
								}

								$query = new WP_Query( $query_args );

								if ( $query->have_posts() ) :
									?>
									<div class="filter-block-mob">
										<div class="top-line">
											<a href="#" class="filter-switcher w-inline-block">
												<div>Filter</div>
												<div class="filter-shevron _2 w-embed">
													<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 10 10" fill="none">
														<path d="M5 10L2 1L8 1L5 10Z" fill="currentColor"></path>
													</svg>
												</div>
											</a>
											<a href="#" class="clear-filter">Clear filters</a>
										</div>
										<div class="filters-block">
											<div class="w-form">
												<form id="email-form-4" name="email-form-4" data-name="Email Form 4" method="get" data-wf-page-id="65d843633dee84076acaaba9" data-wf-element-id="b89cf7ca-e2c6-3358-fec3-101568a42046">
													<div class="droper-filter">
														<div class="drpoter-block">
															<div class="p-12-120">Services (<span class="count">6</span>)</div>
															<img src="<?php echo get_template_directory_uri(); ?>/images/65d85ded4d043968d9a1a5d9_chevron.svg" loading="lazy" alt class="image-2 no-mob">
														</div>
														<div class="droper-content">
															<label class="w-checkbox rdb">
																<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-7"></div>
																<input type="checkbox" id="checkbox-7" name="checkbox-7" data-name="Checkbox 7" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-7">Custom Software Development</span>
															</label>
															<label class="w-checkbox rdb">
																<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-2"></div>
																<input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-2">CRM Development</span>
															</label>
															<label class="w-checkbox rdb">
																<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-3"></div>
																<input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-3">Web Development</span>
															</label>
															<label class="w-checkbox rdb">
																<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
																<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">Mobile app Development</span>
															</label>
															<label class="w-checkbox rdb">
																<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
																<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">Saas Development</span>
															</label>
															<label class="w-checkbox rdb">
																<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
																<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">Cloud Development</span>
															</label>
															<label class="w-checkbox rdb">
																<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
																<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">MVP Development</span>
															</label>
															<label class="w-checkbox rdb">
																<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
																<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">CROSS-PLATFORM SOLUTIONS</span>
															</label>
															<label class="w-checkbox rdb">
																<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
																<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">Database solutions</span>
															</label>
															<label class="w-checkbox rdb">
																<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
																<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">API integration</span>
															</label>
															<label class="w-checkbox rdb">
																<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
																<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">Support and maintenance</span>
															</label>
															<label class="w-checkbox rdb">
																<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-4"></div>
																<input type="checkbox" id="checkbox-4" name="checkbox-4" data-name="Checkbox 4" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-4">TECHNOLOGY consulting</span>
															</label>
														</div>
													</div>
													<div class="droper-filter">
														<div class="drpoter-block">
															<div class="p-12-120">Industries (2)</div>
															<img src="<?php echo get_template_directory_uri(); ?>/images/65d85ded4d043968d9a1a5d9_chevron.svg" loading="lazy" alt class="image-2 no-mob">
														</div>
														<div class="droper-content">
															<label class="w-checkbox rdb">
																<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-5"></div>
																<input type="checkbox" id="checkbox-5" name="checkbox-5" data-name="Checkbox 5" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-5">Agritech</span>
															</label>
															<label class="w-checkbox rdb">
																<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="checkbox-6"></div>
																<input type="checkbox" id="checkbox-6" name="checkbox-6" data-name="Checkbox 6" style="opacity:0;position:absolute;z-index:-1"><span class="radio-button-label w-form-label" for="checkbox-6">Consulting</span>
															</label>
														</div>
													</div>
												</form>
												<div class="w-form-done">
													<div>Thank you! Your submission has been received!</div>
												</div>
												<div class="w-form-fail">
													<div>Oops! Something went wrong while submitting the form.</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="projects-core underfilter">
										<div class="projects-container">
											<?php
											while ( $query->have_posts() ) :
												$query->the_post();
												get_template_part( 'components/project' );
											endwhile;
											wp_reset_postdata();
											?>
										</div>
										<div id="w-node-_3d3e5ec1-5644-c6f4-9e30-c9ed9830b5c0-6acaaba9" class="styk-btm _1">
											<div class="form-block filter-projects">
											<?php
											$classes = 'form-2';

											if ( ( isset( $_GET['services'] ) && ! empty( $_GET['services'] ) ) || ( isset( $_GET['industries'] ) && ! empty( $_GET['industries'] ) ) ) {
												$classes .= ' form--active';
											}
											?>
												<form id="projects-filter-form" class="<?php echo esc_attr( $classes ); ?>" data-wf-page-id="65d843633dee84076acaaba9" data-wf-element-id="6ddaff6a-b4e1-9242-a944-e6813b312421">
												<?php unset( $classes ); ?>
													<input type="submit" data-wait="Please wait..." class="hide w-button" value="Submit">
													<div class="spleet">
														<div class="text-block-4">Filters</div>
														<button type="reset" class="link-2">Clear filters</button>
													</div>
													<div class="form-filters-container">
														<?php
														$services = attolabs_get_posts_terms( 'service', $query->posts );
														if ( ! empty( $services ) ) :
															?>
															<div class="droper-filter">
																<div class="drpoter-block">
																	<div class="p-12-120">Services (<span class="count"><?php echo count( $services ); ?></span>)</div>
																	<img src="<?php echo esc_url( TEMPLATE_PATH . '/images/65d85ded4d043968d9a1a5d9_chevron.svg' ); ?>" loading="lazy" alt class="image-2">
																</div>
																<div class="droper-content">
																	<?php foreach ( $services as $service ) : ?>
																		<label class="w-checkbox rdb">
																			<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="<?php echo esc_attr( 'service_' . $service->term_id ); ?>"></div>
																			<input 
																				type="checkbox" 
																				id="<?php echo esc_attr( 'service_' . $service->term_id ); ?>" 
																				name="services[]" 
																				value="<?php echo esc_attr( $service->term_id ); ?>"
																			/>
																			<span class="radio-button-label w-form-label" for="<?php echo esc_attr( 'service_' . $service->term_id ); ?>"><?php echo esc_html( $service->name ); ?></span>
																		</label>
																	<?php endforeach; ?>
																</div>
															</div>
															<?php
														endif;

														$industries = attolabs_get_posts_terms( 'industry', $query->posts );
														if ( ! empty( $industries ) ) :
															?>
															<div class="droper-filter">
																<div class="drpoter-block">
																	<div class="p-12-120">Industries (<?php echo count( $industries ); ?>)</div>
																	<img src="<?php echo esc_url( TEMPLATE_PATH . '/images/65d85ded4d043968d9a1a5d9_chevron.svg' ); ?>" loading="lazy" alt class="image-2">
																</div>
																<div class="droper-content">
																	<?php foreach ( $industries as $industry ) : ?>
																		<label class="w-checkbox rdb">
																			<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="<?php echo esc_attr( 'industry_' . $industry->term_id ); ?>"></div>
																			<input 
																				type="checkbox" 
																				id="<?php echo esc_attr( 'industry_' . $industry->term_id ); ?>" 
																				name="industries[]" 
																				value="<?php echo esc_attr( $industry->term_id ); ?>"
																			/>
																			<span class="radio-button-label w-form-label" for="<?php echo esc_attr( 'industry_' . $industry->term_id ); ?>"><?php echo esc_html( $industry->name ); ?></span>
																		</label>
																	<?php endforeach; ?>
																</div>
															</div>
														<?php endif; ?>
													</div>
													<input type="hidden" name="action" value="filter_projects" />
													<?php wp_nonce_field( 'attolabs_filter_projects', 'filter_nonce' ); ?>
												</form>
											</div>
										</div>
									</div>
								<?php endif; ?>
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
						<div class="styk-form-mom _1">
							<form id="email-form" data-form="slider" class="form" data-wf-page-id="65d843633dee84076acaaba9" data-wf-element-id="977730e5-b10b-94b8-fdb5-049f4c68f4eb" novalidate>
								<div data-delay="4000" data-animation="slide" class="form-slider first-slide w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="0" data-infinite="true">
									<div class="w-slider-mask">
										<div class="form-slide w-slide">
											<div class="_100vhctnter _1st">
												<div class="p-12-120 whtx">Share your vision below</div>
												<div class="input-keeper bigger">
													<textarea required placeholder="How do you envision shaping the future with us?" maxlength="5000" id="vision-2" name="vision" class="text-field w-input"></textarea>
												</div>
											</div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">How to get in touch with you?</div>
												<div class="input-keeper bigger">
													<input class="text-field w-input" maxlength="256" name="email" placeholder="Enter your email" type="email" id="email-2" required>
												</div>
											</div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">What can I call you?</div>
												<div class="input-keeper bigger">
													<input class="text-field w-input" maxlength="256" name="name" placeholder="Enter your name" type="text" id="name-2" required>
												</div>
											</div>
										</div>
									</div>
									<div class="l-arrow w-slider-arrow-left">
										<div class="red-form-line"></div>
										<div class="text-block-6">Back</div>
									</div>
									<div class="right-arrow w-slider-arrow-right">
										<div>Next</div>
									</div>
									<div class="none w-slider-nav w-round w-num"></div>
								</div>
								<input type="submit" data-wait="Please wait..." class="submit fs_formsubmit_button w-button" value="Submit">
								<input type="hidden" name="action" value="submit_contact_form" />
								<?php $message = ! empty( $forms ) && ! empty( $forms['empower_future_with_us'] ) ? $forms['empower_future_with_us'] : 'Your message has been sent successfully'; ?>
								<input type="hidden" name="message" value="<?php echo esc_attr( $message ); ?>">
								<?php wp_nonce_field( '_submit_contact_form', '_contact_form_nonce' ); ?>
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
						<div class="styk-form-mom _2">
							<form id="email-form2" data-form="slider" class="form" data-wf-page-id="65d843633dee84076acaaba9" data-wf-element-id="977730e5-b10b-94b8-fdb5-049f4c68f510" novalidate>
								<div data-delay="4000" data-animation="slide" class="form-slider first-slide w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="0" data-infinite="true">
									<div class="w-slider-mask">
										<div class="form-slide w-slide">
											<div class="_100vhctnter _1st">
												<div class="p-12-120 whtx">share your vision</div>
												<div class="input-keeper bigger">
													<textarea required placeholder="How do you envision shaping the future with us?" maxlength="5000" id="vision-2" name="vision" class="text-field w-input"></textarea>
												</div>
											</div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">How to get in touch with you?</div>
												<div class="input-keeper bigger">
													<input class="text-field w-input" maxlength="256" name="email" placeholder="Enter your email" type="email" id="email-2" required>
												</div>
											</div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">What can I call you?</div>
												<div class="input-keeper bigger">
													<input class="text-field w-input" maxlength="256" name="name" placeholder="Enter your name" type="text" id="name-2" required>
												</div>
											</div>
										</div>
									</div>
									<div class="l-arrow w-slider-arrow-left">
										<div class="red-form-line"></div>
										<div class="text-block-6">Back</div>
									</div>
									<div class="right-arrow w-slider-arrow-right">
										<div>Next</div>
									</div>
									<div class="none w-slider-nav w-round w-num"></div>
								</div>
								<input type="submit" data-wait="Please wait..." class="submit fs_formsubmit_button w-button" value="Submit">
								<input type="hidden" name="action" value="submit_contact_form" />
								<?php $message = ! empty( $forms ) && ! empty( $forms['share_your_vision'] ) ? $forms['share_your_vision'] : 'Your message has been sent successfully'; ?>
								<input type="hidden" name="message" value="<?php echo esc_attr( $message ); ?>">
								<?php wp_nonce_field( '_submit_contact_form', '_contact_form_nonce' ); ?>
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
						<div class="styk-form-mom _3">
							<form id="email-form3" data-form="slider" class="form" data-wf-page-id="65d843633dee84076acaaba9" data-wf-element-id="977730e5-b10b-94b8-fdb5-049f4c68f535" novalidate>
								<div data-delay="4000" data-animation="slide" class="form-slider first-slide w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="0" data-infinite="true">
									<div class="w-slider-mask">
										<div class="form-slide w-slide">
											<div class="_100vhctnter _1st">
												<div class="p-12-120 whtx">Describe your project</div>
												<div class="input-keeper bigger">
													<textarea required placeholder="What is special about what you’re doing?" maxlength="5000" id="project-3" name="project" class="text-field w-input"></textarea>
												</div>
											</div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">How to get in touch with you?</div>
												<div class="input-keeper bigger">
													<input class="text-field w-input" maxlength="256" name="email" placeholder="Enter your email" type="email" id="email" required>
												</div>
											</div>
										</div>
										<div class="form-slide w-slide">
											<div class="_100vhctnter">
												<div class="p-12-120 whtx">What can I call you?</div>
												<div class="input-keeper bigger">
													<input class="text-field w-input" maxlength="256" name="name" placeholder="Enter your name" type="text" id="name-3" required>
												</div>
											</div>
										</div>
									</div>
									<div class="l-arrow w-slider-arrow-left">
										<div class="red-form-line"></div>
										<div class="text-block-6">Back</div>
									</div>
									<div class="right-arrow w-slider-arrow-right">
										<div>Next</div>
									</div>
									<div class="none w-slider-nav w-round w-num"></div>
								</div>
								<input type="submit" data-wait="Please wait..." class="submit fs_formsubmit_button w-button" value="Submit">
								<input type="hidden" name="action" value="submit_contact_form" />
								<?php $message = ! empty( $forms ) && ! empty( $forms['describe_your_project'] ) ? $forms['describe_your_project'] : 'Your message has been sent successfully'; ?>
								<input type="hidden" name="message" value="<?php echo esc_attr( $message ); ?>">
								<?php wp_nonce_field( '_submit_contact_form', '_contact_form_nonce' ); ?>
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
								<a href="#" class="tlink main-tlink formpp">Empower the Future with Us</a>
								<div class="div-block-2"></div>
								<a href="#" data-w-id="977730e5-b10b-94b8-fdb5-049f4c68f562" style="width:0%" class="tlink show-filters">filters</a>
							</div>
							<a href="#" class="close-form w-inline-block">
								<div class="text-block-5">CLOSE</div>
							</a>
						</div>
					</div>
				</div>
				<a href="#" class="hide-filters buttoner w-inline-block"></a>
				<a href="#" class="show-filters buttoner w-inline-block"></a>
				<?php get_footer(); ?>
