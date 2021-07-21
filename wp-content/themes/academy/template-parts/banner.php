<?php
$width = get_field('banner_width');
$heading = get_field('banner_heading');
$headingColor = get_field('banner_title_color');
$text = get_field('banner_text');
$button = get_field('banner_button');
$buttonSecondary = get_field('banner_button_secondary');
$buttonStyle = get_field('header_banner_button_style');
$buttonSecondaryStyle = get_field('header_banner_button_secondary');
$contentType = get_field('banner_content_type');
$image = get_field('banner_img');
$video = get_field('banner_image');
$bgImage = get_field('banner_background_image');
$bgColour = get_field('banner_background_color');

?>

<?php if ($width == 'Full width') : ?>
    <section class="banner banner__fullWidth" <?php echo 'style="background-color:' . $bgColour . '"';?>>
        <?php if($bgImage):?>
            <div class="banner__backgroundImage">
                <img src="<?php echo esc_url($bgImage['url']); ?>" />
            </div>
        <?php endif; ?>
        <div class="container banner__container">
            <div class="row row--y--middle">
                <div class="col-12 col-lg-6 col-md-6 banner__col--content appear fade-up">
                    <div class="banner__col--contentWrapper">
                        <?php if($heading): ?>
                            <h2 class="font--weight--medium text--size--44 banner__heading" <?php if ($headingColor) : echo 'style="color:' . $headingColor . ';"'; endif;?>><?php echo $heading; ?></h2>
                        <?php endif; ?>
                        <?php if($text): ?>
                            <div class="content-block banner__text">
                                <?php echo $text; ?>
                                <div class="banner__buttonsWrapper">
                                    <?php if($button): ?>
                                        <?php
                                        $link_url = $button['url'];
                                        $link_title = $button['title'];
                                        $link_target = $button['target'] ? $button['target'] : '_self';
                                        ?>
                                        <a class="button banner__button <?php if($buttonStyle == 'Dark') : echo 'button--dark';endif?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                                    <?php if($buttonSecondary): ?>
                                        <?php
                                        $link_url = $buttonSecondary['url'];
                                        $link_title = $buttonSecondary['title'];
                                        $link_target = $buttonSecondary['target'] ? $button['target'] : '_self';
                                        ?>
                                        <a class="button banner__button <?php if($buttonSecondaryStyle == 'Outline') : echo 'button--dark button--outline'; elseif($buttonSecondaryStyle == 'Line') : echo 'button--line white'; endif?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="col-12 col-lg-6 col-md-6 banner__col--image">
                    <?php if( !empty( $video  ) && $contentType == 'Video' ): ?>
                        <div class="banner__image appear fade-up">
                        
                            <!-- <video  muted autoplay loop poster="<?php echo esc_url($image); ?>">
                                <source src="<?php echo esc_url($video); ?>" type="video/webm">
                                <?php if(!empty( $image )) : ?>
                                    <img src="<?php echo esc_url($image); ?>" title="Your browser does not support the <video> tag"/>
                                    
                                <?php endif; ?>
                            </video> -->
                            <div id="lottie"></div>
                            
                        </div>
                    <?php elseif(!empty( $image ) && $contentType == 'Image') : ?>
                        <img src="<?php echo esc_url($image); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php else : ?>
    <section class="banner smallBanner">
        <?php if($bgImage):?>
            <div class="banner__backgroundImage">
                <img src="<?php echo esc_url($bgImage['url']); ?>" />
            </div>
        <?php endif; ?>
        <div class="container banner__container banner__container-sm" <?php echo 'style="background-color:' . $bgColour . '"';?>>
            <div class="row row--y--middle">
                <div class="col-12 col-md-6 banner__col--content appear fade-up">
                    <?php if($heading): ?>
                        <h2 class="font--weight--medium text--size--44 banner__heading" <?php if ($headingColor) : echo 'style="color:' . $headingColor . ';"'; endif;?>><?php echo $heading; ?></h2>
                    <?php endif; ?>
                    <?php if($text): ?>
                        <div class="content-block banner__text"><?php echo $text; ?></div>
                    <?php endif; ?>
                    <?php if($button): ?>
                        <?php
                        $link_url = $button['url'];
                        $link_title = $button['title'];
                        $link_target = $button['target'] ? $button['target'] : '_self';
                        ?>
                        <a class="button banner__button <?php if($buttonStyle == 'Dark') : echo 'button--dark';endif?>" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-md-6 col-lg-5 banner__col--image">
                    <?php if( !empty( $video  ) && $contentType == 'Video' ): ?>
                        <div class="banner__image appear fade-up">
                            <video muted autoplay loop poster="<?php echo esc_url($image); ?>">
                                <source src="<?php echo esc_url($video); ?>" type="video/webm">
                                <?php if(!empty( $image )) : ?>
                                    <img src="<?php echo esc_url($image); ?>" title="Your browser does not support the <video> tag"/>
                                    
                                <?php endif; ?>
                            </video>
                        </div>
                    <?php elseif(!empty( $image ) && $contentType == 'Image') : ?>
                        <img src="<?php echo esc_url($image); ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>

