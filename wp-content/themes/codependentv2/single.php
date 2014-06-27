<?php get_header();?>
	<div class="row border-row">
		<div class="bg-wht col-lg-height col-top col-xs-12 col-lg-8">
			<div id="single-post" class="row">
				<?php if (have_posts()) : ?>
					<?php $counter = 0; ?>
					<?php while (have_posts()) : the_post(); ?>
						<? if($counter == 0 ){?>
							<div class="col-xs-12">
								<h1 class="post-title"><?php the_title();?></h1>
								<p><i class="fa fa-calendar"></i> <?php the_time('F j, Y'); ?> | <?php the_author(); ?></p>
								<p>Categories: <?php the_category(', '); ?></p>
								<div class="post-image margin-bottom-20">
									<?php echo get_the_post_thumbnail($post_id, array(750,550), array('alt' => 'News Image', 'class' => 'center-block')); ?>
									<?php the_post_thumbnail_caption($caption); ?>
								</div>
								<div class="addthis_toolbox addthis_default_style margin-bottom-20">
									<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
									<a class="addthis_button_tweet"></a>
									<a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal"></a>
									<a class="addthis_counter addthis_pill_style"></a>
								</div>
								<div class="post-content margin-bottom-20">
									<?php the_content();?>
								</div>
								<div class="post-nav">
									<?php previous_post_link('%link', '<div id="prev-post" class="pull-left margin-bottom-20"><h5><i class="fa fa-arrow-circle-left fa-lg"></i> Previous</h5></div>') ?>
									<?php next_post_link('%link', '<div id="next-post" class="pull-right margin-bottom-20"><h5>Next  <i class="fa fa-arrow-circle-right fa-lg"></i></h5></div>') ?>
								</div>
								<div class="tags col-xs-12 padding-0">
									<p><?php the_tags('<i class="fa fa-tags"></i> Tags: '); ?></p>
								</div>
							</div>
						<?}$counter++;?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<?php get_sidebar();?>
	</div>
<?php get_footer();?>