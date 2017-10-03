<?php
	function wpb_customize_register_about($wp_customize){

		// ***
		// ABOUT US
		// ***
		$wp_customize->add_section('about', array(
			'title'			=> __('ABOUT US', 'anglonormandy'),
			'description'	=> sprintf(__('Contenu de la rubrique About Us', 'anglonormandy')),
			'priority'		=> 2
		));

		// TITRE 1
		$wp_customize->add_setting('about_titre1', array(
			'default' 		=> _x('About Us','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('about_titre1', array(
			'label' 		=> __('Titre 1', 'anglonormandy'),
			'section' 		=> 'about',
			'type' 			=> 'text',
			'priority' 		=> 1
		));

		// TITRE 2
		$wp_customize->add_setting('about_titre2', array(
			'default' 		=> _x('High impact solutions','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('about_titre2', array(
			'label' 		=> __('Titre 2', 'anglonormandy'),
			'section' 		=> 'about',
			'type' 			=> 'text',
			'priority' 		=> 2
		));

		// COLONNE 1
		$wp_customize->add_setting('about_colonne1', array(
			'default' 		=> _x('We specialise in multidimensional operations with high added value, able to reach and satisfy the most discerning customers and bring our expertise to a wide range of corporate sectors, from the largest multinational brands to very small companies or individuals, and pride ourselves on the quality of our services, always striving for excellence and focusing on achievement.','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('about_colonne1', array(
			'label' 		=> __('Texte colonne 1', 'anglonormandy'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer éventuellement à la ligne', 'meetin')),
			'section' 		=> 'about',
			'type' 			=> 'textarea',
			'priority' 		=> 3
		));

		// COLONNE 2
		$wp_customize->add_setting('about_colonne2', array(
			'default' 		=> _x('Since our creation long time ago we have offered our clients a large range of specialist experience, from the design and production of traditional promotional tools including digital media to the engineering and delivery of complex public relations operations, world-class sport or culture events tailor-made hospitality, private concerts, etc.','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('about_colonne2', array(
			'label' 		=> __('Texte colonne 2', 'anglonormandy'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer éventuellement à la ligne', 'meetin')),
			'section' 		=> 'about',
			'type' 			=> 'textarea',
			'priority' 		=> 4
		));

		// IMAGE
		$wp_customize->add_setting('about_img', array(
			'default'		=> get_bloginfo('template_directory').'/img/bateau.jpg',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_img', array(
			'label'			=> __('Image : 500px par 350px', 'anglonormandy'),
			'section'		=> 'about',
			'settings'		=> 'about_img',
			'priority'		=> 5
		)));

	}


	add_action('customize_register', 'wpb_customize_register_about');