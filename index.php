<!DOCTYPE HTML>
<html>
<head><?= get_template_part('head'); ?></head>
<body>
<?php
if (have_posts()) {
  echo get_template_part('search-results');
} else {
  echo get_template_part('home');
}
?>
<?= wp_footer(); ?>
</body>
</html>
