<?php
/**
 *  Functions
 *
 * @package 0.0.1
 */

defined( 'ABSPATH' ) || exit;
define( 'TEMPLATE_PATH', get_template_directory_uri() );
define( 'DATA_WF_SITE', '65ae21eab8e90d9757d32cc8' );

add_action( 'after_setup_theme', 'attolabs_after_setup_theme' );
function attolabs_after_setup_theme() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'custom-logo' );
}

require_once ABSPATH . 'wp-admin/includes/plugin.php';

define( 'MY_ACF_PATH', get_stylesheet_directory() . '/vendor/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/vendor/acf/' );

require_once MY_ACF_PATH . 'acf.php';
add_filter( 'acf/settings/url', 'my_acf_settings_url' );
function my_acf_settings_url( $url ) {
	return MY_ACF_URL;
}

if ( ! function_exists( 'ctl_sanitize_title' ) ) {
	function ctl_sanitize_title( $title ) {
		global $wpdb;

		$iso9_table = array(
			'А' => 'A',
			'Б' => 'B',
			'В' => 'V',
			'Г' => 'G',
			'Ѓ' => 'G',
			'Ґ' => 'G',
			'Д' => 'D',
			'Е' => 'E',
			'Ё' => 'YO',
			'Є' => 'YE',
			'Ж' => 'ZH',
			'З' => 'Z',
			'Ѕ' => 'Z',
			'И' => 'I',
			'Й' => 'J',
			'Ј' => 'J',
			'І' => 'I',
			'Ї' => 'YI',
			'К' => 'K',
			'Ќ' => 'K',
			'Л' => 'L',
			'Љ' => 'L',
			'М' => 'M',
			'Н' => 'N',
			'Њ' => 'N',
			'О' => 'O',
			'П' => 'P',
			'Р' => 'R',
			'С' => 'S',
			'Т' => 'T',
			'У' => 'U',
			'Ў' => 'U',
			'Ф' => 'F',
			'Х' => 'H',
			'Ц' => 'c',
			'Ч' => 'CH',
			'Џ' => 'DH',
			'Ш' => 'SH',
			'Щ' => 'SCH',
			'Ъ' => '',
			'Ы' => 'Y',
			'Ь' => '',
			'Э' => 'E',
			'Ю' => 'YU',
			'Я' => 'YA',
			'а' => 'a',
			'б' => 'b',
			'в' => 'v',
			'г' => 'g',
			'ѓ' => 'g',
			'ґ' => 'g',
			'д' => 'd',
			'е' => 'e',
			'ё' => 'yo',
			'є' => 'ye',
			'ж' => 'zh',
			'з' => 'z',
			'ѕ' => 'z',
			'и' => 'i',
			'й' => 'j',
			'ј' => 'j',
			'і' => 'i',
			'ї' => 'yi',
			'к' => 'k',
			'ќ' => 'k',
			'л' => 'l',
			'љ' => 'l',
			'м' => 'm',
			'н' => 'n',
			'њ' => 'n',
			'о' => 'o',
			'п' => 'p',
			'р' => 'r',
			'с' => 's',
			'т' => 't',
			'у' => 'u',
			'ў' => 'u',
			'ф' => 'f',
			'х' => 'h',
			'ц' => 'c',
			'ч' => 'ch',
			'џ' => 'dh',
			'ш' => 'sh',
			'щ' => 'sch',
			'ъ' => '',
			'ы' => 'y',
			'ь' => '',
			'э' => 'e',
			'ю' => 'yu',
			'я' => 'ya',
		);
		$geo2lat    = array(
			'ა' => 'a',
			'ბ' => 'b',
			'გ' => 'g',
			'დ' => 'd',
			'ე' => 'e',
			'ვ' => 'v',
			'ზ' => 'z',
			'თ' => 'th',
			'ი' => 'i',
			'კ' => 'k',
			'ლ' => 'l',
			'მ' => 'm',
			'ნ' => 'n',
			'ო' => 'o',
			'პ' => 'p',
			'ჟ' => 'zh',
			'რ' => 'r',
			'ს' => 's',
			'ტ' => 't',
			'უ' => 'u',
			'ფ' => 'ph',
			'ქ' => 'q',
			'ღ' => 'gh',
			'ყ' => 'qh',
			'შ' => 'sh',
			'ჩ' => 'ch',
			'ც' => 'ts',
			'ძ' => 'dz',
			'წ' => 'ts',
			'ჭ' => 'tch',
			'ხ' => 'kh',
			'ჯ' => 'j',
			'ჰ' => 'h',
		);
		$iso9_table = array_merge( $iso9_table, $geo2lat );

		$locale = get_locale();
		switch ( $locale ) {
			case 'bg_BG':
				$iso9_table['Щ'] = 'SCH';
				$iso9_table['щ'] = 'sch';
				$iso9_table['Ъ'] = 'A';
				$iso9_table['ъ'] = 'a';
				break;
			case 'uk':
			case 'uk_ua':
			case 'uk_UA':
				$iso9_table['И'] = 'Y';
				$iso9_table['и'] = 'y';
				break;
		}

		$is_term   = false;
		$backtrace = debug_backtrace();
		foreach ( $backtrace as $backtrace_entry ) {
			if ( $backtrace_entry['function'] == 'wp_insert_term' ) {
				$is_term = true;
				break;
			}
		}

		$term = $is_term ? $wpdb->get_var( "SELECT slug FROM {$wpdb->terms} WHERE name = '$title'" ) : '';
		if ( empty( $term ) ) {
			$title = strtr( $title, apply_filters( 'ctl_table', $iso9_table ) );
			if ( function_exists( 'iconv' ) ) {
				$title = iconv( 'UTF-8', 'UTF-8//TRANSLIT//IGNORE', $title );
			}
			$title = preg_replace( "/[^A-Za-z0-9'_\-\.]/", '-', $title );
			$title = preg_replace( '/\-+/', '-', $title );
			$title = preg_replace( '/^-+/', '', $title );
			$title = preg_replace( '/-+$/', '', $title );
		} else {
			$title = $term;
		}

		return $title;
	}
	add_filter( 'sanitize_title', 'ctl_sanitize_title', 9 );
	add_filter( 'sanitize_file_name', 'ctl_sanitize_title' );

	function ctl_convert_existing_slugs() {
		global $wpdb;

		$posts = $wpdb->get_results( "SELECT ID, post_name FROM {$wpdb->posts} WHERE post_name REGEXP('[^A-Za-z0-9\-]+') AND post_status IN ('publish', 'future', 'private')" );
		foreach ( (array) $posts as $post ) {
			$sanitized_name = ctl_sanitize_title( urldecode( $post->post_name ) );
			if ( $post->post_name != $sanitized_name ) {
				add_post_meta( $post->ID, '_wp_old_slug', $post->post_name );
				$wpdb->update( $wpdb->posts, array( 'post_name' => $sanitized_name ), array( 'ID' => $post->ID ) );
			}
		}

		$terms = $wpdb->get_results( "SELECT term_id, slug FROM {$wpdb->terms} WHERE slug REGEXP('[^A-Za-z0-9\-]+') " );
		foreach ( (array) $terms as $term ) {
			$sanitized_slug = ctl_sanitize_title( urldecode( $term->slug ) );
			if ( $term->slug != $sanitized_slug ) {
				$wpdb->update( $wpdb->terms, array( 'slug' => $sanitized_slug ), array( 'term_id' => $term->term_id ) );
			}
		}
	}

	function ctl_schedule_conversion() {
		add_action( 'shutdown', 'ctl_convert_existing_slugs' );
	}
	register_activation_hook( __FILE__, 'ctl_schedule_conversion' );
}


