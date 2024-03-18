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


if ( file_exists( __DIR__ . '/configurator.php' ) ) {
	include_once __DIR__ . '/configurator.php';
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
	// wp_enqueue_style( 'main', TEMPLATE_PATH . '/css/main.css', array(), time() );
	wp_enqueue_script( 'main', TEMPLATE_PATH . '/js/main.js', array( 'jquery' ), time(), true );
	wp_enqueue_script( 'front', TEMPLATE_PATH . '/js/front.js', array( 'main' ), time(), true );
	wp_enqueue_script( 'shuffle-letters', '//unpkg.com/shuffle-letters', array( 'main' ), time(), true );
	wp_enqueue_script( 'splitting', '//unpkg.com/splitting/dist/splitting.min.js', array( 'main' ), time(), true );
	wp_enqueue_script( 'formsubmit', '//cdn.jsdelivr.net/npm/@finsweet/attributes-formsubmit@1/formsubmit.js', array( 'splitting' ), time(), true );
	wp_enqueue_script( 'scripts', '//thevogne.ru/clients/vosk-clients/atto/scripts.js', array( 'formsubmit' ), time(), true );
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
	return vosk_get_current_url( $include_params ) === $test_url;
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
			'public'            => false,
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
				'public'            => false,
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
