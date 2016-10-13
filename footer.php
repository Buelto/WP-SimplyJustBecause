</div><!--/container-->
   

   <footer class="site-footer text-center">
   <nav class="footer-nav">
  <?php
    
    $args = array(
    'theme_location' => 'footer' ) ;?>
<?php wp_nav_menu( $args ) ;?>
</nav>
    <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?> </p>
     <p class="portfolio">created by <a href="http://irvingbuelto.tech" target="_blank"> IrvingBuelto.tech</a></p>
</footer><!-- helps with pugins-->
<?php wp_footer(); ?>


</body>

</html>