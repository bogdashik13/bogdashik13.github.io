<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mekanews_Lite
 */

?>

		</div><!-- .inner -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="inner clearfix">
				<div class="copyright">
					<a href="http://wp-templates.ru/" title="Шаблоны WordPress">WP</a> / <a href="https://themecountry.com/mekanews-lite/" rel="designer">MekaNews</a> / <a href="http://builderbody.ru/" title="Бодибилдинг и фитнес - упражнения, тренировки, спортивное питание" target="_blank" rel="nofollow">Fitness</a>
				</div>			
				<?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
					<?php wp_nav_menu( array( 
								'theme_location' => 'footer-menu',
								'menu_id' 		 => 'menu-footer',
								'menu_class' 	 => 'menu-footer',
								'container'      => 'div',
								'container_class' => 'footer-menu-wrapper'
							 ) ); ?>
				<?php endif; ?>
				</div>	
			</div><!-- .inner -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<span class="back-to-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></span>
</body>
</html>
