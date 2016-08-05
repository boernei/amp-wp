<nav class="amp-wp-title-bar">
	<div class="container">
		<div class="brand">
			<a href="<?php echo esc_url( home_url( '/' ) ); // Link to the home page ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); // Title it with the blog name ?>" rel="home"><?php bloginfo( 'name' ); // Display the blog name ?></a>
		</div>
		<div class="main-navigation">
			<a on='tap:sidebar.toggle'><i class="fa fa-bars" aria-hidden="true"></i></a>

		</div>
	</div>
</nav>
 <amp-sidebar id='sidebar'
      layout="nodisplay"
      side="right">
         <amp-img class='amp-close-image'
        src="/img/ic_close_black_18dp_2x.png"
        width="20"
        height="20"
        alt="close sidebar"
        on="tap:sidebar.close"
        role="button"
        tabindex="0"></amp-img>
			<?php get_sidebar(); ?>
</amp-sidebar>
