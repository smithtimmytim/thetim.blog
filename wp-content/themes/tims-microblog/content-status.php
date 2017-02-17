<article class="<?php echo is_home() ? 'microblog-post' : 'microblog-post--single'; ?>">
  <?php the_content(); ?>

  <footer class="microblog-post__footer">
    <?php if ( is_home() ) : ?>
      <small><time datetime="<?php the_time('Y-m-d'); ?>"><a href="<?php the_permalink(); ?>" title="Permalink to microblog post"><?php the_time('D, M j, Y \a\t g:i a');?></a></time></small>
    <?php else : ?>
      <small><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('D, M j, Y \a\t g:i a');?></time></small>
    <?php endif; ?>
  </footer>
</article>
