<?php
/**
 * Template name: Single project Template
 *
 * @package 0.0.1
 */

defined( 'ABSPATH' ) || exit;

get_header(
	null,
	array(
		'data-wf-page'            => '65e6e55dc3be5eb2532b9878',
		'container-extra-classes' => 'blackmenu',
	)
);

the_post();
?>
				<div class="div-block-4 obsf ob1">
					<div class="div-block-6"></div>
					<div class="stik-diver">
						<section class="section">
							<div class="container single-page">
								<div class="h2 single-p"><?php echo esc_html( attolabs_get_project_title_with_address( get_the_ID() ) ); ?></div>
								<?php
								$project_title = get_field( 'project_title' );
								if ( ! empty( $project_title ) ) :
									?>
									<p class="p-76-92"><?php echo esc_html( $project_title ); ?></p>
								<?php endif; ?>
							</div>

							<?php
							$projects_sections = get_field( 'projects_sections' );
							if ( ! empty( $projects_sections ) ) :
								foreach ( $projects_sections as $projects_section ) :
									if ( 'goals' === $projects_section['acf_fc_layout'] ) :
										?>
										<div class="container single-page">
											<div class="_2cols">
												<h2 class="h2 cont-line">Goals</h2>
												<?php
												$content = $projects_section['content'];
												if ( ! empty( $content ) ) :
													?>
													<div id="w-node-_1b799962-3628-1129-b54f-22fac9184453-532b9878" class="rich-text-block w-richtext">
														<?php echo $content; ?>
													</div>
												<?php endif; ?>
											</div>
										</div>
										<?php
									elseif ( 'solutions' === $projects_section['acf_fc_layout'] ) :
										$section_classes = has_post_thumbnail() ? 'single-var' : 'single-var none';
										?>
										<div class="<?php echo esc_attr( $section_classes ); ?>">
											<?php if ( has_post_thumbnail() ) : ?>
												<div class="project-img single">
													<?php
													the_post_thumbnail(
														'full',
														array(
															'loading' => 'eager',
															'class'   => 'img-cover pixel-single',
														)
													);
													?>
													<div class="canvas-tops">
														<div id="w-node-c577df9d-e982-17e9-a3a7-25e79a8dbf72-532b9878" class="blt"></div>
														<div id="w-node-c577df9d-e982-17e9-a3a7-25e79a8dbf73-532b9878" class="blt"></div>
														<div id="w-node-c577df9d-e982-17e9-a3a7-25e79a8dbf74-532b9878" class="blt"></div>
														<div id="w-node-c577df9d-e982-17e9-a3a7-25e79a8dbf75-532b9878" class="blt"></div>
														<div id="w-node-c577df9d-e982-17e9-a3a7-25e79a8dbf76-532b9878" class="blt"></div>
														<div id="w-node-c577df9d-e982-17e9-a3a7-25e79a8dbf77-532b9878" class="blt"></div>
														<div id="w-node-c577df9d-e982-17e9-a3a7-25e79a8dbf78-532b9878" class="blt"></div>
														<div id="w-node-c577df9d-e982-17e9-a3a7-25e79a8dbf79-532b9878" class="blt"></div>
														<div id="w-node-c577df9d-e982-17e9-a3a7-25e79a8dbf7a-532b9878" class="blt"></div>
														<div id="w-node-c577df9d-e982-17e9-a3a7-25e79a8dbf7b-532b9878" class="blt"></div>
														<div id="w-node-c577df9d-e982-17e9-a3a7-25e79a8dbf7c-532b9878" class="blt"></div>
													</div>
												</div>
											<?php endif; ?>
											<div class="container resoults">
												<div class="fw-div single-page">
													<h2 id="w-node-d845f0d9-7c2b-0b05-afb7-8c90a1720e76-532b9878" class="paragraph p-18-120 styks single-p">Solutions</h2>
													<?php
													$small_image = $projects_section['small_image'];
													$image_id    = $small_image['image'];
													if ( ! empty( $image_id ) ) :
														?>
														<div class="mom-imgs _22wewsd _2 zvz">
															<div class="project-img single _2 zvz">
																<?php
																echo wp_get_attachment_image(
																	$image_id,
																	'full',
																	false,
																	array(
																		'loading' => 'eager',
																		'class' => 'img-cover pixel-single',
																	)
																);
																?>
																<div class="canvas-tops">
																	<div id="w-node-_4f6f21dc-aef3-96b7-101d-dd4f62e4b707-532b9878" class="blt"></div>
																	<div id="w-node-_4f6f21dc-aef3-96b7-101d-dd4f62e4b708-532b9878" class="blt"></div>
																	<div id="w-node-_4f6f21dc-aef3-96b7-101d-dd4f62e4b709-532b9878" class="blt"></div>
																	<div id="w-node-_4f6f21dc-aef3-96b7-101d-dd4f62e4b70a-532b9878" class="blt"></div>
																	<div id="w-node-_4f6f21dc-aef3-96b7-101d-dd4f62e4b70b-532b9878" class="blt"></div>
																	<div id="w-node-_4f6f21dc-aef3-96b7-101d-dd4f62e4b70c-532b9878" class="blt"></div>
																	<div id="w-node-_4f6f21dc-aef3-96b7-101d-dd4f62e4b70d-532b9878" class="blt"></div>
																	<div id="w-node-_4f6f21dc-aef3-96b7-101d-dd4f62e4b70e-532b9878" class="blt"></div>
																	<div id="w-node-_4f6f21dc-aef3-96b7-101d-dd4f62e4b70f-532b9878" class="blt"></div>
																	<div id="w-node-_4f6f21dc-aef3-96b7-101d-dd4f62e4b710-532b9878" class="blt"></div>
																	<div id="w-node-_4f6f21dc-aef3-96b7-101d-dd4f62e4b711-532b9878" class="blt"></div>
																</div>
															</div>
															<div class="p-12-120 lt0-12px">Köln, Germany</div>
														</div>
													<?php endif; ?>
													<?php
													$solutions = $projects_section['solutions'];
													if ( ! empty( $solutions ) ) :
														?>
														<div id="w-node-_24224a79-18d5-1d4a-1f79-6774a9c24c27-532b9878" class="resoultes-core">
															<?php foreach ( $solutions as $solution ) : ?>
																<div id="w-node-_24224a79-18d5-1d4a-1f79-6774a9c24c28-532b9878" class="resoult">
																	<?php
																	$name        = $solution['name'];
																	$description = $solution['description'];
																	if ( ! empty( $name ) ) :
																		?>
																		<div class="p-18-120 blk resoult"><?php echo esc_html( $name ); ?></div>
																	<?php endif; ?>
																	<?php if ( ! empty( $description ) ) : ?>
																		<div class="p-18-120 res"><?php echo esc_html( $description ); ?></div>
																	<?php endif; ?>
																</div>
															<?php endforeach; ?>
														</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<?php
									elseif ( 'results' === $projects_section['acf_fc_layout'] ) :
										?>
										<div class="container secnd">
											<div>
												<h2 class="paragraph p-18-120">Results</h2>
												<?php
												$heading = $projects_section['heading'];
												if ( ! empty( $heading ) ) :
													?>
													<p class="p-76-92 prj"><?php echo esc_html( $heading ); ?></p>
												<?php endif; ?>
											</div>
											<?php
											$results = $projects_section['results'];
											if ( ! empty( $results ) ) :
												?>
												<div class="fw-div _2">
													<p class="paragraph p-18-120 styks m-none"> </p>
													<div id="w-node-_04fa4a65-d6b0-d774-a6fe-964b206fa7b5-532b9878" class="citas uls-mom">
														<?php foreach ( $results as $result ) : ?>
															<div id="w-node-_04fa4a65-d6b0-d774-a6fe-964b206fa7b6-532b9878" class="cita">
																<?php
																$name        = $result['name'];
																$description = $result['description'];
																if ( ! empty( $name ) ) :
																	?>
																	<div class="p-12-120 uper03 uls"><?php echo esc_html( $name ); ?></div>
																	<?php
																endif;
																if ( ! empty( $description ) ) :
																	?>
																	<div class="p-12-120"><?php echo esc_html( $description ); ?></div>
																<?php endif; ?>
															</div>
														<?php endforeach; ?>
													</div>
												</div>
											<?php endif; ?>
										</div>
										<?php
									endif;
									endforeach;
								endif;
							?>
							<div class="styk-btm _2">
								<div class="form-block">
									<div class="text-block-4 _2">Street lighting control system, Kaliningrad, Russia </div>
									<div class="archors-core">
										<a id="w-node-cee6474c-699a-06ef-472c-d53c4ca4e34e-532b9878" href="#" class="link-block w-inline-block">
											<div>Overview</div>
											<div class="html-embed-2 svggs w-embed">
												<svg width="10" height="10" viewbox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M9.5 5.5L0.500001 8.5L0.500001 2.5L9.5 5.5Z" fill="#292525"></path>
												</svg>
											</div>
										</a>
										<a id="w-node-b380f585-15c5-fa2f-0e7f-5c5a2ddb9359-532b9878" href="#" class="link-block w-inline-block">
											<div>Goals</div>
											<div class="html-embed-2 svggs w-embed">
												<svg width="10" height="10" viewbox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M9.5 5.5L0.500001 8.5L0.500001 2.5L9.5 5.5Z" fill="#292525"></path>
												</svg>
											</div>
										</a>
										<a id="w-node-_9f5f1990-e4f5-02c3-1f49-620ecc92f83d-532b9878" href="#" class="link-block w-inline-block">
											<div>Solutions</div>
											<div class="html-embed-2 svggs w-embed">
												<svg width="10" height="10" viewbox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M9.5 5.5L0.500001 8.5L0.500001 2.5L9.5 5.5Z" fill="#292525"></path>
												</svg>
											</div>
										</a>
										<a id="w-node-ef3c24e0-107a-e228-abd6-5c3a3bfc40b6-532b9878" href="#" class="link-block w-inline-block">
											<div>Results</div>
											<div class="html-embed-2 svggs w-embed">
												<svg width="10" height="10" viewbox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M9.5 5.5L0.500001 8.5L0.500001 2.5L9.5 5.5Z" fill="#292525"></path>
												</svg>
											</div>
										</a>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
				<div id="styker" class="div-block-3 obsf ob1">
					<div class="form-tracker"></div>
					<a id="idid" href="#">Text Link</a>
				</div>
				<div class="styk-form">
					<div class="styk-form-mom _1">
						<form id="contact-form" class="form" data-wf-page-id="65e6e55dc3be5eb2532b9878" data-wf-element-id="95b803ee-0670-c38f-aaee-058f9e5ce4ad">
							<div data-delay="4000" data-animation="slide" class="form-slider first-slide w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="0" data-infinite="true">
								<div class="w-slider-mask">
									<div class="form-slide w-slide">
										<div class="_100vhctnter _1st">
											<div class="p-12-120 whtx">Empower the Future with Us</div>
											<textarea 
												required 
												autofocus="true" 
												placeholder="tell us how we could help you to empower the future?" 
												maxlength="5000" 
												id="contact-comment" 
												name="comment" 
												class="text-field w-input"
											></textarea>
										</div>
									</div>
									<div class="form-slide w-slide">
										<div class="_100vhctnter">
											<div class="p-12-120 whtx">How to get in touch with you?</div>
											<input class="text-field w-input" autofocus="true" maxlength="256" name="email" placeholder="Enter your email" type="email" id="contact-email" required>
										</div>
									</div>
									<div class="form-slide w-slide">
										<div class="_100vhctnter">
											<div class="p-12-120 whtx">What can I call you?</div>
											<input class="text-field w-input" autofocus="true" maxlength="256" name="name" placeholder="Enter your name" type="text" id="contact-name" required>
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
							<a href="#" class="tlink main-tlink formpp">Empower the Future with Us</a>
							<div class="div-block-2"></div>
							<a href="#" class="tlink">All projects</a>
						</div>
						<a href="#" class="close-form w-inline-block">
							<div class="text-block-5">CLOSE</div>
						</a>
					</div>
				</div>
				<?php get_footer(); ?>
