<footer>
    <div class="ftr_map_sec"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3719537.385016398!2d120.961998!3d-24.438267!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a392a2e89f384d1%3A0x6e0e4adf3200a399!2sWestern+Australia%2C+Australia!5e0!3m2!1sen!2sin!4v1474008939540" width="1920" height="632" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="ftr_tp" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ftr_contact">
                            <ul>
                                <li>
                                    <div class="contact_descp">
                                        <figure><i class="fa fa-map-marker" aria-hidden="true"></i></figure>
                                        <p><?php the_field("footer_location_text",5);?> </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact_descp">
                                        <figure><i class="fa fa-phone" aria-hidden="true"></i></figure>
                                        <p><a href="tel:<?php the_field("footer_phone",5);?>" title=""><?php the_field("footer_phone",5);?></a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact_descp">
                                        <figure><i class="fa fa-envelope-o" aria-hidden="true"></i></figure>
                                        <p><a href="mailto:<?php the_field("footer_email",5);?>"><?php the_field("footer_email",5);?></a></p>
                                    </div>
                                </li>
                            </ul>
                             <?php echo do_shortcode( '[contact-form-7 id="64" title="Contact form 2"]');?>
                        </div>
                        <!--ftr_contact end-->
                    </div>
                </div>
            </div>
        </div>
        <!--ftr_tp end-->
    </div>
        
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p>Copyright <?php echo date('Y');?> Perth Plumbing Specialist, Website by <a href="http://tradesignaus.com.au/tradies" target="_blank">Tradesign.</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--copyright end-->
    </footer>
    <!--footer end-->
    <!-- Jquery Files Link -->
	<?php wp_footer();?>
    <!--<script type="text/javascript" src="<?php //echo esc_url( get_template_directory_uri() ); ?>/js/jquery-2.1.4.min.js"></script>-->
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        jQuery('nav>ul>li>a').each(function(){
			jQuery(this).click(function () {
            jQuery('nav ul li').removeClass('current-menu');
            var target = jQuery(this).attr('href');
            jQuery(this).parent('li').addClass('current-menu');
            jQuery('html,body').animate({
                scrollTop: jQuery(target).offset().top
            }, 3000);
            return false;
        });
		});
        jQuery('.linkk').click(function () {
            jQuery('html,body').animate({
                scrollTop: jQuery('#contact1').offset().top 
            }, 3000);
        });
    </script>
<script type="text/javascript">
        jQuery('#responsive-menu-wrapper>ul>li>a').each(function(){
			jQuery(this).click(function () {
            jQuery('#responsive-menu-wrapper ul li').removeClass('current-menu');
            var target = jQuery(this).attr('href');
            jQuery(this).parent('li').addClass('current-menu');
            jQuery('html,body').animate({
                scrollTop: jQuery(target).offset().top
            }, 3000);
            return false;
        });
		});
        jQuery('.linkk').click(function () {
            jQuery('html,body').animate({
                scrollTop: jQuery('#contact1').offset().top 
            }, 3000);
        });
    </script>
    <script type="text/javascript">
        jQuery(function () {
            var filterList = {
                init: function () {
                    // MixItUp plugin
                    // http://mixitup.io
                    jQuery('#portfoliolist').mixItUp({
                        selectors: {
                            target: '.portfolio'
                            , filter: '.filter'
                        }
                        , load: {
                            filter: '.bathroom-renovation'
                        }
                    });
                }
            };
            // Run the show!
            filterList.init();
            
            jQuery(document).ready(function() {
	jQuery(".fancybox").fancybox({
		openEffect	: 'none',
          scrolling   : 'no',
		closeEffect	: 'none'
	});
});
        });
    </script>
	<script>
		jQuery(document).ready(function()
		{
			jQuery('#menu-item-7').addClass('current-menu');
		});
	</script>
<script>
		jQuery(document).ready(function()
		{
			jQuery('#responsive-menu-item-7').addClass('current-menu');
		});
	</script>


 <script>
        jQuery(function ($) {

            //Preloader
            var preloader = $('.preloader');
            $(window).load(function () {
                preloader.remove();
            });
        });
    </script>
	<script type="text/javascript">
jQuery(document).ready(function(){
jQuery.noConflict();
   jQuery("input[name='name']").keypress(function(event){
       var inputValue = event.which;
       // allow letters and whitespaces only.
       if((inputValue > 33 && inputValue < 64) || (inputValue > 90 && inputValue < 97 ) || (inputValue > 123 && inputValue < 126)
&& (inputValue != 32)){
           event.preventDefault();
       }
   });
});
</script>
<script type="text/javascript">
jQuery(document).ready(function(){
jQuery.noConflict();
   jQuery("input[name='name-2']").keypress(function(event){
       var inputValue = event.which;
       // allow letters and whitespaces only.
       if((inputValue > 33 && inputValue < 64) || (inputValue > 90 && inputValue < 97 ) || (inputValue > 123 && inputValue < 126)
&& (inputValue != 32)){
           event.preventDefault();
       }
   });
});
</script>
       <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/isotope.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.fancybox.pack.js"></script>
<script>
document.documentElement.addEventListener('touchstart', function (event) {
 if (event.touches.length > 1) {
   event.preventDefault();
 }
}, false);

</script>
</body>

</html>