<?php
/*
*
* Template Name: Full-Width
*/
?>

<?php get_header(); ?>

    <div class="content" id="site-content">
		<?php
		    // Start the loop.
		    while ( have_posts() ) : the_post();

		        // Include the page content.
		       the_content();

		    // End the loop.
		    endwhile;
		?>
		
	</div>

<?php get_footer(); ?>
