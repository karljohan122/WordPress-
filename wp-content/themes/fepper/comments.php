<section class="comments section">
	<?php if ( have_comments() ) : ?>
		<h2 class="section-title"><?php
			$comments_number = get_comments_number();
			printf(
				_nx(
					'%1$s comment',
					'%1$s comments',
					$comments_number,
					'comments title',
					'fepper'
				),
				number_format_i18n( $comments_number )
			);
		?></h2>
		<?php the_comments_pagination(); ?>
		<ul class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ul',
					'short_ping'  => true,
					'avatar_size' => 102,
				) );
			?>
		</ul>
		<?php the_comments_pagination(); ?>
	<?php endif; ?>
	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'fepper' ); ?></p>
	<?php else: ?>
		<?php comment_form(); ?>
	<?php endif; ?>
</section>

