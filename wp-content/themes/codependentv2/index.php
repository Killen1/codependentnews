<?php get_header(); ?>
	<section class="row border-row">
		<div class="col-lg-height col-top col-xs-12 col-lg-8">	
			<div class="row">
				<div id="carousel-example-generic" class="carousel slide col-xs-12 margin-top-20 margin-bottom-20" data-ride="carousel">
				  	<ol class="carousel-indicators">
				  		<?php $slider = new WP_Query('category_name=slider-news'); ?>
						<?php if($slider->have_posts()) : ?>
						     <?php $count = 0; ?>	
							<?php while($slider->have_posts()) :?>
								<? $active = ($count == 1); ?>
								<?php $slider->the_post(); ?>
								    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $count;?>" class="<?php if ($active) {echo "active";}; ?>"></li>
								<? $count++;?>
							<?php endwhile;?>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
				  	</ol>
				  	<div class="carousel-inner">
			  			<?php $slider = new WP_Query('category_name=slider-news'); ?>
						<?php if($slider->have_posts()) : ?>
						    <?php $count = 0; ?>	
							<?php while($slider->have_posts()) :?>
								<? $active = ($count == 1); ?>
								<?php $slider->the_post(); ?>
							    <div class="item <?php if ($active) {echo "active";}; ?>">
							      	<a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php echo get_the_post_thumbnail($post_id, array(750,450), array('alt' => 'Slider Image')); ?></a>
							      	<div class="carousel-caption">
							        	<h4><a href="<?php the_permalink();?>" title="<?php the_title(); ?>" class="wht"><?php the_title(); ?></a></h4>
							      	</div>
							    </div>
							    <? $count++;?>
							<?php endwhile;?>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
				  	</div>
				</div>
				<div id="news" class="col-xs-12">
					<h3 class="padding-0 margin-bottom-20">News</h3>
					<div class="row">
						<?php $latest_news = new WP_Query('category_name=News&showposts=10'); ?>
						<?php if($latest_news->have_posts()) : ?>
							<?php while($latest_news->have_posts()) : ?>
								<?php $latest_news->the_post(); ?>
									<div class="news-post margin-bottom-30 col-xs-12">
										<div class="row">
											<div class="col-sm-4 col-md-3 col-lg-4">
							      				<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
							      					<?php echo get_the_post_thumbnail( $post_id, array(225,225), array('alt' => 'Post Photo') ); ?>
							      				</a>
							      			</div>
							      			<div class="col-sm-8 col-md-9 col-lg-8">
							      				<h4 class="margin-top-0"><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title(); ?></a></h4>
												<p><i class="fa fa-calendar"></i> <?php the_time('F j, Y'); ?> | <?php the_author(); ?></p>
							      				<p>
							      					<?php 
														$excerpt = get_the_excerpt();
														echo substr($excerpt, 0, 190);
														if (strlen($excerpt) > 190) echo " ...";
											 		?>
							      				</p>
							      				<p><a href="<?php the_permalink();?>" title="Read More">Read More <i class="fa fa-arrow-circle-right"></i></a></p>
							      			</div>
							      		</div>
									</div>
							<?php endwhile;?>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>	
		<?php get_sidebar();?>
	</section>
<?php get_footer(); ?>