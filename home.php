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
      <a class="category-link" href="<?= get_category_link( $category->cat_ID ); ?> ">
        <img class="img-responsive" src="<?= z_taxonomy_image_url($category->term_id); ?>">
        <span class="category-name"><?= $category->name ?></span>
      </a>
    </div>

  <?php endforeach; endif; ?>

  </div>

  <div class="row footer-container">
      <img class="inchair img-responsive pull-left" src="<?php echo get_stylesheet_directory_uri(); ?>/images/kevork.jpg" alt="Kevork in Chair" />
      <p class="welcome-text">
        "Welcome to UC Irvine’s Questions about Fundamental Physics Page!
        <br><br>
        The questions posted here originate from questions on fundamental physics and cosmology that have arisen from high school instructors and undergraduate students that have not had advanced courses. The answers are meant to be sufficiently non-technical so that they should be comprehensible to a person with high-school level physics and math. This is an outreach website for the <a href="http://cosmology.uci.edu">Center for Cosmology</a> at UC Irvine.
        <br><br>
        There are questions in two broad and overlapping categories here: cosmology and particle physics. Click the icons above to see the question categories, search for questions on the search bar at the top, or submit a new if you can't find what you're looking for!"
        <br><br>
        -
        <a href="http://www.physics.uci.edu/~kevork/Home.html">Kevork Abazajian</a>
      </p>
  </div>
<?//= get_template_part('questionform') ?>
</div>

<?= wp_footer(); ?>
</body>

</html>
