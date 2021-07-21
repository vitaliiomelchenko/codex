<?php 

	
		add_action( 'wp_enqueue_scripts', 'playter_styles' );
		function playter_styles() {

			wp_enqueue_style( 'academy', get_template_directory_uri() . '/dist/main.min.css' );


			wp_enqueue_style( 'playter_normalize', get_template_directory_uri() . '/assets/css/normalize.min.css' );
			wp_enqueue_style( 'playter_bootstrap_grid', get_template_directory_uri() . '/assets/libs/bootstrap/bootstrap-grid.min.css' );
			wp_enqueue_style( 'playter_css', get_template_directory_uri() . '/assets/css/style.css' );
			wp_enqueue_style( 'playter_swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css' );

			
		}

		
		add_action( 'wp_enqueue_scripts', 'playter_scripts', 11 );
		function playter_scripts() {
			wp_deregister_script( 'jquery' );
			wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/assets/libs/jquery/jquery.min.js');
			wp_enqueue_script( 'jquery' );
			wp_enqueue_script( 'payter_swiper_script', 'https://unpkg.com/swiper/swiper-bundle.min.js', null, true );
			wp_enqueue_script( 'main_script', get_stylesheet_directory_uri() . '/assets/js/main.js', '', '5.0', true);
			
		}    


