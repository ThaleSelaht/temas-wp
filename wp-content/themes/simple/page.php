<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta <?php bloginfo('charset') ?>>
	<title><?php bloginfo('name') ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
	<?php wp_head() ?>
</head>
<body>
	<?php get_header() ?>

	<div class="main">
	<div class="container">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post() ?>
				<article class="post">
				<h3>
					<?php the_title() ?>	
				</h3>
				<?php if(has_post_thumbnail()) : ?>
					<div class="post-thumbnail">
					<?php the_post_thumbnail() ?>	
					</div>
				<?php endif; ?>
					
				<?php the_content() ?>
				</article>
			<?php endwhile ?>
		<?php else : ?>
			<?php echo wpautop('Desculpe, nenhum post foi encontrado')?>
		<?php endif; ?>
	</div>	
	</div>
	<?php get_footer() ?>
</body>
</html>