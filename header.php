<?php
/**
 * Header
 *
 * @package 0.0.1
 */

defined( 'ABSPATH' ) || exit;

$data_wf_page      = ! empty( $args['data-wf-page'] ) ? $args['data-wf-page'] : '';
$container_classes = 'barba-container';

if ( ! empty( $args['container-extra-classes'] ) ) {
	$container_classes .= ' ' . $args['container-extra-classes'];
}

?>
<!DOCTYPE html>
<html data-wf-page="<?php echo esc_attr( $data_wf_page ); ?>" data-wf-site="<?php echo esc_attr( DATA_WF_SITE ); ?>" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
		<link href="https://thevogne.ru/clients/vosk-clients/atto/style.css" rel="stylesheet" type="text/css">
		<?php
		wp_head();
		attolabs_head_code();
		?>
	</head>
	<body <?php body_class("body"); ?>>
		<?php attolabs_after_body(); ?>
		<div class="wrapper">
			<div class="<?php echo esc_attr( $container_classes ); ?>">
				<?php get_template_part( 'components/navbar' ); ?>
