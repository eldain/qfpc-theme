<!DOCTYPE HTML>
<html>
<head><?=  get_template_part('head'); ?></head>
<body>

<div class="home-layout container">
  <div id="title"><?= bloginfo('title'); ?></div>
  <div id="description"><?= bloginfo('description'); ?></div>
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 ">
      <?= get_template_part('searchform') ?>
    </div>
  </div>
<?php if (function_exists('z_taxonomy_image_url')):
  $categories = get_categories();
  foreach ( $categories as $category ): ?>
    <a href="<?= get_category_link( $category->cat_ID ); ?> ">
      <img src="<?= z_taxonomy_image_url($category->term_id); ?>">
      <span><?= $category->name ?></span>
      </a><?php
    endforeach;
  endif;
?>

<?= get_template_part('questionform') ?>
</div>

<?= wp_footer(); ?>
</body>
</html>
