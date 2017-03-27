<?php
/**
 * The template for displaying Blog Archive pages.
 */
get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->
<?php zerif_after_header_trigger(); ?>
<div id="content" class="site-content">

<div class="container">

	<?php zerif_before_archive_content_trigger(); ?>

	<div class="content-left-wrap col-md-9">

		<?php zerif_top_archive_content_trigger(); ?>

		<div id="primary" class="content-area">

			<main id="main" class="site-main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">

					<h1>Blog</h1><br>
					<h4>I decided to start this blog as a way to help myself learn different technology terms and concepts.</h4>

				</header><!-- .page-header -->

				<?php while ( have_posts() ) : the_post();

						/* Include the Post-Format-specific template for the content.

						 * If you want to override this in a child theme, then include a file

						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.

						 */

						get_template_part( 'content', get_post_format() );

					endwhile;

					zerif_paging_nav();

				else:

					get_template_part( 'content', 'none' );

				endif; ?>

			</main><!-- #main -->

		</div><!-- #primary -->

		<?php zerif_bottom_archive_content_trigger(); ?>

	</div><!-- .content-left-wrap -->

	<?php zerif_after_archive_content_trigger(); ?>

	<?php zerif_sidebar_trigger(); ?>

</div><!-- .container -->

<?php get_footer(); ?>