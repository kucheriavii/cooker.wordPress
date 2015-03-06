<?php get_header(); ?>
	<div class="article-box">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				 echo "<h1>"; 
				 the_title();
				 echo "</h1>";
				  the_tags( '<p class="tags">Смотреть еще: ', ', ', "</p>" ); 
				the_content();
				get_template_part( 'content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			// End the loop.
			endwhile;
			
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Следующий', 'cooker' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'пост:', 'cooker' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Предыдущий', 'cooker' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'пост:', 'cooker' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
			?>

			</main><!-- .site-main -->
		</div><!-- .content-area -->
	</div>
	<div class="toolbar">
		<?php 
			if (!function_exists('dynamic_sidebar') || dynamic_sidebar(1)):endif;
		 ?>
	</div>
<?php get_footer(); ?>
