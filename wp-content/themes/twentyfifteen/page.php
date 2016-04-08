<?php
get_header(); ?>
<div class="container">
<div class="row top-buffer bottom-pad">

	<div class="columns medium-3 no-pad-right">
	
	</div>

	<div class="columns medium-9 custom-pad basic-content">
		<h1><?php the_title(); ?></h1>
		<?php
		// Start the loop.
		
		while ( have_posts() ) : the_post();
		
			
			 the_content();
			
			// End the loop.
		endwhile;
		?>
	</div>

</div>
</div>
<?php get_footer(); ?>
