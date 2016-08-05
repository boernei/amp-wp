<?php 
/**
 * 	This is the sidebar!
 *
 *	This file will render the sidebar, as defined by the user in the admin area
 *
*/
?>
	<a on='tap:sidebar.toggle'><i class="fa fa-times" aria-hidden="true"></i></a>

			<?php dynamic_sidebar( 'sidebar-1' ) ;  ?>

