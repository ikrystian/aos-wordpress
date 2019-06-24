<aside class="help-bar">

  <ul class="short-links" *ngIf="nodes">
    <li class="short-links__item" *ngFor="let node of nodes">
      <a class="short-links__link" (click)="scroll(node.id)">{{ node.innerText }}</a>
    </li>
  </ul>
  
  <div class="archive">
  <?php get_sidebar(); ?>
  </div>

  <section class="newsletter-aside">
    <button class="newsletter-aside__button show-newsletter"><span>newsletter</span></button>
  </section>

  <ul class="social">
    <li><a href="https://www.instagram.com/sztukanauki.eu/" class="social__link"><i class="fab fa-instagram"></i></a></li>
    <li><a href="https://www.facebook.com/sztukanauki.eu" class="social__link"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="#" class="social__link"><i class="fab fa-youtube"></i></a></li>
  </ul>
</aside>
