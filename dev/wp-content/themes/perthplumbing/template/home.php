<?php 

/* Template Name: home
*/ 
get_header();
?>
<section class="banner">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
			<?php
			 $banner=get_post_meta(5,"top_banner_image",true);
             $thumb = wp_get_attachment_image_src($banner, 'top_banner_img' );						
            ?>   
                <div class="item active"> <img src="<?php echo $thumb['0'];?>" alt="banner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="banner_caption">
                                    <h5><?php the_field("banner_title",5);?> :-</h5>
                                    <?php the_field("banner_content",5);?>
                                </div>
								
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end-->
   <section class="mob_bnr">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
         <?php the_field("banner_content",5);?>
       </div>
     </div>
    </div>
   </section>
    <section class="home_descp">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php the_field("home_descreption",5);?> <a href="tel:<?php the_field("home_descrp_phone",5);?>" title=""><i class="fa fa-phone" aria-hidden="true"></i><?php the_field("home_descrp_phone",5);?></a> </div>
            </div>
        </div>
    </section>
    <!--home_descp end-->
    <section class="about_sec">
        <div class="container">
            <div class="row">
			<?php 
             query_posts( array ( 'post_type' => 'post','showposts'=>'3','order'=>'ASC') );
             while ( have_posts() ) : the_post();?>
                <div class="col-md-4 col-sm-12">
                    <div class="abt_bx">
                        <div class="abt_bx_icn">
                            <figure> <?php the_post_thumbnail();?> </figure>
                        </div>
                        <!--abt_bx_icn end-->
                        <div class="abt_bx_descp">
                            <h4><?php the_title();?></h4>
                           <?php the_content();?>
                        </div>
                    </div>
                    <!--abt_bx end-->
                </div> 
				<?php
				endwhile;
				?>
            </div>
            <div class="about_us" id="about">
                <div class="row">
                    <div class="col-md-8 col-sm-12 about_us_lft">
                        <h2><?php the_field("about_us_title",5);?></h2>
                        <?php the_field("about_us_content",5);?>
                    </div>
                    <!--about_us_lft end-->
                    <div class="col-md-4 col-sm-12 about_form">
                       <?php echo do_shortcode( '[contact-form-7 id="13" title="Contact form 1"]');?>
                    </div>
                </div>
            </div>
            <!--about_us end-->
        </div>
    </section>
    <!--about_sec end-->
    <section class="service_sec" id="services">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="service_innr">
                        <h3><?php the_field("our_services",5);?></h3>
						<?php 
						$i=1;
                        query_posts( array ( 'post_type' => 'services','showposts'=>'-1','order'=>'ASC') );
                        while ( have_posts() ) : the_post();?>
                        <div class="service_list">
                            <figure> <?php the_post_thumbnail();?> </figure>
                            <div class="service_cntnt">
                                <h5><span class="bullet_list"><?php echo $i;?></span><span><?php the_title();?></span></h5>
                                <div class="service_cntnt_brief">
                                    <?php the_content();?>
                                </div>
                            </div>
                        </div>
                        <!--service_list end-->
						<?php
						$i++;
						endwhile;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--service_sec end-->
    <section class="gallery_sec" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2><?php the_field("our_gallery_title",5);?></h2>
                    <ul id="filters" class="clearfix">
<?php 
$args = array(
'type'                     => 'gallery',
'taxonomy'                 => 'gallery_category',

);
$i=1;
$categories = get_categories( $args );
foreach ( $categories as $category ) {
 $name = $category->name; 
 $slug = $category->slug;

 ?>
                        <li><span class="filter <?php if($i==1){ echo 'active';} ?>" data-filter=".<?php if($i==1){echo 'bathroom-renovation';}else { echo 'kitchen-renovation';}?>"><?php echo $name; ?></span></li>
                        <?php $i++;
			             }?>
                    </ul>
                    <div id="portfoliolist">
<?php
	$a=1;		
	$args = array (
		  'taxonomy' => 'gallery_category',
		);
		$categories = get_terms ( $args );
		foreach ( $categories as $category ) {
		  $args = array (
			'post_type' => 'gallery',
			'posts_per_page' => -1,
			'tax_query' => array(
			array(
				'taxonomy' => 'gallery_category',
				'field' => 'slug',
				'order' =>  'DESC',
				'terms' => $category->slug
			)
			)
		  );
		  $query = new WP_Query( $args );
		  if ( $query->have_posts() ) {
?>
<?php while($query->have_posts()) : $query->the_post();?>
                        <div class="portfolio <?php if($a==1){echo 'bathroom-renovation';} else {echo 'kitchen-renovation';} ?>" data-cat="<?php if($a==1){echo 'bathroom-renovation';} else {echo 'kitchen-renovation';} ?>">
                            <div class="portfolio-wrapper">
                                <figure><?php the_post_thumbnail();?></figure>
                                <div class="portfolio_ovrlay">
                                    <div class="display-table">
                                        <div class="display-table-cell">
										<?php
						                  $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');?>
                                            <figure> <a href="<?php echo $large_image_url[0];?>"  class="fancybox" rel="gallery1" title=""><i class="fa fa-search" aria-hidden="true"></i></a> </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
							endwhile;
							}
							$a++;
							}
						?>     			
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--gallery end-->
    <section id="testimonial" class="testimonial_sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="testimonial_innr">
                        <h2><?php the_field("testimonial_title",5);?></h2> </div>
                </div>
            </div>
            <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
				<?php 
				$i=1;
				query_posts( array ( 'post_type' => 'testimonials','showposts'=>'-1','order'=>'ASC') ); ?> 
				<?php while ( have_posts() ) : the_post();?>
                    <div class="item <?php if($i==1){ echo 'active';}?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="testimonial_cntnt">
                                        <?php the_content(); ?><span><?php the_title(); ?></span>
                                        <h6><?php the_field("testimonial_desgn",$post->ID); ?></h6> </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php
						$i++;
						endwhile;
					?>
                    <!--item end-->
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
            </div>
        </div>
    </section>

<?php
get_footer();?>