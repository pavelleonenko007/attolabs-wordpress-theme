<?php 
/**
 * Project
 *
 * @package 0.0.1
 */

defined( 'ABSPATH' ) || exit;

global $post; ?>
<div id="w-node-c5c01e1f-c024-aead-da9b-91343324a92f-6acaaba9" class="project-in_item">
	<?php
	the_post_thumbnail(
		'full',
		array(
			'loading' => 'lazy',
			'class'   => 'img-3',
		)
	);
	?>
	<div class="spleet-project">
		<div id="w-node-_8182f6c4-2339-3e15-68b5-8a731a408370-6acaaba9" class="p-18-120 project-block"><?php the_title(); ?></div>
		<div id="w-node-a7899b66-142c-b989-1d48-9754ef927123-6acaaba9" class="left-project-grid">
		<?php
		$services = get_the_terms( get_the_ID(), 'service' );
		if ( ! empty( $services ) ) :
			?>
			<div id="w-node-dd408b7a-dd6f-ad8b-fa82-672c9d44d3cf-6acaaba9" class="proj-grider">
				<div id="w-node-e407d121-5fbe-5aa4-a39d-054169da69c6-6acaaba9" class="p-12-120 c-grey">Service</div>
					<?php
					foreach ( $services as $service ) :
						?>
						<div id="w-node-_15176be6-73d8-a4c0-1da8-05e9d38b69df-6acaaba9" class="p-12-120"><?php echo esc_html( $service->name ); ?></div>
						<?php
					endforeach;
					?>
			</div>
			<?php endif; ?>
			<?php
			$industries = get_the_terms( get_the_ID(), 'industry' );
			if ( ! empty( $industries ) ) :
				?>
				<div id="w-node-_884f48b3-1d22-2a59-99f8-f6983e71b51d-6acaaba9" class="proj-grider">
					<div id="w-node-_884f48b3-1d22-2a59-99f8-f6983e71b51e-6acaaba9" class="p-12-120 c-grey">Industry</div>
					<div id="w-node-_610acba9-b9b2-3ddc-d76d-8fb50602ffcd-6acaaba9" class="cat-core">
						<?php foreach ( $industries as $industry ) : ?>
							<div class="p-12-120"><?php echo esc_html( $industry->name ); ?></div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<?php
	$short_description = get_field( 'short_description' );
	if ( ! empty( $short_description ) ) :
		?>
		<div class="p-76-92 prjr"><?php echo esc_html( $short_description ); ?></div>
	<?php endif; ?>
	<a href="<?php the_permalink(); ?>" class="project-link-in w-inline-block"></a>
</div>