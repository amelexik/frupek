<?php
/**
 * The template for displaying Front page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Newspaper_x
 */

get_header();
$show_on_front = get_option( 'show_on_front' );
if ( $show_on_front == 'posts' ):
	$banner_count = get_theme_mod( 'newspaper_x_show_banner_after', 6 );
	$banner    = get_theme_mod( 'newspaper_x_banner_type', 'image' );

	?>
    <div class="row">
        <div id="primary" class="newspaper-x-content newspaper-x-archive-page col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <main id="main" class="site-main margin-top" role="main">
				<?php
				$banner_count_index = 0;
				if ( have_posts() ) :
					?>
                    <div class="row">
						<?php
						while ( have_posts() ) : the_post();

							if ( fmod( $banner_count_index, $banner_count ) == 0 && $banner_count_index != 0 ) { ?>
                                <div class="row">
                                    <div class="col-xs-12 newspaper-x-image-banner">
										<?php get_template_part( 'template-parts/banner/banner', $banner ); ?>
                                    </div>
                                </div>
								<?php
							}

							$banner_count_index ++;
							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							?>
                            <div class="col-md-6">
								<?php
								get_template_part( 'template-parts/content', get_post_format() );
								?>
                            </div>
							<?php
							if ( fmod( $banner_count_index, 2 ) == 0 && $banner_count_index != (int) $wp_query->post_count ) {
								echo '</div><div class="row">';
							} elseif ( $banner_count_index == (int) $wp_query->post_count ) {
								continue;
							}
						endwhile;
						?>
                    </div>
					<?php
					the_posts_navigation();
				else :
					echo '<div class="row">';
					get_template_part( 'template-parts/content', 'none' );
					echo '</div>';
				endif;
				?>
            </main><!-- #main -->
        </div><!-- #primary -->
		<?php get_sidebar( 'default-widget-area' ); ?>
    </div>