if ( file_exists( __DIR__ . '/inc/configurator.php' ) ) {
	include_once __DIR__ . '/inc/configurator.php';
}

if ( file_exists( __DIR__ . '/inc/options.php' ) ) {
	include_once __DIR__ . '/inc/options.php';
}

if (
	file_exists( __DIR__ . '/vendor/acf-code-field' )
	&& ! is_plugin_active( 'acf-code-field/acf-code-field.php' )
	&& ! is_plugin_active( 'nice_configurator/wtw_adv.php' )
) {
	include_once 'vendor/acf-code-field/acf-code-field.php';
}


add_filter( 'widget_text', 'do_shortcode' );

add_action( 'attolabs_admin_enqueue_scripts', 'attolabs_add_admin_scripts' );
function add_admin_scripts() {
	wp_register_script( 'admin_script', get_template_directory_uri() . '/js/admin.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'admin_script' );
}

add_action( 'wp_enqueue_scripts', 'attolabs_add_site_scripts' );
function attolabs_add_site_scripts() {
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, false, true );
	wp_enqueue_script( 'jquery' );

	if ( ! is_admin() ) {
		wp_enqueue_script( 'jquery-ui-core', array( 'jquery' ) );
		wp_enqueue_script(
			'jquery-ui-slider',
			array( 'jquery', 'jquery-ui-core' )
		);
	}

	wp_enqueue_style( 'style', TEMPLATE_PATH . '/build/css/style.css', array(), time() );
	wp_enqueue_style( 'thevogne-style', '//thevogne.ru/clients/vosk-clients/atto/style.css', array( 'style' ), time() );
	// wp_enqueue_style( 'main', TEMPLATE_PATH . '/css/main.css', array(), time() );
	wp_enqueue_script( 'main', TEMPLATE_PATH . '/js/main.js', array( 'jquery' ), time(), true );
	wp_enqueue_script( 'front', TEMPLATE_PATH . '/js/front.js', array( 'main' ), time(), true );
	wp_enqueue_script( 'shuffle-letters', '//unpkg.com/shuffle-letters', array( 'main' ), time(), true );
	wp_enqueue_script( 'splitting', '//unpkg.com/splitting/dist/splitting.min.js', array( 'main' ), time(), true );
	wp_enqueue_script( 'formsubmit', '//cdn.jsdelivr.net/npm/@finsweet/attributes-formsubmit@1/formsubmit.js', array( 'splitting' ), time(), true );
	wp_enqueue_script( 'scripts', '//thevogne.ru/clients/vosk-clients/atto/scripts.js', array( 'formsubmit' ), time(), true );
	wp_enqueue_script( 'bundle', TEMPLATE_PATH . '/build/js/bundle.js', array( 'scripts' ), time(), true );
	wp_localize_script(
		'bundle',
		'ATTO',
		array(
			'AJAX_URL' => admin_url( 'admin-ajax.php' ),
		)
	);

	// <script defer src="https://unpkg.com/splitting/dist/splitting.min.js"></script> ????
	// <script defer src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-formsubmit@1/formsubmit.js"></script> ????
	// <script defer src="https://thevogne.ru/clients/vosk-clients/atto/scripts.js" type="text/javascript"></script> ????
}

add_filter( 'wp_default_scripts', 'attolabs_remove_jquery_migrate' );
function attolabs_remove_jquery_migrate( &$scripts ) {
	if ( ! is_admin() ) {
		$scripts->remove( 'jquery' );
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
	}
}

