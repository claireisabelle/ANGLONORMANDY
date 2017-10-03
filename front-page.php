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
		.home{background-image:url('<?php echo get_theme_mod('header_cover', get_bloginfo('template_url').'/img/background-home.jpg'); ?>');}
	</style>

	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body id="top">
	
	<header>

	<?php get_template_part('colonne-gauche'); ?>


		<div class="showcase home">

			<div class="logo-menu">
				<div class="logo"><img src="<?php echo get_theme_mod('header_logo', get_bloginfo('template_url').'/img/logo-anglonormandy.png'); ?>" alt="AngloNormandy Group" title="" /></div>
				<!-- /.logo -->

				<nav class="menu">
					<ul>
						<li>
							<a href="<?php get_home_url(); ?>">Home</a>
							<a href="#about" class="scroll">About Us</a>
							<a href="#services" class="scroll">Services</a>
							<a href="#contact" class="scroll">Contact</a>
						</li>
					</ul>
				</nav>
				<!-- /.menu -->
			</div>
			<!-- /.logo-menu -->

			<div class="intro">
				<h1><?php echo get_theme_mod('header_titre', 'AngloNormandy Group'); ?></h1>
				<p><?php echo get_theme_mod('header_introduction', 'AngloNormandy Group designs and delivers high impact solutions for quality corporate communications and related, derived, recreational activities, as well as strategic analysis & consultancy.'); ?>	</p>
				<a href="#about" class="btn scroll"><?php echo get_theme_mod('header_btn_texte', 'About Us'); ?></a>
			</div>
			<!-- /.intro -->
		
		</div>
		<!-- /.showcase -->

	</header>

	<section id="about" class="about-us">
		<h2 class="title-blanc"><?php echo get_theme_mod('about_titre1', 'About Us'); ?></h1>
		<h3><?php echo get_theme_mod('about_titre2', 'High impact solutions'); ?></h3>

		<div class="about-us-contenu">
			
			<div class="col">
				<p><?php echo get_theme_mod('about_colonne1', 'We specialise in multidimensional operations with high added value, able to reach and satisfy the most discerning customers and bring our expertise to a wide range of corporate sectors, from the largest multinational brands to very small companies or individuals, and pride ourselves on the quality of our services, always striving for excellence and focusing on achievement.'); ?></p>
			</div>
			<!-- /.col -->

			<div class="col">
				<p><?php echo get_theme_mod('about_colonne2', 'Since our creation long time ago we have offered our clients a large range of specialist experience, from the design and production of traditional promotional tools including digital media to the engineering and delivery of complex public relations operations, world-class sport or culture events tailor-made hospitality, private concerts, etc.'); ?></p>
			</div>
			<!-- /.col -->

			<div class="col">
				<img src="<?php echo get_theme_mod('about_img', get_bloginfo('template_url').'/img/bateau.jpg'); ?>" alt="AngloNormandy Group" class="img-responsive" title="" />
			</div>
			<!-- /.col -->
		</div>
		<!-- /.about-us-contenu -->
	</section>
	<!-- /.about-us -->

	<section id="services" class="our-services">
		<h2 class="title-marron">Spectrum of specialties</h2>

		<div class="our-services-contenu">
			<div class="encart">
				<img src="<?php echo get_theme_mod('services_encart1_icone', get_bloginfo('template_url').'/img/icon-sport.png'); ?>" alt="Premium Hospitality" alt="" height="70px" />
				<h3><?php echo get_theme_mod('services_encart1_titre', 'Premium Hospitality'); ?></h3>
				<p><?php echo get_theme_mod('services_encart1_description', 'The very best of the English football Premier League and much more.'); ?></p>
				<a href="<?php echo get_theme_mod('services_encart1_lien', '#'); ?>" class="btn">Read More</a>
			</div>
			<!-- /.encart -->

			<div class="encart">
				<img src="<?php echo get_theme_mod('services_encart2_icone', get_bloginfo('template_url').'/img/icon-corporate.png'); ?>" alt="Corporate Events" alt="" height="70px" />
				<h3><?php echo get_theme_mod('services_encart2_titre', 'Corporate Events'); ?></h3>
				<p><?php echo get_theme_mod('services_encart2_description', 'Premium corporate meetings, seminars and events in Normandy.'); ?></p>
				<a href="<?php echo get_theme_mod('services_encart2_lien', '#'); ?>" class="btn">Read More</a>
			</div>
			<!-- /.encart -->

			<div class="encart">
				<img src="<?php echo get_theme_mod('services_encart3_icone', get_bloginfo('template_url').'/img/icon-elite.png'); ?>" alt="Elite Solutions" alt="" height="70px" />
				<h3><?php echo get_theme_mod('services_encart3_titre', 'Elite Solutions'); ?></h3>
				<p><?php echo get_theme_mod('services_encart3_description', 'Multidimensional operations with high added value, from London to Paris.'); ?></p>
				<a href="<?php echo get_theme_mod('services_encart3_lien', '#'); ?>" class="btn">Read More</a>
			</div>
			<!-- /.encart -->

			<div class="encart">
				<img src="<?php echo get_theme_mod('services_encart4_icone', get_bloginfo('template_url').'/img/icon-digital.png'); ?>" alt="Digital Sphere" alt="" height="70px" />
				<h3><?php echo get_theme_mod('services_encart4_titre', 'Digital Sphere'); ?></h3>
				<p><?php echo get_theme_mod('services_encart4_description', 'Strategy and optimization of the digital media and its marketing.'); ?></p>
				<a href="<?php echo get_theme_mod('services_encart4_lien', '#'); ?>" class="btn">Read More</a>
			</div>
			<!-- /.encart -->

			<div class="encart">
				<img src="<?php echo get_theme_mod('services_encart5_icone', get_bloginfo('template_url').'/img/icon-iperating.png'); ?>" alt="Tour Operating" alt="" height="70px" />
				<h3><?php echo get_theme_mod('services_encart5_titre', 'Tour Operating'); ?></h3>
				<p><?php echo get_theme_mod('services_encart5_description', 'Business meetings & Corporate tour operating.'); ?></p>
				<a href="<?php echo get_theme_mod('services_encart5_lien', '#'); ?>" class="btn">Read More</a>
			</div>
			<!-- /.encart -->
	
		</div>
		<!-- /.our-services-contenu -->
	</section>
	<!-- /#services.our-services -->

	<section id="clients" class="our-clients">
		<h2 class="title-blanc"><?php echo get_theme_mod('clients_titre', 'Our Clients'); ?></h2>

		<p><?php echo get_theme_mod('clients_texte', 'Our expertise is enriched by the demanding requirements of clients from the most advanced sectors of the economy – including the energy industry, architectural engineering, luxury goods, finance, pharmaceutical and medical sectors.'); ?></p>

		<div class="our-clients-logos">
			<img src="<?php echo get_theme_mod('clients_logo1', get_bloginfo('template_url').'/img/logo-audi.png'); ?>" alt="" />
			<img src="<?php echo get_theme_mod('clients_logo2', get_bloginfo('template_url').'/img/logo-dior.png'); ?>" alt="" />
			<img src="<?php echo get_theme_mod('clients_logo3', get_bloginfo('template_url').'/img/logo-orange.png'); ?>" alt="" />
			<img src="<?php echo get_theme_mod('clients_logo4', get_bloginfo('template_url').'/img/logo-audi.png'); ?>" alt="" />
			<img src="<?php echo get_theme_mod('clients_logo5', get_bloginfo('template_url').'/img/logo-dior.png'); ?>" alt="" />
			<img src="<?php echo get_theme_mod('clients_logo6', get_bloginfo('template_url').'/img/logo-dior.png'); ?>" alt="" />
			<img src="<?php echo get_theme_mod('clients_logo7', get_bloginfo('template_url').'/img/logo-dior.png'); ?>" alt="" />
		</div>
		<!-- /.our-clients-logos -->
	</section>
	<!-- /#clients.our-clients -->

<?php get_footer(); ?>