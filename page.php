<?php
/**
 * The template for displaying any single page.
 *
 */
 if ( have_posts() ) :
 	while ( have_posts() ) : the_post(); 
		$template = new AMP_Post_Template( get_the_ID() );
		$template->load('page');
 	endwhile;  
else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>

	<article class="post error">
		<h1 class="404">Nothing posted yet</h1>
	</article>

<?php endif; // OK, I think that takes care of both scenarios (having a page or not having a page to show) ?>
