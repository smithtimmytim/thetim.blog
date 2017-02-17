<?php get_header('single'); ?>

<main id="main" class="main" role="main">

  <?php
  // Start the loop.
  while ( have_posts() ) : the_post();

    /*
     * Include the post format-specific template for the content. If you want to
     * use this in a child theme, then include a file called called content-___.php
     * (where ___ is the post format) and that will be used instead.
     */
    get_template_part( 'content', get_post_format() );

  // End the loop.
  endwhile;
  ?>

</main>

<?php get_footer(); ?>
