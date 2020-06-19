<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link    https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Newspaper X
 */

get_header();

/**
 * Banner Settings;
 */
$banner_count = get_theme_mod( 'newspaper_x_show_banner_after', 6 );
$banner       = get_theme_mod( 'newspaper_x_banner_type', 'image' );

if ( is_home() && ! is_front_page() ) : ?>
    <div class="row">
        <header class="col-xs-12">
            <h3 class="page-title"><span><?php single_post_title(); ?></span></h3>
        </header><!-- .page-header -->
    </div>
<?php endif; ?>


    <div class="container">

        <div class="advant_body bg-light2 py-3 px-4">
            <header class="pt-4 pb-5 text-center">
                <h3 class="m-0 hot_label">Переваги для членів UABIO</h3>
            </header>

            <div class="row row-5">

                <div class="col-lg-3 d-flex">
                    <div class="advant_box mb-4">
                        <div class="row row-0">
                            <div class="col-3 col-lg-4">
                                <div class="advant_icon">
                                    <svg width="30" height="29" viewBox="0 0 30 29" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M27 6H21V3C21 1.335 19.665 0 18 0H12C10.335 0 9 1.335 9 3V6H3C1.335 6 0.015 7.335 0.015 9L0 25.5C0 27.165 1.335 28.5 3 28.5H27C28.665 28.5 30 27.165 30 25.5V9C30 7.335 28.665 6 27 6ZM18 6H12V3H18V6Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-9 col-lg-8 d-flex align-items-center">
                                <div class="advant_title">Співпраця з урядовими та бізнес-колами, які мають вплив на
                                    біоенергетику
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 d-flex">
                    <div class="advant_box mb-4">
                        <div class="row row-0">
                            <div class="col-3 col-lg-4">
                                <div class="advant_icon">
                                    <svg width="24" height="30" viewBox="0 0 24 30" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 0H3C1.35 0 0.0150003 1.35 0.0150003 3L0 27C0 28.65 1.335 30 2.985 30H21C22.65 30 24 28.65 24 27V9L15 0ZM18 24H6V21H18V24ZM18 18H6V15H18V18ZM13.5 10.5V2.25L21.75 10.5H13.5Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-9 col-lg-8 d-flex align-items-center">
                                <div class="advant_title">Участь у законодавчих ініціативах</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 d-flex">
                    <div class="advant_box mb-4">
                        <div class="row row-0">
                            <div class="col-3 col-lg-4">
                                <div class="advant_icon">
                                    <svg width="31" height="30" viewBox="0 0 31 30" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.9849 0C7.70486 0 0.984863 6.72 0.984863 15C0.984863 23.28 7.70486 30 15.9849 30C24.2649 30 30.9849 23.28 30.9849 15C30.9849 6.72 24.2649 0 15.9849 0ZM21.3999 9.51C23.0049 9.51 24.2949 10.8 24.2949 12.405C24.2949 14.01 23.0049 15.3 21.3999 15.3C19.7949 15.3 18.5049 14.01 18.5049 12.405C18.4899 10.8 19.7949 9.51 21.3999 9.51ZM12.3999 7.14C14.3499 7.14 15.9399 8.73 15.9399 10.68C15.9399 12.63 14.3499 14.22 12.3999 14.22C10.4499 14.22 8.85986 12.63 8.85986 10.68C8.85986 8.715 10.4349 7.14 12.3999 7.14ZM12.3999 20.835V26.46C8.79986 25.335 5.94986 22.56 4.68986 19.02C6.26486 17.34 10.1949 16.485 12.3999 16.485C13.1949 16.485 14.1999 16.605 15.2499 16.815C12.7899 18.12 12.3999 19.845 12.3999 20.835ZM15.9849 27C15.5799 27 15.1899 26.985 14.7999 26.94V20.835C14.7999 18.705 19.2099 17.64 21.3999 17.64C23.0049 17.64 25.7799 18.225 27.1599 19.365C25.4049 23.82 21.0699 27 15.9849 27Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-9 col-lg-8 d-flex align-items-center">
                                <div class="advant_title">Знайомство з потенційними партнерами та клієнтами</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 d-flex">
                    <div class="advant_box mb-4">
                        <div class="row row-0">
                            <div class="col-3 col-lg-4">
                                <div class="advant_icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 0C6.735 0 0 6.735 0 15C0 23.265 6.735 30 15 30C23.265 30 30 23.265 30 15C30 6.735 23.265 0 15 0ZM15 27C8.385 27 3 21.615 3 15C3 8.385 8.385 3 15 3C21.615 3 27 8.385 27 15C27 21.615 21.615 27 15 27ZM19.5 15C19.5 17.49 17.49 19.5 15 19.5C12.51 19.5 10.5 17.49 10.5 15C10.5 12.51 12.51 10.5 15 10.5C17.49 10.5 19.5 12.51 19.5 15Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-9 col-lg-8 d-flex align-items-center">
                                <div class="advant_title">Реклама компанії серед профільної спільноти</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 d-flex">
                    <div class="advant_box mb-4">
                        <div class="row row-0">
                            <div class="col-3 col-lg-4">
                                <div class="advant_icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M27 0H3C1.35 0 0.015 1.35 0.015 3L0 30L6 24H27C28.65 24 30 22.65 30 21V3C30 1.35 28.65 0 27 0ZM6 10.5H24V13.5H6V10.5ZM18 18H6V15H18V18ZM24 9H6V6H24V9Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-9 col-lg-8 d-flex align-items-center">
                                <div class="advant_title">Консультування щодо діючого законодавства або ініціатив</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 d-flex">
                    <div class="advant_box mb-4">
                        <div class="row row-0">
                            <div class="col-3 col-lg-4">
                                <div class="advant_icon">
                                    <svg width="30" height="20" viewBox="0 0 30 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.25 19.7346L11.25 10.7196L17.25 16.7196L30 2.37965L27.885 0.264648L17.25 12.2196L11.25 6.21965L0 17.4846L2.25 19.7346Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-9 col-lg-8 d-flex align-items-center">
                                <div class="advant_title">Доступ до аналітики, статей, презентацій та інсайтів
                                    Асоціації
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 d-flex">
                    <div class="advant_box mb-4">
                        <div class="row row-0">
                            <div class="col-3 col-lg-4">
                                <div class="advant_icon">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24.5 0.5H3.5C1.835 0.5 0.5 1.85 0.5 3.5V24.5C0.5 26.15 1.835 27.5 3.5 27.5H24.5C26.165 27.5 27.5 26.15 27.5 24.5V3.5C27.5 1.85 26.165 0.5 24.5 0.5ZM11 21.5L3.5 14L5.615 11.885L11 17.255L22.385 5.87L24.5 8L11 21.5Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-9 col-lg-8 d-flex align-items-center">
                                <div class="advant_title">Пріорітетна участь в проєктах Horizon2020, які виконує
                                    Асоціація
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 d-flex">
                    <div class="advant_box mb-4">
                        <div class="row row-0">
                            <div class="col-3 col-lg-4">
                                <div class="advant_icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.07501 6.075C-1.01999 10.17 -1.01999 16.8 3.04501 20.895C5.25001 15.795 9.18001 11.535 14.085 9C9.93001 12.51 7.02001 17.415 6.00001 22.98C9.90001 24.825 14.7 24.15 17.925 20.925C23.145 15.705 24 0 24 0C24 0 8.29501 0.855 3.07501 6.075Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="col-9 col-lg-8 d-flex align-items-center">
                                <div class="advant_title">Безкоштовна участь в щорічній конференції Biomass for Energy
                                    (300 людей з 17 країн)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="row blog">
        <div id="primary" class="newspaper-x-content newspaper-x-archive-page col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <main id="main" class="site-main" role="main">
				<?php
				$banner_count_index = 0;
				if ( have_posts() ) :
					?>
                    <div class="row">
						<?php
						while ( have_posts() ) : the_post();

							if ( fmod( $banner_count_index, $banner_count ) == 0 && $banner_count_index != 0 ) {
								echo '</div><div clss="row"><div class="newspaper-x-image-banner">';
								get_template_part( 'template-parts/banner/banner', $banner );
								echo '</div></div><div class="row">';
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
							if ( $banner_count_index == 2 ) {
								echo '</div></main></div></div><div class="row"><div id="primary" class="newspaper-x-content newspaper-x-archive-page col-lg-8 col-md-8 col-sm-12 col-xs-12"><main id="main" class="site-main" role="main"><div class="row">';
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
get_footer();

