<?php

/**
 * Market Hardware Bootstrap Single Page functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Market Hardware Bootstrap Single Page 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Market Hardware Bootstrap Single Page 1.0
 */

/* Enable Theme Support 
   Sets up theme defaults and registers support for various WordPress features.*/
function express_theme_support() {
	add_theme_support( 'menus');
	//Switch default core markup for styles and scripts to output valid HTML5
	add_theme_support( 'html5', array( 'style', 'script' ) );
	// Allow WP to control title tags
	add_theme_support( 'title-tag' );
	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	// Add custom image size for 585x350
	add_image_size( 'features-image-service', 585, 350, true );	
}
add_action( 'after_setup_theme', 'express_theme_support' );


function be_reusable_blocks_admin_menu() {
    add_menu_page( 'Reusable Blocks', 'Reusable Blocks', 'edit_posts', 'edit.php?post_type=wp_block', '', 'dashicons-editor-table', 22 );
}
add_action( 'admin_menu', 'be_reusable_blocks_admin_menu' );


register_nav_menu('main_nav','The Main Menu');

remove_filter('the_content', 'wptexturize');


function my_get_a_post($name, $field) {

    $args = array(
        'posts_per_page' => 100,
        'offset' => 0,
        'category' => '',
        'category_name' => '',
        'orderby' => 'post_date',
        'order' => 'DESC',
        'include' => '',
        'exclude' => '',
        'meta_key' => '',
        'meta_value' => '',
        'post_type' => 'page',
        'post_mime_type' => '',
        'post_parent' => '',
        'post_status' => 'publish',
        'suppress_filters' => true
    );

  //  error_log("in my_get_a_post name " . $name);

    $posts_array = get_posts($args);

    $ret = '';

    if ($posts_array && count($posts_array) > 0) {

        //error_log("Post array count " . count($posts_array));

        foreach ($posts_array as $p) {

           // error_log("Post Name " . $p->post_name);

            if ($p->post_name == $name) {

                //error_log("Have a match " . $name);
               // error_log("Post content " . $p->post_content);

                if ($field == "title") {
                    $ret = $p->post_title;
                }
                if ($field == "content") {
                    $ret = $p->post_content;
                }
            }
        }
    } else {
        error_log("No posts");
        return "";
    }

   // error_log("Returning " . $ret);

    global $shortcode_tags;


    foreach ($shortcode_tags as $name => $value) {
        processShortCode($name, $ret, 0);
    }



    return $ret;
}

function processShortCode($code, &$text, $offset) {

    $pos = strpos($text, "[" . $code, $offset);
    if ($pos == FALSE) {
        return FALSE;
    } else {
        while ($pos >= 0) {

            $shortcode = substr($text, $pos, $endpos - $pos + 1);
            $result = do_shortcode($shortcode);
            $first = substr($text, 0, $pos);
            $second = substr($text, $endpos + 1, strlen($text));
            $text = $first . $result . $second;
			$endpos = strpos($text, strlen($first . $result));
            return processShortCode($code, $text, $endpos);
        }
    }
}

/*
 * Function to build YAMM menu dynamically.  Does not use WP nav code
 */
