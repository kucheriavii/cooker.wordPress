<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cooker</title>
</head>
<body>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()):the_post();?>
		<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a><?php comments_popup_link('None', 'Yeap', 'ніхуа сєбє'); ?></h1>
		<?php the_excerpt(); ?>
		<?php endwhile;?>
		<?php else : ?>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
</body>
</html>
