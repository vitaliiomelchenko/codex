<?php get_header(); ?>

<section id="searchResults" class="section newsBlock blog">
            <div class="container">
				<p class="h2 searchResults__title">Search results for: <?php echo get_query_var('s');?> </p>
                <?php if( have_posts() ): ?>
                    <ul class="row newsBlock__list">

                            <?php while(have_posts() ) : the_post(); ?>
                                    <?php 
                                    if(get_field('hide_article')):
                                        continue;
                                    endif;
                                    $permalink = get_permalink( );
                                    if(get_field('open_on_external_link')){
                                        $permalink = get_field('external_link');
                                    }
                                    $title = get_the_title(  );
                                    $image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                    $date = get_the_date('d F Y',$item->ID);
                                    $categories = wp_get_post_categories( get_the_ID() , array('fields' => 'all') );
                                    $categoriesString = '';
                                    foreach( $categories as $cat ){
                                        $icon = get_field('icon',$cat);
                                        if($icon): 
                                            $categoriesString.= '<a href="'.get_term_link($cat->term_id, 'category').'"><span class="icon">'.file_get_contents(esc_url(wp_get_original_image_path($icon['id']))).'</span>'.$cat->name.'</a>';
                                        else:
                                            $categoriesString.= '<a href="'.get_term_link($cat->term_id, 'category').'">'.$cat->name.'</a>';
                                        endif;
                                        break;
                                    }
                                    if(!$image):
                                        $image = get_template_directory_uri().'/assets/images/cover-new-image.jpg';
                                    endif;
                                    ?>
                                    <li class="col-12 col-sm-6 col-lg-4 newsBlock__item appear fade-up">
                                        <div class="bg--lightBlue block--rounded newsBlock__item__inner">
                                            <a href="<?php echo $permalink; ?>" class="newsBlock__item__image" <?php echo get_field('open_on_external_link')?'target="_saasleads"':''; ?>>
                                                <?php if($image): ?>
                                                    <img class="newsBlock__item__bg" src="<?php echo $image; ?>" alt="<?php echo $title; ?>" />
                                                <?php else: ?>
                                                    <img class="newsBlock__item__bg" src="<?php echo get_template_directory_uri(); ?>/assets/images/cover-new-image.jpg" />
                                                <?php endif; ?>
                                                <div class="button">Read</div>
                                            </a>
                                            <div class="newsBlock__item__content">
                                                <a class="newsBlock__item__content__headingLink" href="<?php echo $permalink; ?>" <?php echo get_field('open_on_external_link')?'target="_saasleads"':''; ?>>
                                                    <h3 class="text--md text--color--purple newsBlock__item__content__heading"><?php echo $title; ?></h3>

                                                </a>
                                                
                                            </div>
                                            <div class="newsBlock__item__footer">
                                                    <?php
                                                        $posttags = get_the_tags();
                                                        if( $posttags ) : ?>
                                                            <div class="newsBlock__tags">
                                                            
                                                            <?php foreach( $posttags as $tag ): ?>
                                                                
                                                                <a class="newsBlock__tagLink" href="<?php echo get_tag_link($tag->term_id);?>"><?php echo $tag->name;?> </a>
                                                                <?php
                                                            endforeach; ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    <div class="newsBlock__date"><?php the_time('jS F');?></div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <div class="pagination" style="margin-top:100px">
                        <?php //kama_pagenavi($before = '', $after = '', $echo = true, $args = array(), $wp_query = $the_query); // пагинация, функция нах-ся в function.php ?>
                </div>
            </div>
        </section>
<?php get_footer(); ?>