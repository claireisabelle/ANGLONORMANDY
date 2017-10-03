<?php
	function wpb_customize_register_services($wp_customize){

		// ***
		// SERVICES
		// ***
		$wp_customize->add_section('services', array(
			'title'			=> __('SERVICES', 'anglonormandy'),
			'description'	=> sprintf(__('Contenu de la rubrique Services', 'anglonormandy')),
			'priority'		=> 3
		));

		// TITRE
		$wp_customize->add_setting('services_titre', array(
			'default' 		=> _x('Spectrum of Specialties','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('services_titre', array(
			'label' 		=> __('Titre', 'anglonormandy'),
			'section' 		=> 'services',
			'type' 			=> 'text',
			'priority' 		=> 1
		));

		// ENCART 1
		// ICONE
		$wp_customize->add_setting('services_encart1_icone', array(
			'default'		=> get_bloginfo('template_directory').'/img/icon-sport.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'services_encart1_icone', array(
			'label'			=> __('Encart 1, icône : 100px par 100px', 'anglonormandy'),
			'section'		=> 'services',
			'settings'		=> 'services_encart1_icone',
			'priority'		=> 2
		)));

		// ENCART 1
		// TITRE
		$wp_customize->add_setting('services_encart1_titre', array(
			'default' 		=> _x('Premium Hospitality','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('services_encart1_titre', array(
			'label' 		=> __('Encart 1, titre', 'anglonormandy'),
			'section' 		=> 'services',
			'type' 			=> 'text',
			'priority' 		=> 3
		));

		// ENCART 1
		// DESCRIPTION
		$wp_customize->add_setting('services_encart1_description', array(
			'default' 		=> _x('The very best of the English football Premier League and much more.','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('services_encart1_description', array(
			'label' 		=> __('Encart 1, description', 'anglonormandy'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'anglonormandy')),
			'section' 		=> 'services',
			'type' 			=> 'text',
			'priority' 		=> 4
		));

		// ENCART 1
		// LIEN
		$wp_customize->add_setting('services_encart1_lien', array(
			'default' 		=> _x('#','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('services_encart1_lien', array(
			'label' 		=> __('Encart 1, lien vers la page dédiée', 'anglonormandy'),
			'section' 		=> 'services',
			'type' 			=> 'text',
			'priority' 		=> 5
		));



		// ENCART 2
		// ICONE
		$wp_customize->add_setting('services_encart2_icone', array(
			'default'		=> get_bloginfo('template_directory').'/img/icon-corporate.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'services_encart2_icone', array(
			'label'			=> __('Encart 2, icône : 100px par 100px', 'anglonormandy'),
			'section'		=> 'services',
			'settings'		=> 'services_encart2_icone',
			'priority'		=> 6
		)));

		// ENCART 2
		// TITRE
		$wp_customize->add_setting('services_encart2_titre', array(
			'default' 		=> _x('Corporate Events','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('services_encart2_titre', array(
			'label' 		=> __('Encart 2, titre', 'anglonormandy'),
			'section' 		=> 'services',
			'type' 			=> 'text',
			'priority' 		=> 7
		));

		// ENCART 2
		// DESCRIPTION
		$wp_customize->add_setting('services_encart2_description', array(
			'default' 		=> _x('Premium corporate meetings, seminars and events in Normandy.','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('services_encart2_description', array(
			'label' 		=> __('Encart 2, description', 'anglonormandy'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'anglonormandy')),
			'section' 		=> 'services',
			'type' 			=> 'text',
			'priority' 		=> 8
		));

		// ENCART 2
		// LIEN
		$wp_customize->add_setting('services_encart2_lien', array(
			'default' 		=> _x('#','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('services_encart2_lien', array(
			'label' 		=> __('Encart 2, lien vers la page dédiée', 'anglonormandy'),
			'section' 		=> 'services',
			'type' 			=> 'text',
			'priority' 		=> 9
		));


		// ENCART 3
		// ICONE
		$wp_customize->add_setting('services_encart3_icone', array(
			'default'		=> get_bloginfo('template_directory').'/img/icon-elite.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'services_encart3_icone', array(
			'label'			=> __('Encart 3, icône : 100px par 100px', 'anglonormandy'),
			'section'		=> 'services',
			'settings'		=> 'services_encart3_icone',
			'priority'		=> 10
		)));

		// ENCART 3
		// TITRE
		$wp_customize->add_setting('services_encart3_titre', array(
			'default' 		=> _x('Elite Solutions','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('services_encart3_titre', array(
			'label' 		=> __('Encart 3, titre', 'anglonormandy'),
			'section' 		=> 'services',
			'type' 			=> 'text',
			'priority' 		=> 11
		));

		// ENCART 3
		// DESCRIPTION
		$wp_customize->add_setting('services_encart3_description', array(
			'default' 		=> _x('Multidimensional operations with high added value, from London to Paris.','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('services_encart3_description', array(
			'label' 		=> __('Encart 3, description', 'anglonormandy'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'anglonormandy')),
			'section' 		=> 'services',
			'type' 			=> 'text',
			'priority' 		=> 12
		));

		// ENCART 3
		// LIEN
		$wp_customize->add_setting('services_encart3_lien', array(
			'default' 		=> _x('#','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('services_encart3_lien', array(
			'label' 		=> __('Encart 3, lien vers la page dédiée', 'anglonormandy'),
			'section' 		=> 'services',
			'type' 			=> 'text',
			'priority' 		=> 13
		));



		// ENCART 4
		// ICONE
		$wp_customize->add_setting('services_encart4_icone', array(
			'default'		=> get_bloginfo('template_directory').'/img/icon-digital.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'services_encart4_icone', array(
			'label'			=> __('Encart 4, icône : 100px par 100px', 'anglonormandy'),
			'section'		=> 'services',
			'settings'		=> 'services_encart4_icone',
			'priority'		=> 14
		)));

		// ENCART 4
		// TITRE
		$wp_customize->add_setting('services_encart4_titre', array(
			'default' 		=> _x('Digital Sphere','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('services_encart4_titre', array(
			'label' 		=> __('Encart 4, titre', 'anglonormandy'),
			'section' 		=> 'services',
			'type' 			=> 'text',
			'priority' 		=> 15
		));

		// ENCART 4
		// DESCRIPTION
		$wp_customize->add_setting('services_encart4_description', array(
			'default' 		=> _x('Strategy and optimization of the digital media and its marketing.','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('services_encart4_description', array(
			'label' 		=> __('Encart 4, description', 'anglonormandy'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'anglonormandy')),
			'section' 		=> 'services',
			'type' 			=> 'text',
			'priority' 		=> 16
		));

		// ENCART 4
		// LIEN
		$wp_customize->add_setting('services_encart4_lien', array(
			'default' 		=> _x('#','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('services_encart4_lien', array(
			'label' 		=> __('Encart 4, lien vers la page dédiée', 'anglonormandy'),
			'section' 		=> 'services',
			'type' 			=> 'text',
			'priority' 		=> 17
		));


		// ENCART 5
		// ICONE
		$wp_customize->add_setting('services_encart5_icone', array(
			'default'		=> get_bloginfo('template_directory').'/img/icon-iperating.png',
			'type'			=> 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'services_encart5_icone', array(
			'label'			=> __('Encart 5, icône : 100px par 100px', 'anglonormandy'),
			'section'		=> 'services',
			'settings'		=> 'services_encart5_icone',
			'priority'		=> 18
		)));

		// ENCART 5
		// TITRE
		$wp_customize->add_setting('services_encart5_titre', array(
			'default' 		=> _x('Tour Operating','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('services_encart5_titre', array(
			'label' 		=> __('Encart 5, titre', 'anglonormandy'),
			'section' 		=> 'services',
			'type' 			=> 'text',
			'priority' 		=> 19
		));

		// ENCART 5
		// DESCRIPTION
		$wp_customize->add_setting('services_encart5_description', array(
			'default' 		=> _x('Business meetings & Corporate tour operating.','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('services_encart5_description', array(
			'label' 		=> __('Encart 5, description', 'anglonormandy'),
			'description'	=> sprintf(__('Utiliser &#60;br /> pour passer à la ligne', 'anglonormandy')),
			'section' 		=> 'services',
			'type' 			=> 'text',
			'priority' 		=> 20
		));

		// ENCART 5
		// LIEN
		$wp_customize->add_setting('services_encart5_lien', array(
			'default' 		=> _x('#','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('services_encart5_lien', array(
			'label' 		=> __('Encart 5, lien vers la page dédiée', 'anglonormandy'),
			'section' 		=> 'services',
			'type' 			=> 'text',
			'priority' 		=> 21
		));

	}


	add_action('customize_register', 'wpb_customize_register_services');