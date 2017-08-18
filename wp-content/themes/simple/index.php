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
				<a href="<?php the_permalink() ?>">
					<?php the_title() ?>	
				</a>
				</h3>
				<div class="meta">
					Criador por <?php the_author() ?> em <?php the_time('F j, Y g:ia') ?>
				</div>
				<?php the_content() ?>
				<a class="button" href="<?php the_permalink() ?>">
					Read More	
				</a>
				</article>
				<hr>
			<?php endwhile ?>
		<?php else : ?>
			<?php echo wpautop('Desculpe, nenhum post foi encontrado')?>
		<?php endif; ?>
	</div>	
	</div>
	<?php get_footer() ?>
</body>
</html>