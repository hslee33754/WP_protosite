
        </div> <!-- End Columns -->
    </div><!-- End Site Width -->   
</div>
<!-- End Contetns -->
    
    
<!-- Start Clear Float -->
<div class="clearfloat"></div>
<!-- End Clear Float-->
    
    
<!-- Start Footer -->
<footer>
        <div class="site-width">
                <div id="footer-text">
                    	<p><a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">Valid CSS</a> and <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML5</a> | Copyright &copy; 2015 Kate Lee. All rights reserved. <?php wp_loginout(); ?></p>
                </div>
        </div>
</footer>
<!-- End Footer -->
    
    
</div>
<!-- End Contatiner -->

    
<!-- Start Script for FlexSlider -->
<script type="text/javascript">
$(document).ready(function(){
  $('.flexslider').flexslider({
    animation: "slide",
    start: function(slider){
      $('body').removeClass('loading');
    }
  });
});
</script>
<!-- End Script for FlexSlider -->

    <!-- Start Script for navigation button -->
<script type="text/javascript">
$(document).ready(function(){ // Open and close responsive nav //
		$( "#nav-button" ).click(function(){
				$(".main-menu").slideToggle(600, "swing");
		});
	
		$( "#close" ).click(function(){
				$(".main-menu").slideUp(600, "swing");
		});	
});	
</script>
<!-- End Script for navigation button -->
    

    
<!-- Start WP_footer -->
<?php wp_footer();?>
<!-- End WP_footer-->
    
</body>
</html>
