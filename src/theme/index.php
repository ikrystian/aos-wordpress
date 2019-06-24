<?php get_header(); ?>
<!-- container -->
<div class="container container--flex">	
<div class="news-page">
    <?php get_template_part( 'content', 'bar' ); ?>
  <section class="news-list">
	<div class="site-content">

		<!-- main-column -->
		<div class="main-column grid">
			<ul class="news-list-grid">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
				?>
			</ul>
		</div>
		<!-- /main-column -->

		<?php
		else :
			get_template_part( 'content', 'none' );
		endif;
		?>

		<div class="pagination side">
			<?php echo paginate_links(); ?>
		</div> 
	</div>
	<!-- /site-content -->

	<?php get_sidebar(); ?>
</div>
	</div>
	</section>
<!-- /container -->

<?php get_footer(); ?>