if ( ! function_exists( 'slugify' ) ) {
	function slugify( $text ) {
		$translation = array(
			'а'  => 'a',
			'б'  => 'b',
			'в'  => 'v',
			'г'  => 'g',
			'д'  => 'd',
			'ж'  => 'zh',
			'з'  => 'z',
			'и'  => 'i',
			'й'  => 'j',
			'к'  => 'k',
			'л'  => 'l',
			'м'  => 'm',
			'н'  => 'n',
			'о'  => 'o',
			'п'  => 'p',
			'р'  => 'r',
			'с'  => 's',
			'т'  => 't',
			'у'  => 'u',
			'ф'  => 'f',
			'х'  => 'h',
			'ц'  => 'c',
			'ч'  => 'ch',
			'ш'  => 'sh',
			'щ'  => 'sch',
			'ы'  => 'y',
			'э'  => 'e',
			'ю'  => 'yu',
			'я'  => 'ya',
			'і'  => 'i',
			'ї'  => 'yi',
			'є'  => 'ye',
			'ґ'  => 'g',
			'е'  => 'e',
			'ё'  => 'e',
			'\'' => '',
			'"'  => '',
			'`'  => '',
			'ь'  => '',
			'ъ'  => '',
		);
		$text        = trim( $text );
		$text        = mb_convert_case( $text, MB_CASE_LOWER, 'UTF-8' );
		$text        = strtr( $text, $translation );
		$text        = preg_replace( '~(\W+)~', '_', $text );
		$text        = trim( $text, '_' );
		$text        = strtolower( $text );
		return $text;
	}
}

add_shortcode( 'show_file', 'show_file_func' );
function show_file_func( $atts ) {
	extract(
		shortcode_atts(
			array(
				'file' => '',
			),
			$atts
		)
	);
	if ( $file != '' ) {
		return @file_get_contents( $file );
	}
}

function attolabs_get_current_url( $include_params = false ) {
	$protocol = ( isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] ) ? 'https://' : 'http://';
		$host = $_SERVER['HTTP_HOST'];
		$uri  = $_SERVER['REQUEST_URI'];
	if ( $include_params ) {
			return $protocol . $host . $uri;
	} else {
		$url_without_params = explode( '?', $uri )[0];
		return $protocol . $host . $url_without_params;
	}
}

function attolabs_is_current_url( string $test_url, $include_params = false ) {
	return attolabs_get_current_url( $include_params ) === $test_url;
}

add_filter( 'upload_mimes', 'attolabs_myme_types', 1, 1 );
function attolabs_myme_types( $mime_types ) {
	$mime_types['svg'] = 'image/svg+xml'; // поддержка SVG
	return $mime_types;
}

add_filter(
	'post_thumbnail_html',
	'attolabs_remove_width_height_attribute',
	10
);
add_filter(
	'image_send_to_editor',
	'attolabs_remove_width_height_attribute',
	10
);
function attolabs_remove_width_height_attribute( $html ) {
	$html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
	return $html;
}

function attolabs_custom_map( array $array, callable $callback ): array {
	$result_array = array();
	foreach ( $array as $key => $value ) {
		$result_array[] = $callback( $key, $value );
	}
	return $result_array;
}

if ( function_exists( 'acf_add_options_page' ) && current_user_can( 'manage_options' ) ) {
	acf_add_options_page(
		array(
			'page_title'      => __( 'Options', 'wtw-translate' ),
			'menu_title'      => __( 'Options', 'wtw-translate' ),
			'menu_slug'       => 'options',
			'parent_slug'     => 'themes.php',
			'update_button'   => __( 'Update' ),
			'updated_message' => __( 'Item updated.' ),
			'autoload'        => true,
		)
	);
}

if ( function_exists( 'acf_add_options_page' ) && current_user_can( 'manage_options' ) ) {
	acf_add_options_page(
		array(
			'page_title'      => __( 'Site configurator', 'wtw-translate' ),
			'menu_title'      => __( 'Configurator', 'wtw-translate' ),
			'menu_slug'       => 'config',
			'icon_url'        => 'dashicons-screenoptions',
			'parent_slug'     => 'tools.php',
			'update_button'   => __( 'Update' ),
			'updated_message' => __( 'Item updated.' ),
			'autoload'        => true,
		)
	);
}

if ( ! function_exists( 'd' ) ) {
	function d() {
		if ( ! headers_sent() ) {
			header( 'Content-Type: text/html; charset=utf-8' );
		}

		echo '<pre style="text-align: left; font-size: 12px;">';
		foreach ( func_get_args() as $var ) {
			print_r( $var );
			echo '<br><br>';
		}
		echo '</pre>';
	}
}

if ( ! function_exists( 'dc' ) ) {
	function dc() {
		if ( ! headers_sent() ) {
			header( 'Content-Type: text/html; charset=utf-8' );
		}

		echo "<!--\n";
		foreach ( func_get_args() as $var ) {
			print_r( $var ) . "\n";
		}
		echo "\n-->";
	}
}

if ( ! function_exists( 'dd' ) ) {
	function dd() {
		if ( ! headers_sent() ) {
			header( 'Content-Type: text/html; charset=utf-8' );
		}

		echo '<pre style="text-align: left; font-size: 12px;">';
		foreach ( func_get_args() as $var ) {
			print_r( $var );
			echo '<br><br>';
		}
		echo '</pre>';
		die();
	}
}

add_filter(
	'get_the_archive_title',
	function ( $title ) {
		return preg_replace( '~^[^:]+: ~', '', $title );
	}
);

if ( ! function_exists( 'num_decline' ) ) {
	function num_decline( $number, $titles, $show_number = true ) {

		global $term;

		if ( is_string( $titles ) ) {
			$titles = preg_split( '/, */', $titles );
		}

		if ( empty( $titles[2] ) ) {
			$titles[2] = $titles[1];
		}

		$cases       = array( 2, 0, 1, 1, 1, 2 );
		$intnum      = abs( (int) strip_tags( $number ) );
		$title_index = ( $intnum % 100 > 4 && $intnum % 100 < 20 )

			? 2

			: $cases[ min( $intnum % 10, 5 ) ];

		return ( $show_number ? "$number " : '' ) . $titles[ $title_index ];
	}
}

