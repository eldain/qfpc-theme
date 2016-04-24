<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= bloginfo('title') ?> -- <?= bloginfo('description'); ?></title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/twbs/css/bootstrap.min.css" type="text/css" media="all" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/twbs/css/bootstrap-theme.css" type="text/css" media="all" />
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/twbs/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
  <?= wp_head(); ?>
</head>
<body>
<?= get_template_part('templates/home') ?>
<?= wp_footer(); ?>
</body>
</html>
