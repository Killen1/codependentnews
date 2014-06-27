	</div><!--container div in header-->
	<footer class="container margin-bottom-20">
		<div class="row">
			<div id="footer" class="col-xs-12">
				<?php
					wp_nav_menu( array( 
						'theme_location' => 'primary', 
						'menu_class'     => 'nav-menu', 
						'items_wrap'     => '<ul class="nav navbar-nav">%3$s</ul>', 
					)); 
				?>
				<div id="back-to-top" class="margin-top-5">
					<p class="text-right"><a href="#width-wrapper" title="Back to Top">Back to Top <i class="fa fa-arrow-circle-up fa-lg"></i></a></p>
				</div>
			</div>
			<div class="col-xs-12">
				<p class="copyright text-right">&copy;<?php echo date("Y") ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
			</div>
		</div>	
	</footer>
<!--[if lt IE 9]>
  <script src="<?php echo SITE_ROOT; ?>assets/js/respond.min.js"></script>
<![endif]-->
<script src="<?php echo SITE_ROOT ?>assets/js/jquery-1.11.min.js"></script> 
<script src="<?php echo SITE_ROOT ?>dist/js/codependent.min.js"></script>
<script src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5327e04d056e430b"></script>
<script>var addthis_config = {"data_track_addressbar":true};</script>
<script>
  	addthis.layers({
	    'theme' : 'transparent',
	    'share' : {
	      'position' : 'left',
	      'numPreferredServices' : 5
	    }   
  	});
	jQuery(document).ready(function($){
	  	$('#back-to-top a').on("click",function(){
			$('html,body').animate({ scrollTop: 0 }, 'slow', function () {
                      
            });
		}); 
	});
	//Google Analytics
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-49237997-1', 'codependentnews.com');
	ga('send', 'pageview');
</script>
</body>
</html>