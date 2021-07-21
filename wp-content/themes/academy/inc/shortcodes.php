<?php

/**
 * Shortcodes
 * 
 * 
 * 
 */


add_shortcode( 'extendedQuote', 'saasleads_shortcode_callback' );

function saasleads_shortcode_callback($atts) {
    $atts = shortcode_atts( [
        'name' => 'Noname',
        'meta'  => 18,
        'content' => 'content',
    ], $atts );
    
    ob_start(); 
    
    $name = $atts['name'];
    $meta = $atts['meta'];
    $content = $atts['content'];
    ?> 

    <blockquote class="extendedQuote">
        <div class="extendedQuote__header">
            
            <?php if ($name) : ?>
                <strong class="extendedQuote__name"><?php echo $name;?></strong>
            <?php endif; ?>
            <?php if ($meta) : ?>
                <p class="extendedQuote__meta"><?php echo $meta;?></p>
            <?php endif; ?>
        </div>
        <?php if ($content) : ?>
                <div class="extendedQuote__content"><?php echo $content;?></div>
        <?php endif; ?>
    </blockquote>

    <?php
 
	$output = ob_get_contents(); // всё, что вывели, окажется внутри $output
	ob_end_clean();
 
	return $output;
}

add_shortcode( 'kpi_list', 'saasleads_kpi_shortcode_callback' );

function saasleads_kpi_shortcode_callback() {
    
    ob_start(); ?> 

    <?php if( have_rows('kpi_list') ): ?>
        <ul class="kpi__list row">
            <?php while( have_rows('kpi_list') ): the_row(); 
                $icon = get_sub_field('kpi_icon');
                $label = get_sub_field('kpi_label');
                $value = get_sub_field('kpi_value');
                $valueAfter = get_sub_field('kpi_value_after');
                $valueBefore = get_sub_field('kpi_value_before');
                ?>
                <li class="kpi__item col-lg-6">
                    <div class="kpi__itemWrapper">
                        <?php
                        if( !empty( $icon ) ): ?>
                            <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" class="kpi__icon" />
                        <?php endif; ?>
                    
                        <div class="kpi__info">
                            <strong><?php echo $label;?></strong>
                            <span><?php echo $valueBefore;?></span><span><?php echo $value . $valueAfter ;?></span>
                        </div>

                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>

    <?php
 
	$output = ob_get_contents(); // всё, что вывели, окажется внутри $output
	ob_end_clean();
 
	return $output;
}

