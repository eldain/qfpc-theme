<!DOCTYPE HTML>
<html>

<head>
<?=  get_template_part('head'); ?>
</head>

<body>

<div class="home-layout container">
  <?= get_template_part('header') ?>
  <div class="row">
    <div class="description col-centered">
      <?= bloginfo('description'); ?>
    </div>
  </div>
  <?= get_template_part('searchform') ?>


  <div class="row">

  <?php if (function_exists('z_taxonomy_image_url')): $categories = get_categories();
  foreach ( $categories as $category ): ?>

    <div class="col-xs-5 col-sm-4 col-md-3 col-lg-3 category-icon">
      <a href="<?= get_category_link( $category->cat_ID ); ?> ">
        <img class="img-responsive" src="<?= z_taxonomy_image_url($category->term_id); ?>">
        <span class="category-name"><?= $category->name ?></span>
      </a>
    </div>

  <?php endforeach; endif; ?>

  </div>

<?//= get_template_part('questionform') ?>
</div>

<?= wp_footer(); ?>
</body>

</html>
