<?php 

/**
 * Template name: Страница с проверкой на пароль
 */

get_header(); ?>
<div id="app-wrapper" role="main">
    
    <?php 
    /*==============================================*/ 
    /*===============CHANGABLE PART=================*/ 
    /* Dont forget to change dta-namespace */ 
    ?>   

    <div id="app" class="app-container" data-namespace="blog-article">
        <?php /*=====WRITE YOUR CODE HERE=====*/ ?>
            
			<div id="post-<?php the_ID('default-page'); ?>" <?php post_class(); ?>>
				
                <?php 
                if ( ! post_password_required() ) :
                    // Your custom code should here
                    the_content();
                    echo '</br>';
                    echo '</br>';
                    echo '</br>';
                    echo '</br>';
                    echo '</br>';
                    echo '</br>';
                    the_field('textfield');
                else :
                  // we will show password form here
                  echo get_the_password_form();
                endif;
              ?>
			</div>
            
        <?php /*=====END OF YOUR CODE=====*/ ?>
    </div>
    <?php /*==============================================*/ ?>

</div>
<?php get_footer(); ?>