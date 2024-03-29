<?php
	/**
	 * Template name: Single Job
	 *
	 * @package 0.0.1
	 */

	defined( 'ABSPATH' ) || exit;
	get_header(
		null,
		array(
			'data-wf-page'            => '65dc4b44b768e5a87400cdd1',
			'container-extra-classes' => 'blackmenu',
		)
	);

	$lang     = pll_current_language();
	$position = attolabs_get_job_position_by_id( get_query_var( 'job' ), $lang );

	if ( null === $position ) {
		wp_safe_redirect( get_home_url() . '/jobs/', 302 );
	}
	?>
				<section class="section">
					<div class="container jobs-container">
						<div class="left-col">
							<div class="div-block-7">
								<div id="w-node-_2856db91-e1b6-89d1-b921-c8f464d30f2b-7400cdd1" class="job-row _1">
									<h1 id="w-node-_015a8304-e077-87c1-e839-dba82f5631bb-7400cdd1" class="h1-job"><?php echo esc_html( $position->name ); ?></h1>
								</div>
								<div id="w-node-_6fd8b6f5-1c95-373f-28f3-3842bd9cbd62-7400cdd1" class="job-row">
									<div id="w-node-_53361b7a-b4fb-1cc6-fc13-f7a3f34e3673-7400cdd1" class="p-12-120 c-grey">Department:</div>
									<div id="w-node-_895fb078-b3aa-746d-d6df-acdf3bead88b-7400cdd1" class="jil p-12-120">
										<?php if ( ! empty( $position->department ) ) : ?>
											<div><?php echo esc_html( $position->department ); ?></div>
										<?php endif; ?>
									</div>
								</div>
								<?php
								$offices = attolabs_get_position_offices( $position );
								if ( ! empty( $offices ) ) :
									?>
									<div class="job-row">
										<div id="w-node-_1afd2c92-f22d-7e1a-d33f-1b7b27b6782f-7400cdd1" class="p-12-120 c-grey">Location:</div>
										<div id="w-node-_1afd2c92-f22d-7e1a-d33f-1b7b27b67831-7400cdd1" class="jil p-12-120">
											<div><?php echo esc_html( implode( ', ', $offices ) ); ?></div>
										</div>
									</div>
								<?php endif; ?>
								<?php
								$schedule = attolabs_format_job_schedule( $position, $lang );
								if ( ! empty( $schedule ) ) :
									?>
									<div class="job-row">
										<div id="w-node-b3c4e69d-d549-9eae-a5f3-64f45b5a9e52-7400cdd1" class="p-12-120 c-grey">Job type:</div>
										<div id="w-node-b3c4e69d-d549-9eae-a5f3-64f45b5a9e54-7400cdd1" class="jil p-12-120">
											<div><?php echo esc_html( $schedule ); ?></div>
										</div>
									</div>
								<?php endif; ?>
								<a href="#" class="share-btn p-12-120 w-inline-block" data-button="copy">
									<div>Share position</div>
									<div class="html-embed w-embed">
										<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<circle cx="12" cy="12" r="12" fill="#292525"></circle>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M13.0121 7.50544C13.6884 7.04597 14.5436 7.03697 15.1789 7.45422C15.3232 7.54896 15.4772 7.69933 15.8891 8.11122C16.301 8.5231 16.4514 8.67717 16.5461 8.82144C16.9634 9.45678 16.9544 10.312 16.4949 10.9883C16.39 11.1427 16.2277 11.3081 15.8007 11.7351L15.182 12.3539C14.9868 12.5491 14.9868 12.8657 15.182 13.061C15.3773 13.2562 15.6939 13.2562 15.8891 13.061L16.5078 12.4422L16.5508 12.3993C16.9204 12.0298 17.1569 11.7933 17.3221 11.5502C17.9973 10.5563 18.0322 9.26255 17.382 8.27251C17.2234 8.03105 16.9923 7.80004 16.6409 7.44874L16.5962 7.40411L16.5516 7.35945C16.2003 7.00803 15.9693 6.77692 15.7278 6.61835C14.7378 5.96816 13.4441 6.00302 12.4501 6.67825C12.207 6.84339 11.9706 7.07994 11.601 7.44958L11.5581 7.4925L10.9394 8.11122C10.7441 8.30648 10.7441 8.62306 10.9394 8.81832C11.1347 9.01358 11.4512 9.01358 11.6465 8.81832L12.2652 8.1996C12.6922 7.7726 12.8577 7.6103 13.0121 7.50544ZM8.81808 11.6468C9.01334 11.4515 9.01334 11.1349 8.81808 10.9396C8.62281 10.7444 8.30623 10.7444 8.11097 10.9396L7.49225 11.5584L7.44934 11.6013C7.07969 11.9708 6.84315 12.2073 6.678 12.4504C6.00277 13.4444 5.96792 14.738 6.61811 15.7281C6.77668 15.9695 7.00778 16.2005 7.35922 16.5518L7.40386 16.5965L7.44849 16.6411C7.79979 16.9925 8.0308 17.2237 8.27226 17.3822C9.26231 18.0324 10.556 17.9976 11.55 17.3223C11.7931 17.1572 12.0296 16.9206 12.3991 16.551H12.3991L12.442 16.5081L13.0607 15.8894C13.256 15.6941 13.256 15.3775 13.0607 15.1823C12.8655 14.987 12.5489 14.987 12.3536 15.1823L11.7349 15.801C11.3079 16.228 11.1424 16.3903 10.9881 16.4951C10.3117 16.9546 9.45654 16.9636 8.82119 16.5464C8.67693 16.4516 8.52286 16.3012 8.11097 15.8894C7.69908 15.4775 7.54872 15.3234 7.45397 15.1791C7.03673 14.5438 7.04573 13.6887 7.50519 13.0123C7.61005 12.8579 7.77236 12.6925 8.19936 12.2655L8.81808 11.6468ZM14.1218 10.5856C14.3171 10.3904 14.3171 10.0738 14.1218 9.8785C13.9266 9.68324 13.61 9.68324 13.4147 9.8785L9.8792 13.414C9.68394 13.6093 9.68394 13.9259 9.8792 14.1211C10.0745 14.3164 10.391 14.3164 10.5863 14.1211L14.1218 10.5856Z" fill="white"></path>
										</svg>
									</div>
								</a>
							</div>
						</div>
						<div class="left-col">
							<div class="jobs-rich w-richtext">
								<?php echo attolabs_get_job_content( $position ); ?>
							</div>
						</div>
					</div>
				</section>
				<div id="styker" class="div-block-3">
					<div class="form-tracker"></div>
					<a id="idid" href="#">Text Link</a>
				</div>
				<div class="styk-form">
					<div class="styk-form-mom _1">
						<form id="job-contact-form" data-form="job-contact" class="form" data-wf-page-id="65dc4b44b768e5a87400cdd1" data-wf-element-id="9f3e7290-dede-9b21-bf0e-914aeb30f89c">
							<div class="normal-form">
								<div id="w-node-_9f3e7290-dede-9b21-bf0e-914aeb30f89e-7400cdd1" class="p-12-120 ww"><?php echo esc_html( $position->name ); ?></div>
								<div id="w-node-_9f3e7290-dede-9b21-bf0e-914aeb30f8a0-7400cdd1" class="r-form-vertical">
									<div class="p-76-92 ww">Join our team:<br>apply now!</div>
									<div class="form-core">
										<div id="w-node-_9f3e7290-dede-9b21-bf0e-914aeb30f8a4-7400cdd1" class="input-keeper">
											<div class="form-label">Name</div>
											<input class="input-normal w-input" maxlength="256" name="name" placeholder="JOHN JOHNSON" type="text" id="name" required>
										</div>
										<div id="w-node-_9f3e7290-dede-9b21-bf0e-914aeb30f8a8-7400cdd1" class="input-keeper">
											<div class="form-label">EMAIL</div>
											<input class="input-normal w-input" maxlength="256" name="email" placeholder="ADDRESS@MAIL.COM" type="email" id="email" required>
										</div>
										<div id="w-node-_9f3e7290-dede-9b21-bf0e-914aeb30f8ac-7400cdd1" class="input-keeper">
											<div class="form-label">PHONE NUMBER</div>
											<input class="input-normal w-input" maxlength="256" name="phone" placeholder="0617084035" type="tel" id="phone" required>
										</div>
										<div id="w-node-_9f3e7290-dede-9b21-bf0e-914aeb30f8b0-7400cdd1" class="input-keeper">
											<div class="form-label">contact preference</div>
											<div class="horiz-left">
												<label id="incroyable" class="cont-ref caller w-radio">
													<div class="w-form-formradioinput w-form-formradioinput--inputType-custom call-dot w-radio-input"></div>
													<input type="radio" name="contact_preference" id="call" style="opacity:0;position:absolute;z-index:-1" value="Call">
													<span class="call-text w-form-label" for="call">Call</span>
												</label>
												<div class="reger"></div>
												<label class="cont-ref w-radio">
													<div class="w-form-formradioinput w-form-formradioinput--inputType-custom call-dot w-radio-input"></div>
													<input type="radio" name="contact_preference" id="messenger" style="opacity:0;position:absolute;z-index:-1" value="Messenger">
													<span class="call-text w-form-label" for="Messenger">Messenger</span>
												</label>
											</div>
										</div>
										<div id="w-node-_9f3e7290-dede-9b21-bf0e-914aeb30f8bd-7400cdd1" class="input-keeper textarer">
											<div class="form-label">Message</div>
											<textarea placeholder="TALK ABOUT YOUR DREAM JOB" maxlength="5000" id="message" name="message" class="input-normal textarea w-input"></textarea>
										</div>
										<div id="w-node-_9f3e7290-dede-9b21-bf0e-914aeb30f8c1-7400cdd1" class="input-keeper textarer file-mom">
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
												<input class="input-normal cv-link w-input" maxlength="256" name="link" placeholder="INSERT A LINK" type="text" id="link">
											</div>
										</div>
										<label id="w-node-_9f3e7290-dede-9b21-bf0e-914aeb30f8c9-7400cdd1" class="w-checkbox checkbox-field">
											<div class="w-checkbox-input w-checkbox-input--inputType-custom checkbox" for="user_agreement"></div>
											<input type="checkbox" id="user_agreement" name="user_agreement" style="opacity:0;position:absolute;z-index:-1">
											<span class="p-12-120 ww fomr-c w-form-label" for="checkbox">I agree with the <a href="#" class="link">Privacy Policy</a></span>
										</label>
									</div>
								</div>
							</div>
							<input type="hidden" name="action" value="submit_job_form">
							<input type="hidden" name="job" value="<?php echo esc_attr( $position->name ); ?>">
							<?php wp_nonce_field( '_submit_job_form', 'job_form_nonce' ); ?>
							<input type="submit" data-wait="Please wait..." class="submit-re fs_formsubmit_button n-fowm w-button" value="Send">
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
							<a href="#" class="tlink main-tlink formpp">Apply</a>
							<div class="div-block-2"></div>
							<a href="#" class="tlink">All projects</a>
						</div>
						<a href="#" class="close-form w-inline-block">
							<div class="text-block-5">CLOSE</div>
						</a>
					</div>
				</div>
				<?php get_footer(); ?>
