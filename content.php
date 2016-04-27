<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
		<?php endif; ?>

    <?php if (is_search() || is_category()):  ?>
      <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    <?php else: ?>
        <h2 class="entry-title"><?= the_title(); ?></h2>
    <?php endif; ?>
	</header><!-- .entry-header -->

  <div class="entry-content">
    <?php if (is_search() || is_category()):  ?>
        <?= the_excerpt(); ?>
        <a class="view-more" href="<?= esc_url(get_permalink()) ?>" rel="bookmark">View more &gt; &gt;</a>
    <?php else: ?>
        <?= the_content(); ?>
    <?php endif; ?>

    <?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">Pages:</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">Page</span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					'Edit<span class="screen-reader-text"> "%s"</span>',
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
