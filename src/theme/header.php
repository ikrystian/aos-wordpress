<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110577987-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-110577987-1');
	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <script src="https://kit.fontawesome.com/1d017b6199.js"></script>
	<?php wp_head(); ?>
	<style>
	 body {
      margin: 0;
      padding: 0;
    }

    .loader {
      z-index: 200;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #34495e;
      position: fixed;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
    }

    .hollowLoader {
      width: 3em;
      height: 3em;
      -webkit-animation: loaderAnim 1.25s infinite ease-in-out;
      animation: loaderAnim 1.25s infinite ease-in-out;
      outline: 1px solid transparent;
    }
    .hollowLoader .largeBox {
      height: 3em;
      width: 3em;
      background-color: #ECECEC;
      outline: 1px solid transparent;
      position: fixed;
    }
    .hollowLoader .smallBox {
      height: 3em;
      width: 3em;
      background-color: #34495e;
      position: fixed;
      z-index: 1;
      outline: 1px solid transparent;
      -webkit-animation: smallBoxAnim 1.25s alternate infinite ease-in-out;
      animation: smallBoxAnim 1.25s alternate infinite ease-in-out;
    }

    @-webkit-keyframes smallBoxAnim {
      0% {
        -webkit-transform: scale(0.2);
        transform: scale(0.2);
      }
      100% {
        -webkit-transform: scale(0.75);
        transform: scale(0.75);
      }
    }

    @keyframes smallBoxAnim {
      0% {
        -webkit-transform: scale(0.2);
        transform: scale(0.2);
      }
      100% {
        -webkit-transform: scale(0.75);
        transform: scale(0.75);
      }
    }
    @-webkit-keyframes loaderAnim {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
      }
    }
    @keyframes loaderAnim {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
      }
    }

	</style>
</head>

<body <?php body_class(); ?>>
<div class="loader" id="loader">

<div class="hollowLoader">
  <div class="largeBox"></div>
  <div class="smallBox"></div>
</div>
</div>
<header class="header">
  <a routerLink="/" class="header__logo logo">
    <picture>
      <source srcset="<?= get_template_directory_uri(); ?>/img/logo.png" media="(min-width: 768px)">
      <img src="<?= get_template_directory_uri(); ?>/img/logo-mobile.png" alt="logo" class="logo__image"/>
    </picture> 
  </a>

  <nav class="header__nav">
	<?php 
	wp_nav_menu();
	?>
    <button class="header__icon" id="toggle-search" title="Szukaj"><i class="fas fa-search"></i></button>
    <button class="header__icon show-newsletter" title="Zapisz się do listy mailingowej"><i class="fas fa-envelope-open-text"></i></button>
  </nav>
  <button class="mobile-menu-button" (click)="toggleNav()">
    <i class="fas fa-bars" *ngIf="!showNav"></i>
    <i class="fas fa-times i-opened" *ngIf="showNav"></i>
  </button>
  <section class="mobile-nav" [ngClass]="{'mobile-nav--opened' : showNav}">
    <app-nav class="mobile-navigation" ></app-nav>
  </section>
</header>
<div class="search-bar">
  <?php get_search_form(); ?>
</div>
<div class="page-container">
