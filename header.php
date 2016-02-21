<!DOCTYPE html>
<!--[if lte IE 8]>     <html <?php language_attributes(); ?> class="no-js lte-ie9 lte-ie8"> <![endif]-->
<!--[if lte IE 9]>     <html <?php language_attributes(); ?> class="no-js lte-ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />

    <title><?php wp_title('|', true, 'right'); ?></title>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1" />

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500italic,500,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>

    <style>
        /* code for animated blinking cursor */
        .typed-cursor{
            opacity: 1;
            font-weight: 100;
            -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            -ms-animation: blink 0.7s infinite;
            -o-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
        }
        @-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-webkit-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-moz-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-ms-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-o-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
    </style>

<!-- Start of Google Analytics Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58517220-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- End of Google Analytics Code -->

</head>

<body <?php body_class(); ?>>

    <div class="page-wrapper">

        <?php if(is_front_page() ) { ?>
            <?php if(get_field('header_parallax_image')) { ?>
                <div class="parallax-window" data-parallax="scroll" data-image-src="<?php the_field('header_parallax_image'); ?>">
            <?php } else { ?>
                <div class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/images/headerparallax.jpg">
            <?php } ?>
        <?php } else { ?>
            <?php if(get_field('header_banner')) { ?>
                <div class="parallax-window" data-parallax="scroll" data-image-src="<?php the_field('header_banner'); ?>">
            <?php } else { ?>
                <div class="parallax-window" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/images/headerparallax.jpg">
            <?php } ?>
        <?php } ?>

            <nav class="main-nav" role="navigation">
                <div class="content-wrapper">
                    <div class="button-wrap">
                        <a href="#" id="menu-toggle" class="mobile-menu-button"><div class="content"><p>Menu</p></div></a>
                    </div><!--/button-wrap-->

                    <?php wp_nav_menu('theme_location='); ?>
                </div><!--/content-wrapper-->
            </nav><!--/main-nav-->

            <header class="header" role="header">
                <div class="content-wrapper">
                    <?php if(get_field('logo')) { ?>
                        <?php $logo_tag = (is_front_page()) ? 'h1' : 'span'; ?>
                            <<?php echo $logo_tag; ?> class="logo">
                            <a href="<?php bloginfo('url'); ?>/"><img src="<?php the_field('logo'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
                        </<?php echo $logo_tag; ?>>
                    <?php } ?>
                    <?php if(get_field('description')) { ?>
                        <div class="line-break"></div>
                        <div class="wrap">
                            <div class="type-wrap">
                                <div id="typed-strings">
                                    <?php if( have_rows('description') ): ?>
                                        <?php while( have_rows('description') ): the_row(); ?>
                                            <p><?php the_sub_field('titles'); ?></p>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                                <span id="typed" style="white-space:pre;"></span>
                            </div>
                        </div>
                    <?php } ?>
                </div><!--/content-wrapper-->
            </header><!--/header-->
        </div>