add_action( 'admin_menu', 'attolabs_add_custom_tools_page' );
function attolabs_add_custom_tools_page() {
	add_submenu_page(
		'tools.php', // родительская страница
		'Редактор .htaccess и wp-config.php', // заголовок страницы
		'Редактор .htaccess и wp-config.php', // название страницы в меню
		'manage_options', // права пользователя
		'custom-menu-page', // идентификатор страницы
		'attolabs_custom_menu_tools_page_callback' // функция обработчика
	);
}

function attolabs_custom_menu_tools_page_callback() {
	?>
	<div class="wrap">
		<h1>Редактор .htaccess и wp-config.php</h1>
		<p>Здесь вы можете редактировать файлы .htaccess и wp-config.php</p>
		<h2>.htaccess</h2>
		<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
			<input type="hidden" name="action" value="edit_htaccess">
			<textarea name="htaccess" rows="10" cols="100"><?php echo file_get_contents( ABSPATH . '.htaccess' ); ?></textarea>
			<br>
			<input type="submit" value="Сохранить" class="button-primary">
		</form>
		<h2>wp-config.php</h2>
		<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
			<input type="hidden" name="action" value="edit_wpconfig">
			<textarea name="wpconfig" rows="10" cols="100"><?php echo file_get_contents( ABSPATH . 'wp-config.php' ); ?></textarea>
			<br>
			<input type="submit" value="Сохранить" class="button-primary">
		</form>
	</div>
	<?php
}

add_action( 'admin_post_edit_htaccess', 'attolabs_custom_menu_tools_page_save_htaccess' );
function attolabs_custom_menu_tools_page_save_htaccess() {
	if ( isset( $_POST['htaccess'] ) ) {
		file_put_contents( ABSPATH . '.htaccess', stripslashes( $_POST['htaccess'] ) );
	}
	wp_redirect( admin_url( 'tools.php?page=custom-menu-page' ) );
	exit;
}

add_action( 'admin_post_edit_wpconfig', 'attolabs_custom_menu_tools_page_save_wpconfig' );
function attolabs_custom_menu_tools_page_save_wpconfig() {
	if ( isset( $_POST['wpconfig'] ) ) {
		file_put_contents( ABSPATH . 'wp-config.php', stripslashes( $_POST['wpconfig'] ) );
	}
	wp_redirect( admin_url( 'tools.php?page=custom-menu-page' ) );
	exit;
}

function attolabs_get_contact_email(): string|bool {
	return ! empty( get_field( 'contact_email', 'option' ) ) ? get_field( 'contact_email', 'option' ) : get_option( 'admin_email' );
}

function attolabs_get_job_email(): string|bool {
	return ! empty( get_field( 'job_email', 'option' ) ) ? get_field( 'job_email', 'option' ) : attolabs_get_contact_email();
}

add_action( 'init', 'attolabs_register_post_types' );
function attolabs_register_post_types(): void {
	register_taxonomy(
		'service',
		null,
		array(
			'label'             => '',
			'labels'            => array(
				'name'          => 'Services',
				'singular_name' => 'Service',
				'search_items'  => 'Search Services',
				'all_items'     => 'All services',
				'view_item '    => 'View service',
				'parent_item'   => 'parent_item',
				'edit_item'     => 'Edit service',
				'update_item'   => 'Update service',
				'add_new_item'  => 'Add new service',
				'new_item_name' => 'New Service name',
				'menu_name'     => 'Services',
				'back_to_items' => '← Back to services',
			),
			'description'       => '',
			'public'            => true,
			// 'publicly_queryable'    => null,
			'show_in_nav_menus' => true,
			'show_ui'           => true,
			'show_in_menu'      => true,
			'show_tagcloud'     => true,
			// 'show_in_quick_edit'    => null,
			'hierarchical'      => false,
			'rewrite'           => true,
			// 'query_var'             => taxonomy, // название параметра запроса
			'capabilities'      => array(),
			'meta_box_cb'       => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
			'show_admin_column' => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
			'show_in_rest'      => true, // добавить в REST API
			'rest_base'         => null, // taxonomy
		)
	);

		register_taxonomy(
			'industry',
			null,
			array(
				'label'             => '',
				'labels'            => array(
					'name'              => 'Industries',
					'singular_name'     => 'Industry',
					'search_items'      => 'Search Industries',
					'all_items'         => 'All Industries',
					'view_item '        => 'View Industries',
					'parent_item'       => 'Parent Industry',
					'parent_item_colon' => 'Parent Genre:',
					'edit_item'         => 'Edit industry',
					'update_item'       => 'Update industry',
					'add_new_item'      => 'Add new industry',
					'new_item_name'     => 'New industry name',
					'menu_name'         => 'Industries',
					'back_to_items'     => '← Back to industries',
				),
				'description'       => '',
				'public'            => true,
				// 'publicly_queryable'    => null,
				'show_in_nav_menus' => true,
				'show_ui'           => true,
				'show_in_menu'      => true,
				'show_tagcloud'     => true,
				// 'show_in_quick_edit'    => null,
				'hierarchical'      => false,

				'rewrite'           => true,
				// 'query_var'             => taxonomy, // название параметра запроса
				'capabilities'      => array(),
				'meta_box_cb'       => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
				'show_admin_column' => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
				'show_in_rest'      => true, // добавить в REST API
				'rest_base'         => null, // taxonomy
			)
		);

	register_post_type(
		'project',
		array(
			'label'         => null,
			'labels'        => array(
				'name'               => 'Projects',
				'singular_name'      => 'Project',
				'add_new'            => 'Add new project',
				'add_new_item'       => 'Add new project',
				'edit_item'          => 'Edit new project',
				'new_item'           => 'New project',
				'view_item'          => 'View project',
				'search_items'       => 'Search Projects',
				'not_found'          => 'Not found',
				'not_found_in_trash' => 'Not found in trash',
				'parent_item_colon'  => '',
				'menu_name'          => 'Projects',
			),
			'description'   => '',
			'public'        => true,
			// 'publicly_queryable'  => null,
			// 'exclude_from_search' => null,
			// 'show_ui'             => null,
			// 'show_in_nav_menus'   => null,
			'show_in_menu'  => null,
			// 'show_in_admin_bar'   => null,
			'show_in_rest'  => true,
			'rest_base'     => null,
			'menu_position' => null,
			'menu_icon'     => 'dashicons-list-view',
			// 'capability_type'   => 'post',
			// 'capabilities'      => 'post',
			// 'map_meta_cap'      => null,
			'hierarchical'  => false,
			'supports'      => array( 'title', 'editor', 'thumbnail' ), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
			'taxonomies'    => array( 'service', 'industry' ),
			'has_archive'   => false,
			'rewrite'       => true,
			'query_var'     => true,
		)
	);
}

