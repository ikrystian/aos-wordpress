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

    <app-calendar></app-calendar>

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
<?php wp_footer(); ?>
</body>
</html>
