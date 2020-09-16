<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Surfing Club</title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>
    <nav class="container navigation__wrapper">
      <div class="nav-logo-wrapper">
        <a href="#" class="logo">
          <img width="16" src="<?php echo get_template_directory_uri()?>/img/logo/logo.svg" alt="logo">
        </a>
      </div>
      <div class="site-desc">
        <div class="site-desc__content">
          First&nbsp;Surfing&nbsp;Magazine
        </div>
      </div>
      <ul class="navigation">
        <li class="navigation__item">
          <a class="navigation__link" href="#">Stories</a>
        </li>
        <li class="navigation__item">
          <a class="navigation__link" href="#">Events</a>
        </li>
        <li class="navigation__item">
          <a class="navigation__link" href="#">Places</a>
        </li>
        <li class="navigation__item">
          <a class="navigation__link" href="#">Boards</a>
        </li>
      </ul>
    </nav>
    <div class="slide-wrapper">
      <div class="container relative">
        <div class="header-social-wrapper">
          <div class="social social--vertical">
            <a href="#" class="social__item">
              <img src="<?php echo get_template_directory_uri()?>/img/socials/social-tumblr.svg" alt="tumblr">
            </a>
            <a href="#" class="social__item">
              <img src="<?php echo get_template_directory_uri()?>/img/socials/social-twitter.svg" alt="twitter">
            </a>
            <a href="#" class="social__item">
              <img src="<?php echo get_template_directory_uri()?>/img/socials/social-vimeo.svg" alt="vimeo">
            </a>
          </div>
        </div>
      </div>
      <div id="headerSlider" class="owl-carousel">
        <div class="container slide-item">
          <div class="slide-item__desc">
            <h2 class="slide-item__heading">
              <span>Your</span>
              Beautiful Escape
            </h2>
            <div class="slide-item__text">
              <p>One of the greatest things about the sport of surfing is that you need only three things: your body, a
                surfboard, and a wave.</p>
            </div>
          </div>
          <div class="slide-item__img slide-item__img--bg-1"></div>
        </div>
        <div class="container slide-item">
          <div class="slide-item__desc">
            <h2 class="slide-item__heading">
              <span>Your</span>
              Beautiful Escape
            </h2>
            <div class="slide-item__text">
              <p>One of the greatest things about the sport of surfing is that you need only three things: your body, a
                surfboard, and a wave.</p>
            </div>
          </div>
          <div class="slide-item__img slide-item__img--bg-1"></div>
        </div>
        <div class="container slide-item">
          <div class="slide-item__desc">
            <h2 class="slide-item__heading">
              <span>Your</span>
              Beautiful Escape
            </h2>
            <div class="slide-item__text">
              <p>One of the greatest things about the sport of surfing is that you need only three things: your body, a
                surfboard, and a wave.</p>
            </div>
          </div>
          <div class="slide-item__img slide-item__img--bg-1"></div>
        </div>
        <div class="container slide-item">
          <div class="slide-item__desc">
            <h2 class="slide-item__heading">
              <span>Your</span>
              Beautiful Escape
            </h2>
            <div class="slide-item__text">
              <p>One of the greatest things about the sport of surfing is that you need only three things: your body, a
                surfboard, and a wave.</p>
            </div>
          </div>
          <div class="slide-item__img slide-item__img--bg-1"></div>
        </div>
        <div class="container slide-item">
          <div class="slide-item__desc">
            <h2 class="slide-item__heading">
              <span>Your</span>
              Beautiful Escape
            </h2>
            <div class="slide-item__text">
              <p>One of the greatest things about the sport of surfing is that you need only three things: your body, a
                surfboard, and a wave.</p>
            </div>
          </div>
          <div class="slide-item__img slide-item__img--bg-1"></div>
        </div>
      </div>
      <div class="container relative">
        <div class="slide-controls">
          <a id="headerSliderLeft" class="slide-controls__left" href="#">
            <img src="<?php echo get_template_directory_uri()?>/img/controls/header-slider-left.svg" alt="left">
          </a>

          <div class="slide-controls__number">
            <span class="slide-controls__number-active"></span>
            <span class="slide-controls__number-from"> / </span>
            <span class="slide-controls__number-total"></span>
          </div>
          <a id="headerSliderRight" class="slide-controls__right" href="#">
            <img src="<?php echo get_template_directory_uri()?>/img/controls/header-slider-right.svg" alt="right">
          </a>
        </div>
      </div>
    </div>

  </header>