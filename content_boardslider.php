<?php
  $type = get_post_meta( get_the_ID(), 'type_board', true);
  $price = get_post_meta( get_the_ID(), 'price_board', true);
?>	
<div class="shop-slider-item">
  <div class="shop-slider-item__img">
    <img class="shop-slider-item__image" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'board-slider' ); ?>" alt="board">
  </div>
  <div class="shop-slider-desc">
    <div class="shop-slider__cat"><?=$type?></div>
    <div class="shop-slider__title"><?php the_title(); ?></div>
    <div class="shop-slider-buy">
      <div class="shop-slider-buy__price"><?=$price?></div>
      <div class="shop-slider-buy__link">Buy</div>
    </div>
  </div>
</div>