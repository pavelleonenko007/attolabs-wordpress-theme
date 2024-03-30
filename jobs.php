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

$lang         = pll_current_language();
$positions    = attolabs_get_job_positions( $lang );
$departments  = attolabs_get_job_departments( $positions );
$cities       = attolabs_get_job_cities( $positions );
$schedules    = attolabs_get_job_schedules( $positions );
$translations = array(
	'full-time' => array(
		'de' => 'Vollzeit',
		'en' => 'Full-time',
	),
	'part-time' => array(
		'de' => 'Teilzeit',
		'en' => 'Part-time',
	),
	'permanent' => array(
		'de' => 'Festanstellung',
		'en' => 'Permanent Employment',
	),
	'intern'    => array(
		'de' => 'Praktikum',
		'en' => 'Internship',
	),
	'trainee'   => array(
		'de' => 'Trainee Stelle',
		'en' => 'Trainee Stelle',
	),
	'freelance' => array(
		'de' => 'Freelance Position',
		'en' => 'Freelance Position',
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
							<div class="p-18-120 top-he">Open positions (<span class="count"><?php echo esc_html( count( $positions ) ); ?></span>)</div>
							<div class="top-line">
								<a href="#" class="filter-switcher w-inline-block">
									<div>Filter</div>
									<div class="filter-shevron _2 w-embed">
										<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 10 10" fill="none">
											<path d="M5 10L2 1L8 1L5 10Z" fill="currentColor"></path>
										</svg>
									</div>
								</a>
								<button type="reset" form="job-filter-form-mobile" class="clear-filter">Clear filters</button>
							</div>
							<div class="filters-block">
								<div>
									<form data-wf-page-id="65dc28b2adbd672d4103d4fe" id="job-filter-form-mobile" data-form="filter-positions" data-form-trigger="change" data-wf-element-id="bb7b618a-69b2-8f5c-88ab-3e31c69f4a13">
										<?php if ( ! empty( $departments ) ) : ?>
											<div class="droper-filter">
												<div class="drpoter-block">
													<div class="p-12-120">Department (<?php echo esc_html( count( $departments ) ); ?>)</div>
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
													<div class="p-12-120">Location (<?php echo esc_html( count( $cities ) ); ?>)</div>
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
										<?php if ( ! empty( $schedules ) ) : ?>
											<div class="droper-filter">
												<div class="drpoter-block">
													<div class="p-12-120">Job type (<?php echo esc_html( count( $schedules ) ); ?>)</div>
													<img src="<?php echo esc_url( TEMPLATE_PATH . '/images/65d85ded4d043968d9a1a5d9_chevron.svg' ); ?>" loading="lazy" alt class="image-2 no-mob">
												</div>
												<div class="droper-content">
													<?php foreach ( $schedules as $schedule ) : ?>
														<label class="w-checkbox rdb">
															<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="<?php echo esc_attr( 'schedule_mob_' . $schedule ); ?>"></div>
															<input type="radio" id="<?php echo esc_attr( 'schedule_mob_' . $schedule ); ?>" name="schedule" value="<?php echo esc_attr( $schedule ); ?>">
															<span class="radio-button-label w-form-label" for="<?php echo esc_attr( 'schedule_mob_' . $schedule ); ?>"><?php echo esc_html( $schedule ); ?></span>
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
									<div class="p-18-120 top-he">Open positions (<span class="count"><?php echo esc_html( count( $positions ) ); ?></span>)</div>
									<div class="flex-left">
										<button type="reset" class="clear-filters">Clear filters</button>
										<div class="cl-fltrs"></div>
										<?php if ( ! empty( $departments ) ) : ?>
											<div class="job-droper">
												<div class="job-droper-a">
													<div class="p-12-120 uper">Department</div>
													<div class="p-12-120 top-counter"><sup><?php echo esc_html( count( $departments ) ); ?></sup></div>
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
															<button type="submit" class="job-btn">Apply</button>
															<a href="#" class="job-btn close">Close</a>
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
													<div class="p-12-120 uper">Location</div>
													<div class="p-12-120 top-counter"><sup><?php echo esc_html( count( $cities ) ); ?></sup></div>
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
															<button type="submit" class="job-btn">Apply</button>
															<a href="#" class="job-btn close">Close</a>
														</div>
													</div>
												</div>
											</div>
										<?php endif; ?>
										<?php
										if ( ! empty( $schedules ) ) :
											?>
											<div class="job-droper">
												<div class="job-droper-a">
													<div class="p-12-120 uper">Job type</div>
													<div class="p-12-120 top-counter"><sup><?php echo esc_html( count( $schedules ) ); ?></sup></div>
													<img src="<?php echo esc_attr( TEMPLATE_PATH . '/images/65d85ded4d043968d9a1a5d9_chevron.svg' ); ?>" loading="lazy" alt class="image-2">
												</div>
												<div class="job-droper-in">
													<div class="job-droper-in_content">
														<div class="flex-vert">
															<?php foreach ( $schedules as $schedule ) : ?>
																<label class="rdb w-radio">
																	<div class="w-form-formradioinput w-form-formradioinput--inputType-custom radio-button w-radio-input"></div>
																	<input 
																		type="radio" 
																		name="schedule" id="<?php echo esc_attr( 'schedule_' . $schedule ); ?>" value="<?php echo esc_attr( $schedule ); ?>">
																		<span class="radio-button-label w-form-label" for="<?php echo esc_attr( 'schedule_' . $schedule ); ?>"><?php echo esc_html( $schedule ); ?></span>
																</label>
															<?php endforeach; ?>
														</div>
														<div class="flex-horiz">
															<button type="submit" class="job-btn">Apply</button>
															<a href="#" class="job-btn close">Close</a></div>
													</div>
												</div>
											</div>
										<?php endif; ?>
									</div>
									<input type="submit" data-wait="Please wait..." class="hide w-button" value="Submit">
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
						// '<p>' . $translations[ (string) $position->employmentType ][ $lang ] . ', ' . $translations[ (string) $position->schedule ][ $lang ] . '</p>' .
						// '</a>';
						// }

						// d( $positions );
						foreach ( $positions as $position ) :
							$department = $position->department;
							$offices    = attolabs_get_position_offices( $position );
							$schedule   = $translations[ (string) $position->schedule ][ $lang ];
							?>
								<div 
									id="w-node-_5dd46d37-ec32-59e7-3b21-59525383b3dc-4103d4fe" 
									class="jobs-item" 
									data-department="<?php echo esc_attr( $department ); ?>" 
									data-office="<?php echo esc_attr( implode( ',', $offices ) ); ?>"
									data-schedule="<?php echo esc_attr( $schedule ); ?>"
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
											<div><?php echo esc_html( $translations[ (string) $position->schedule ][ $lang ] ); ?></div>
											<div><?php echo esc_html( $translations[ (string) $position->employmentType ][ $lang ] ); ?></div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</section>
				<div id="styker" class="div-block-3">
					<div class="form-tracker"></div>
					<a id="idid" href="#">Text Link</a>
				</div>
				<div class="styk-form">
					<div class="form-ceeper">
						<div class="styk-form-mom _1 w-form">
							<form method="get" fs-formsubmit-element="form-1" name="email-form" data-name="Email Form" id="email-form" fs-formsubmit-reset="4000" class="form" data-wf-page-id="65dc28b2adbd672d4103d4fe" data-wf-element-id="2918af35-b134-b011-bc88-063920f2dc7f">
								<div class="normal-form">
									<div id="w-node-_2918af35-b134-b011-bc88-063920f2dc81-4103d4fe" class="p-12-120 ww">GET IN TOUCH with us!</div>
									<div id="w-node-_2918af35-b134-b011-bc88-063920f2dc83-4103d4fe" class="r-form-vertical">
										<div class="p-76-92 ww">What role are you seeking for?</div>
										<div class="form-core">
											<div id="w-node-_2918af35-b134-b011-bc88-063920f2dc87-4103d4fe" class="input-keeper">
												<div class="form-label">Name</div>
												<input class="input-normal w-input" maxlength="256" name="field-4" data-name="Field 4" placeholder="JOHN JOHNSON" type="text" id="field-4" required>
											</div>
											<div id="w-node-_2918af35-b134-b011-bc88-063920f2dc8b-4103d4fe" class="input-keeper">
												<div class="form-label">EMAIL</div>
												<input class="input-normal w-input" maxlength="256" name="field-2" data-name="Field 2" placeholder="ADDRESS@MAIL.COM" type="email" id="field-2" required>
											</div>
											<div id="w-node-_2918af35-b134-b011-bc88-063920f2dc8f-4103d4fe" class="input-keeper">
												<div class="form-label">PHONE NUMBER</div>
												<input class="input-normal w-input" maxlength="256" name="field-2" data-name="Field 2" placeholder="0617084035" type="tel" id="field-2" required>
											</div>
											<div id="w-node-_2918af35-b134-b011-bc88-063920f2dc93-4103d4fe" class="input-keeper">
												<div class="form-label">contact preference</div>
												<div class="horiz-left">
													<label id="incroyable" class="cont-ref caller w-radio">
														<div class="w-form-formradioinput w-form-formradioinput--inputType-custom call-dot w-radio-input"></div>
														<input type="radio" name="connectionref" id="call" data-name="connectionref" style="opacity:0;position:absolute;z-index:-1" value="call"><span class="call-text w-form-label" for="call">Call</span>
													</label>
													<div class="reger"></div>
													<label class="cont-ref w-radio">
														<div class="w-form-formradioinput w-form-formradioinput--inputType-custom call-dot w-radio-input"></div>
														<input type="radio" name="connectionref" id="Messenger" data-name="connectionref" style="opacity:0;position:absolute;z-index:-1" value="Messenger"><span class="call-text w-form-label" for="Messenger">Messenger</span>
													</label>
												</div>
											</div>
											<div id="w-node-_2918af35-b134-b011-bc88-063920f2dca0-4103d4fe" class="input-keeper textarer">
												<div class="form-label">Message</div>
												<textarea placeholder="TALK ABOUT YOUR DREAM JOB" maxlength="5000" id="field-4" name="field-4" data-name="Field 4" class="input-normal textarea w-input"></textarea>
											</div>
											<div id="w-node-_2918af35-b134-b011-bc88-063920f2dca4-4103d4fe" class="input-keeper textarer file-mom">
												<div class="form-label">CV</div>
												<div class="cv-line">
													<div class="w-embed">
														<div class="input-file-row">
															<label class="input-file"> 
															<input type="file" name="file[]" multiple> <span>ATTACH A FILE</span> </label>
															<div class="input-file-list"></div>
														</div>
													</div>
													<div class="p-12-120 ww2 cv-or"> OR </div>
													<input class="input-normal cv-link w-input" maxlength="256" name="field-2" data-name="Field 2" placeholder="INSERT A LINK" type="text" id="field-2" required>
												</div>
											</div>
											<label id="w-node-_2918af35-b134-b011-bc88-063920f2dcac-4103d4fe" class="w-checkbox checkbox-field">
												<div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox" for="checkbox-3"></div>
												<input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" style="opacity:0;position:absolute;z-index:-1"><span class="p-12-120 ww fomr-c w-form-label" for="checkbox-3">I agree with the <a href="#" class="link">Privacy Policy</a></span>
											</label>
										</div>
									</div>
								</div>
								<input type="submit" data-wait="Please wait..." fs-formsubmit-element="reset" class="submit-re fs_formsubmit_button n-fowm w-button" value="Send">
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
								<a href="#" class="tlink main-tlink formpp">Didn’t find the desired position?</a>
								<div class="div-block-2"></div>
								<a href="#" class="tlink">All projects</a>
							</div>
							<a href="#" class="close-form w-inline-block">
								<div class="text-block-5">CLOSE</div>
							</a>
						</div>
					</div>
				</div>
				<?php get_footer(); ?>
