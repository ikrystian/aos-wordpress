

<li>
  <article class="news-news">
    <a href="<?php the_permalink(); ?>" class="news-news__thumbnail reveal-image">
    <?php if(the_post_thumbnail()): ?>
    <?php the_post_thumbnail( 'small-thumbnail', array('class' => 'news-news__image') ); ?>
    <?php else: ?>
    <img src="https://picsum.photos/200/300" alt="" class="news-news__image">
    <?php endif; ?>
    </a>
    <div class="news-news__data">
      <div class="news-news__date">
        <span>15</span>maj
      </div>
      <div>
        <h3 class="news-news__title"><?php the_title(); ?></h3>
        <div><i class="far fa-calendar-alt"></i>  {{ article.date}}r</div>
        <div><i class="fas fa-map-marker-alt"></i> {{article.place}}</div>
      </div>
    </div>
    <p class="news-news__introduction">
	<?php echo get_the_excerpt(); ?>
    </p>
    <footer class="news-news__footer">
      <a href="<?php the_permalink(); ?>" class="news-news__button">Więcej</a>
    </footer>
  </article>
</li>
