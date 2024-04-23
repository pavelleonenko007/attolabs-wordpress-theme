<?php
/**
 * Template name: Jobs
 *
 * @package 0.0.1
 */

defined( 'ABSPATH' ) || exit;

get_header(
	null,
	array(
		'data-wf-page'            => '65dc28b2adbd672d4103d4fe',
		'container-extra-classes' => 'blackmenu',
	)
);

the_post();

$current_language = pll_current_language();
$positions        = attolabs_get_job_positions( $current_language );
$departments      = attolabs_get_job_departments( $positions );
$cities           = attolabs_get_job_cities( $positions );
$employment_types = attolabs_get_job_employment_types( $positions );
$projects_page_id = 56;
$projects_page    = pll_get_post( $projects_page_id, $current_language );
$translations     = array(
	'full-time'         => array(
		'de' => 'Vollzeit',
		'en' => 'Full-time',
		'ru' => 'Full-time',
	),
	'part-time'         => array(
		'de' => 'Teilzeit',
		'en' => 'Part-time',
		'ru' => 'Part-time',
	),
	'full-or-part-time' => array(
		'de' => 'Vollzeit oder Teilzeit',
		'en' => 'Full or part-time',
		'ru' => 'Full or part-time',
	),
	'permanent'         => array(
		'de' => 'Festanstellung',
		'en' => 'Permanent Employment',
		'ru' => 'Постоянный сотрудник',
	),
	'intern'            => array(
		'de' => 'Praktikum',
		'en' => 'Internship',
		'ru' => 'Практика',
	),
	'trainee'           => array(
		'de' => 'Trainee Stelle',
		'en' => 'Trainee Stelle',
		'ru' => 'Наставничество',
	),
	'freelance'         => array(
		'de' => 'Freelance Position',
		'en' => 'Freelance Position',
		'ru' => 'Фриланс',
	),
);
?>
				<section class="section main-section jobs-pager">
					<div class="container _100vh jobs-page">
						<div>
							<?php
							$description = get_field( 'description' );
							if ( ! empty( $description ) ) :
								?>
								<p class="p-12-120 joj"><?php echo esc_html( $description ); ?></p>
							<?php endif; ?>
						</div>
						<h1 class="p-76-92"><?php echo esc_html( attolabs_get_page_title( get_the_ID() ) ); ?></h1>
					</div>
				</section>
				<section class="section bg--fff7f3-2">
					<div class="container secnd _3 jobs-core">
						<div class="filter-block-mob job-pager">
							<div class="p-18-120 top-he"><?php pll_e( 'Open positions' ); ?> (<span class="count" data-filter="counter"><?php echo esc_html( count( $positions ) ); ?></span>)</div>
							<div class="top-line">
								<a href="#" class="filter-switcher w-inline-block">
									<div>Filter</div>
									<div class="filter-shevron _2 w-embed">
										<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 10 10" fill="none">
											<path d="M5 10L2 1L8 1L5 10Z" fill="currentColor"></path>
										</svg>
									</div>
								</a>
								<button type="reset" form="job-filter-form-mobile" class="clear-filter"><?php pll_e( 'Clear filters' ); ?></button>
								<button type="submit" form="job-filter-form-mobile" class="apply-filter" disabled><?php pll_e( 'Apply' ); ?></button>
							</div>
							<div class="filters-block">
								<div>
									<form data-wf-page-id="65dc28b2adbd672d4103d4fe" id="job-filter-form-mobile" data-form="filter-positions" data-form-trigger="change" data-wf-element-id="bb7b618a-69b2-8f5c-88ab-3e31c69f4a13">
										<?php if ( ! empty( $departments ) ) : ?>
											<div class="droper-filter">
												<div class="drpoter-block">
													<div class="p-12-120"><?php pll_e( 'Department' ); ?> (<?php echo esc_html( count( $departments ) ); ?>)</div>
													<img src="<?php echo esc_attr( TEMPLATE_PATH . '/images/65d85ded4d043968d9a1a5d9_chevron.svg' ); ?>" loading="lazy" alt class="image-2 no-mob">
												</div>
												<div class="droper-content">
													<?php foreach ( $departments as $department ) : ?>
														<label class="w-checkbox rdb">
															<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="<?php echo esc_attr( 'department_mob_' . $department ); ?>"></div>
															<input type="radio" id="<?php echo esc_attr( 'department_mob_' . $department ); ?>" name="department" value="<?php echo esc_attr( $department ); ?>">
															<span class="radio-button-label w-form-label" for="<?php echo esc_attr( 'department_mob_' . $department ); ?>"><?php echo esc_html( $department ); ?></span>
														</label>
													<?php endforeach; ?>
												</div>
											</div>
										<?php endif; ?>
										<?php if ( ! empty( $cities ) ) : ?>
											<div class="droper-filter">
												<div class="drpoter-block">
													<div class="p-12-120"><?php pll_e( 'Location' ); ?> (<?php echo esc_html( count( $cities ) ); ?>)</div>
													<img src="<?php echo esc_url( TEMPLATE_PATH . '/images/65d85ded4d043968d9a1a5d9_chevron.svg' ); ?>" loading="lazy" alt class="image-2 no-mob">
												</div>
												<div class="droper-content">
													<?php foreach ( $cities as $city ) : ?>
														<label class="w-checkbox rdb">
															<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="<?php echo esc_attr( 'office_mob_' . $city ); ?>"></div>
															<input type="radio" id="<?php echo esc_attr( 'office_mob_' . $city ); ?>" name="office" value="<?php echo esc_attr( $city ); ?>">
															<span class="radio-button-label w-form-label" for="<?php echo esc_attr( 'office_mob_' . $city ); ?>"><?php echo esc_html( $city ); ?></span>
														</label>
													<?php endforeach; ?>
												</div>
											</div>
										<?php endif; ?>
										<?php if ( ! empty( $employment_types ) ) : ?>
											<div class="droper-filter">
												<div class="drpoter-block">
													<div class="p-12-120"><?php pll_e( 'Job type' ); ?> (<?php echo esc_html( count( $employment_types ) ); ?>)</div>
													<img src="<?php echo esc_url( TEMPLATE_PATH . '/images/65d85ded4d043968d9a1a5d9_chevron.svg' ); ?>" loading="lazy" alt class="image-2 no-mob">
												</div>
												<div class="droper-content">
													<?php foreach ( $employment_types as $employment_type ) : ?>
														<label class="w-checkbox rdb">
															<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="<?php echo esc_attr( 'employment_type_mob_' . $employment_type ); ?>"></div>
															<input type="radio" id="<?php echo esc_attr( 'employment_type_mob_' . $employment_type ); ?>" name="employment_type" value="<?php echo esc_attr( $employment_type ); ?>">
															<span class="radio-button-label w-form-label" for="<?php echo esc_attr( 'employment_type_mob_' . $employment_type ); ?>"><?php echo esc_html( $translations[ $employment_type ][ $current_language ] ); ?></span>
														</label>
													<?php endforeach; ?>
												</div>
											</div>
										<?php endif; ?>
									</form>
								</div>
							</div>
						</div>
						<?php
						if ( ! empty( $positions ) ) :
							?>
							<div class="jobs-mom-form">
								<form id="job-filter-form" data-form="filter-positions" data-form-trigger="submit" class="jobs-form" data-wf-page-id="65dc28b2adbd672d4103d4fe" data-wf-element-id="e9aa1461-cfa6-6ef1-cffd-068ffa8cc9dc">
									<div class="p-18-120 top-he"><?php pll_e( 'Open positions' ); ?> (<span class="count" data-filter="counter"><?php echo esc_html( count( $positions ) ); ?></span>)</div>
									<div class="flex-left">
										<button type="reset" form="job-filter-form" class="clear-filters"><?php pll_e( 'Clear filters' ); ?></button>
										<div class="cl-fltrs"></div>
										<?php if ( ! empty( $departments ) ) : ?>
											<div class="job-droper">
												<div class="job-droper-a">
													<div class="p-12-120 uper"><?php pll_e( 'Department' ); ?></div>
													<div class="p-12-120 top-counter">
														<sup></sup>
													</div>
													<img src="<?php echo esc_attr( TEMPLATE_PATH . '/images/65d85ded4d043968d9a1a5d9_chevron.svg' ); ?>" loading="lazy" alt class="image-2">
												</div>
												<div class="job-droper-in">
													<div class="job-droper-in_content">
														<div class="flex-vert">
															<?php foreach ( $departments as $department ) : ?>
																<label class="rdb w-radio">
																	<div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button w-radio-input"></div>
																	<input type="radio" name="department" id="<?php echo esc_attr( 'department_' . $department ); ?>" value="<?php echo esc_attr( $department ); ?>">
																	<span class="radio-button-label w-form-label" for="<?php echo esc_attr( 'department_' . $department ); ?>"><?php echo esc_html( $department ); ?></span>
																</label>
															<?php endforeach; ?>
														</div>
														<div class="flex-horiz">
															<button type="submit" form="job-filter-form" disabled class="job-btn"><?php pll_e( 'Apply' ); ?></button>
															<a href="#" class="job-btn close"><?php pll_e( 'Close' ); ?></a>
														</div>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<?php
										if ( ! empty( $cities ) ) :
											?>
											<div class="job-droper">
												<div class="job-droper-a">
													<div class="p-12-120 uper"><?php pll_e( 'Location' ); ?></div>
													<div class="p-12-120 top-counter"><sup></sup></div>
													<img src="<?php echo esc_url( TEMPLATE_PATH . '/images/65d85ded4d043968d9a1a5d9_chevron.svg' ); ?>" loading="lazy" alt class="image-2">
												</div>
												<div class="job-droper-in">
													<div class="job-droper-in_content">
														<div class="flex-vert">
															<?php foreach ( $cities as $city ) : ?>
																<label class="rdb w-radio">
																	<div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button w-radio-input"></div>
																	<input type="radio" name="office" id="<?php echo esc_attr( 'office_' . $city ); ?>" value="<?php echo esc_attr( $city ); ?>">
																	<span class="radio-button-label w-form-label" for="<?php echo esc_attr( 'office_' . $city ); ?>"><?php echo esc_html( $city ); ?></span>
																</label>
															<?php endforeach; ?>
														</div>
														<div class="flex-horiz">
															<button type="submit" form="job-filter-form" disabled class="job-btn"><?php pll_e( 'Apply' ); ?></button>
															<a href="#" class="job-btn close"><?php pll_e( 'Close' ); ?></a>
														</div>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<?php
										if ( ! empty( $employment_types ) ) :
											?>
											<div class="job-droper">
												<div class="job-droper-a">
													<div class="p-12-120 uper"><?php pll_e( 'Job type' ); ?></div>
													<div class="p-12-120 top-counter"><sup></sup></div>
													<img src="<?php echo esc_attr( TEMPLATE_PATH . '/images/65d85ded4d043968d9a1a5d9_chevron.svg' ); ?>" loading="lazy" alt class="image-2">
												</div>
												<div class="job-droper-in">
													<div class="job-droper-in_content">
														<div class="flex-vert">
															<?php foreach ( $employment_types as $employment_type ) : ?>
																<label class="rdb w-radio">
																	<div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button w-radio-input"></div>
																	<input 
																		type="radio" 
																		name="employment_type" id="<?php echo esc_attr( 'employment_type_' . $employment_type ); ?>" value="<?php echo esc_attr( $employment_type ); ?>">
																		<span class="radio-button-label w-form-label" for="<?php echo esc_attr( 'employment_type_' . $employment_type ); ?>"><?php echo esc_html( $translations[ $employment_type ][ $current_language ] ); ?></span>
																</label>
															<?php endforeach; ?>
														</div>
														<div class="flex-horiz">
															<button type="submit" form="job-filter-form" disabled class="job-btn"><?php pll_e( 'Apply' ); ?></button>
															<a href="#" class="job-btn close"><?php pll_e( 'Close' ); ?></a>
														</div>
													</div>
												</div>
											</div>
										<?php endif; ?>
									</div>
								</form>
							</div>
						<?php endif; ?>
						<div class="jobs-core underfilter">
						<?php

						// Print job postings
						// foreach ( $positions as $position ) {
						// $detailLink = 'https://' . $hostname . '.jobs.personio.de/job/' . $position->id;
						// $channel    = htmlspecialchars( $_GET['channel'] );
						// if ( $channel ) {
						// $detailLink .= '?_pc=' . $channel;
						// }
						// echo '<a href="' . $detailLink . '" target="_blank" alt="Job Details">' .
						// '<h2>' . $position->name . '</h2>' .
						// '<p>' . $translations[ (string) $position->employmentType ][ $current_language ] . ', ' . $translations[ (string) $position->schedule ][ $current_language ] . '</p>' .
						// '</a>';
						// }

						// d( $positions );
						foreach ( $positions as $position ) :
							$department      = $position->department;
							$offices         = attolabs_get_position_offices( $position );
							$employment_type = (string) $position->employmentType;
							?>
								<div 
									id="w-node-_5dd46d37-ec32-59e7-3b21-59525383b3dc-4103d4fe" 
									class="jobs-item" 
									data-department="<?php echo esc_attr( $department ); ?>" 
									data-office="<?php echo esc_attr( implode( ',', $offices ) ); ?>"
									data-employment_type="<?php echo esc_attr( $employment_type ); ?>"
								>
									<div class="rel">
										<div class="jobs-name"><?php echo esc_html( $position->name ); ?></div>
										<a href="<?php echo esc_url( get_home_url() . '/jobs/' . $position->id ); ?>" class="abs-link w-inline-block"></a>
									</div>
									<div class="jobs-ins">
										<div class="jb-1">
											<div><?php echo esc_html( $position->department ); ?></div>
										</div>
										<?php
										$city               = (string) $position->office;
										$additional_cities  = ( isset( $position->additionalOffices ) && ! empty( $position->additionalOffices->office ) ) ? $position->additionalOffices->office : array();
										$extra_cities_count = count( $additional_cities );
										?>
										<div class="jb-2">
											<div class="job-in-drop">
											<?php
											$classes = 'job-drop-btn';
											if ( $extra_cities_count > 0 ) {
												$classes .= ' morethenone';
											}
											?>
												<div class="<?php echo esc_attr( $classes ); ?>">
													<div><?php echo esc_html( $city ); ?> <?php echo $extra_cities_count > 0 ? "(+{$extra_cities_count})" : ''; ?></div>
													<div class="job-shevron w-embed">
														<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 10 10" fill="none">
															<path d="M5 10L2 1L8 1L5 10Z" fill="currentColor"></path>
														</svg>
													</div>
												</div>
												<div class="job-drop-content">
													<div class="job-drop-content_in">
													<?php
													foreach ( $additional_cities as $additional_city ) :
														?>
															<div id="w-node-e4795563-5c9d-4937-0da7-2b502d981aaf-4103d4fe"><?php echo esc_html( $additional_city ); ?></div>
														<?php endforeach; ?>
													</div>
												</div>
											</div>
										</div>
										<div class="jb-1 last-jbcol">
											<div><?php echo esc_html( $translations[ (string) $position->employmentType ][ $current_language ] ); ?></div>
										</div>
										<div class="jb-1 last-jbcol">
											<div><?php echo esc_html( $translations[ (string) $position->schedule ][ $current_language ] ); ?></div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</section>
				<div id="styker" class="div-block-3">
					<div class="form-tracker"></div>
				</div>
				<div class="styk-form">
					<div class="form-ceeper jobs-core">
						<div class="styk-form-mom _1">
							<form id="job-contact-form" data-form="job-contact" class="form" data-wf-page-id="65dc28b2adbd672d4103d4fe" data-wf-element-id="2918af35-b134-b011-bc88-063920f2dc7f" novalidate>
								<div class="normal-form">
									<div id="w-node-_2918af35-b134-b011-bc88-063920f2dc81-4103d4fe" class="p-12-120 ww"><?php pll_e( 'Get in touch with us!' ); ?></div>
									<div id="w-node-_2918af35-b134-b011-bc88-063920f2dc83-4103d4fe" class="r-form-vertical">
										<div class="p-76-92 ww"><?php pll_e( 'What role are you seeking for?' ); ?></div>
										<div class="form-core">
											<div id="w-node-_2918af35-b134-b011-bc88-063920f2dc87-4103d4fe" class="input-keeper">
												<div class="form-label"><?php pll_e( 'Name' ); ?></div>
												<input class="input-normal w-input" maxlength="256" name="name" placeholder="JOHN JOHNSON" type="text" id="name" required>
											</div>
											<div id="w-node-_2918af35-b134-b011-bc88-063920f2dc8b-4103d4fe" class="input-keeper">
												<div class="form-label"><?php pll_e( 'Email' ); ?></div>
												<input class="input-normal w-input" maxlength="256" name="email" placeholder="ADDRESS@MAIL.COM" type="email" id="email" required>
											</div>
											<div id="w-node-_2918af35-b134-b011-bc88-063920f2dc8f-4103d4fe" class="input-keeper">
												<div class="form-label"><?php pll_e( 'Phone number' ); ?></div>
												<input class="input-normal w-input" maxlength="256" name="phone" placeholder="0617084035" type="tel" id="phone" required>
											</div>
											<div id="w-node-_2918af35-b134-b011-bc88-063920f2dc93-4103d4fe" class="input-keeper">
												<div class="form-label"><?php pll_e( 'Contact preference' ); ?></div>
												<div class="horiz-left">
													<label id="incroyable" class="cont-ref caller w-radio">
														<div class="w-form-formradioinput w-form-formradioinput--inputType-custom call-dot w-radio-input"></div>
														<input type="radio" name="contact_preference" id="call" style="opacity:0;position:absolute;z-index:-1" value="call">
														<span class="call-text w-form-label" for="call"><?php pll_e( 'Call' ); ?></span>
													</label>
													<div class="reger"></div>
													<label class="cont-ref w-radio">
														<div class="w-form-formradioinput w-form-formradioinput--inputType-custom call-dot w-radio-input"></div>
														<input type="radio" name="contact_preference" id="messenger" style="opacity:0;position:absolute;z-index:-1" value="Messenger">
														<span class="call-text w-form-label" for="messenger"><?php pll_e( 'Messenger' ); ?></span>
													</label>
												</div>
											</div>
											<div id="w-node-_2918af35-b134-b011-bc88-063920f2dca0-4103d4fe" class="input-keeper textarer">
												<div class="form-label"><?php pll_e( 'Message' ); ?></div>
												<textarea placeholder="<?php pll_e( 'Talk about your dream job' ); ?>" maxlength="5000" id="message" name="message" class="input-normal textarea w-input"></textarea>
											</div>
											<div id="w-node-_2918af35-b134-b011-bc88-063920f2dca4-4103d4fe" class="input-keeper textarer file-mom">
												<div class="form-label">CV</div>
												<div class="cv-line">
													<div class="w-embed">
														<div class="input-file-row">
															<label class="input-file"> 
															<input type="file" name="file" accept="application/pdf,application/vnd.ms-excel,image/jpg,image/jpeg,image/png"><span><?php pll_e( 'Attach the file' ); ?> (PDF, JPG, PNG)</span> </label>
															<div class="input-file-list"></div>
														</div>
													</div>
													<div class="p-12-120 ww2 cv-or"> <?php pll_e( 'Or' ); ?> </div>
													<input class="input-normal cv-link w-input" maxlength="256" name="link" placeholder="<?php pll_e( 'Insert a link' ); ?>" type="text" id="link" required>
												</div>
											</div>
											<label id="w-node-_2918af35-b134-b011-bc88-063920f2dcac-4103d4fe" class="input-keeper input-keeper--checkbox w-checkbox checkbox-field">
												<div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox" for="user_agreement"></div>
												<?php
												$privacy_policy_page_id = 3;
												$privacy_policy_page    = pll_get_post( $privacy_policy_page_id, $current_language );
												?>
												<input required type="checkbox" id="user_agreement" name="user_agreement">
												<span class="p-12-120 ww fomr-c w-form-label" for="user_agreement"><?php pll_e( 'I agree with the' ); ?> <a href="<?php echo esc_url( get_the_permalink( $privacy_policy_page ) ); ?>" class="link" target="_blank"><?php echo esc_html( get_the_title( $privacy_policy_page ) ); ?></a></span>
											</label>
										</div>
									</div>
								</div>
								<input type="hidden" name="action" value="submit_job_form">
								<?php wp_nonce_field( '_submit_job_form', 'job_form_nonce' ); ?>
								<input type="submit" data-wait="Please wait..." class="submit-re fs_formsubmit_button n-fowm w-button" value="<?php pll_e( 'Send' ); ?>">
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
								<a href="#" class="tlink main-tlink formpp"><?php pll_e( 'Didn’t find the desired position?' ); ?></a>
								<div class="div-block-2"></div>
								<a href="<?php echo esc_url( get_the_permalink( $projects_page ) ); ?>" class="tlink"><?php echo esc_html( get_the_permalink( $projects_page ) ); ?></a>
							</div>
							<a href="#" class="close-form w-inline-block">
								<div class="text-block-5"><?php pll_e( 'Close' ); ?></div>
							</a>
						</div>
					</div>
				</div>
				<?php get_footer(); ?>
