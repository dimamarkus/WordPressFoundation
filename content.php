<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php reverie_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_content(__('Continue reading...', 'reverie')); ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</article> -->



<div class="large-4 columns">
	<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<img src="http://placehold.it/400x300&text=[img]" />
    <h4><?php the_title(); ?></h4>
    <p><?php the_content(__('Continue reading...', 'reverie')); ?></p>
	</article>
</div>