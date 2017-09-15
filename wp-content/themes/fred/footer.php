			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
			<?php if(!is_404()){ ?>
				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

				<p class="logo" itemscope itemtype="http://schema.org/Organization">
					<a href="https://www.freddelacompta.com" rel="nofollow">
						<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo-fred-de-la-compta-orange.png" alt="Fred de la compta">
					</a>
				</p>
				</div>
			<?php } ?>
			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>



	</body>

</html> <!-- end of site. what a ride! -->
