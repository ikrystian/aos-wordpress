<footer class="footer">
      <nav class="footer__nav">
        <a href="" class="footer__link">POLITYKA PRYWATNOŚCI</a>
        <a href="" class="footer__link">PLIKI COOKIES</a>
        <a href="" class="footer__link">MAPA SERWISU</a>
        <a href="" class="footer__link">DLA MEDIÓW</a>
        <a href="" class="footer__link">BIULETYN INFORMACJI PUBLICZNEJ</a>
      </nav>
    </footer>
  </div>
</div>
  <aside class="sidebar">
    <ul class="events">
      <li>
        <a routerLink="event/1" class="events__items list-event list-event--work">
          <div class="list-event__date">
            <span>01</span>maj
          </div>
          <div class="list-event__data">
            <h3 class="list-event__title">Warsztat spin</h3>
            <span>Data wydarzenia</span>
            <span>Miejsce wydarzenia</span>
          </div>
        </a>
      </li>
      <li>
        <a routerLink="event/1" class="events__items list-event list-event--fun">
          <div class="list-event__date">
            <span>01</span>maj
          </div>
          <div class="list-event__data">
            <h3 class="list-event__title">Warsztat spin</h3>
            <span>Data wydarzenia</span>
            <span>Miejsce wydarzenia</span>
          </div>
        </a>
      </li>
      <li>
        <a routerLink="event/1" class="events__items list-event list-event--abc">
          <div class="list-event__date">
            <span>01</span>maj
          </div>
          <div class="list-event__data">
            <h3 class="list-event__title">Warsztat spin</h3>
            <span>Data wydarzenia</span>
            <span>Miejsce wydarzenia</span>
          </div>
        </a>
      </li>
    </ul>
  </aside>

</div>

<section class="cookie-info" id="cookie-info">
  <img src="<?= get_template_directory_uri(); ?>/img/cookie-monster.png" class="cookie-info__monster" alt="">
  <p>Nasza strona internetowa używa plików cookies. Surykatki zbierają dane statystyczne :) <a href="http://wszystkoociasteczkach.pl/polityka-cookies/">Dowiedz się więcej o ciasteczkach</a></p>
  <button title="Zamknij ciasteczka" id="close-cookies">X</button>
</section>
<div class="newsletter__wrapper">
  <section class="newsletter">

    <div class="newsletter__section newsletter__section--image" style="background-image: url('<?= get_template_directory_uri(); ?>/img/newsletter.jpg')">
    </div>
    <div class="newsletter__section newsletter__data">
      <div>
        <h1>Zapisz się do naszej listy mailingowej</h1>
        <h2>Dołącz do elitarnej grupy naszych sybskrybentów. Tajne stowarzyszenie przyjmie Cie z otwartymi rękoma !</h2>

        <div class="newsletter__form newsletter-form">
          <input autocomplete="off" type="text" class="newsletter-form__input" placeholder="email@domain.com" id="email">
          <button class="newsletter-form__button hide-newsletter">Zapisz się !</button>
        </div>
      </div>
    </div>
    <button class="newsletter__button hide-newsletter">x</button>
  </section>
</div>
<?php wp_footer(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.4/moment-timezone-with-data.min.js"></script>
<script>
  console.log(moment.tz('2017-07-07 23:59', 'Europe/Amsterdam'))
</script>
</body>
</html>
