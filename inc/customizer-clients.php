<?php
	function wpb_customize_register_clients($wp_customize){

		// TEXT SOUS SECTION
		$wp_customize->add_panel('panel1', array(
            'title' => 'CLIENTS >>>',
            'priority' => 4,
            )
        );

		// ***
		// CLIENTS
		// ***
		$wp_customize->add_section('clients', array(
			'title'			=> __('CLIENTS', 'anglonormandy'),
			'description'	=> sprintf(__('Contenu de la rubrique Clients', 'anglonormandy')),
			'priority'		=> 4,
			'panel' => 'panel1'
		));



		// TITRE
		$wp_customize->add_setting('clients_titre', array(
			'default' 		=> _x('Our Clients','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('clients_titre', array(
			'label' 		=> __('Titre', 'anglonormandy'),
			'section' 		=> 'clients',
			'type' 			=> 'text',
			'priority' 		=> 1
		));

		// TEXTE


		
		$wp_customize->add_setting( 'clients_texte', array(
            'default' 		=> _x('Our expertise is enriched by the demanding requirements of clients from the most advanced sectors of the economy – including the energy industry, architectural engineering, luxury goods, finance, pharmaceutical and medical sectors.','anglonormandy'),
            'transport' => 'postMessage',
            'sanitize_callback' => 'wp_kses_post'
        ) );

        $wp_customize->add_control( new Text_Editor_Custom_Control( $wp_customize, 'clients_texte', array(
            'label' => 'Contenu',
            'section' => 'clients',
            'settings' => 'clients_texte',
            'type' => 'textarea',
            'priority' 		=> 2
        ) ) );










		// LOGO 1
		$wp_customize->add_setting('clients_logo1', array(
			'default'		=> get_bloginfo('template_directory').'/img/logo-audi.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'clients_logo1', array(
			'label'			=> __('Logo 1 : 75px de haut, version blanche', 'anglonormandy'),
			'section'		=> 'clients',
			'settings'		=> 'clients_logo1',
			'priority'		=> 3
		)));

		// LOGO 2
		$wp_customize->add_setting('clients_logo2', array(
			'default'		=> get_bloginfo('template_directory').'/img/logo-dior.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'clients_logo2', array(
			'label'			=> __('Logo 2 : 75px de haut, version blanche', 'anglonormandy'),
			'section'		=> 'clients',
			'settings'		=> 'clients_logo2',
			'priority'		=> 4
		)));

		// LOGO 3
		$wp_customize->add_setting('clients_logo3', array(
			'default'		=> get_bloginfo('template_directory').'/img/logo-orange.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'clients_logo3', array(
			'label'			=> __('Logo 3 : 75px de haut, version blanche', 'anglonormandy'),
			'section'		=> 'clients',
			'settings'		=> 'clients_logo3',
			'priority'		=> 5
		)));

		// LOGO 4
		$wp_customize->add_setting('clients_logo4', array(
			'default'		=> get_bloginfo('template_directory').'/img/logo-audi.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'clients_logo4', array(
			'label'			=> __('Logo 4 : 75px de haut, version blanche', 'anglonormandy'),
			'section'		=> 'clients',
			'settings'		=> 'clients_logo4',
			'priority'		=> 6
		)));


		// LOGO 5
		$wp_customize->add_setting('clients_logo5', array(
			'default'		=> get_bloginfo('template_directory').'/img/logo-dior.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'clients_logo5', array(
			'label'			=> __('Logo 5 : 75px de haut, version blanche', 'anglonormandy'),
			'section'		=> 'clients',
			'settings'		=> 'clients_logo5',
			'priority'		=> 7
		)));

		// LOGO 6
		$wp_customize->add_setting('clients_logo6', array(
			'default'		=> get_bloginfo('template_directory').'/img/logo-dior.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'clients_logo6', array(
			'label'			=> __('Logo 6 : 75px de haut, version blanche', 'anglonormandy'),
			'section'		=> 'clients',
			'settings'		=> 'clients_logo6',
			'priority'		=> 8
		)));


		// LOGO 7
		$wp_customize->add_setting('clients_logo7', array(
			'default'		=> get_bloginfo('template_directory').'/img/logo-dior.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'clients_logo7', array(
			'label'			=> __('Logo 7 : 75px de haut, version blanche', 'anglonormandy'),
			'section'		=> 'clients',
			'settings'		=> 'clients_logo7',
			'priority'		=> 9
		)));



	}


	add_action('customize_register', 'wpb_customize_register_clients');