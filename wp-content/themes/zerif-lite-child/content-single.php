<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	<header class="entry-header">		<h1 class="entry-title"><?php the_title(); ?></h1>		<div class="entry-meta">					</div><!-- .entry-meta -->	</header><!-- .entry-header -->	<div class="entry-content">		<?php 				$url = get_field('project_url');				the_content();				?>				<div class="video-container">						<iframe src="<?php echo $url ?>" width="1000px" height="3000px">					</iframe>				</div>										<?php						wp_link_pages( array(				'before' => '<div class="page-links">' . __( 'Pages:', 'zerif-lite' ),				'after'  => '</div>',			) );		?>	</div><!-- .entry-content -->	<footer class="entry-footer">		<?php			/* translators: used between list items, there is a space after the comma */						printf(				$meta_text,				$category_list,				$tag_list,				get_permalink()			);		?>		<?php edit_post_link( __( 'Edit', 'zerif-lite' ), '<span class="edit-link">', '</span>' ); ?>	</footer><!-- .entry-footer --></article><!-- #post-## -->