<?php
	if ( post_password_required() ) {
		return;
	}
?>

<?php
	$comment_args = array(
		'author_email' => '',
		'author__in' => '',
		'author__not_in' => '',
		'include_unapproved' => '',
		'fields' => '',
		'ID' => '',
		'comment__in' => '',
		'comment__not_in' => '',
		'karma' => '',
		'number' => '',
		'offset' => '',
		'orderby' => '',
		'order' => 'DESC',
		'parent' => '',
		'post_author__in' => '',
		'post_author__not_in' => '',
		'post_ID' => '', // ignored (use post_id instead)
		'post_id' => $post->ID,
		'post__in' => '',
		'post__not_in' => '',
		'post_author' => '',
		'post_name' => '',
		'post_parent' => '',
		'post_status' => '',
		'post_type' => '',
		'status' => 'all',
		'type' => '',
	    'type__in' => '',
	    'type__not_in' => '',
		'user_id' => '',
		'search' => '',
		'count' => false,
		'meta_key' => '',
		'meta_value' => '',
		'meta_query' => '',
		'date_query' => null, // See WP_Date_Query
	);
	$comments = get_comments($comment_args); 
?>
<div class="margin-top-30 comments col-xs-12 margin-bottom-30">
	<?php 
		 $args = array(
			'walker'            => null,
			'max_depth'         => '',
			'style'             => 'ul',
			'callback'          => null,
			'end-callback'      => null,
			'type'              => 'all',
			'reply_text'        => 'Reply',
			'page'              => '',
			'per_page'          => '',
			'avatar_size'       => 32,
			'reverse_top_level' => null,
			'reverse_children'  => '',
			'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
			'short_ping'        => false,   // @since 3.6
		        'echo'              => true     // boolean, default is true
		);

		wp_list_comments( $args, $comments );
	?>
	<div class="commentform col-xs-12 margin-top-30">
		<?php comment_form(); ?>
	</div>
</div>
