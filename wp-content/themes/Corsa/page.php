<?php
define('NO_PAGESECTIONS', TRUE);
get_header();
if (have_posts()) : while(have_posts()) : the_post(); ?>
	<section class="l-section">
		<div class="l-subsection" style="padding-bottom: 0">
			<div class="l-subsection-h g-html i-cf">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
		<?php the_content(); ?>
	</section>
<?php endwhile; endif;
get_footer();