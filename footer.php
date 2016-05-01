<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
<!-- dropdown mobile menu -->
<!--<script src="<?php // echo get_template_directory_uri(); ?>/js/mobile-menu.js"></script>-->
<!-- push from right mobile menu -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jPushMenu.js"></script>
<script>
  jQuery(document).ready(function($) {
    $('.toggle-menu').jPushMenu();
  });
</script>

<?php wp_footer(); ?>

</body></html>
