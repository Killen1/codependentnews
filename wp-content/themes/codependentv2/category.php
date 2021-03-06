<?php get_header(); ?>
	<div class="row border-row">
		<div class="bg-wht col-lg-height col-top col-xs-12 col-lg-8">
			<div class="row">
				<?php if(have_posts()) : ?>
		    		<?php $count = 1; ?>	
					<?php while(have_posts()) :?>
						<?php the_post(); ?>
						<?php if($count == 1):?>
							<div id="first-post" class="border-bottom margin-top-20 col-xs-12">
								<div class="row">
									<div class="col-xs-12 col-md-5 col-lg-6">
						      			<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
						      				<?php echo get_the_post_thumbnail($post_id, array(450,250), array('alt' => 'Post Photo')); ?>
						      			</a>
						      		</div>
						      		<div class="col-xs-12 col-md-7 col-lg-6">
							        	<h3 class="margin-top-0"><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
							        	<p><i class="fa fa-calendar"></i> <?php the_time('F j, Y'); ?> | <?php the_author(); ?></p>
							        	<p>
							        		<?php 
												$excerpt = get_the_excerpt();
												echo substr($excerpt, 0, 285);
												if (strlen($excerpt) > 285) echo " ...";
									 		?>
									 	</p>
									 	<p><a href="<?php the_permalink();?>" title="Read More">Read More <i class="fa fa-arrow-circle-right"></i></a></p>
									</div>
								</div>
							</div>
						<?php else: ?>
							<div class="news col-xs-12 margin-bottom-30">
								<div class="row">
									<div class="col-sm-4 col-md-3 col-lg-4">
					      				<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
					      					<?php echo get_the_post_thumbnail($post_id, array(225,225), array('alt' => 'Post Photo')); ?>
					      				</a>
					      			</div>
					      			<div class="col-sm-8 col-md-9 col-lg-8">
					      				<h4 class="margin-top-0"><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title(); ?></a></h4>
										<p><i class="fa fa-calendar"></i> <?php the_time('F j, Y'); ?> | <?php the_author(); ?></p>
					      				<p>
					      					<?php 
												$excerpt = get_the_excerpt();
												echo substr($excerpt, 0, 200);
												if (strlen($excerpt) > 200) echo " ...";
									 		?>
					      				</p>
					      				<p><a href="<?php the_permalink();?>" title="Read More">Read More <i class="fa fa-arrow-circle-right"></i></a></p>
					      			</div>
								</div>
							</div>
						<?php endif;?>
						<? $count++;?>
					<?php endwhile;?>
				<?php endif; ?>
				<?php
					$args = array(
						'before_pagination' => '<div class="col-xs-12"><div id="news-pagination" class="text-center clearfix margin-bottom-20"><ul class="pagination">',
						'show_all' 			=> true,
						'after_pagination'  => '</ul></div></div>',
						'before_link'       => '<li>',
						'after_link'        => '</li>',
					);
					wp_simple_pagination($args);
				?>	
			</div>
		</div>
		<?php get_sidebar();?>
	</div>
<?php get_footer(); ?>