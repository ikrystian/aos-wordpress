<ul>

<li>
  <article class="news-news">
    <a href="<?php the_permalink(); ?>" class="news-news__thumbnail reveal-image">
    <?php the_post_thumbnail( 'small-thumbnail', array('class' => 'news-news__image') ); ?>
    </a>
    <div class="news-news__data">
      <div class="news-news__date">
        <span>15</span>maj
      </div>
      <div>
        <h3 class="news-news__title">{{ article.title }}</h3>
        <div><i class="far fa-calendar-alt"></i>  {{ article.date}}r</div>
        <div><i class="fas fa-map-marker-alt"></i> {{article.place}}</div>
      </div>
    </div>
    <p class="news-news__introduction">
      {{article.introduction}}
    </p>
    <footer class="news-news__footer">
      <a href="<?php the_permalink(); ?>" class="news-news__button">Więcej</a>
    </footer>
  </article>
</li>
</ul>

<article class="grid-item post <?php if ( has_post_thumbnail() ) { ?>has-thumbnail <?php } ?>" data-aos="fade-up">
	<!-- post-thumbnail -->
	<div class="post-thumbnail" asdasd>
		<a href="<?php the_permalink(); ?>"></a>
	</div>
	<!-- /post-thumbnail -->

	<!-- inner-content -->
	<div class="inner-content">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="post-info">
			<?php echo get_the_excerpt(); ?>
			<?php
			$categories = get_the_category();
			$separator  = ', ';
			$output     = '';

			if ( $categories ) {
				?>
				<div class="tags">
					<?php
					foreach ( $categories as $category ) {
						$output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $separator;
					}
					echo trim( $output, $separator );
					?>
				</div>
				<?php
			}
			?>
		</p>

		<?php if ( is_search() or is_archive() ) { ?>
			<p class="excerpt content">
				<a href="<?php the_permalink(); ?>" class="button">Read More</a>
			</p>
		<?php
} else {
	if ( $post->post_excerpt ) {
			?>
			<p class="excerpt">
				<?php echo get_the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="button">Read More</a>
			</p>
			<?php
	} else {
	}
}
		?>
	</div>
	<!-- /inner-content -->
</article>
