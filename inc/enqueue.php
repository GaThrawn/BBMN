<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		

        //Lots of Greensock Stuff
        wp_enqueue_script( 'greensock', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js', array(), null, false );
        wp_enqueue_script( 'greensockcss', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/plugins/CSSPlugin.min.js', array(), null, true );
        wp_enqueue_script( 'greensockep', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/easing/EasePack.min.js', array(), null, true );
        wp_enqueue_script( 'greensocktl', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenLite.min.js', array(), null, true );
        
        //Scrollmagic Stuff
        wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js',array(), false, false );
        wp_enqueue_script( 'scrollmagic-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', array(), false, false );      
//         wp_enqueue_script( 'scrollmagic-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', array(), false, false );
        wp_enqueue_script( 'smmin', get_template_directory_uri() . '/js/ScrollMagic.min.js', array('jquery'), null, false);
        wp_enqueue_script( 'smanim', get_template_directory_uri() . '/js/animation.gsap.min.js', array('jquery'), null, false);
        wp_enqueue_script( 'smanimvel', get_template_directory_uri() . '/js/animation.velocity.min.js', array('jquery'), null, false);
        wp_enqueue_script( 'smaddind', get_template_directory_uri() . '/js/debug.addIndicators.min.js', array('jquery'), null, false);
        wp_enqueue_script( 'smjq', get_template_directory_uri() . '/js/jquery.ScrollMagic.min.js', array('jquery'), null, false);
        

        
        
        //My Custom js scripts
        wp_enqueue_script( 'frontgseffects', get_template_directory_uri() . '/js/frontsmgseffects.js', array('jquery'), null, true);
        
        wp_enqueue_script( 'gseffects', get_template_directory_uri() . '/js/staticgseffects.js', array('jquery'), false);
        
        wp_enqueue_script( 'pixels', get_template_directory_uri() . '/js/pixels.js', array('jquery'), false);
        
        wp_enqueue_script( 'stickscroll', get_template_directory_uri() . '/js/stickscroll.js', array('jquery'), false);
        //My Custom CSS scripts
        // wp_enqueue_script( 'fonts', 'https://fonts.googleapis.com/css?family=Anton|Francois+One|Work+Sans', array(), false, false );
       

        
        wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
        
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
