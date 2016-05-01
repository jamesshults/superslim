<?php get_header() ?>

  <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        if ( has_post_thumbnail() ) {
	         the_post_thumbnail();
        }
        the_content();
        the_post();
        the_title();
        the_content();
      } // end while
    } // end if
  ?>

<?php get_footer() ?>