function gutenberg_yamm_nav(){
    
    echo '<ul id="menu-menu-1" class="nav navbar-nav navbar-right">' . PHP_EOL;
    
    $menu_name = 'main_nav';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));

    $count = 0;
    $submenu = false;    
    
    $menu_array = array();
    
    foreach ($menuitems as $item) {
        $id = get_post_meta( $item->ID, '_menu_item_object_id', true );
        $page = get_page( $id );
        $link = get_page_link( $id );
        $url = $item->url;
        
        if ( !$item->menu_item_parent ){
            $parent_id = $item->ID;
            $menu_array[$item->ID]['id'] = $id;
            $menu_array[$item->ID]['page'] = $page;
            $menu_array[$item->ID]['link'] = $url;
            $menu_array[$item->ID]['top'] = true;
            $menu_array[$item->ID]['is_parent'] = false;
        }else{
            //child item
            $child = array();
            $child['id'] = $id;
            $child['page'] = $page;
            $child['link'] = $url;
            $children = $menu_array[$item->menu_item_parent]['children'];
            $menu_array[$item->menu_item_parent]['is_parent'] = true;
            if (!isset($children)){
                $children = array();
            }
            
            array_push($children, $child);
            $menu_array[$item->menu_item_parent]['children'] = $children;
        }
    }
    
    //Now build the menu
	
	$item_count = 1;
	$a_count = 1;
    
    foreach ($menu_array as $item) {
        

        
        if ($item['top'] = true){

            $is_parent = $item['is_parent'];
            if (isset($is_parent) && $is_parent == true){
                
                $children = $item['children'];
                
                $child_count = count($children);
                
                if ($child_count > 4){
                    
					$titleForClass = str_replace(" ", "-", strtolower($item['page']->post_title));
					
                    echo '<li class="my-page-id-'. $item['id'] .' dropdown yamm-fw li-nav-'.$item_count++.'"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-'. $a_count++.'">'.$item['page']->post_title.' <i class="fa fa-caret-down"></i></a>' . PHP_EOL;
                    echo '<ul class="dropdown-menu dropdown-menu-'. $titleForClass .'">' . PHP_EOL;
                    echo '<li class="li-nav-'.$item_count++.'" >' . PHP_EOL;
                    echo '<div class="yamm-content">' . PHP_EOL; 
                    echo '<div class="row">' . PHP_EOL;
                    
                    $colnum = floor($child_count/5) + 1;
                    $bootstrap_grid_size = floor(12/$colnum);
                    $chunk_size = ceil($child_count/2);

                    $parts = array_chunk($children, $chunk_size);
                    foreach ($parts as $col) {
                        echo '<div class="col-sm-'.$bootstrap_grid_size.'">' . PHP_EOL;
                        echo '<ul class="list-unstyled">' . PHP_EOL;     
                        foreach ($col as $colitem) {
                            echo '<li class="im-sub-li my-page-id-'.$colitem['id'].'  li-nav-'.$item_count++.'" ><a class="nav-'.$a_count++.'" tabindex="-1" href="'.$colitem['link'].'">'.$colitem['page']->post_title.'</a> </li>' . PHP_EOL;
                        }
                        echo '</ul>';
                        echo '</div>' . PHP_EOL;
                    }
                    
                    echo '</div>' . PHP_EOL;
                    echo '</div>' . PHP_EOL;
                    echo '</li>' . PHP_EOL;
                    echo '</ul>' . PHP_EOL;
                    echo '</li>' . PHP_EOL;
                }else{
                    //Don't split
					
					$titleForClass = str_replace(" ", "-", strtolower($item['page']->post_title));
					
                    echo '<li class="my-page-id-'. $item['id'] .'  dropdown  li-nav-'.$item_count++.'"><a href="#" data-toggle="dropdown" class="dropdown-toggle nav-'. $a_count++.'">'.$item['page']->post_title.' <i class="fa fa-caret-down"></i></a>' . PHP_EOL;
                    echo '<ul class="dropdown-menu dropdown-menu-'. $titleForClass .'">' . PHP_EOL;

                    foreach ($children as $child) {
                        echo '<li class="my-page-id-'. $child['id'] .' im-sub-li li-nav-'.$item_count++.'"><a class="nav-'. $a_count++.'" tabindex="-1" href="'.$child['link'].'">'.$child['page']->post_title.'</a> </li>' . PHP_EOL;
                    }
                    echo '</ul>' . PHP_EOL;                    
                }
                
                

            }else{
                //top level menu item - no children
                echo '<li class="im-parent-li my-page-id-'. $item['id'] .' li-nav-'.$item_count++.'"><a class="nav-'. $a_count++.'"  href="'.$item['link'].'">'.$item['page']->post_title.'</a></li>' . PHP_EOL;
            }
        }
    }
    
    echo '</ul>' . PHP_EOL;
}


function gutenberg_nav() {
    // display the wp3 menu if available
    wp_nav_menu(
            array(
                'menu' => 'main_nav', /* menu name */
                'menu_class' => 'nav navbar-nav navbar-right',
                'theme_location' => 'main_nav', /* where in the theme it's assigned */
                'container' => 'false', /* container class */
                'fallback_cb' => '', /* menu fallback */
                // 'depth' => '2',  suppress lower levels for now
                'walker' => new Gutenberg_Walker()
            )
    );
}

