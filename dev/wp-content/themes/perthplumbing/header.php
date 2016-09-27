<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
   <?php wp_head(); ?>
    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,600i" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet"> 
     <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() );?>/css/jquery.fancybox.css">
    </head>

<body>
     <!--preloader-->
    <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i>
    </div>
    <!--preloader-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="logo">
                        <a href="<?php echo site_url(); ?>" title=""><img src="<?php echo get_option_tree('logo');?>" alt="logo"></a>
                    </div>
                    <div class="header_middle_cntnt">
                        <h5><?php the_field("header_text",5);?></h5>
                        <p> <span><?php the_field("header_subtext",5);?></span></p>
                    </div>
                    <div class="contact_top">
                        <figure> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/circular_phone.png" alt="circuar_phone"> </figure>
                        <h3><span>Call Us Anytime!</span><a href="tel:<?php the_field("header_phone",5);?>" title=""><?php the_field("header_phone",5);?></a></h3> </div>
                </div>
            </div>
        </div>
        <div class="header_btm">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <nav>
                            <ul>
                                <?php 
										$defaults = array(
										'theme_location'  => '',
										'menu'            => 'header_menu',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '%3$s',
										'depth'           => 0,
										'walker'          => ''
										);
										
										wp_nav_menu( $defaults ); 
										
					?>
                            </ul>
                        </nav>
                        <!--nav section end-->
                        <div class="top_social_link">
                            <ul>
                                <li><a href="<?php echo get_option_tree('facebook');?>" title="" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo get_option_tree('googleplus');?>" title="" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <!--<li><a href="<?php echo get_option_tree('twitter');?>" title="" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo get_option_tree('linkedin');?>" title="" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
                            </ul>
                        </div>
                        <!--top_social_link end-->
                    </div>
                </div>
            </div>
        </div>
        <!--nav end-->
    </header>
    <!--header end-->