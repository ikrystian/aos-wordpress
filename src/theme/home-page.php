<?php
/*
Template Name: Home page
*/
get_header();
?> 

<section
    class="home"
    style="background-image: url('<?= get_template_directory_uri(); ?>/img/home.jpg')"
  >
    <a routerLink="event/{{ lastEvent.id }}" class="home__link" title="Przejdź do wydarzenia"></a>
    <div class="home__date"><span>{{ lastEvent.day }}</span> {{ lastEvent.month }}</div>
 
    <h2 class="home__title">{{ lastEvent.title }}</h2>

    <section class="articles" >
      <article class="article articles__item" *ngFor="let event of events">
        <h2 class="article__title"><a routerLink="event/{{ event.id }}" class="article__link">{{ event.title }}</a></h2>
        <span class="article__date"> <i class="far fa-calendar-alt"></i> <strong> {{ event.date }}r</strong></span>
        <span class="article__category">Kategoria: {{ event.category }}</span>
        <p class="article__introduction">
          {{ event.introduction }}
        </p>
      </article>


    </section>
  </section>

<?php
get_footer();