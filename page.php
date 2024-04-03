<?php
/**
 * Template name: Basic Page Template
 *
 * @package 0.0.1
 */

defined( 'ABSPATH' ) || exit;

get_header(
	null,
	array(
		'data-wf-page'            => '660aed8b6c374ce2a45f454e',
		'container-extra-classes' => 'blackmenu',
	)
);

the_post();
?>
				<section class="section">
					<div class="container policy-container _1">
						<div class="left-col">
							<div class="div-block-7">
								<div id="w-node-_2856db91-e1b6-89d1-b921-c8f464d30f2b-a45f454e" class="job-row _1">
									<h1 id="w-node-_015a8304-e077-87c1-e839-dba82f5631bb-a45f454e" class="h1-job"><?php the_title(); ?></h1>
								</div>
								<div id="w-node-_6fd8b6f5-1c95-373f-28f3-3842bd9cbd62-a45f454e" class="job-row">
									<div id="w-node-_53361b7a-b4fb-1cc6-fc13-f7a3f34e3673-a45f454e" class="p-12-120 c-grey">Last Updated:</div>
									<div id="w-node-_895fb078-b3aa-746d-d6df-acdf3bead88b-a45f454e" class="jil p-12-120">
										<div><?php echo esc_html( get_the_modified_date( 'j F, Y' ) ); ?></div>
									</div>
								</div>
							</div>
						</div>
						<div class="left-col gh">
							<div class="jobs-rich policy-rich w-richtext">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</section>
				<?php get_footer(); ?>
