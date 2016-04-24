<div class="home-layout container-fluid">
  <div id="title"><?= bloginfo('title'); ?></div>
  <div id="description"><?= bloginfo('description'); ?></div>
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3 ">
      <?= get_template_part('templates/searchform') ?>
    </div>
  </div>
</div>
