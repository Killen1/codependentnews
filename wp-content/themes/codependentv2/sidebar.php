<div class="bg-gray col-lg-height col-xs-12 col-lg-4">
	<div class="multi-columns-row">
		<?php $featured_news = new WP_Query('category_name=featured-news&showposts=10'); ?>
		<?php if($featured_news->have_posts()) : ?>
			<?php while($featured_news->have_posts()) : ?>
				<?php $featured_news->the_post(); ?>
					<div class="col-xs-12 col-sm-6 col-lg-12 margin-top-20 margin-bottom-20">
						<div class="featured-post">
							<?php if( has_post_thumbnail()) :?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php echo get_the_post_thumbnail( $post_id, array(325,300), array('alt' => 'Featured News') ); ?></a>
							<?php else: ?>
								<img src="" alt="Featured Image">
							<?php endif; ?>
							<div class="excerpt">
								<p class="margin-top-10 margin-bottom-10">
									<a href="<?php the_permalink(); ?>" title="<?php the_title();?>" class="wht">
										<?php 
											$excerpt = get_the_excerpt();
											echo substr($excerpt, 0, 75);
											if (strlen($excerpt) > 75) echo " ...";
								 		?>
								 	</a>
							 	</p>
							</div>
						</div>
					</div>
			<?php endwhile;?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div>
</div>