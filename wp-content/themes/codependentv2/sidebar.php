<div class="bg-gray col-lg-height col-xs-12 col-lg-4">
	<div class="multi-columns-row">
		<?php $featured_news = new WP_Query('category_name=featured-news&showposts=10'); ?>
		<?php if($featured_news->have_posts()) : ?>
			<?php while($featured_news->have_posts()) : ?>
				<?php $featured_news->the_post(); ?>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-12 margin-top-20 margin-bottom-20">
						<div class="featured-post">
								<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php echo get_the_post_thumbnail( $post_id, array(325,300), array('alt' => 'Featured News') ); ?></a>
							<div class="excerpt">
								<p class="margin-top-10 margin-bottom-10">
									<a href="<?php the_permalink(); ?>" title="<?php the_title();?>" class="wht">
										<?php the_title(); ?>
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