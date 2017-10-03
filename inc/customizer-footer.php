<?php
	function wpb_customize_register_footer($wp_customize){

		// ***
		// FOOTER
		// ***
		$wp_customize->add_section('footer', array(
			'title'			=> __('FOOTER', 'anglonormandy'),
			'description'	=> sprintf(__('Contenu du pied de page', 'anglonormandy')),
			'priority'		=> 6
		));

		// BOUTON TOP
		$wp_customize->add_setting('footer_top', array(
			'default' 		=> _x('To top &#9650;','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer_top', array(
			'label' 		=> __('Texte Haut de Page', 'anglonormandy'),
			'section' 		=> 'footer',
			'type' 			=> 'text',
			'priority' 		=> 1
		));

		// LIGNE 
		$wp_customize->add_setting('footer_ligne', array(
			'default' 		=> _x('&copy; 2017 - AngloNormandy Ltd. All Rights Reserved.','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer_ligne', array(
			'label' 		=> __('Ligne de texte', 'anglonormandy'),
			'section' 		=> 'footer',
			'type' 			=> 'text',
			'priority' 		=> 2
		));

		// MENTIONS LEGALES TEXTE
		$wp_customize->add_setting('footer_mentions_texte', array(
			'default' 		=> _x('Legal notices','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer_mentions_texte', array(
			'label' 		=> __('Intitulé bouton mentions légales', 'anglonormandy'),
			'section' 		=> 'footer',
			'type' 			=> 'text',
			'priority' 		=> 3
		));

		// MENTIONS LEGALES URL
		$wp_customize->add_setting('footer_mentions_lien', array(
			'default' 		=> _x('#','anglonormandy'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer_mentions_lien', array(
			'label' 		=> __('URL page mentions légales', 'anglonormandy'),
			'section' 		=> 'footer',
			'type' 			=> 'text',
			'priority' 		=> 4
		));

	}


	add_action('customize_register', 'wpb_customize_register_footer');