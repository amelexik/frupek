<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Newspaper X
 */

?>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

	<?php //get_sidebar( 'footer' ) ?>

	<?php $go_top = get_theme_mod( 'newspaper_x_enable_go_top', true ); ?>
	<?php if ( $go_top ): ?>
        <div class="back-to-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="javascript:void(0)" id="back-to-top">
                            <span><?php echo esc_html__( 'Go Up', 'newspaper-x' ) ?></span>
                            <i class="fa fa-angle-up" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
	<?php endif; ?>

    <div class="site-info">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <img src="<?= get_template_directory_uri() . '/assets/images/logo_mini.png'; ?>">
                </div>
                <div class="col-md-5">
                    <p>&copy;2020 Всеукраїнське об’єднання організацій роботодавців
                        ФЕДЕРАЦІЯ РОБОТОДАВЦІВ ПАЛИВНО-ЕНЕРГЕТИЧНОГО КОМПЛЕКСУ УКРАЇНИ</p>
                </div>
                <div class="col-md-3">
                    <p>тел./факс: (044) 424-85-14</p>
                </div>
                <div class="col-md-3">
                    <p>Україна, 03680, м. Київ-142, провулок Приладний, буд. 2-А.<br>
                        e-mail: <a href="mailto:frupek@ukr.net">frupek@ukr.net</a></p>
                </div>
            </div>
        </div>
    </div>


	<?php /*

    <?php $go_top = get_theme_mod( 'newspaper_x_enable_copyright', true ); ?>
    <?php if ( $go_top ): ?>
        <div class="site-info ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        $default = sprintf( __( '&copy; %1$s Newspaper-X a theme by <a href="%2$s">Colorlib</a>', 'newspaper-x' ), date( "Y" ), 'https://colorlib.com' );

                        $copyright = get_theme_mod( 'newspaper_x_copyright_contents' );
                        echo empty( $copyright ) ? wp_kses_post( $default ) : wp_kses_post( $copyright );
                        ?>

                        <nav id="footer-navigation" class="pull-right text-right hidden-xs">
                            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'depth' => 1 ) ); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!-- .site-info -->
    <?php endif; ?>
    */ ?>


</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