// Menu output mods
class Gutenberg_Walker extends Walker_Nav_Menu {
	
	private $_item_count = 1;
        private $_a_count = 1;

    function start_el(&$output, $object, $depth = 0, $args = Array(), $current_object_id = 0) {

        global $wp_query;
        $indent = ( $depth ) ? str_repeat("\t", $depth) : '';

        $class_names = $value = '';

        // If the item has children, add the dropdown class for bootstrap
        if ($args->has_children) {
            $class_names = "dropdown ";
        }

        $classes = empty($object->classes) ? array() : (array) $object->classes;

        $class_names .= join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $object));
        $class_names = ' class="' . esc_attr($class_names) . ' li-nav-'.$_item_count++.'"';

        $output .= $indent . '<li id="menu-item-' . $object->ID . '"' . $value . $class_names . '>';

        $attributes = !empty($object->attr_title) ? ' title="' . esc_attr($object->attr_title) . '"' : '';
        $attributes .=!empty($object->target) ? ' target="' . esc_attr($object->target) . '"' : '';
        $attributes .=!empty($object->xfn) ? ' rel="' . esc_attr($object->xfn) . '"' : '';
        $attributes .=!empty($object->url) ? ' href="' . esc_attr($object->url) . '"' : '';

        // if the item has children add these two attributes to the anchor tag
        if ($args->has_children) {
            $attributes .= ' class="dropdown-toggle nav-" ' . $_a_count++ . ' data-toggle="dropdown"';
        }else{
            $attributes .= ' class="nav-"' . $_a_count++;
            
        }

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $object->title, $object->ID);
        $item_output .= $args->link_after;

        // if the item has children add the caret just before closing the anchor tag
        if ($args->has_children) {
            $item_output .= ' <i class="fa fa-caret-down"></i></a>';
        } else {
            $item_output .= '</a>';
        }

        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $object, $depth, $args);
    }

// end start_el function

    function start_lvl(&$output, $depth = 0, $args = Array()) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
    }

    function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
        $id_field = $this->db_fields['id'];
        if (is_object($args[0])) {
            $args[0]->has_children = !empty($children_elements[$element->$id_field]);
        }
        return parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }

}

function stick_admin_bar_to_bottom_css() {
        echo "
        <style type='text/css'>
        html {
                padding-bottom: 28px !important;
        }

        body {
                margin-top: -28px;
        }

        #wpadminbar {
                top: auto !important;
                bottom: 0;
        }

        #wpadminbar .quicklinks .menupop ul {
                bottom: 28px;
        }
        </style>
        ";
}

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Express SmartPress - powered by Market Hardware, Inc.';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(//mh-cdn.s3.amazonaws.com/smartpress/mh/mh-express-login.png);
		height:66px;
		width:300px;
		background-size: 300px 66px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
add_filter( 'plugins_auto_update_enabled', '__return_false' );
add_filter( 'themes_auto_update_enabled', '__return_false' );
// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Blog Functions

// Add "read more" links
   function mh_express_read_more($more) {
   global $post;
   return '&hellip; <a href="'. get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
   }
   add_filter('excerpt_more', 'mh_express_read_more');

// Sidebars & Widgetizes Areas
function mh_express_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar_blog',
		'name' => 'Blog Sidebar',
		'description' => 'Used on the main Blog page template.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
};
add_action('widgets_init','mh_express_register_sidebars');

// customize "read more link"
function mh_read_more($more) {
 global $post;
 return '&hellip; <div class="center-block"><a class="moretag btn btn-primary" href="'. get_permalink($post->ID) . '">Read More &raquo;</a></div>';
}
add_filter('excerpt_more', 'mh_read_more');

// LESS Compiler Control
    $compile = TRUE; // Change to FALSE to disable
	$theme_path = "/wp-content/themes/mh_express/";
	include "/usr/local/lib/smartpress-dev-lib/less-compiler.php";

