<article class="art">

	<div class="post">
		<img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="" class="post-img">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php
			the_tags('<span class="art-md-tags">Tags: <span>', '</span>, <span>', '</span></span>');
		?>
		<span class="art-md-comments"><?php comments_number(); ?></span>
		<p class="post-intro">
			<?php the_excerpt(); ?>
		</p>
	</div>

</article>