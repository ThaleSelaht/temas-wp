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
				<h3><?php the_title() ?></h3>
				<div class="meta">
					Criador por <?php the_author() ?> em <?php the_time('F j, Y g:ia') ?>
				</div>
				<?php the_content() ?>
			<?php endwhile ?>
		<?php else : ?>
			<?php echo wpautop('Desculpe, nenhum post foi encontrado')?>
		<?php endif; ?>
	</div>	
	</div>
	<?php get_footer() ?>
</body>
</html>