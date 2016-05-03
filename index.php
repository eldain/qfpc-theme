<!DOCTYPE HTML>
<html>
<head><?= get_template_part('head'); ?></head>
<body>
<div class="container">

  <?= get_template_part('header') ?>

  <?php if ( have_posts() ) : ?>

  <?= get_template_part('searchform') ?>

  <?php if ( is_category() ) : ?>
    <div class="row category-header">

      <?php if (function_exists('z_taxonomy_image_url')):
        $category = get_queried_object();?>

        <div class="col-xs-5 col-sm-4 col-md-3 col-lg-3 category-icon" style="margin-bottom: 2em;">
            <img class="img-responsive" src="<?= z_taxonomy_image_url($category->term_id); ?>">
            <span class="category-name"><?= $category->name ?></span>
        </div>

      <?php endif; ?>

      <div class="category-description col-xs-8 col-sm-6 col-md-5 col-lg-5"><?= $category->description ?></div>

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
  endif; ?>


</div>
<?= wp_footer(); ?>
</body>
</html>