// Enqueue styles and scripts on front-end
function add_mh_theme_scripts() {
	/* LOAD CSS STYLESHEETS */
		// Load Bootstrap CSS
		wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', array(), '', 'all');
		// Load Font Awesome CSS
		wp_enqueue_style( 'font-awesome', '//pro.fontawesome.com/releases/v5.12.0/css/all.css', array(), '', 'all');
		// Load Google Fonts CSS
		wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Jost:wght@300;400;700&display=swap', array(), null, 'all');
		// MH custom CSS -- See /common/head.php for less compiler config
		wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), rand() /*'1.0'*/, 'all');
		// Optional styles
		//wp_enqueue_style( 'blueimp-gallery', get_template_directory(). '/css/plugins/blueimp-gallery.min.css');
		//wp_enqueue_style( 'bootstrap-image-gallery', get_template_directory(). '/css/plugins/bootstrap-image-gallery.min.css');

	/* LOAD SCRIPTS */
		// De-register WP's onboard jQuery and load jQuery library from Google 
		wp_deregister_script( 'jquery' );
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js', array (), '', true);
		// Load Bootstrap JS
		wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array ( 'jquery' ), '', true);
		// Load MH Plugins JS
		wp_enqueue_script( 'plugins-js', get_template_directory_uri() . '/js/plugins.js', array (), '', true);
		// Load MH Functions JS
		wp_enqueue_script( 'functions-js', get_template_directory_uri() . '/js/functions.js', array (), '', true);
}
add_action( 'wp_enqueue_scripts', 'add_mh_theme_scripts' );

// Import Reusable Blocks
function importReusableBlocks() {
	//Get contents of Reusable Blocks master json file (order of blocks matters since some blocks reference others)
	$json = file_get_contents('reusable-blocks.json', FILE_USE_INCLUDE_PATH);
	
	$obj = json_decode($json, true);
	
	//Create variables for blocks referenced by other blocks
	$ref_id_breadcrumb = "";
	$ref_id_button_dark = "";
	
	//Post blocks
	foreach($obj as $key => $value) {
		$title = $value["title"];
		$content = $value["content"];

		//Check content of current block for reference to other blocks
		//Breadcrumb
		if(strpos($content, "ref_id_breadcrumb")) {
			$content = str_replace("ref_id_breadcrumb", $ref_id_breadcrumb, $content);
		}

		//Button Dark
		if(strpos($content, "ref_id_button_dark")) {
			$content = str_replace("ref_id_button_dark", $ref_id_button_dark, $content);
		}
		
		//Create array for post
		$reusable_block = array(
			'post_title'    => $title,
			'post_content'  => $content,
			'post_type' 	=> 'wp_block',
			'post_status'   => 'publish',
			'post_author'   => 1,
		);

		//If necessary, store ID of post with block that is referenced by other block(s)
		//Insert post into database
		if($title === "Breadcrumb") {
			$ref_id_breadcrumb = wp_insert_post( $reusable_block );
		} else if($title === "Button Dark") {
			$ref_id_button_dark = wp_insert_post( $reusable_block );
		} else {
			wp_insert_post( $reusable_block );
		}
	}
}
//add_action( 'admin_head', 'importReusableBlocks' );

// ACF PAGE OPTIONS

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Home Page',
        'menu_title'    => 'MH Home Layout',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    // acf_add_options_sub_page(array(
    //     'page_title'    => 'Theme Header Settings',
    //     'menu_title'    => 'Header',
    //     'parent_slug'   => 'theme-general-settings',
    // ));
    
    // acf_add_options_sub_page(array(
    //     'page_title'    => 'Theme Footer Settings',
    //     'menu_title'    => 'Footer',
    //     'parent_slug'   => 'theme-general-settings',
    // ));
    
}

/**Default Images for acf**/

 

add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field');
    function add_default_value_to_image_field($field) {
        acf_render_field_setting( $field, array(
            'label'         => 'Default Image',
            'instructions'      => 'Appears when creating a new post',
            'type'          => 'image',
            'name'          => 'default_value',
        ));
    }

     add_filter('acf/load_value/type=image', 'reset_default_image', 10, 3);
function reset_default_image($value, $post_id, $field) {
  if (!$value) {
    $value = $field['default_value'];
  }
  return $value;
}
