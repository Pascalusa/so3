<?php
/**
 * So Lunch functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package So_Lunch
 */

/*************************************Ajout css************************************ */
function so_lunch_styles(){
 wp_enqueue_style('style css', get_stylesheet_directory_uri().'/style.css');
 // wp_enqueue_style('home css', get_stylesheet_directory_uri().'/home.css');
}

add_action('wp_enqueue_scripts','so_lunch_styles');

/*************************************Extrait Article************************************ */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 20 );


 add_action( 'init', 'codex_reservation_init' );

function codex_reservation_init() {
	$labels = array(
		'name'               => _x( 'Réservations clients', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Réservation client', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Réservations clients', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Réservation client', 'add new on admin bar', 'your-plugin-textdomain' ),
		// 'add_new'            => _x( 'Ajouter location', 'book', 'your-plugin-textdomain' ),
		// 'add_new_item'       => __( 'Ajouter une nouvelle location', 'your-plugin-textdomain' ),
		// 'new_item'           => __( 'Nouvelle location', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Editer une réservation', 'your-plugin-textdomain' ),
		'view_item'          => __( 'Voir la réservation client', 'your-plugin-textdomain' ),
		'all_items'          => __( 'Toutes les réservations', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Chercher les réservations', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent réservations:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'Désolé aucune réservations trouvé.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
         'taxonomies' => array( 'genres' ),

		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'location' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor' )
	);

	register_post_type( 'reservation', $args );
}
/************************************************************************* */

if ( ! function_exists( 'so_lunch_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function so_lunch_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on So Lunch, use a find and replace
		 * to change 'so-lunch' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'so-lunch', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		 add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'so-lunch' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'so_lunch_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'so_lunch_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function so_lunch_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'so_lunch_content_width', 640 );
}
add_action( 'after_setup_theme', 'so_lunch_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function so_lunch_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'so-lunch' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'so-lunch' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'so_lunch_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function so_lunch_scripts() {
	wp_enqueue_style( 'so-lunch-style', get_stylesheet_uri() );

	wp_enqueue_script( 'so-lunch-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'so-lunch-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'so_lunch_scripts' );

add_action( 'init', 'register_cpt_commande_en_lignes' );

function register_cpt_commande_en_lignes() {

	$labels = array(
		'name' => __( 'Liste des Menus', 'commande en lignes' ),
		'singular_name' => __( 'Menu', 'commande en lignes' ),
		'add_new' => __( 'Ajouter un nouveau menu', 'commande en lignes' ),
		'add_new_item' => __( 'Ajouter un nouveau menu', 'commande en lignes' ),
		'edit_item' => __( 'Editer un menu', 'commande en lignes' ),
		'new_item' => __( 'Nouvau menu', 'commande en lignes' ),
		'view_item' => __( 'Voir le menu', 'commande en lignes' ),
		'search_items' => __( 'Chercher les menu', 'commande en lignes' ),
		'not_found' => __( 'Aucun menu trouvé.', 'commande en lignes' ),
		'not_found_in_trash' => __( 'Aucun menu dans la corbeille', 'commande en lignes' ),
		'parent_item_colon' => __( 'zz', 'commande en lignes' ),
		'menu_name' => __( 'Liste des menus', 'commande en lignes' ),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'editor','thumbnail','title' ),
		'taxonomies' => array( 'category', 'commande_en_lignes' ),
		'menu_icon' => 'dashicons-cart',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'page'
	);

	register_post_type( 'commande_en_lignes', $args );
}

// --------------------------------------Instagramm-----------------------------------------

add_action( 'init', 'register_cpt_instagram' );

function register_cpt_instagram() {

	$labels = array(
		'name' => __( 'Liste photos Instagram'),
		'singular_name' => __( 'Photo'),
		'add_new' => __( 'Ajouter une nouvelle photo'),
		'add_new_item' => __( 'Ajouter une nouvelle photo'),
		'edit_item' => __( 'Editer une Photos'),
		'new_item' => __( 'Nouvelle photo'),
		'view_item' => __( 'Voir la photo'),
		'search_items' => __('Chercher les photos'),
		'not_found' => __( 'Aucune photo trouvé.'),
		'not_found_in_trash' => __( 'Aucune photo trouvé dans la corbeille'),
		'parent_item_colon' => __( ''),
		'menu_name' => __( 'Photos Instagram'),
	);

	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'thumbnail', 'page-attributes', 'title' ),
		'menu_icon' => 'dashicons-welcome-add-page',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'page'
	);

	register_post_type( 'instagram', $args );
}




/**
 * Generated by the WordPress Meta Box generator
 * at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
 */

function prix_pour_la_page_reservation_et_livraison_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function prix_pour_la_page_reservation_et_livraison_add_meta_box() {
	add_meta_box(
		'prix_pour_la_page_reservation_et_livraison-prix-pour-la-page-reservation-et-livraison',
		__( 'Prix pour la page reservation et livraison', 'prix_pour_la_page_reservation_et_livraison' ),
		'prix_pour_la_page_reservation_et_livraison_html',
		'commande_en_lignes',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'prix_pour_la_page_reservation_et_livraison_add_meta_box' );

function prix_pour_la_page_reservation_et_livraison_html( $post) {
	wp_nonce_field( '_prix_pour_la_page_reservation_et_livraison_nonce', 'prix_pour_la_page_reservation_et_livraison_nonce' ); ?>

	<p>
		<label for="prix_pour_la_page_reservation_et_livraison_prix_1_ex_12_euro_1200"><?php _e( 'Prix 1 ex : 12 euro = 1200', 'prix_pour_la_page_reservation_et_livraison' ); ?></label><br>
		<input type="text" name="prix_pour_la_page_reservation_et_livraison_prix_1_ex_12_euro_1200" id="prix_pour_la_page_reservation_et_livraison_prix_1_ex_12_euro_1200" value="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_1_ex_12_euro_1200' ); ?>">
	</p>	<p>
		<label for="prix_pour_la_page_reservation_et_livraison_prix_2_normal_"><?php _e( 'Prix 2 normal ', 'prix_pour_la_page_reservation_et_livraison' ); ?></label><br>
		<input type="text" name="prix_pour_la_page_reservation_et_livraison_prix_2_normal_" id="prix_pour_la_page_reservation_et_livraison_prix_2_normal_" value="<?php echo prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' ); ?>">
	</p><?php
}

function prix_pour_la_page_reservation_et_livraison_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['prix_pour_la_page_reservation_et_livraison_nonce'] ) || ! wp_verify_nonce( $_POST['prix_pour_la_page_reservation_et_livraison_nonce'], '_prix_pour_la_page_reservation_et_livraison_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['prix_pour_la_page_reservation_et_livraison_prix_1_ex_12_euro_1200'] ) )
		update_post_meta( $post_id, 'prix_pour_la_page_reservation_et_livraison_prix_1_ex_12_euro_1200', esc_attr( $_POST['prix_pour_la_page_reservation_et_livraison_prix_1_ex_12_euro_1200'] ) );
	if ( isset( $_POST['prix_pour_la_page_reservation_et_livraison_prix_2_normal_'] ) )
		update_post_meta( $post_id, 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_', esc_attr( $_POST['prix_pour_la_page_reservation_et_livraison_prix_2_normal_'] ) );
}
add_action( 'save_post', 'prix_pour_la_page_reservation_et_livraison_save' );

/*
	Usage: prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_1_ex_12_euro_1200' )
	Usage: prix_pour_la_page_reservation_et_livraison_get_meta( 'prix_pour_la_page_reservation_et_livraison_prix_2_normal_' )
*/

// ***************************************Index********************************************

/**
 * Generated by the WordPress Meta Box generator
 * at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
 */

function slider_title_pour_index_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function slider_title_pour_index_add_meta_box() {
	add_meta_box(
		'slider_title_pour_index-slider-title-pour-index',
		__( 'Slider & Title pour index', 'slider_title_pour_index' ),
		'slider_title_pour_index_html',
		'page',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'slider_title_pour_index_add_meta_box' );

function slider_title_pour_index_html( $post) {
	wp_nonce_field( '_slider_title_pour_index_nonce', 'slider_title_pour_index_nonce' ); ?>

	<p>
		<label for="slider_title_pour_index_url_slider1"><?php _e( 'URL Slider1', 'slider_title_pour_index' ); ?></label><br>
		<input type="text" name="slider_title_pour_index_url_slider1" id="slider_title_pour_index_url_slider1" value="<?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_url_slider1' ); ?>">
	</p>	<p>
		<label for="slider_title_pour_index_great_title_slider1"><?php _e( 'Great title Slider1', 'slider_title_pour_index' ); ?></label><br>
		<input type="text" name="slider_title_pour_index_great_title_slider1" id="slider_title_pour_index_great_title_slider1" value="<?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_great_title_slider1' ); ?>">
	</p>	<p>
		<label for="slider_title_pour_index_small_title_slider1"><?php _e( 'Small title Slider1', 'slider_title_pour_index' ); ?></label><br>
		<input type="text" name="slider_title_pour_index_small_title_slider1" id="slider_title_pour_index_small_title_slider1" value="<?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_small_title_slider1' ); ?>">
	</p>	<p>
		<label for="slider_title_pour_index_url_slider2"><?php _e( 'URL Slider2', 'slider_title_pour_index' ); ?></label><br>
		<input type="text" name="slider_title_pour_index_url_slider2" id="slider_title_pour_index_url_slider2" value="<?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_url_slider2' ); ?>">
	</p>	<p>
		<label for="slider_title_pour_index_great_title_slider2"><?php _e( 'Great title Slider2', 'slider_title_pour_index' ); ?></label><br>
		<input type="text" name="slider_title_pour_index_great_title_slider2" id="slider_title_pour_index_great_title_slider2" value="<?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_great_title_slider2' ); ?>">
	</p>	<p>
		<label for="slider_title_pour_index_small_title_slider2"><?php _e( 'Small title Slider2', 'slider_title_pour_index' ); ?></label><br>
		<input type="text" name="slider_title_pour_index_small_title_slider2" id="slider_title_pour_index_small_title_slider2" value="<?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_small_title_slider2' ); ?>">
	</p>	<p>
		<label for="slider_title_pour_index_url_slider3"><?php _e( 'URL Slider3', 'slider_title_pour_index' ); ?></label><br>
		<input type="text" name="slider_title_pour_index_url_slider3" id="slider_title_pour_index_url_slider3" value="<?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_url_slider3' ); ?>">
	</p>	<p>
		<label for="slider_title_pour_index_great_title_slider3"><?php _e( 'Great title Slider3', 'slider_title_pour_index' ); ?></label><br>
		<input type="text" name="slider_title_pour_index_great_title_slider3" id="slider_title_pour_index_great_title_slider3" value="<?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_great_title_slider3' ); ?>">
	</p>	<p>
		<label for="slider_title_pour_index_small_title_slider3"><?php _e( 'Small title Slider3', 'slider_title_pour_index' ); ?></label><br>
		<input type="text" name="slider_title_pour_index_small_title_slider3" id="slider_title_pour_index_small_title_slider3" value="<?php echo slider_title_pour_index_get_meta( 'slider_title_pour_index_small_title_slider3' ); ?>">
	</p><?php
}

function slider_title_pour_index_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['slider_title_pour_index_nonce'] ) || ! wp_verify_nonce( $_POST['slider_title_pour_index_nonce'], '_slider_title_pour_index_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['slider_title_pour_index_url_slider1'] ) )
		update_post_meta( $post_id, 'slider_title_pour_index_url_slider1', esc_attr( $_POST['slider_title_pour_index_url_slider1'] ) );
	if ( isset( $_POST['slider_title_pour_index_great_title_slider1'] ) )
		update_post_meta( $post_id, 'slider_title_pour_index_great_title_slider1', esc_attr( $_POST['slider_title_pour_index_great_title_slider1'] ) );
	if ( isset( $_POST['slider_title_pour_index_small_title_slider1'] ) )
		update_post_meta( $post_id, 'slider_title_pour_index_small_title_slider1', esc_attr( $_POST['slider_title_pour_index_small_title_slider1'] ) );
	if ( isset( $_POST['slider_title_pour_index_url_slider2'] ) )
		update_post_meta( $post_id, 'slider_title_pour_index_url_slider2', esc_attr( $_POST['slider_title_pour_index_url_slider2'] ) );
	if ( isset( $_POST['slider_title_pour_index_great_title_slider2'] ) )
		update_post_meta( $post_id, 'slider_title_pour_index_great_title_slider2', esc_attr( $_POST['slider_title_pour_index_great_title_slider2'] ) );
	if ( isset( $_POST['slider_title_pour_index_small_title_slider2'] ) )
		update_post_meta( $post_id, 'slider_title_pour_index_small_title_slider2', esc_attr( $_POST['slider_title_pour_index_small_title_slider2'] ) );
	if ( isset( $_POST['slider_title_pour_index_url_slider3'] ) )
		update_post_meta( $post_id, 'slider_title_pour_index_url_slider3', esc_attr( $_POST['slider_title_pour_index_url_slider3'] ) );
	if ( isset( $_POST['slider_title_pour_index_great_title_slider3'] ) )
		update_post_meta( $post_id, 'slider_title_pour_index_great_title_slider3', esc_attr( $_POST['slider_title_pour_index_great_title_slider3'] ) );
	if ( isset( $_POST['slider_title_pour_index_small_title_slider3'] ) )
		update_post_meta( $post_id, 'slider_title_pour_index_small_title_slider3', esc_attr( $_POST['slider_title_pour_index_small_title_slider3'] ) );
}
add_action( 'save_post', 'slider_title_pour_index_save' );

/*
	Usage: slider_title_pour_index_get_meta( 'slider_title_pour_index_url_slider1' )
	Usage: slider_title_pour_index_get_meta( 'slider_title_pour_index_great_title_slider1' )
	Usage: slider_title_pour_index_get_meta( 'slider_title_pour_index_small_title_slider1' )
	Usage: slider_title_pour_index_get_meta( 'slider_title_pour_index_url_slider2' )
	Usage: slider_title_pour_index_get_meta( 'slider_title_pour_index_great_title_slider2' )
	Usage: slider_title_pour_index_get_meta( 'slider_title_pour_index_small_title_slider2' )
	Usage: slider_title_pour_index_get_meta( 'slider_title_pour_index_url_slider3' )
	Usage: slider_title_pour_index_get_meta( 'slider_title_pour_index_great_title_slider3' )
	Usage: slider_title_pour_index_get_meta( 'slider_title_pour_index_small_title_slider3' )
*/

/**
 * Generated by the WordPress Meta Box generator
 * at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
 */

function seo_pour_index_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function seo_pour_index_add_meta_box() {
	add_meta_box(
		'seo_pour_index-seo-pour-index',
		__( 'SEO pour index', 'seo_pour_index' ),
		'seo_pour_index_html',
		'page',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'seo_pour_index_add_meta_box' );

function seo_pour_index_html( $post) {
	wp_nonce_field( '_seo_pour_index_nonce', 'seo_pour_index_nonce' ); ?>

	<p>
		<label for="seo_pour_index_name_slider_1"><?php _e( 'Name slider 1', 'seo_pour_index' ); ?></label><br>
		<input type="text" name="seo_pour_index_name_slider_1" id="seo_pour_index_name_slider_1" value="<?php echo seo_pour_index_get_meta( 'seo_pour_index_name_slider_1' ); ?>">
	</p>	<p>
		<label for="seo_pour_index_name_slider_2"><?php _e( 'Name slider 2', 'seo_pour_index' ); ?></label><br>
		<input type="text" name="seo_pour_index_name_slider_2" id="seo_pour_index_name_slider_2" value="<?php echo seo_pour_index_get_meta( 'seo_pour_index_name_slider_2' ); ?>">
	</p>	<p>
		<label for="seo_pour_index_name_slider_3"><?php _e( 'Name slider 3', 'seo_pour_index' ); ?></label><br>
		<input type="text" name="seo_pour_index_name_slider_3" id="seo_pour_index_name_slider_3" value="<?php echo seo_pour_index_get_meta( 'seo_pour_index_name_slider_3' ); ?>">
	</p><?php
}

function seo_pour_index_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['seo_pour_index_nonce'] ) || ! wp_verify_nonce( $_POST['seo_pour_index_nonce'], '_seo_pour_index_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['seo_pour_index_name_slider_1'] ) )
		update_post_meta( $post_id, 'seo_pour_index_name_slider_1', esc_attr( $_POST['seo_pour_index_name_slider_1'] ) );
	if ( isset( $_POST['seo_pour_index_name_slider_2'] ) )
		update_post_meta( $post_id, 'seo_pour_index_name_slider_2', esc_attr( $_POST['seo_pour_index_name_slider_2'] ) );
	if ( isset( $_POST['seo_pour_index_name_slider_3'] ) )
		update_post_meta( $post_id, 'seo_pour_index_name_slider_3', esc_attr( $_POST['seo_pour_index_name_slider_3'] ) );
}
add_action( 'save_post', 'seo_pour_index_save' );

/*
	Usage: seo_pour_index_get_meta( 'seo_pour_index_name_slider_1' )
	Usage: seo_pour_index_get_meta( 'seo_pour_index_name_slider_2' )
	Usage: seo_pour_index_get_meta( 'seo_pour_index_name_slider_3' )
*/

/* ******************************************job********************************************* */

// Register Custom Post Type JOB
// Post Type Key: job
function create_job_cpt() {

	$labels = array(
		'name' => __( 'JOB', 'Post Type General Name', 'textdomain' ),
		'singular_name' => __( 'JOB', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => __( 'JOB', 'textdomain' ),
		'name_admin_bar' => __( 'JOB', 'textdomain' ),
		'archives' => __( 'JOB Archives', 'textdomain' ),
		'attributes' => __( 'JOB Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent JOB:', 'textdomain' ),
		'all_items' => __( 'All JOB', 'textdomain' ),
		'add_new_item' => __( 'Add New JOB', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New JOB', 'textdomain' ),
		'edit_item' => __( 'Edit JOB', 'textdomain' ),
		'update_item' => __( 'Update JOB', 'textdomain' ),
		'view_item' => __( 'View JOB', 'textdomain' ),
		'view_items' => __( 'View JOB', 'textdomain' ),
		'search_items' => __( 'Search JOB', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into JOB', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this JOB', 'textdomain' ),
		'items_list' => __( 'JOB list', 'textdomain' ),
		'items_list_navigation' => __( 'JOB list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter JOB list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'JOB', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-flag',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields', ),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'page',
	);
	register_post_type( 'job', $args );

}
add_action( 'init', 'create_job_cpt', 0 );

// *********************************************CHAMPS JOB *************************************

/**
 * Generated by the WordPress Meta Box generator
 * at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
 */

function pour_la_page_job_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function pour_la_page_job_add_meta_box() {
	add_meta_box(
		'pour_la_page_job-pour-la-page-job',
		__( 'Pour la page job', 'pour_la_page_job' ),
		'pour_la_page_job_html',
		'job',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'pour_la_page_job_add_meta_box' );

function pour_la_page_job_html( $post) {
	wp_nonce_field( '_pour_la_page_job_nonce', 'pour_la_page_job_nonce' ); ?>

	<p>
		<label for="pour_la_page_job_url_image"><?php _e( 'URL IMAGE', 'pour_la_page_job' ); ?></label><br>
		<input type="text" name="pour_la_page_job_url_image" id="pour_la_page_job_url_image" value="<?php echo pour_la_page_job_get_meta( 'pour_la_page_job_url_image' ); ?>">
	</p>	<p>
		<label for="pour_la_page_job_nom_de_l_image"><?php _e( 'Nom de l\\\\\\\'image', 'pour_la_page_job' ); ?></label><br>
		<input type="text" name="pour_la_page_job_nom_de_l_image" id="pour_la_page_job_nom_de_l_image" value="<?php echo pour_la_page_job_get_meta( 'pour_la_page_job_nom_de_l_image' ); ?>">
	</p><?php
}

function pour_la_page_job_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['pour_la_page_job_nonce'] ) || ! wp_verify_nonce( $_POST['pour_la_page_job_nonce'], '_pour_la_page_job_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['pour_la_page_job_url_image'] ) )
		update_post_meta( $post_id, 'pour_la_page_job_url_image', esc_attr( $_POST['pour_la_page_job_url_image'] ) );
	if ( isset( $_POST['pour_la_page_job_nom_de_l_image'] ) )
		update_post_meta( $post_id, 'pour_la_page_job_nom_de_l_image', esc_attr( $_POST['pour_la_page_job_nom_de_l_image'] ) );
}
add_action( 'save_post', 'pour_la_page_job_save' );

/*
	Usage: pour_la_page_job_get_meta( 'pour_la_page_job_url_image' )
	Usage: pour_la_page_job_get_meta( 'pour_la_page_job_nom_de_l_image' )
*/

/* ******************************************Blog********************************************* */


/**
 * Generated by the WordPress Meta Box generator
 * at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
 */

function image_background_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function image_background_add_meta_box() {
	add_meta_box(
		'image_background-image-background',
		__( 'Image background', 'image_background' ),
		'image_background_html',
		'post',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'image_background_add_meta_box' );

function image_background_html( $post) {
	wp_nonce_field( '_image_background_nonce', 'image_background_nonce' ); ?>

	<p>
		<label for="image_background_image_background"><?php _e( 'Image background', 'image_background' ); ?></label><br>
		<input type="text" name="image_background_image_background" id="image_background_image_background" value="<?php echo image_background_get_meta( 'image_background_image_background' ); ?>">
	</p>	<p>
		<label for="image_background_title_image"><?php _e( 'Title image', 'image_background' ); ?></label><br>
		<input type="text" name="image_background_title_image" id="image_background_title_image" value="<?php echo image_background_get_meta( 'image_background_title_image' ); ?>">
	</p><?php
}

function image_background_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['image_background_nonce'] ) || ! wp_verify_nonce( $_POST['image_background_nonce'], '_image_background_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['image_background_image_background'] ) )
		update_post_meta( $post_id, 'image_background_image_background', esc_attr( $_POST['image_background_image_background'] ) );
	if ( isset( $_POST['image_background_title_image'] ) )
		update_post_meta( $post_id, 'image_background_title_image', esc_attr( $_POST['image_background_title_image'] ) );
}
add_action( 'save_post', 'image_background_save' );

/*
	Usage: image_background_get_meta( 'image_background_image_background' )
	Usage: image_background_get_meta( 'image_background_title_image' )
*/

	/* ******************************************Contact********************************************* */

/**
 * Generated by the WordPress Meta Box generator
 * at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
 */

function info_page_contacte_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function info_page_contacte_add_meta_box() {
	add_meta_box(
		'info_page_contacte-info-page-contacte',
		__( 'Info page contacte', 'info_page_contacte' ),
		'info_page_contacte_html',
		'page',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'info_page_contacte_add_meta_box' );

function info_page_contacte_html( $post) {
	wp_nonce_field( '_info_page_contacte_nonce', 'info_page_contacte_nonce' ); ?>

	<p>
		<label for="info_page_contacte_numero_de_l_entreprise"><?php _e( 'Numero de l\'entreprise', 'info_page_contacte' ); ?></label><br>
		<input type="text" name="info_page_contacte_numero_de_l_entreprise" id="info_page_contacte_numero_de_l_entreprise" value="<?php echo info_page_contacte_get_meta( 'info_page_contacte_numero_de_l_entreprise' ); ?>">
	</p>	<p>
		<label for="info_page_contacte_e_mail"><?php _e( 'E-mail', 'info_page_contacte' ); ?></label><br>
		<input type="text" name="info_page_contacte_e_mail" id="info_page_contacte_e_mail" value="<?php echo info_page_contacte_get_meta( 'info_page_contacte_e_mail' ); ?>">
	</p>	<p>
		<label for="info_page_contacte_horaire_ex_monday_friday_10h00__22h00_"><?php _e( 'Horaire ( ex: Monday - Friday : 10h00 à 22h00 )', 'info_page_contacte' ); ?></label><br>
		<input type="text" name="info_page_contacte_horaire_ex_monday_friday_10h00__22h00_" id="info_page_contacte_horaire_ex_monday_friday_10h00__22h00_" value="<?php echo info_page_contacte_get_meta( 'info_page_contacte_horaire_ex_monday_friday_10h00__22h00_' ); ?>">
	</p>
	<p>
		<label for="info_page_contacte_adresse_"><?php _e( 'Adresse', 'info_page_contacte' ); ?></label><br>
		<input type="text" name="info_page_contacte_adresse_" id="info_page_contacte_adresse_" value="<?php echo info_page_contacte_get_meta( 'info_page_contacte_adresse_' ); ?>">
	</p><?php
}

function info_page_contacte_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['info_page_contacte_nonce'] ) || ! wp_verify_nonce( $_POST['info_page_contacte_nonce'], '_info_page_contacte_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['info_page_contacte_numero_de_l_entreprise'] ) )
		update_post_meta( $post_id, 'info_page_contacte_numero_de_l_entreprise', esc_attr( $_POST['info_page_contacte_numero_de_l_entreprise'] ) );
	if ( isset( $_POST['info_page_contacte_e_mail'] ) )
		update_post_meta( $post_id, 'info_page_contacte_e_mail', esc_attr( $_POST['info_page_contacte_e_mail'] ) );
      
      if ( isset( $_POST['info_page_contacte_adresse_'] ) )
		update_post_meta( $post_id, 'info_page_contacte_adresse_', esc_attr( $_POST['info_page_contacte_adresse_'] ) );


	if ( isset( $_POST['info_page_contacte_horaire_ex_monday_friday_10h00__22h00_'] ) )
		update_post_meta( $post_id, 'info_page_contacte_horaire_ex_monday_friday_10h00__22h00_', esc_attr( $_POST['info_page_contacte_horaire_ex_monday_friday_10h00__22h00_'] ) );
}
add_action( 'save_post', 'info_page_contacte_save' );

/*
	Usage: info_page_contacte_get_meta( 'info_page_contacte_numero_de_l_entreprise' )
	Usage: info_page_contacte_get_meta( 'info_page_contacte_e_mail' )
	Usage: info_page_contacte_get_meta( 'info_page_contacte_horaire_ex_monday_friday_10h00__22h00_' )
*/


/* ******************************************Restriction********************************************* */


/**
 * Generated by the WordPress Meta Box generator
 * at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
 */

function restriction_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function restriction_add_meta_box() {
	add_meta_box(
		'restriction-restriction',
		__( 'Restriction', 'restriction' ),
		'restriction_html',
		'commande_en_lignes',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'restriction_add_meta_box' );

function restriction_html( $post) {
	wp_nonce_field( '_restriction_nonce', 'restriction_nonce' ); ?>

	<p>

		<input type="checkbox" name="restriction_soja" id="restriction_soja" value="soja" <?php echo ( restriction_get_meta( 'restriction_soja' ) === 'soja' ) ? 'checked' : ''; ?>>
		<label for="restriction_soja"><?php _e( 'Soja', 'restriction' ); ?></label>	</p>	<p>

		<input type="checkbox" name="restriction_gluten" id="restriction_gluten" value="gluten" <?php echo ( restriction_get_meta( 'restriction_gluten' ) === 'gluten' ) ? 'checked' : ''; ?>>
		<label for="restriction_gluten"><?php _e( 'Gluten', 'restriction' ); ?></label>	</p>	<p>

		<input type="checkbox" name="restriction_produits_laitiers" id="restriction_produits_laitiers" value="produits-laitiers" <?php echo ( restriction_get_meta( 'restriction_produits_laitiers' ) === 'produits-laitiers' ) ? 'checked' : ''; ?>>
		<label for="restriction_produits_laitiers"><?php _e( 'Produits laitiers', 'restriction' ); ?></label>	</p>	<p>

		<input type="checkbox" name="restriction_poisson" id="restriction_poisson" value="poisson" <?php echo ( restriction_get_meta( 'restriction_poisson' ) === 'poisson' ) ? 'checked' : ''; ?>>
		<label for="restriction_poisson"><?php _e( 'Poisson', 'restriction' ); ?></label>	</p>	<p>

		<input type="checkbox" name="restriction_viande" id="restriction_viande" value="viande" <?php echo ( restriction_get_meta( 'restriction_viande' ) === 'viande' ) ? 'checked' : ''; ?>>
		<label for="restriction_viande"><?php _e( 'Viande', 'restriction' ); ?></label>	</p><?php
}

function restriction_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['restriction_nonce'] ) || ! wp_verify_nonce( $_POST['restriction_nonce'], '_restriction_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['restriction_soja'] ) )
		update_post_meta( $post_id, 'restriction_soja', esc_attr( $_POST['restriction_soja'] ) );
	else
		update_post_meta( $post_id, 'restriction_soja', null );
	if ( isset( $_POST['restriction_gluten'] ) )
		update_post_meta( $post_id, 'restriction_gluten', esc_attr( $_POST['restriction_gluten'] ) );
	else
		update_post_meta( $post_id, 'restriction_gluten', null );
	if ( isset( $_POST['restriction_produits_laitiers'] ) )
		update_post_meta( $post_id, 'restriction_produits_laitiers', esc_attr( $_POST['restriction_produits_laitiers'] ) );
	else
		update_post_meta( $post_id, 'restriction_produits_laitiers', null );
	if ( isset( $_POST['restriction_poisson'] ) )
		update_post_meta( $post_id, 'restriction_poisson', esc_attr( $_POST['restriction_poisson'] ) );
	else
		update_post_meta( $post_id, 'restriction_poisson', null );
	if ( isset( $_POST['restriction_viande'] ) )
		update_post_meta( $post_id, 'restriction_viande', esc_attr( $_POST['restriction_viande'] ) );
	else
		update_post_meta( $post_id, 'restriction_viande', null );
}
add_action( 'save_post', 'restriction_save' );

/*
	Usage: restriction_get_meta( 'restriction_soja' )
	Usage: restriction_get_meta( 'restriction_gluten' )
	Usage: restriction_get_meta( 'restriction_produits_laitiers' )
	Usage: restriction_get_meta( 'restriction_poisson' )
	Usage: restriction_get_meta( 'restriction_viande' )
*/

/**
 * Generated by the WordPress Meta Box generator
 * at http://jeremyhixon.com/tool/wordpress-meta-box-generator/
 */

function image_box_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function image_box_add_meta_box() {
	add_meta_box(
		'image_box-image-box',
		__( 'Image box', 'image_box' ),
		'image_box_html',
		'post',
		'side',
		'default'
	);
	add_meta_box(
		'image_box-image-box',
		__( 'Image box', 'image_box' ),
		'image_box_html',
		'page',
		'side',
		'default'
	);
	add_meta_box(
		'image_box-image-box',
		__( 'Image box', 'image_box' ),
		'image_box_html',
		'commande_en_lignes',
		'side',
		'default'
	);
    add_meta_box(
		'image_box-image-box',
		__( 'Image box', 'image_box' ),
		'image_box_html',
		'instagram',
		'side',
		'default'
	);
}
add_action( 'add_meta_boxes', 'image_box_add_meta_box' );

function image_box_html( $post) {
	wp_nonce_field( '_image_box_nonce', 'image_box_nonce' ); ?>

	<p>
		<label for="image_box_url_image"><?php _e( 'URL IMAGE', 'image_box' ); ?></label><br>
		<input type="text" name="image_box_url_image" id="image_box_url_image" value="<?php echo image_box_get_meta( 'image_box_url_image' ); ?>">
	</p><?php
}

function image_box_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['image_box_nonce'] ) || ! wp_verify_nonce( $_POST['image_box_nonce'], '_image_box_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['image_box_url_image'] ) )
		update_post_meta( $post_id, 'image_box_url_image', esc_attr( $_POST['image_box_url_image'] ) );
}
add_action( 'save_post', 'image_box_save' );

/*
	Usage: image_box_get_meta( 'image_box_url_image' )
*/

/* ******************************************ERREUR NON AFFICHÉ LOGIN CONNEXION*************************************** */
add_filter('login_errors', create_function('$a', "return null;"));


/* ******************************************CRÉATION CATEGORIE*************************************** */




/* ******************************************AIDE WORPRESS********************************************* */

// https://jeremyhixon.com/tool/wordpress-option-page-generator/
// http://thankbob.com/meta-box-generator/
// https://www.wp-hasty.com/tools/wordpress-custom-post-type-generator/
// http://jeremyhixon.com/tool/wordpress-meta-box-generator/
// https://metabox.io/online-generator/
// http://hasinhayder.github.io/cmb2-metabox-generator/
// http://wpsettingsapi.jeroensormani.com/ 
// https://www.youtube.com/watch?v=iFJUDuBTKMg
// https://www.predikkta.com/products/plans-and-pricing.html
// https://www.youtube.com/watch?v=5OeuSDHO0XE
// https://www.youtube.com/watch?v=Pd44EPfsRlw

// ---------------------------------
// https://elementortemplatepack.com/
// https://www.whatsmydns.net/ = dns
//  https://www.whynopadlock.com/results/03ec91ac-76f2-40ab-ad8d-def009d26b4a = ssl verif 
// https://www.youtube.com/watch?v=W4bWAKeNCdM
// http://nimishprabhu.com/header-php-refresh-redirect-location-url-x-seconds.html
// header("Refresh: 5; url=index.php");
//  +
// echo 'Logged in successfully.'; 
