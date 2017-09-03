<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	$featured_image_args = array(
		'class' => 'single-featured',
	);
	if ( is_page_template( 'page-fullwidth.php' ) ) {
		the_post_thumbnail( 'sparkling-featured-fullwidth', $featured_image_args );
	} else {
		the_post_thumbnail( 'sparkling-featured', $featured_image_args );
	}
	?>

		<header class="entry-header page-header">


			<div class="entry-meta">

				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-4">
								<?php if( get_field('image') ): ?>

									<img src="<?php the_field('image'); ?>" class="thumbnail"/>

								<?php endif; ?>
								<?php if ( get_edit_post_link() ) : ?>
									<?php
									edit_post_link(
										sprintf(
										/* translators: %s: Name of current post */
											esc_html__( 'Edit %s', 'sparkling' ),
											the_title( '<span class="screen-reader-text">"', '"</span>', false )
										),
										'<i class="fa fa-pencil-square-o"></i><span class="edit-link">',
										'</span>'
									);
									?>
								<?php endif; ?>
							</div>
							<div class="col-md-8">
								<ul class="list-group">
									<li class="list-group-item"><?php the_field('name'); ?></li>
									<li class="list-group-item"><i class="fa fa-user-circle bcard-icon" aria-hidden="true"></i>
										<?php

										// vars
										$post_id = get_field('project_manager', false, false);

										// check
										if( $post_id ): ?>
											<a href="<?php echo get_the_permalink($post_id); ?>"><?php echo get_the_title($post_id); ?></a>
										<?php endif; ?>

									</li>

									<li class="list-group-item">
										<i class="fa fa-users bcard-icon" aria-hidden="true"></i>
										<?php

										$posts = get_field('team');

										if( $posts ): ?>

												<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
													<?php setup_postdata($post); ?>
														<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												<?php endforeach; ?>

											<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
										<?php endif; ?>
									</li>

								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">asd</div>
						</div>
					</div>
				</div>



						<span style="display:none;">
						<?php sparkling_posted_on(); ?>

							<?php
							/* translators: used between list items, there is a space after the comma */
							$categories_list = get_the_category_list( esc_html__( ', ', 'sparkling' ) );
							if ( $categories_list && sparkling_categorized_blog() ) :
								?>
								<span class="cat-links"><i class="fa fa-folder-open-o"></i>
									<?php printf( esc_html__( ' %1$s', 'sparkling' ), $categories_list ); ?>
				</span>
							<?php endif; // End if categories ?>

						</span>





			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before'            => '<div class="page-links">' . esc_html__( 'Pages:', 'sparkling' ),
					'after'             => '</div>',
					'link_before'       => '<span>',
					'link_after'        => '</span>',
					'pagelink'          => '%',
					'echo'              => 1,
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-meta">

			<?php if ( has_tag() ) : ?>
		  <!-- tags -->
		  <div class="tagcloud">

				<?php
				  $tags = get_the_tags( get_the_ID() );
				foreach ( $tags as $tag ) {
					echo '<a href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name . '</a> ';
				} ?>

		  </div>
		  <!-- end tags -->
			<?php endif; ?>

		</footer><!-- .entry-meta -->

	<?php if ( get_the_author_meta( 'description' ) ) :  ?>
		<div class="post-inner-content secondary-content-box">
	  <!-- author bio -->
	  <div class="author-bio content-box-inner">

		<!-- avatar -->
		<div class="avatar">
			<?php echo get_avatar( get_the_author_meta( 'ID' ) , '60' ); ?>
		</div>
		<!-- end avatar -->

		<!-- user bio -->
		<div class="author-bio-content">

		  <h4 class="author-name"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author_meta( 'display_name' ); ?></a></h4>
		  <p class="author-description">
				<?php echo get_the_author_meta( 'description' ); ?>
		  </p>

		</div><!-- end .author-bio-content -->

	  </div><!-- end .author-bio  -->

		</div>
		<?php endif; ?>

</article><!-- #post-## -->
