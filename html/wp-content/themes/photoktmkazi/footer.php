<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
	</footer><!-- .site-footer -->

</div><div style="background-color:#000; height:250px; padding-top:40px" align="center">
<a href="http://www.facebook.com/photoktm" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/facebook.png" width="12" height="26" alt="Facebook" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://www.twitter.com/photoktm" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/twitter.png" width="31" height="26" alt="Twitter" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://www.instagram.com/photoktm" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/instagram.png" width="26" height="26" alt="Instagram" /></a>
</div>

<!-- .site -->
 <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/wow.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/mousescroll.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/smoothscroll.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.countTo.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/lightbox.min.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/parallax.js"></script>
  <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50164659-2', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
