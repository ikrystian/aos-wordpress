<?php
/*
Template Name: Events page
*/
get_header();
?> 
<div class="container container--flex">
<div class="news-page">
    <?php get_template_part( 'content', 'bar' ); ?>
  <section class="news-list">
    <h2 class="page-title">Wydarzenia</h2>

    <ul>

      <li>
        <article class="news-news">
          <a href="/event/{{ article.id }}" class="news-news__thumbnail reveal-image" [ngClass]="article.categoryClass">
            <img class="news-news__image" [src]="article.image" alt="">
          </a>
          <div class="news-news__data" [ngClass]="article.categoryClass">
            <div class="news-news__date">
              <span>15</span>maj
            </div>
            <div>
              <h3 class="news-news__title" [ngClass]="article.categoryClass">{{ article.title }}</h3>
              <div><i class="far fa-calendar-alt"></i>  {{ article.date}}r</div>
              <div><i class="fas fa-map-marker-alt"></i> {{article.place}}</div>
            </div>
          </div>
          <p class="news-news__introduction">
            {{article.introduction}}
          </p>
          <footer class="news-news__footer">
            <a href="/event/{{ article.id }}" class="news-news__button">Więcej</a>
          </footer>
        </article>
      </li>
    </ul>
  </section>


</div>
</div>

<?php
get_footer();