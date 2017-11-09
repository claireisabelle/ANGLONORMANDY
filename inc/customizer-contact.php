<?php
	function wpb_customize_register_contact($wp_customize){

		// ***
		// CONTACT
		// ***
		$wp_customize->add_section('contact', array(
			'title'			=> __('CONTACT', 'anglonormandy'),
			'description'	=> sprintf(__('Contenu de la rubrique Contact', 'anglonormandy')),
			'priority'		=> 5
		));

		// TITRE
		$wp_customize->add_setting('contact_titre', array(
			'default' 		=> _x('Get in Touch','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('contact_titre', array(
			'label' 		=> __('Titre', 'anglonormandy'),
			'section' 		=> 'contact',
			'type' 			=> 'text',
			'priority' 		=> 1
		));


		// EMAIL
		$wp_customize->add_setting('contact_email', array(
			'default' 		=> _x('info@anglonormandy.uk','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('contact_email', array(
			'label' 		=> __('E-mail', 'anglonormandy'),
			'section' 		=> 'contact',
			'type' 			=> 'text',
			'priority' 		=> 2
		));

		// TELEPHONE 1
		$wp_customize->add_setting('contact_tel1', array(
			'default' 		=> _x('+44 (0)203 432 59 84','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('contact_tel1', array(
			'label' 		=> __('Téléphone 1', 'anglonormandy'),
			'section' 		=> 'contact',
			'type' 			=> 'text',
			'priority' 		=> 3
		));

		// TELEPHONE 2
		$wp_customize->add_setting('contact_tel2', array(
			'default' 		=> _x('+44 (0)7786 394 294','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('contact_tel2', array(
			'label' 		=> __('Téléphone 2', 'anglonormandy'),
			'section' 		=> 'contact',
			'type' 			=> 'text',
			'priority' 		=> 4
		));

		// ADRESSE LIGNE 1
		$wp_customize->add_setting('contact_adresse1', array(
			'default' 		=> _x('100, Pall Mall','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('contact_adresse1', array(
			'label' 		=> __('Adresse ligne 1', 'anglonormandy'),
			'section' 		=> 'contact',
			'type' 			=> 'text',
			'priority' 		=> 5
		));

		// ADRESSE LIGNE 2
		$wp_customize->add_setting('contact_adresse2', array(
			'default' 		=> _x('London, SW1Y 5NQ','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('contact_adresse2', array(
			'label' 		=> __('Adresse ligne 2', 'anglonormandy'),
			'section' 		=> 'contact',
			'type' 			=> 'text',
			'priority' 		=> 6
		));

		// ADRESSE LIGNE 3
		$wp_customize->add_setting('contact_adresse3', array(
			'default' 		=> _x('United Kingdom','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('contact_adresse3', array(
			'label' 		=> __('Adresse ligne 3', 'anglonormandy'),
			'section' 		=> 'contact',
			'type' 			=> 'text',
			'priority' 		=> 7
		));

		
		// LOGO 
		$wp_customize->add_setting('contact_logo', array(
			'default'		=> get_bloginfo('template_directory').'/img/logo-anglonormandy.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_logo', array(
			'label'			=> __('Logo, 150px de large', 'anglonormandy'),
			'section'		=> 'contact',
			'settings'		=> 'contact_logo',
			'priority'		=> 8
		)));



	}


	add_action('customize_register', 'wpb_customize_register_contact');