function attolabs_head_code(): void {
	if ( function_exists( 'get_field' ) ) {
		echo get_field( 'head_code', 'option' );
	}
}

function attolabs_after_body(): void {
	wp_body_open();
	if ( function_exists( 'get_field' ) ) {
		echo get_field( 'body_code', 'option' );
	}
}

function attolabs_footer_code(): void {
	if ( function_exists( 'get_field' ) ) {
		echo get_field( 'footer_code', 'option' );
	}
}

function attolabs_get_posts_terms( string $taxonomy, array $posts ): array {
	$items = array();

	foreach ( $posts as $post ) {
		$terms = get_the_terms( $post, $taxonomy );

		if ( is_wp_error( $terms ) || false === $terms ) {
			continue;
		}

		$items = array_merge( $items, $terms );
	}

	return array_unique( $items, SORT_REGULAR );
}

function attolabs_get_project_taxonomy_number( string $taxonomy, array $posts ): int {
	$items = attolabs_get_posts_terms( $taxonomy, $posts );

	return count( $items );
}

function attolabs_get_project_industry_number( array $posts ): int {
	return attolabs_get_project_taxonomy_number( 'industry', $posts );
}

function attolabs_get_project_services_number( array $posts ): int {
	return attolabs_get_project_taxonomy_number( 'service', $posts );
}

function attolabs_get_posts_by_term( string $post_type, WP_Term $term ): array {
	$posts = get_posts(
		array(
			'post_type' => $post_type,
			'tax_query' => array(
				array(
					'taxonomy' => $term->taxonomy,
					'field'    => 'term_id',
					'terms'    => array( $term->term_id ),
				),
			),
		)
	);

	return $posts;
}

function attolabs_get_projects_by_term( WP_Term $term ): array {
	return attolabs_get_posts_by_term( 'project', $term );
}

