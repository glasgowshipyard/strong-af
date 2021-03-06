<?php
/**
 * The template for the Strong AF front page.
 *
 *
 * @package Strong_AF
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="nln">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'headless' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			</div>
			<a href=/legion/><button class="legion">Join the Legion</button></a>
			<h1 class="front">Articles</h1>
			<section id="grimoire-entries">
					<?php 
					$args = array(
						'posts_per_page' => 3
					);
					$query = new WP_Query( $args );
					// The Loop
					if ( $query->have_posts() ) {
						echo '<section class="grimoire">';
						while ( $query->have_posts() ) {
							$query->the_post();
							if (has_post_thumbnail()) {
							echo '<div class="grimoire-post">';
							echo '<a href="' . get_permalink() . '">';
							echo '<h1 class="grimoire-title">' . get_the_title() . '</h1>';
							the_post_thumbnail('grimoire-thumb', array('class' => 'alignleft'));
							echo '<div class="grimoire-excerpt">';
							the_excerpt();
							echo '</a></div></div>';
							}
							else {
								echo '<a href="' . get_permalink() . '">';
								echo '<h1 class="grimoire-title">' . get_the_title() . '</h1>';
								echo '<div class="grimoire-excerpt">';
								the_excerpt();
								echo '</div>';
								echo '</a>';
								}
						}
						echo '</section>';
					}
					/* Restore original Post Data */
					wp_reset_postdata();
					?>
					<a href=/articles/><button class="more-articles">More Articles</button></a>
			</section><!-- #grimoire-entries -->
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
