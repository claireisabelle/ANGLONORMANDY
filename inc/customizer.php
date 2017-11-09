<?php
	function wpb_customize_register($wp_customize){

		// ***
		// HEADER
		// ***
		$wp_customize->add_section('header', array(
			'title'			=> __('HEADER', 'anglonormandy'),
			'description'	=> sprintf(__('Contenu du header de la page d\'accueil', 'anglonormandy')),
			'priority'		=> 1
		));

		// LOGO
		$wp_customize->add_setting('header_logo', array(
			'default'		=> get_bloginfo('template_directory').'/img/logo-anglonormandy.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_logo', array(
			'label'			=> __('Logo; 150px de large', 'anglonormandy'),
			'section'		=> 'header',
			'settings'		=> 'header_logo',
			'priority'		=> 1
		)));

		$wp_customize->selective_refresh->add_partial( 'header_logo', array(
	        'selector' => '#front-logo',
    	) );

		// IMG MAIN COVER
		$wp_customize->add_setting('header_cover', array(
			'default'		=> get_bloginfo('template_directory').'/img/background-home.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_cover', array(
			'label'			=> __('Image de couverture', 'anglonormandy'),
			'section'		=> 'header',
			'settings'		=> 'header_cover',
			'priority'		=> 2
		)));

		$wp_customize->selective_refresh->add_partial( 'header_cover', array(
	        'selector' => '#front-img',
    	) );

		// TITRE
		$wp_customize->add_setting('header_titre', array(
			'default' 		=> _x('AngloNormandy Group','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('header_titre', array(
			'label' 		=> __('Titre', 'anglonormandy'),
			'section' 		=> 'header',
			'type' 			=> 'text',
			'priority' 		=> 3
		));

		$wp_customize->selective_refresh->add_partial( 'header_titre', array(
	        'selector' => '#front-titre',
    	) );


		// TEXTE INTRODUCTION
		$wp_customize->add_setting('header_introduction', array(
			'default' 		=> _x('AngloNormandy Group designs and delivers high impact solutions for quality corporate communications and related, derived, recreational activities, as well as strategic analysis & consultancy.','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('header_introduction', array(
			'label' 		=> __('Texte introduction', 'anglonormandy'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer éventuellement à la ligne', 'meetin')),
			'section' 		=> 'header',
			'type' 			=> 'textarea',
			'priority' 		=> 4
		));

		$wp_customize->selective_refresh->add_partial( 'header_introduction', array(
	        'selector' => '#front-introduction',
    	) );


		// BOUTON ABOUT US
		$wp_customize->add_setting('header_btn_texte', array(
			'default' 		=> _x('About Us','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('header_btn_texte', array(
			'label' 		=> __('Bouton (texte)', 'anglonormandy'),
			'section' 		=> 'header',
			'type' 			=> 'text',
			'priority' 		=> 5
		));

		$wp_customize->selective_refresh->add_partial( 'header_btn_texte', array(
	        'selector' => '#front-btn',
    	) );

		// TWITTER
		$wp_customize->add_setting('header_twitter', array(
			'default' 		=> _x('#','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('header_twitter', array(
			'label' 		=> __('URL Twitter', 'anglonormandy'),
			'section' 		=> 'header',
			'type' 			=> 'text',
			'priority' 		=> 6
		));

		$wp_customize->selective_refresh->add_partial( 'header_twitter', array(
	        'selector' => '#front-twitter',
    	) );

		// EMAIL
		$wp_customize->add_setting('header_email', array(
			'default' 		=> _x('info@anglonormandy.uk','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('header_email', array(
			'label' 		=> __('E-mail', 'anglonormandy'),
			'section' 		=> 'header',
			'type' 			=> 'text',
			'priority' 		=> 7
		));

		$wp_customize->selective_refresh->add_partial( 'header_email', array(
	        'selector' => '#front-email',
    	) );



	}


	add_action('customize_register', 'wpb_customize_register');