add_action( 'wp_ajax_filter_projects', 'attolabs_filter_projects_via_ajax' );
add_action( 'wp_ajax_nopriv_filter_projects', 'attolabs_filter_projects_via_ajax' );
function attolabs_filter_projects_via_ajax(): void {
	if ( ! isset( $_POST['filter_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['filter_nonce'] ) ), 'attolabs_filter_projects' ) ) {
		wp_send_json_error(
			array(
				'message' => 'Bad request',
			),
			400
		);
	}

	$query_args = array(
		'post_type'      => 'project',
		'posts_per_page' => -1,
	);

	if ( isset( $_POST['services'] ) && is_array( $_POST['services'] ) && ! empty( $_POST['services'] ) ) {
		$query_args['tax_query'][] = array(
			'taxonomy' => 'service',
			'field'    => 'term_id',
			'terms'    => $_POST['services'],
		);
	}

	if ( isset( $_POST['industries'] ) && is_array( $_POST['industries'] ) && ! empty( $_POST['industries'] ) ) {
		$query_args['tax_query'][] = array(
			'taxonomy' => 'industry',
			'field'    => 'term_id',
			'terms'    => $_POST['industries'],
		);
	}

	$query = new WP_Query( $query_args );

	if ( ! $query->have_posts() ) {
		wp_send_json_success(
			array(
				'projects'    => '<p>No projects with this filters</p>',
				'filter-form' => '',
			)
		);
	}

	$data = array();

	ob_start();

	while ( $query->have_posts() ) {
		$query->the_post();
		get_template_part( 'components/project' );
	}

	wp_reset_postdata();

	$projects_html = ob_get_clean();

	$data['projects'] = $projects_html;

	$services   = attolabs_get_posts_terms( 'service', $query->posts );
	$industries = attolabs_get_posts_terms( 'industry', $query->posts );

	// wp_send_json($query_args);

	$filters_html = '';

	if ( ! empty( $services ) ) {
		$filters_html .= '<div class="droper-filter">
			<div class="drpoter-block">
				<div class="p-12-120">Services (<span class="count">' . count( $services ) . '</span>)</div>
				<img src="' . esc_url( TEMPLATE_PATH . '/images/65d85ded4d043968d9a1a5d9_chevron.svg' ) . '" loading="lazy" alt class="image-2">
			</div>
			<div class="droper-content">';

		foreach ( $services as $service ) {
			$checked       = ( isset( $_POST['services'] ) && is_array( $_POST['services'] ) && in_array( $service->term_id, $_POST['services'] ) ) ? 'checked' : '';
			$filters_html .= '<label class="w-checkbox rdb">
				<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="' . esc_attr( 'service_' . $service->term_id ) . '"></div>
				<input 
					type="checkbox" 
					id="' . esc_attr( 'service_' . $service->term_id ) . '" 
					name="services[]" 
					value="' . esc_attr( $service->term_id ) . '"
					' . $checked . '
				/>
				<span class="radio-button-label w-form-label" for="' . esc_attr( 'service_' . $service->term_id ) . '">' . esc_html( $service->name ) . '</span>
			</label>';
		}

		$filters_html .= '</div>
		</div>';
	}

	if ( ! empty( $industries ) ) {
		$filters_html .= '<div class="droper-filter">
			<div class="drpoter-block">
				<div class="p-12-120">Industries (<span class="count">' . count( $industries ) . '</span>)</div>
				<img src="' . esc_url( TEMPLATE_PATH . '/images/65d85ded4d043968d9a1a5d9_chevron.svg' ) . '" loading="lazy" alt class="image-2">
			</div>
			<div class="droper-content">';

		foreach ( $industries as $industry ) {
			$checked       = ( isset( $_POST['industries'] ) && is_array( $_POST['industries'] ) && in_array( $industry->term_id, $_POST['industries'] ) ) ? 'checked' : '';
			$filters_html .= '<label class="w-checkbox rdb">
					<div class="w-checkbox-input w-checkbox-input--inputType-custom radio-button" for="' . esc_attr( 'industry_' . $industry->term_id ) . '"></div>
					<input 
						type="checkbox" 
						id="' . esc_attr( 'industry_' . $industry->term_id ) . '" 
						name="industries[]" 
						value="' . esc_attr( $industry->term_id ) . '"
						' . $checked . '
					/>
					<span class="radio-button-label w-form-label" for="' . esc_attr( 'industry_' . $industry->term_id ) . '">' . esc_html( $industry->name ) . '</span>
				</label>';
		}

		$filters_html .= '</div>
			</div>';
	}

	$data['filter-form'] = $filters_html;

	wp_send_json_success( $data );
}

function attolabs_get_project_title_with_address( int|WP_Post $post ): string {
	$title = get_the_title( $post );

	$city    = get_field( 'city', $post );
	$country = get_field( 'country', $post );

	if ( ! empty( $city ) ) {
		$title .= ", $city";
	}

	if ( ! empty( $country ) ) {
		$title .= ", $country";
	}

	return $title;
}

add_filter( 'text_with_hover_links', 'attolabs_format_links' );
function attolabs_format_links( $content ) {
	$content = mb_encode_numericentity( $content, array( 0x80, 0x10FFFF, 0, ~0 ), 'UTF-8' );
	$dom     = new DOMDocument();
	$dom->loadHTML( $content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD );

	// Получаем все ссылки
	$links = $dom->getElementsByTagName( 'a' );

	// Обходим все ссылки и добавляем классы
	foreach ( $links as $link ) {
		$link_classes  = $link->getAttribute( 'class' );
		$link_classes .= ' scroll-link abo-ix'; // Добавляем новые классы
		$link->setAttribute( 'class', $link_classes );
	}

	$updated_content = $dom->saveHTML();

	return $updated_content;
}

function attolabs_format_phone_link( string $phone_number ): string {
	if ( empty( $phone_number ) ) {
		return '';
	}

	return 'tel:' . preg_replace( '/[^0-9+]/', '', $phone_number );
}

function attolabs_format_email_link( string $email, string $subject = '' ): string {
	$email_link = "mailto:{$email}";

	if ( ! empty( $subject ) ) {
		$email_link .= "?subject={$subject}";
	}

	return $email_link;
}

function attolabs_get_page_title( int|WP_Post $post_id ): string {
	$title = get_field( 'title', $post_id );

	if ( empty( $title ) ) {
		return get_the_title( $post_id );
	}

	return $title;
}

function attolabs_get_site_logo(): string {
	$logo_id = get_theme_mod( 'custom_logo' );

	if ( ! empty( $logo_id ) ) {
		return wp_get_attachment_image(
			$logo_id,
			'full',
			false,
			array(
				'loading' => 'lazy',
				'class'   => 'logo',
			)
		);
	}

	return '';
}

add_action( 'init', 'attolabs_add_rewrite_rules' );
function attolabs_add_rewrite_rules() {
	add_rewrite_rule( '(?:([a-z]{2})/)?jobs/(\d+)$', 'index.php?lang=$matches[1]&job=$matches[2]', 'top' );
}

add_filter( 'query_vars', 'attolabs_custom_query_vars' );
function attolabs_custom_query_vars( $query_vars ) {
	$query_vars[] = 'job';
	$query_vars[] = 'lang';
	return $query_vars;
}

add_action( 'template_include', 'attolabs_render_custom_template' );
function attolabs_render_custom_template( $template ) {
	if ( ! empty( get_query_var( 'job' ) ) ) {
		return get_template_directory() . '/single-job.php';
	}

	return $template;
}

function attolabs_get_position_offices( stdClass $position ): array {
	$offices = array();

	if ( isset( $position->office ) && ! empty( $position->office ) ) {
		$offices[] = $position->office;
	}

	if ( isset( $position->additionalOffices ) && ! empty( $position->additionalOffices->office ) ) {
		if ( is_array( $position->additionalOffices->office ) ) {
			$offices = array_merge( $offices, $position->additionalOffices->office );
		} else {
			$offices[] = $position->additionalOffices->office;
		}
	}

	return array_unique( $offices );
}

function attolabs_get_job_positions( string $lang = 'en' ): array {
	$hostname = 'attolabs';

	$languages                 = pll_the_languages(
		array(
			'raw' => 1,
		)
	);
	$formatted_languages       = array_combine( array_keys( $languages ), array_keys( $languages ) );
	$formatted_languages['ru'] = 'fr';

	$response = simplexml_load_file( 'https://' . $hostname . '.jobs.personio.de/xml?language=' . $formatted_languages[ $lang ], null, LIBXML_NOCDATA );
	// $response     = simplexml_load_file( TEMPLATE_PATH . '/jobs.xml', null, LIBXML_NOCDATA );
	$json         = wp_json_encode( $response );
	$decoded_json = json_decode( $json );

	$positions = array();

	if ( isset( $decoded_json->position ) && ! empty( $decoded_json->position ) ) {
		if ( is_array( $decoded_json->position ) ) {
			$positions = $decoded_json->position;
		} else {
			$positions[] = $decoded_json->position;
		}
	}

	return $positions;
}

function attolabs_get_job_position_by_id( int|string $id, string $lang ): stdClass|null {
	$positions = attolabs_get_job_positions( $lang );

	$position = array_filter(
		$positions,
		function ( $pos ) use ( $id ) {
			return $pos->id === $id;
		}
	);

	return $position[0];
}

function attolabs_format_job_employment_type( stdClass $position, string $lang = 'en' ): string {
	$translations = array(
		'full-time'         => array(
			'de' => 'Vollzeit',
			'en' => 'Full-time',
			'ru' => 'Полная занятость',
		),
		'part-time'         => array(
			'de' => 'Teilzeit',
			'en' => 'Part-time',
			'ru' => 'Частичная занятость',
		),
		'full-or-part-time' => array(
			'de' => 'Vollzeit oder Teilzeit',
			'en' => 'Full or part-time',
			'ru' => 'Полная или Частичная занятость',
		),
		'permanent'         => array(
			'de' => 'Festanstellung',
			'en' => 'Permanent Employment',
			'ru' => 'Полная занятость',
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

	return $translations[ (string) $position->employmentType ][ $lang ];
}

function attolabs_get_job_content( stdClass $position ): string {
	$content = '';
	if ( isset( $position->jobDescriptions ) && ! empty( $position->jobDescriptions->jobDescription ) ) {
		if ( is_array( $position->jobDescriptions->jobDescription ) ) {
			foreach ( $position->jobDescriptions->jobDescription as $content_part ) {
				if ( isset( $content_part->name ) && ! empty( $content_part->name ) ) {
					$content .= '<h2>' . $content_part->name . '</h2>';
				}

				if ( isset( $content_part->value ) && ! empty( $content_part->value ) ) {
					$content .= $content_part->value;
				}
			}
		} else {
			if ( isset( $position->jobDescriptions->jobDescription->name ) && ! empty( $position->jobDescriptions->jobDescription->name ) ) {
				$content .= '<h2>' . $position->jobDescriptions->jobDescription->name . '</h2>';
			}

			if ( isset( $position->jobDescriptions->jobDescription->value ) && ! empty( $position->jobDescriptions->jobDescription->value ) ) {
				$content .= $position->jobDescriptions->jobDescription->name;
			}
		}
	}

	return apply_filters( 'the_content', $content );
}

function attolabs_get_job_cities( array $positions ): array {
	$cities = array();

	foreach ( $positions as $position ) {
		$cities = array_merge( $cities, attolabs_get_position_offices( $position ) );
	}

	return array_unique( $cities );
}

function attolabs_get_job_departments( array $positions ): array {
	$departments = array();

	foreach ( $positions as $position ) {
		$departments[] = $position->department;
	}

	return array_unique( array_filter( $departments ) );
}

function attolabs_get_job_employment_types( array $positions ): array {
	$employment_types = array();

	foreach ( $positions as $position ) {
		$employment_types[] = $position->employmentType;
	}

	return array_unique( array_filter( $employment_types ) );
}

function attolabs_send_client_reply_message( string $to, string $message, string $subject = '' ): bool {
	$headers = array(
		'content-type: text/html',
	);

	if ( empty( $subject ) ) {
		$subject = 'Reply from ' . get_bloginfo( 'name' );
	}

	// TODO: add email markup
	$markup = '<span style="font-size: 18px">' . $message . '</span>';

	return wp_mail( $to, $subject, $markup, $headers );
}

add_action( 'wp_ajax_submit_contact_form', 'attolabs_submit_contact_form_via_ajax' );
add_action( 'wp_ajax_nopriv_submit_contact_form', 'attolabs_submit_contact_form_via_ajax' );
function attolabs_submit_contact_form_via_ajax(): void {
	if ( ! isset( $_POST['_contact_form_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['_contact_form_nonce'] ) ), '_submit_contact_form' ) ) {
		wp_send_json_error(
			array(
				'message' => 'Bad request!',
			),
			400
		);
	}

	if ( ! isset( $_POST['email'] ) || empty( $_POST['email'] ) ) {
		wp_send_json_error(
			array(
				'message' => 'No contact information was provided',
			),
			400
		);
	}

	$data = array_filter( json_decode( wp_json_encode( $_POST ), true ) );

	$reply_message = ! empty( $data['message'] ) ? $data['message'] : 'Your resume successfully sent!';

	unset( $data['action'] );
	unset( $data['_wp_http_referer'] );
	unset( $data['job_form_nonce'] );
	unset( $data['message'] );
	unset( $data['_contact_form_nonce'] );

	$to      = attolabs_get_contact_email();
	$subject = 'New message from website ' . get_bloginfo( 'name' );
	$message = '';

	if ( empty( $to ) ) {
		wp_send_json_error(
			array(
				'message' => 'Administrator does not provide contact email. Please try again later.',
			),
			400
		);
	}

	$headers = array(
		'content-type: text/html',
	);

	foreach ( $data as $key => $value ) {
		$formatted_key = ucwords( str_replace( '_', ' ', $key ) );
		$message      .= '<strong>' . $formatted_key . ':</strong> ' . $value . '<br>';
	}

	$sended       = wp_mail( $to, $subject, $message, $headers );
	$client_reply = attolabs_send_client_reply_message( sanitize_text_field( wp_unslash( $_POST['email'] ) ), $reply_message );

	if ( ! $sended ) {
		wp_send_json_error(
			array(
				'message' => 'Something wrong with sending your message. Try again later!',
			),
			400
		);
	}

	wp_send_json_success(
		array(
			'message' => 'Your message successfully sent!',
		)
	);
}

add_action( 'wp_ajax_submit_job_form', 'attolabs_submit_job_form_via_ajax' );
add_action( 'wp_ajax_nopriv_submit_job_form', 'attolabs_submit_job_form_via_ajax' );
function attolabs_submit_job_form_via_ajax(): void {
	if ( ! isset( $_POST['job_form_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['job_form_nonce'] ) ), '_submit_job_form' ) ) {
		wp_send_json_error(
			array(
				'message' => 'Bad request',
			),
			400
		);
	}

	if ( ! isset( $_POST['email'] ) || empty( $_POST['email'] ) ) {
		wp_send_json_error(
			array(
				'message' => 'No contact information was provided',
			),
			400
		);
	}

	$data = array_filter( json_decode( wp_json_encode( $_POST ), true ) );

	$reply_message = ! empty( $data['message'] ) ? $data['message'] : 'Your resume successfully sent!';

	unset( $data['action'] );
	unset( $data['_wp_http_referer'] );
	unset( $data['job_form_nonce'] );
	unset( $data['message'] );
	unset( $data['job_form_nonce'] );

	$to      = attolabs_get_job_email();
	$subject = '';
	$message = '';

	if ( empty( $to ) ) {
		wp_send_json_error(
			array(
				'message' => 'Administrator does not provide contact email. Please try again later.',
			),
			400
		);
	}

	if ( isset( $_POST['job'] ) && ! empty( $_POST['job'] ) ) {
		$subject = 'A new response to vacancy: ' . sanitize_text_field( wp_unslash( $_POST['job'] ) );
	} else {
		$subject = 'New vacancy';
	}

	$headers = array(
		'content-type: text/html',
	);

	foreach ( $data as $key => $value ) {
		$formatted_key = ucwords( str_replace( '_', ' ', $key ) );
		$message      .= '<strong>' . $formatted_key . ':</strong> ' . $value . '<br>';
	}

	$attachments      = array();
	$uploads_dir_path = WP_CONTENT_DIR . '/uploads/';

	if ( ! empty( $_FILES ) && isset( $_FILES['file'] ) && ! empty( $_FILES['file'] ) ) {
		if ( is_array( $_FILES['file']['name'] ) ) {
			foreach ( $_FILES['file']['name'] as $index => $file_name ) {
				$file_path = $uploads_dir_path . $file_name;

				move_uploaded_file( $_FILES['file']['tmp_name'][ $index ], $file_path );

				$attachments[] = $file_path;
			}
		} else {
			$file_name = $_FILES['file']['name'];
			$file_path = $uploads_dir_path . $file_name;

			move_uploaded_file( $_FILES['file']['tmp_name'], $file_path );

			$attachments[] = $file_path;
		}
	}

	$sended       = wp_mail( $to, $subject, $message, $headers, $attachments );
	$client_reply = attolabs_send_client_reply_message( sanitize_text_field( wp_unslash( $_POST['email'] ) ), $reply_message );

	foreach ( $attachments as $attachment ) {
		unlink( $attachment );
	}

	if ( ! $sended ) {
		wp_send_json_error(
			array(
				'message' => 'Something wrong with sending your vacancy. Try again later!',
			),
			400
		);
	}

	wp_send_json_success(
		array(
			'message' => 'Your message successfully sent!',
		)
	);
}

add_action( 'customize_register', 'attolabs_customize_register_func' );

function attolabs_customize_register_func( $wp_customize ) {
	$wp_customize->add_setting(
		'attolabs_footer_logo_settings',
		array()
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'attolabs_footer_logo',
			array(
				'label'    => 'Footer Logo',
				'settings' => 'attolabs_footer_logo_settings',
				'section'  => 'title_tagline',
			)
		)
	);
}

add_action( 'phpmailer_init', 'attolabs_smtp_enable' );

function attolabs_smtp_enable( $phpmailer ) {
	$phpmailer->isSMTP();
	$phpmailer->SMTPAuth   = true;
	$phpmailer->Host       = 'mx2e4b.netcup.net';
	$phpmailer->Port       = 25;
	$phpmailer->Username   = 'techuser-nosy@albs.tech';
	$phpmailer->Password   = 'juQ3XJlyC91mBPqgcBYw';
	$phpmailer->SMTPSecure = 'tls';
	$phpmailer->From       = 'techuser-nosy@albs.tech';
	$phpmailer->FromName   = get_bloginfo( 'name' );
}

function attolabs_get_branches_by_lang( string $lang ): array {
	$branches = get_field( 'branches', 'option' );

	if ( empty( $branches ) || ! is_array( $branches ) ) {
		return array();
	}

	$branches_by_lang = array_filter(
		$branches,
		function ( $branch ) use ( $lang ) {
			return $lang === $branch['language'];
		}
	);

	return $branches_by_lang;
}

require_once trailingslashit( get_template_directory() ) . 'inc/translations.php';
