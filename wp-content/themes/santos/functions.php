<?php 

	add_theme_support('post-thumbnails');

	add_theme_support('menus');

	function new_excerpt_more($more) {

	global $post;

	return ' <a class="read" href="'. get_permalink($post->ID) . '">' . 'Read More' . '</a>';

	}

	add_filter('excerpt_more', 'new_excerpt_more');

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	function ffbymary_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Sidebar', 'ffbymary' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'ffbymary' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => __( 'Content Bottom 1', 'ffbymary' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'ffbymary' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );

		register_sidebar( array(
			'name'          => __( 'Content Bottom 2', 'ffbymary' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'ffbymary' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
	add_action( 'widgets_init', 'ffbymary_widgets_init' );



	function custom_post_type() {
		$labels = array(
			'name'                => _x( 'News', 'Post Type General Name', 'text_domain' ),
			'singular_name'       => _x( 'News', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'           => __( 'News', 'text_domain' ),
			'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
			'all_items'           => __( 'All Items', 'text_domain' ),
			'view_item'           => __( 'View Item', 'text_domain' ),
			'add_new_item'        => __( 'Add New Item', 'text_domain' ),
			'add_new'             => __( 'Add New', 'text_domain' ),
			'edit_item'           => __( 'Edit Item', 'text_domain' ),
			'update_item'         => __( 'Update Item', 'text_domain' ),
			'search_items'        => __( 'Search Item', 'text_domain' ),
			'not_found'           => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
		);
		$args = array(
			'label'               => __( 'news', 'text_domain' ),
			'description'         => __( 'News Posts', 'text_domain' ),
			'labels'              => $labels,
			'supports'            => array( ),
			'taxonomies'          => array( 'category', 'post_tag' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		register_post_type( 'news', $args );

		$labels = array(
			'name'                => _x( 'Events', 'Post Type General Name', 'text_domain' ),
			'singular_name'       => _x( 'Events', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'           => __( 'Events', 'text_domain' ),
			'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
			'all_items'           => __( 'All Items', 'text_domain' ),
			'view_item'           => __( 'View Item', 'text_domain' ),
			'add_new_item'        => __( 'Add New Item', 'text_domain' ),
			'add_new'             => __( 'Add New', 'text_domain' ),
			'edit_item'           => __( 'Edit Item', 'text_domain' ),
			'update_item'         => __( 'Update Item', 'text_domain' ),
			'search_items'        => __( 'Search Item', 'text_domain' ),
			'not_found'           => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
		);
		$args = array(
			'label'               => __( 'events', 'text_domain' ),
			'description'         => __( 'Events Posts', 'text_domain' ),
			'labels'              => $labels,
			'supports'            => array( ),
			'taxonomies'          => array( 'category', 'post_tag' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		register_post_type( 'events', $args );

		$labels = array(
			'name'                => _x( 'Gallery', 'Post Type General Name', 'text_domain' ),
			'singular_name'       => _x( 'Gallery', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'           => __( 'Gallery', 'text_domain' ),
			'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
			'all_items'           => __( 'All Items', 'text_domain' ),
			'view_item'           => __( 'View Item', 'text_domain' ),
			'add_new_item'        => __( 'Add New Item', 'text_domain' ),
			'add_new'             => __( 'Add New', 'text_domain' ),
			'edit_item'           => __( 'Edit Item', 'text_domain' ),
			'update_item'         => __( 'Update Item', 'text_domain' ),
			'search_items'        => __( 'Search Item', 'text_domain' ),
			'not_found'           => __( 'Not found', 'text_domain' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
		);
		$args = array(
			'label'               => __( 'gallery', 'text_domain' ),
			'description'         => __( 'Gallery Posts', 'text_domain' ),
			'labels'              => $labels,
			'supports'            => array( ),
			'taxonomies'          => array( 'category', 'post_tag' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		register_post_type( 'gallery', $args );
	}

	function wpsites_home_page_cpt_filter($query) {
	if ( !is_admin() && $query->is_main_query() && is_home() ) {
	$query->set('post_type', array( 'news' ) );
			}
		}

		add_action('pre_get_posts','wpsites_home_page_cpt_filter');



	// Hook into the 'init' action
	add_action( 'init', 'custom_post_type', 0 );

	function replace_admin_menu_icons_css() {
			?>
			<style>
				#adminmenu #menu-posts, #adminmenu #menu-comments {
					display: none;
				}
				#adminmenu #menu-posts-gallery div.wp-menu-image:before {
					content: "\f236";
				}
				#adminmenu #menu-posts-events div.wp-menu-image:before {
					content: "\f488";
				}
				#adminmenu #menu-posts-news div.wp-menu-image:before {
					content: "\f336";
				}

			</style>
			<?php
	}

	add_action( 'admin_head', 'replace_admin_menu_icons_css' );

?>
