<?php 
                
$itemsShow = get_sub_field('total_items_to_show');
$itemsPerRow = get_sub_field('items_per_row');

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args  = array(
    'post_type'			=> 'cases',
    'posts_per_page'	=> $itemsShow,
    'paged'          => $paged,
);
            
    $the_query = new WP_Query( $args );
            
        if( $the_query->have_posts() ): ?>
            
            <section class="caseStudies__wrapper">
                <div class="container appear fade-up">
                <?php if (get_sub_field('section_title')) : ?>
                    <div class="h2 text--center content-block caseStudies__sectionTitle"><?php the_sub_field('section_title');?></div>
                <?php endif;?>
                    <ul class="row caseStudies">
                        <?php while( $the_query->have_posts() ) : $the_query->the_post();
                                
                        $caseStudyImgUrl = get_the_post_thumbnail_url();
                        $caseStudyName = get_the_title();
                        $authorPosition = get_field('author_job_position');

                        
                        //echo get_the_ID();;


                        $testimonialExcerpt = get_sub_field('content');


                        $testimonialLink = get_the_permalink();
                        ?>

                        <li class="col-sm-6 <?php if ($itemsPerRow == '3') : echo 'col-lg-4'; endif; ?> caseStudies__itemWrapper">
                            <div class="caseStudies__item">
                                <div class="caseStudies__header">
                                    <?php if ($caseStudyImgUrl) : ?>
                                        <img src="<?php echo $caseStudyImgUrl;?>" alt="<?php echo $caseStudyName . ' photo';?>" class="caseStudies__img">
                                    <?php endif; ?>

                                    <?php if ($testimonialExcerpt) : ?>
                                    <?php echo $testimonialExcerpt;?>
                                    <?php endif;?>
                                </div>
            
                                <?php if( have_rows('kpi_list') ): ?>
                                    <ul class="caseStudies__info">
                                        <?php while( have_rows('kpi_list') ): the_row(); 
                                            $icon = get_sub_field('kpi_icon');
                                            $label = get_sub_field('kpi_label');
                                            $value = get_sub_field('kpi_value');
                                            $valueAfter = get_sub_field('kpi_value_after');
                                            $valueBefore = get_sub_field('kpi_value_before');
                                            ?>
                                            <li class="caseStudies__infoItem">
                                                <?php
                                                if( !empty( $icon ) ): ?>
                                                    <div class="caseStudies__iconWrapper">
                                                        <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" class="caseStudies__infoIcon" />
                                                    </div>
                                                <?php endif; ?>
                                                <div class="caseStudies__infoData">
                                                    <strong><?php echo $label;?></strong>
                                                    <span><?php echo $valueBefore . $value . $valueAfter;?></span>
                                                </div>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                            
                                <a href="<?php echo $testimonialLink;?>" class="button"><?php _e( 'Read' ); ?></a>
                            </div>
                        </li>
                                    
                        <?php endwhile; ?>
                    </ul>
            
                    <!-- <div class="pagination">
                        <?php kama_pagenavi($before = '', $after = '', $echo = true, $args = array(), $wp_query = $the_query); // пагинация, функция нах-ся в function.php ?>
                    </div> -->
            
                            
            
                </div>
            </section>
                    
        <?php endif; ?>

    <?php wp_reset_query();?>