
         
		<section id="primary">
			<div id="content" role="main">
                 
          		<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php
						printf( __( 'Tag Archives: %s', 'twentyeleven' ), '<span>' . single_tag_title( '', false ) . '</span>' );
					?></h1>

					<?php
						$tag_description = tag_description();
						if ( ! empty( $tag_description ) )
							echo apply_filters( 'tag_archive_meta', '<div class="tag-archive-meta">' . $tag_description . '</div>' );
					?>
				</header>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>
                
                <br> 
               <br> 
 
 
                <?php $current_tag = single_tag_title("", false); ?>
                <?php  
                // If a user has filled out their description, show a bio on their entries.<br> 
                if ( get_the_author_meta( 'description' ) ) : ?>
                <br> 
                <div id="author-info"><br> 
                    <div id="author-avatar"><br> 
                        <?php echo get_avatar( get_the_author_meta( 'display_name' ), apply_filters( 'twentyeleven_author_bio_avatar_size', 60 ) ); ?><br> 
                    </div><!-- #author-avatar --><br> 
                    <div id="author-description"><br> 
                        <h2><?php printf( __( 'About %s', 'twentyeleven' ), get_the_author() ); ?></h2><br> 
                        <?php the_author_meta( 'description' ); ?><br> 
                    </div><!-- #author-description --><br> 
                </div><!-- #entry-author-info --><br> 
                <?php endif; ?><br> 
                
                
                
                
                
                
                
<br> 

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>
                

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
