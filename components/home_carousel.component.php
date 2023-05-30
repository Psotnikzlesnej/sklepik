
<link rel="stylesheet" href="<?= CSS_ROOT ?>/home_carousel.css">
<link rel="stylesheet" href="<?= CSS_ROOT ?>/icons.css">
<div class="home-carousel-container">
  <div class="home-carousel">
  <div class="home-carousel__arrow home-carousel__arrow--left">
    <i class="icon-arrow-left"></i>
  </div>
    <div class="home-carousel__container">
      <?php foreach($home_top as $banner): ?>
      <div class="home-carousel__element">
        <div class="home-carousel__element-content">
          <h1 class="home-carousel__title"><?= $banner['title'] ?></h1>
          <div class="home-carousel__description"><?= $banner['description'] ?></div>
          <div class="home-carousel__button"><a class="home-carousel__link" href="<?= $banner['link'] ?>">Zobacz więcej</a></div>
        </div>
        <div class="home-carousel__image-container">
          <img class="home-carousel__image <?= $banner['mask'] ? 'home-carousel__image--mask' : '' ?>" 
          src="<?= PHOTO_ROOT ?><?= $banner['image_name'] ?>" alt="<?= $banner['alt'] ?>">
        </div>
      </div>
      <?php endforeach ?>
    </div>
    <div class="home-carousel__arrow home-carousel__arrow--right">
      <i class="icon-arrow-right"></i>
    </div>
  </div>
  <div class="home-carousel__dots-container">
    <?php for($i = 0; $i < count($home_top); $i++): ?>
    <i class="home-carousel__dot"></i>
    <?php endfor; ?>
  </div>
</div>


<script src="<?= JS_ROOT ?>/home_carousel.js"></script> 




