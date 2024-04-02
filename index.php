<?php
	/**
	 * Template name: Atto-flow
	 *
	 * @package 0.0.1
	 */

	defined( 'ABSPATH' ) || exit;
	get_header(
		null,
		array(
			'data-wf-page' => '65ae21eab8e90d9757d32ccb',
		)
	);

	the_post();
	$projects_page_id = 56;
	?>
				<section data-w-id="55190ab3-513e-5d8f-8125-8044187d946c" class="section main-section main-page obsf ob1">
					<div data-w-id="79284580-e454-7642-0e1a-43be8a2c8342" class="main-bg">
						<div class="main-img-front">
							<div class="div-block-9 mainer">
								<div data-is-ix2-target="1" class="background-video" data-w-id="61920619-552a-3f7a-9b15-5aba781df4d0" data-animation-type="lottie" data-src="<?php echo esc_url( TEMPLATE_PATH . '/images/lottie.json' ); ?>" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="98" data-duration="0" data-ix2-initial-state="0"></div>
							</div>
						</div>
						<div class="div-block">
							<div class="main-ings">
								<div class="main-img _1 tops">
									<div class="div-block-9">
										<div data-is-ix2-target="1" class="background-video" data-w-id="28193263-bdc0-1783-1df5-23f420b09fbb" data-animation-type="lottie" data-src="<?php echo esc_url( TEMPLATE_PATH . '/images/lottie.json' ); ?>" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="98" data-duration="0" data-ix2-initial-state="0"></div>
									</div>
								</div>
							</div>
							<div class="main-ings _2">
								<div class="main-img _2 bots">
									<div class="div-block-9">
										<div data-is-ix2-target="1" class="background-video" data-w-id="6a91be05-4171-5547-a51d-359cdf771640" data-animation-type="lottie" data-src="<?php echo esc_url( TEMPLATE_PATH . '/images/lottie.json' ); ?>" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="98" data-duration="0" data-ix2-initial-state="0"></div>
									</div>
								</div>
							</div>
							<div class="main-ings _3 tops">
								<div class="main-img _3 tops">
									<div class="div-block-9">
										<div data-is-ix2-target="1" class="background-video" data-w-id="5a479c53-0c88-1e12-732a-92366701d2e6" data-animation-type="lottie" data-src="<?php echo esc_url( TEMPLATE_PATH . '/images/lottie.json' ); ?>" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="98" data-duration="0" data-ix2-initial-state="0"></div>
									</div>
								</div>
							</div>
							<div class="main-ings _4">
								<div class="main-img _4 bots">
									<div class="div-block-9">
										<div data-is-ix2-target="1" class="background-video" data-w-id="f17304dd-c966-91a9-cc48-8f33dfdbd7bb" data-animation-type="lottie" data-src="<?php echo esc_url( TEMPLATE_PATH . '/images/lottie.json' ); ?>" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="98" data-duration="0" data-ix2-initial-state="0"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container _100vh dfs">
						<h1 class="h1-main-page"><?php the_title(); ?></h1>
					</div>
				</section>
				<?php
				$services_industries_section = get_field( 'services_industries_section' );
				$heading                     = ! empty( $services_industries_section ) ? $services_industries_section['heading'] : '';
				?>
				<section class="section obsf ob2">
					<div class="container secnd">
						<?php if ( ! empty( $heading ) ) : ?>
						<h2 class="p-76-92">Our team strives for unparalleled quality and innovative solutions, ensuring that <span class="red">your project will be executed at the highest level, exceeding expectations and delivering enduring value.</span></h2>
						<?php endif; ?>
						<?php
						$services = get_terms(
							array(
								'taxonomy'   => 'service',
								'hide_empty' => false, // TODO: set to true
							)
						);

						if ( ! empty( $services ) ) :
							?>
							<div class="cats-scroller">
								<h3 class="h3"><?php pll_e( 'Services' ); ?></h3>
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd0e6-57d32ccb" class="serv-core server">
									<?php foreach ( $services as $service ) : ?>
										<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd0e7-57d32ccb" class="serv-item">
											<a href="<?php echo esc_url( get_the_permalink( $projects_page_id ) . '?services=' . $service->term_id ); ?>" class="abs-serv-item-link"></a>
											<a id="w-node-_75904b16-76a3-3065-6a21-3868f85fd0e8-57d32ccb" href="#" class="serv-link"><?php echo esc_html( $service->name ); ?></a>
											<?php
											$projects = attolabs_get_projects_by_term( $service );
											?>
											<a href="#" class="serv-projects"><?php pll_e( 'Industries' ); ?><span class="serv-span">:<?php echo esc_html( attolabs_get_project_industry_number( $projects ) ); ?></span></a>
											<a id="w-node-_1223488a-8650-1ebc-1d48-71d2a33c8c8d-57d32ccb" href="<?php echo esc_url( get_the_permalink( $projects_page_id ) . '?services=' . $service->term_id ); ?>" class="serv-projects ll">View Projects<span class="serv-span">:<?php echo count( $projects ); ?></span></a>
											<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd0ee-57d32ccb" class="obs-link-tracker"></div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						<?php endif; ?>
						<?php
						$industries = get_terms(
							array(
								'taxonomy'   => 'industry',
								'hide_empty' => false, // TODO: set to true
							)
						);

						if ( ! empty( $industries ) ) :
							?>
							<div class="cats-scroller">
								<h3 class="h3"><?php pll_e( 'Industries' ); ?></h3>
								<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd11a-57d32ccb" class="serv-core">
									<?php foreach ( $industries as $industry ) : ?>
										<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd11b-57d32ccb" class="serv-item">
										<a href="<?php echo esc_url( get_the_permalink( $projects_page_id ) . '?industries=' . $service->term_id ); ?>" class="abs-serv-item-link"></a>
											<a href="#" class="serv-link"><?php echo esc_html( $industry->name ); ?></a>
											<?php
											$projects = attolabs_get_projects_by_term( $industry );
											?>
											<a href="#" class="serv-projects"><?php pll_e( 'Services' ); ?><span class="serv-span">:<?php echo esc_html( attolabs_get_project_services_number( $projects ) ); ?></span></a>
											<a id="w-node-_6ac1f909-6525-b9ed-30fd-a9774858d522-57d32ccb" href="<?php echo esc_url( get_the_permalink( $projects_page_id ) . '?industries=' . $service->term_id ); ?>" class="serv-projects ll">View Projects<span class="serv-span">:<?php echo count( $projects ); ?></span></a>
											<div id="w-node-_75904b16-76a3-3065-6a21-3868f85fd122-57d32ccb" class="obs-link-tracker"></div>
										</div>
									<?php endforeach; ?>
								</div>
							</div>
						<?php endif; ?>
						<div class="closes">
							<div class="closes-1 _1">
								<div class="skyt-top"></div>
								<div class="obs-trigger"></div>
								<p class="paragraph-3 texts textsmom">0aD(SDA)3221XX(5)$A92-FSXZ$AAZX SDA$007ZXZZ1MS9DQEE(S)D-115SDAKOA($)SDA-771ALSDA12$MNZA!Q12-NVXA0(SI)XCAD221LDF-123!92$13$sdA1eq-(a17)att0-(lab$)</p>
							</div>
							<div class="closes-1 _2">
								<div class="skyt-top _3"></div>
								<div class="obs-trigger _3"></div>
								<p class="paragraph-3 texts textsmom">1FWQ3$1sdoreq9(1210)DASD/6SDAD01MS.S92$112&ASA99!SDASUYZQ24459FFQ8$J1$0-0S(A)S1124$s001DASDWQ-3$sdoreq(qww)31$asd)sdaa10wa.asda$1(33$)asda341sad0</p>
							</div>
							<div class="closes-1 _3">
								<div class="skyt-top _5"></div>
								<div class="obs-trigger _2"></div>
								<p class="paragraph-3 texts textsmom ds">pnmx(21-ab)mx.asaq1$aqvbczo083cvxp-uixc0012(ox)q1.xq-124olzda1-4$4bxq-(5.110)-a14b$bxbna10c(xxz)12dxmq-113.gxcxp11$011q0mz$6680axv.5sa(s-134)z-h-it</p>
							</div>
						</div>
					</div>
				</section>
				<?php
				$projects = get_field( 'projects' );
				if ( ! empty( $projects ) ) :
					?>
					<section class="section obsf ob3">
						<div class="projects-container">
							<div class="projects-trgger-mom">
								<?php foreach ( $projects as $project ) : ?>
									<div class="project-trigger"></div>
								<?php endforeach; ?>
							</div>
							<div class="projects-mom">
								<div data-w-id="f1c5c006-3c57-2559-f82f-fba22142664a" class="abs-scroll-tracker"></div>
								<div class="skyk-projects">
									<div class="red-scroll-line"></div>
									<h2 class="h2-abs">Projects</h2>
									<?php
									foreach ( $projects as $index => $post ) :
										setup_postdata( $post );
										$classes = 'project-item';
										if ( 0 === $index ) {
											$classes .= ' active';
										}
										?>
										<div class="<?php echo esc_attr( $classes ); ?>">
											<?php
											unset( $classes );
											$abbreviation = get_field( 'abbreviation' );
											if ( ! empty( $abbreviation ) ) :
												?>
												<h3 class="h3-project"><?php echo esc_html( $abbreviation ); ?></h3>
											<?php endif; ?>
											<div class="project-item_top">
												<?php
												$short_description = get_field( 'short_description' );
												if ( ! empty( $short_description ) ) :
													?>
													<p class="p-18-120 mmax"><?php echo esc_html( $short_description ); ?></p>
													<?php endif; ?>
												<?php
												$industries = get_the_terms( get_the_ID(), 'industry' );
												if ( ! is_wp_error( $industries ) && ! empty( $industries ) ) :
													$industry_names = array_map(
														function ( $term ) {
															return $term->name;
														},
														$industries
													);
													?>
													<div class="_0w">
														<div class="text-block">Industry: <?php echo esc_html( implode( ', ', $industry_names ) ); ?></div>
													</div>
												<?php endif; ?>
												<a href="<?php the_permalink(); ?>" class="project-link">Learn more</a>
											</div>
											<?php
											if ( has_post_thumbnail() ) :
												$classes = 'project-img';
												if ( 0 < $index ) {
													$classes .= ' _' . $index + 1;
												}
												$classes .= ' homep';
												?>
												<div class="<?php echo esc_attr( $classes ); ?>">
													<?php
													unset( $classes );
													the_post_thumbnail(
														'full',
														array(
															'loading' => 'eager',
															'class'   => 'img-cover pixel',
														)
													);
													?>
													<div class="canvas-tops">
														<div id="w-node-_4e48d67b-52a7-c2ef-6192-c0983d9ec77f-57d32ccb" class="blt"></div>
														<div id="w-node-f55d94d4-88be-9f33-1c0f-c8e6cbdb0daa-57d32ccb" class="blt"></div>
														<div id="w-node-df93d455-e93d-80d6-3089-b767cd0fe371-57d32ccb" class="blt"></div>
														<div id="w-node-_5699b9a3-02f3-8dce-3ae0-f022948d0a49-57d32ccb" class="blt"></div>
														<div id="w-node-_6dd76305-5e96-77aa-8055-8fde6863e2f6-57d32ccb" class="blt"></div>
														<div id="w-node-_1f7ed754-5441-c6d7-b0ed-d903124156b3-57d32ccb" class="blt"></div>
														<div id="w-node-_1a79a2b3-f6b8-b546-6312-7cdad39b8a6a-57d32ccb" class="blt"></div>
														<div id="w-node-_70882c66-a252-a720-8d7f-7efa91e949b6-57d32ccb" class="blt"></div>
														<div id="w-node-_28cc339f-9cb1-dc3d-3a74-84d1e0f23962-57d32ccb" class="blt"></div>
														<div id="w-node-dfb6c611-aac7-5738-34d0-fb6671814df8-57d32ccb" class="blt"></div>
														<div id="w-node-_3e93898e-183b-b7ef-711c-acc70efebce1-57d32ccb" class="blt"></div>
													</div>
												</div>
											<?php endif; ?>
										</div>
										<?php
									endforeach;
									wp_reset_postdata();
									?>
									<!-- <div class="project-item">
										<h3 class="h3-project">UVP</h3>
										<div class="project-item_top">
											<p class="p-18-120 mmax">The modernization of the platform helped to speed up the search for documentation, the search for volunteers and the necessary data about them, in the database on the Unified Volunteer Platform for efficient and fast operation of the platform.</p>
											<div class="_0w">
												<div class="text-block">Industry:<br>Fintech</div>
											</div>
											<a href="/project-single" class="project-link">Learn more</a>
										</div>
										<div class="project-img _2 homep">
											<img src="<?php echo get_template_directory_uri(); ?>/images/65ae36374e9b439983d212e7_image2022720(1).webp" loading="eager" alt class="img-cover pixel">
											<div class="canvas-tops">
												<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a2c-57d32ccb" class="blt"></div>
												<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a2d-57d32ccb" class="blt"></div>
												<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a2e-57d32ccb" class="blt"></div>
												<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a2f-57d32ccb" class="blt"></div>
												<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a30-57d32ccb" class="blt"></div>
												<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a31-57d32ccb" class="blt"></div>
												<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a32-57d32ccb" class="blt"></div>
												<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a33-57d32ccb" class="blt"></div>
												<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a34-57d32ccb" class="blt"></div>
												<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a35-57d32ccb" class="blt"></div>
												<div id="w-node-_63140f28-56b2-fa17-f2a6-c71eebcc9a36-57d32ccb" class="blt"></div>
											</div>
										</div>
									</div>
									<div class="project-item">
										<h3 class="h3-project">CSH</h3>
										<div class="project-item_top">
											<p class="p-18-120 mmax">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
											<div class="_0w">
												<div class="text-block">Industry:<br>Fintech</div>
											</div>
											<a href="/project-single" class="project-link">Learn more</a>
										</div>
										<div class="project-img _3 homep">
											<img src="<?php echo get_template_directory_uri(); ?>/images/65e9d38498a521ef243a6cf9_image2022720(5).webp" loading="eager" alt class="img-cover pixel">
											<div class="canvas-tops">
												<div id="w-node-_06edf520-4c10-5c72-361c-1558d4168439-57d32ccb" class="blt"></div>
												<div id="w-node-_06edf520-4c10-5c72-361c-1558d416843a-57d32ccb" class="blt"></div>
												<div id="w-node-_06edf520-4c10-5c72-361c-1558d416843b-57d32ccb" class="blt"></div>
												<div id="w-node-_06edf520-4c10-5c72-361c-1558d416843c-57d32ccb" class="blt"></div>
												<div id="w-node-_06edf520-4c10-5c72-361c-1558d416843d-57d32ccb" class="blt"></div>
												<div id="w-node-_06edf520-4c10-5c72-361c-1558d416843e-57d32ccb" class="blt"></div>
												<div id="w-node-_06edf520-4c10-5c72-361c-1558d416843f-57d32ccb" class="blt"></div>
												<div id="w-node-_06edf520-4c10-5c72-361c-1558d4168440-57d32ccb" class="blt"></div>
												<div id="w-node-_06edf520-4c10-5c72-361c-1558d4168441-57d32ccb" class="blt"></div>
												<div id="w-node-_06edf520-4c10-5c72-361c-1558d4168442-57d32ccb" class="blt"></div>
												<div id="w-node-_06edf520-4c10-5c72-361c-1558d4168443-57d32ccb" class="blt"></div>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>
					</section>
				<?php endif; ?>
				<?php
				$feedback_section  = get_field( 'feedback_section' );
				$heading           = ! empty( $feedback_section ) ? $feedback_section['heading'] : '';
				$small_description = ! empty( $feedback_section ) ? $feedback_section['small_description'] : '';
				$team_feedback     = ! empty( $feedback_section ) ? $feedback_section['team_feedback'] : array();

				if ( ! empty( $heading ) || ! empty( $team_feedback ) ) :
					?>
					<div class="div-block-4 obsf ob1">
						<div class="div-block-6"></div>
						<div class="stik-diver">
							<section class="section">
								<div class="container secnd">
									<?php if ( ! empty( $heading ) ) : ?>
									<div>
										<h2 id="lo" class="p-76-92"><span class="red"><strong class="bold-text"><?php echo esc_html( $heading ); ?></strong></span></h2>
									</div>
									<?php endif; ?>
									<div class="fw-div">
										<?php if ( ! empty( $small_description ) ) : ?>
											<p class="paragraph p-18-120 styks"><?php echo esc_html( $small_description ); ?></p>
										<?php endif; ?>
										<?php if ( ! empty( $team_feedback ) ) : ?>
											<div id="w-node-_334cdc74-10ec-548f-cf64-8ad297d50458-57d32ccb" class="citas">
												<?php
												foreach ( $team_feedback as $feedback_item ) :
													$title                    = $feedback_item['title'];
													$employees_name           = $feedback_item['employees_name'];
													$position_of_the_employee = $feedback_item['position_of_the_employee'];
													$text                     = $feedback_item['text'];
													?>
													<div id="w-node-_3f682a01-b8c5-416c-5cb1-dbadb4d0a908-57d32ccb" class="cita">
														<?php if ( ! empty( $title ) ) : ?>
															<div class="p-18-120 blk"><?php echo esc_html( $title ); ?></div>
														<?php endif; ?>
														<?php if ( ! empty( $employees_name ) ) : ?>
															<div class="p-12-120 uper03">
																<?php echo esc_html( $employees_name ); ?>
																<br>
																<?php echo esc_html( $position_of_the_employee ); ?>
															</div>
														<?php endif; ?>
														<?php if ( ! empty( $text ) ) : ?>
															<div class="p-12-120">"<?php echo esc_html( $text ); ?>"</div>
														<?php endif; ?>
													</div>
												<?php endforeach; ?>
											</div>
										<?php endif; ?>
									</div>
								</div>
							</section>
						</div>
					</div>
				<?php endif; ?>
				<div id="styker" class="div-block-3 obsf ob1">
					<div class="form-tracker"></div>
					<a id="idid" href="#">Text Link</a>
				</div>
				<div class="styk-form">
					<div class="form-ceeper">
						<div class="styk-form-mom _1">
							<form id="email-form" data-form="slider" class="form" data-wf-page-id="65ae21eab8e90d9757d32ccb" data-wf-element-id="e712b2d4-cdc6-13d3-0be8-7d109bd42cb0" novalidate>
								<div data-delay="4000" data-animation="slide" class="form-slider first-slide w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="true" data-autoplay-limit="0" data-nav-spacing="3" data-duration="0" data-infinite="true">
									<div class="mask w-slider-mask">
										<div class="form-slide w-slide">
											<div class="_100vhctnter _1st">
												<div class="p-12-120 whtx">Share your vision below</div>
												<div class="input-keeper bigger">
													<textarea required placeholder="tell us how we could help you to emprower the future?" maxlength="5000" id="how-to-help" name="how-to-help" class="text-field w-input"></textarea>
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
													<input class="text-field w-input" maxlength="256" name="name" placeholder="Enter your name" type="text" id="name" required>
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
							<form id="email-form2" data-form="slider" class="form" data-wf-page-id="65ae21eab8e90d9757d32ccb" data-wf-element-id="62bf69a8-f603-3ce6-bde8-e72cf0aba4bd" novalidate>
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
							<form id="email-form3" data-form="slider" class="form" data-wf-page-id="65ae21eab8e90d9757d32ccb" data-wf-element-id="dfe4d803-9fa9-cd23-f971-78daedb7d0d2" novalidate>
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
