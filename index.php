<!DOCTYPE HTML>
<html>
<head><?= get_template_part('head'); ?></head>
<body>
<div class="container">
<?#are you looking for home.php?>
<?php if ( have_posts() ) : ?>
  <div id="title"><a href="/"><?= bloginfo('title'); ?></a></div>

  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 ">
      <?= get_template_part('searchform') ?>
    </div>
  </div>

  <?php if ( is_category() ) : ?>
  <div class="category-header row">
    <?php if (function_exists('z_taxonomy_image_url')):
      $category = get_the_category()[0]; ?>
      <div class="category-image col-xs-4">
        <img src="<?= z_taxonomy_image_url($category->term_id); ?>">
        <div class="category-name"><?= $category->name ?></div>
      </div>
    <?php endif; ?>
    <div class="category-description col-xs-8"><?= $category->description ?></div>
  </div>
  <?php endif; ?>

  <?php if ( is_home() && ! is_front_page() ) : ?>
    <header>
      <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
    </header>
  <?php endif; ?>



  <?php
  // Start the loop.
  while ( have_posts() ) : the_post();

    /*
     * Include the Post-Format-specific template for the content.
     * If you want to override this in a child theme, then include a file
     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
     */
    get_template_part( 'content', get_post_format() );

  // End the loop.
  endwhile;

  // Previous/next page navigation.
  the_posts_pagination( array(
    'prev_text'          => 'Previous page',
    'next_text'          => 'Next page',
    'before_page_number' => '<span class="meta-nav screen-reader-text">' . 'Page' . ' </span>',
  ) );

// If no content, include the "No posts found" template.
else :
  get_template_part( 'content', 'none' );

endif;

get_template_part('questionform');
?>
</div>
<?= wp_footer(); ?>
</body>
</html>