<?php
else:
	?>
    </div>

    <?php  get_template_part( 'blocks/favorite-pages' ); ?>

    <!-- Header Widget Area -->
	<?php // get_template_part( 'template-parts/header-widget-area' )
	?>

    <div class="container site-content">
    <div class="row">

		<?php if ( is_active_sidebar( 'content-area' ) ) { ?>
            <div class="<?php echo is_active_sidebar( 'sidebar-homepage' ) ? 'col-md-8' : 'col-md-12' ?> newspaper-x-content newspaper-x-with-sidebar">
				<?php dynamic_sidebar( 'content-area' ); ?>
                <div id="newspaper_x_widget_direction_work" class="widget newspaper_x_widgets">
                    <h3 class="widget-title"><span>Напрямки роботи</span></h3>
                    <div class="row newspaper-x-layout-b-row">
                        <div class="col-md-4 col-xs-6">
                            <div class="newspaper-x-blog-post-layout-b border item-icon">
                                <div class="row">
                                    <div class="col-sm-5 col-xs-12">
                                        <div class="newspaper-x-image">
                                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-7 col-xs-12">
                                        <div class="newspaper-x-title">
                                            <h3>
                                                <a href="#">Участь у законодавчих ініціативах</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <div class="newspaper-x-blog-post-layout-b border item-icon">
                                <div class="row">
                                    <div class="col-sm-5 col-xs-12">
                                        <div class="newspaper-x-image">
                                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-7 col-xs-12">
                                        <div class="newspaper-x-title">
                                            <h3>
                                                <a href="#">Лобіювання інтересів роботодавців ПЕК України</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <div class="newspaper-x-blog-post-layout-b border item-icon">
                                <div class="row">
                                    <div class="col-sm-5 col-xs-12">
                                        <div class="newspaper-x-image">
                                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-7 col-xs-12">
                                        <div class="newspaper-x-title">
                                            <h3>
                                                <a href="#">Контроль виконання Генеральної та Галузевих угод між
                                                    органами державної влади, роботодавцями та профспілками</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <div class="newspaper-x-blog-post-layout-b border item-icon">
                                <div class="row">
                                    <div class="col-sm-5 col-xs-12">
                                        <div class="newspaper-x-image">
                                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-7 col-xs-12">
                                        <div class="newspaper-x-title">
                                            <h3>
                                                <a href="#">Участь, представництво та захист інтересів членів в
                                                    національній тристоронній соціально – економічній Раді при
                                                    Президенті України та інших державних структурах</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-6">
                            <div class="newspaper-x-blog-post-layout-b border item-icon">
                                <div class="row">
                                    <div class="col-sm-5 col-xs-12">
                                        <div class="newspaper-x-image">
                                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-7 col-xs-12">
                                        <div class="newspaper-x-title">
                                            <h3>
                                                <a href="#">Проведення галузевих заходів</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="newspaper_x_widget_partners" class="widget newspaper_x_widgets">
                    <h3 class="widget-title">
                        <span>ПАРТНЕРИ ФРУТЕК</span></h3>
                    <div class="row newspaper-x-layout-b-row">
                        <div class="col-md-3 col-xs-6">
                            <div class="newspaper-x-blog-post-layout-b partner-item">
                                <div class="newspaper-x-image">
                                    <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">
                                        <img width="550" height="360"
                                             src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/03_editorial_article_01-550x360.jpg"
                                             class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image"
                                             alt=""> </a>
                                </div>
                                <div class="newspaper-x-content">
                                    Міністерство енергетики та захисту довкілля
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="newspaper-x-blog-post-layout-b partner-item">
                                <div class="newspaper-x-image">
                                    <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">
                                        <img width="550" height="360"
                                             src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/03_editorial_article_01-550x360.jpg"
                                             class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image"
                                             alt=""> </a>
                                </div>
                                <div class="newspaper-x-content">
                                    Федерація роботодавців України
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="newspaper-x-blog-post-layout-b partner-item">
                                <div class="newspaper-x-image">
                                    <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">
                                        <img width="550" height="360"
                                             src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/03_editorial_article_01-550x360.jpg"
                                             class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image"
                                             alt=""> </a>
                                </div>
                                <div class="newspaper-x-content">EURАCOAL</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="newspaper-x-blog-post-layout-b partner-item">
                                <div class="newspaper-x-image">
                                    <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">
                                        <img width="550" height="360"
                                             src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/03_editorial_article_01-550x360.jpg"
                                             class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image"
                                             alt=""> </a>
                                </div>
                                <div class="newspaper-x-content">Профспілка робітників вугільної промисловості</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="newspaper-x-blog-post-layout-b partner-item">
                                <div class="newspaper-x-image">
                                    <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">
                                        <img width="550" height="360"
                                             src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/03_editorial_article_01-550x360.jpg"
                                             class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image"
                                             alt=""> </a>
                                </div>
                                <div class="newspaper-x-content">Незалежна профспілка гірників України</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="newspaper-x-blog-post-layout-b partner-item">
                                <div class="newspaper-x-image">
                                    <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">
                                        <img width="550" height="360"
                                             src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/03_editorial_article_01-550x360.jpg"
                                             class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image"
                                             alt=""> </a>
                                </div>
                                <div class="newspaper-x-content">Професійна спілка працівників енергетики та
                                    електротехнічної промисловості
                                    України
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <div class="newspaper-x-blog-post-layout-b partner-item">
                                <div class="newspaper-x-image">
                                    <a href="https://colorlib.com/newspaper-x/2017/05/10/aliquet-lorem-pantum/">
                                        <img width="550" height="360"
                                             src="https://colorlib.com/newspaper-x/wp-content/uploads/sites/15/2017/05/03_editorial_article_01-550x360.jpg"
                                             class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image"
                                             alt=""> </a>
                                </div>
                                <div class="newspaper-x-content">
                                    Національна тристороння соціально-економічна рада
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
		<?php } ?>

		<?php if ( is_active_sidebar( 'sidebar-homepage' ) ) { ?>
            <div class="col-md-4 newspaper-x-blog-sidebar">
				<?php dynamic_sidebar( 'sidebar-homepage' ); ?>
            </div>
		<?php } ?>
    </div>

    <section class="newspaper-x-after-content-area">
        <div class="row">
            <div class="col-xs-12 newspaper-x-after-content-sidebar">
				<?php
				if ( is_active_sidebar( 'after-content-area' ) ) {
					dynamic_sidebar( 'after-content-area' );
				}
				?>
            </div>
        </div><!--/.row-->
    </section>
<?php endif; ?>

<?php get_footer();