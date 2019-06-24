<aside class="help-bar">

  <ul class="short-links" *ngIf="nodes">
    <li class="short-links__item" *ngFor="let node of nodes">
      <a class="short-links__link" (click)="scroll(node.id)">{{ node.innerText }}</a>
    </li>
  </ul>

  <section class="archive">
    <h3 class="archive__title">Archiwum</h3>
    <ul class="archive__years">
      <li>
        <span><a href="#">2019</a></span>
        <ul class="archive__months">
          <li><a href="#">Styczeń</a></li>
          <li><a href="#">Luty</a></li>
          <li><a href="#">Marzec</a></li>
          <li><a href="#">Kwiecień</a></li>
          <li><a href="#">Maj</a></li>
        </ul>
      </li>
      <li><span><a href="">2018</a></span></li>
    </ul>
  </section>

  <section class="newsletter-aside">
    <button class="newsletter-aside__button" (click)="openNewsletterModal()"><span>newsletter</span></button>
  </section>

  <ul class="social">
    <li><a href="https://www.instagram.com/sztukanauki.eu/" class="social__link"><i class="fab fa-instagram"></i></a></li>
    <li><a href="https://www.facebook.com/sztukanauki.eu" class="social__link"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="#" class="social__link"><i class="fab fa-youtube"></i></a></li>
  </ul>
</aside>
