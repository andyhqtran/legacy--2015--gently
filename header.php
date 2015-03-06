<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div class='hero'>
		  	<header class='header'>
		    	<div class='container'>
			      	<div class='col-md-12'>
			        	<div class='navbar clearfix'>
			          		<h2 class='logo'>
				            	<a href='<?php echo esc_url( home_url( '/' ) ); ?>'><?php bloginfo( 'name' ); ?></a>
				          	</h2>
			          		<nav class='nav'>
			          			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			          		</nav>
			        	</div>
			      	</div>
			    </div>
		  	</header>
		  	<?php if( is_home() || is_front_page() ) : ?>
		  	<div class='hero-text' data-sr='scale up 30%'>
		    	<div class='container'>
		      		<div class='row'>
		        		<div class='col-md-12'>
		          			<h2>Three heads are better than one.</h2>
		          			<p>We need to think of a sick tagline right here, because I can’t think of shit right now</p>
		          			<div class='btn-group' data-sr='enter bottom wait .3s ease 60px'>
		            			<a class='btn btn-hero' href='#featured'>
		              				<div class='fa fa-long-arrow-down'></div>
		            			</a>
		            			<span>See our case studies</span>
		          			</div>
		        		</div>
		      		</div>
		    	</div>
		  	</div>
			<?php endif; ?>
		</div>
