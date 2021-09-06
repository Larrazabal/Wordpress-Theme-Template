<div class="comments-container">
	<h2 class="comments-headline">
		<?php
			if (! have_comments()) {
				echo 'Leave a Comment';
			} elseif (get_comments_number() == 1) {
				echo get_comments_number() . ' Comment';
			} else {
				echo get_comments_number() . ' Comments';
			}
		?>
	</h2>
	<div class="comments-form">
		<?php
			if (comments_open()) {
				comment_form(
					array(
						'class_form' => ''
					)
				);
			}
		?>
	</div>
	<div class="comments-written">
		<?php
			wp_list_comments(
				array(
					'avatar_size' => 120,
					'style' => 'div'
				)
			);
		?>
	</div>
</div>