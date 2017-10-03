	<footer>

		<section id="contact" class="contact-us">
			<h2 class="title-marron"><?php echo get_theme_mod('contact_titre', 'Get in Touch'); ?></h2>

			<div class="coordonnees">

				<div class="col-contact">
					<a href="mailto:<?php echo get_theme_mod('contact_email', 'info@anglonormandy.uk'); ?>"><?php echo get_theme_mod('contact_email', 'info@anglonormandy.uk'); ?></a><br />
					<?php echo get_theme_mod('contact_tel1', '+44 (0)203 432 59 84'); ?><br />
					<?php echo get_theme_mod('contact_tel2', '+44 (0)7786 394 294'); ?>
				</div>
				<!-- /.col-contact -->

				<div class="col-contact">
					<?php echo get_theme_mod('contact_adresse1', '100, Pall Mall'); ?><br />
					<?php echo get_theme_mod('contact_adresse2', 'London, SW1Y 5NQ'); ?><br />
					<?php echo get_theme_mod('contact_adresse3', 'United Kingdom'); ?>
				</div>
				<!-- /.col-contact -->

				<div class="col-contact">
					<img src="<?php echo get_theme_mod('contact_logo', get_bloginfo('template_url').'/img/logo-anglonormandy.png'); ?>" alt="AngloNormandy Group" title="" />
				</div>
				<!-- /.col-contact -->
			</div>
			<!-- /.coordonnees -->
		</section>
		<!-- /#contact.contact-us -->

		<section class="mentions">
			<a href="#top" class="scroll"><?php echo get_theme_mod('footer_top', 'TO TOP &#9650;'); ?> </a><br /><br />
			<?php echo get_theme_mod('footer_ligne', '&copy; 2017 - AngloNormandy Ltd. All Rights Reserved.'); ?><br />
			<a href="<?php echo get_theme_mod('footer_mentions_lien', '#'); ?>"><?php echo get_theme_mod('footer_mentions_texte', 'Legal Notices'); ?></a>
		</section>
		<!-- /.mentions -->

	</footer>

		
	
	<!-- JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/anglonormandy.js"></script>

	<?php wp_footer(); ?>
</body>
</html>