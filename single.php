<?php
/**
 * The template for displaying any single post.
 *
 */

 if ( have_posts() ) :
 	while ( have_posts() ) : the_post(); 
		$template = new AMP_Post_Template( get_the_ID() );
		$template->load('single');

 endwhile;  
					
if ( comments_open() || '0' != get_comments_number() )
	comments_template( '', true );
?>


<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>

	<article class="post error">
		<h1 class="404">Nothing has been posted like that yet</h1>
	</article>

<?php endif; // OK, I think that takes care of both scenarios (having a post or not having a post to show) ?>
