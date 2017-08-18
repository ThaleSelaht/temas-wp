<header>
	<div class="container">
		<h1><?php bloginfo('name') ?></h1>
		<span><?php bloginfo('description') ?></span>	
	</div>	
</header>

<nav class="main-nav">
	<div class="container">
		<?php 
			$args = array(
				'theme-location' => 'primary'
			);
		?>
		<?php wp_nav_menu(args); ?> 
	</div>
</nav>