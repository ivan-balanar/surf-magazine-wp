<?php
get_header();
?>

<section class="quote">
    <div class="quote-wrapper">
      <div class="quote__text">
        Surfing is the most blissful experience you can have on this planet, a taste of heaven.
      </div>
      <div class="quote__author">
        John McCarthy
      </div>
    </div>
  </section>

  <section class="club-desc">
    <div class="container">
      <div class="club-desc--wrapper">
        <div class="club-desc__img">
          <img src="<?php echo get_template_directory_uri()?>/img/img/img-2.jpg" alt="club">
        </div>
        <div class="club-desc__video">
          <img src="<?php echo get_template_directory_uri()?>/img/img/img-3.jpg" alt="photo">
          <div class="club-desc__video-control">
            <img src="<?php echo get_template_directory_uri()?>/img/controls/control-play.svg" alt="play">
          </div>
        </div>
        <div class="club-desc__text">
          <p>By better understanding the various aspects of surfing, you will improve faster and have more fun in the
            water.</p>
        </div>
        <div class="club-desc__link">
          <a class="read-more-link" href="#">Read More</a>
        </div>
      </div>
    </div>
  </section>

  <section class="shop">
    <div class="container">
      <h2 class="shop__title">
        <span class="shop__subtitle">Shop</span>
        Surfboards
      </h2>
    </div>

    <div class="container shop-slider-wrapper">
      <div class="shop-slider-special-holder">
        <div id="shopSlider" class="owl-carousel">
          <div class="shop-slider-item">
            <div class="shop-slider-item__img">
              <img class="shop-slider-item__image" src="<?php echo get_template_directory_uri()?>/img/boards/board-1.png" alt="board">
            </div>
            <div class="shop-slider-desc">
              <div class="shop-slider__cat">
                Funboards
              </div>
              <div class="shop-slider__title">
                Chilli Rare Bird
              </div>
              <div class="shop-slider-buy">
                <div class="shop-slider-buy__price">
                  $890
                </div>
                <div class="shop-slider-buy__link">
                  Buy
                </div>
              </div>
            </div>
          </div>
          <div class="shop-slider-item">
            <div class="shop-slider-item__img">
              <img class="shop-slider-item__image" src="<?php echo get_template_directory_uri()?>/img/boards/board-2.png" alt="board">
            </div>
            <div class="shop-slider-desc">
              <div class="shop-slider__cat">
                Surfboards
              </div>
              <div class="shop-slider__title">
                Emery NEM XF
              </div>
              <div class="shop-slider-buy">
                <div class="shop-slider-buy__price">
                  $950
                </div>
                <div class="shop-slider-buy__link">
                  Buy
                </div>
              </div>
            </div>
          </div>
          <div class="shop-slider-item">
            <div class="shop-slider-item__img">
              <img class="shop-slider-item__image" src="<?php echo get_template_directory_uri()?>/img/boards/board-3.png" alt="board">
            </div>
            <div class="shop-slider-desc">
              <div class="shop-slider__cat">
                Funboards
              </div>
              <div class="shop-slider__title">
                Agency GROM
              </div>
              <div class="shop-slider-buy">
                <div class="shop-slider-buy__price">
                  $670
                </div>
                <div class="shop-slider-buy__link">
                  Buy
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="shopSlider-controls">
        <div id="shopSliderLeft" class="shopSlider-left">
          <img src="<?php echo get_template_directory_uri()?>/img/controls/boards-left.svg" alt="left">
        </div>
        <div id="shopSliderRight" class="shopSlider-Right">
          <img src="<?php echo get_template_directory_uri()?>/img/controls/boards-right.svg" alt="right">
        </div>
      </div>
      
    </div>

    <div class="container">
      <div class="shop-link-wrapper">
        <a class="read-more-link" href="#">Show All</a>
      </div>
    </div>

  </section>

  <section class="container">
    <article class="article article--even">
      <div class="article__desc">
        <h2 class="article__title" data-number="01">
          Surf Training
        </h2>
        <div class="article__text">
          <p>By better understanding the various aspects of surfing, By better understanding the various aspects of
            surfing, you will improve faster and have more fun in the water.</p>
        </div>
        <a class="read-more-link" href="#">Show All</a>
      </div>
      <div class="article__preview">
        <img src="<?php echo get_template_directory_uri()?>/img/img/img-4.jpg" alt="camp">
        <div class="article__preview-desc">
          <div class="article__preview-desc-content">Surf&nbsp;Camps</div>
        </div>
      </div>
    </article>
  </section>

  <section class="container">
    <article class="article article--odd">
      <div class="article__desc">
        <h2 class="article__title" data-number="02">
          Point Break
        </h2>
        <div class="article__text">
          <p>By better understanding the various aspects of surfing, By better understanding the various aspects of
            surfing, you will improve faster and have more fun in the water.</p>
        </div>
        <a class="read-more-link" href="#">Show All</a>
      </div>
      <div class="article__preview">
        <img src="<?php echo get_template_directory_uri()?>/img/img/img-5.jpg" alt="camp">
        <div class="article__preview-desc">
          <div class="article__preview-desc-content">Surf&nbsp;Camps</div>
        </div>
      </div>
    </article>
  </section>

  <section class="subscribe-wrapper">
    <div class="subscribe">
      <h2 class="title">
        Join the Club
      </h2>
      <div class="title-desc">
        By better understanding the various aspects of surfing, you will improve faster and have more fun in the water.
      </div>
      <form action="" class="subscribe-form">
        <input type="text" placeholder="Your E-mail" class="subscribe__input">
        <input type="submit" class="subscribe__submit">
      </form>
    </div>
  </section>

  <section class="camp">
    <div class="camp__img" style="background-image: url(<?php echo get_template_directory_uri()?>/img/img/img-6.jpg);"></div>
    <div class="container flex-end">
      <div class="camp__desc">
        <div class="camp__label">Our Camp</div>
        <div class="camp__address">
          CA 919332, USA<br>
          Imperial Beach<br>
          560 Silver Strand Blvd
        </div>
        <a class="read-more-link" href="#">Get in Touch</a>
      </div>
    </div>
  </section>

<?php
get_footer();
