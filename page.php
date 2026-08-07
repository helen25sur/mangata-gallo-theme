<?php

  get_header();

  while(have_posts()) {
    the_post(); ?>
    <h3>This is a page</h3>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
<?php } 

  get_footer(); 

?>