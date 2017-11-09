<?php 
/*
Template Name: PAGE MENTIONS LEGALES
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title><?php bloginfo('name'); ?> - - <?php bloginfo('description'); ?></title>

	<!-- CSS -->
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" >

	<!-- CSS Background -->
	<style>

		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

		.elite{
			background-image: url('<?php echo $url ?>');
		}
		
	</style>

	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body id="top">
	
	<header>

	<?php get_template_part('colonne-gauche'); ?>

	<div class="showcase-mentions">

			<div class="logo-menu">
				<div class="logo"><img src="<?php echo get_theme_mod('header_logo', get_bloginfo('template_url').'/img/logo-anglonormandy.png'); ?>" alt="AngloNormandy Group" title="" /></div>
				<!-- /.logo -->

				<nav class="menu">
					<ul>
						<li>
							<a href="<?php echo get_home_url(); ?>">Home</a>
							<a href="<?php echo get_home_url(); ?>#about">About Us</a>
							<a href="<?php echo get_home_url(); ?>#services">Services</a>
							<a href="#contact" class="scroll">Contact</a>
						</li>
					</ul>
				</nav>
				<!-- /.menu -->
			</div>
			<!-- /.logo-menu -->

			<section id="interne" class="interne-content interne-mentions">
				<?php if (have_posts()) : ?>
						<?php while(have_posts()) : the_post(); ?>
							
							<h2 class="title-blanc"><?php the_title() ?></h1>
							<?php the_content(); ?>

						<?php endwhile; ?>

				<?php else : ?>
					<?php __('Erreur survenue'); ?>
				<?php endif; ?>

				
			</section>
			<!-- /.interne -->
		
		</div>
		<!-- /.showcase -->

	</header>

	



<?php get_footer(); ?>