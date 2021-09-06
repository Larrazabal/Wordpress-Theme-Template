<article class="art">
	<header class="art-header">
		<div class="art-md">
			<span class="art-md-date"><?php the_date(); ?></span>
			<?php
				the_tags('<span class="art-md-tags">Tags: <span>', '</span>, <span>', '</span></span>');
			?>
			<span class="art-md-comments"><?php comments_number(); ?></span>
		</div>
	</header>
	<?php
		the_content();
	?>
</article>

<?php
	comments_template();
?>