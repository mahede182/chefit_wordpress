<?php get_header();?>
<!--////////////////////////////////////Container-->
		<div id="main-content" class="col-2-3">
			<div class="wrap-content">
				<?php while(have_post()):the_post();?>
				<article>
					<div class="art-header">
						<a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
						<div class="info"><?php the_date('F d, Y', 'Posted on ', 'in:');?>  <a href="#">Event</a></div>
					</div>
					<div class="art-content">
						<?php the_post_thumbnail();?>
						<p><?php echo wp_trim_words(get_the_content(), 30);?></p>
					</div>
					<a class="button button02" href="<?php the_permalink();?>">MORE</a>
				</article>
<?php endwhile;?>
<?php wp_reset_query();?>
			</div>
		</div>
		<div id="sidebar" class="col-1-3">
			<div class="wrap-sidebar">
				<!---- Start Widget ---->
				<?php dynamic_sidebar( 'fsidebar' );?>
			</div>
		</div>
	</div>
</section>
<?php get_footer();?>