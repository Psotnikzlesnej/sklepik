<link rel="stylesheet" href="styles\featured.css">
<!-- 
        <div class="bg"> 
           
                <div class="text">Polecane produkty</div>
                <div class="rectangle"></div>
                <div class="border"></div> -->
           
<div class="featured">
    <h2 class="featured__title">Polecane produkty</h2>
    <div class="featured__custom-break"></div>
    <div class="featured-carousel">
        <div class="featured-carousel__arrow featured-carousel__arrow--left">
            <i class="icon-arrow-left"></i>
        </div>
        <div class="featured-carousel__product-container">
            <div class="featured-carousel__product"><?php include __DIR__ .'/../components/item.component.php' ?></div>
            <div class="featured-carousel__product"><?php include __DIR__ .'/../components/item.component.php' ?></div>
            <div class="featured-carousel__product"><?php include __DIR__ .'/../components/item.component.php' ?></div>
            <div class="featured-carousel__product"><?php include __DIR__ .'/../components/item.component.php' ?></div>
            <div class="featured-carousel__product"><?php include __DIR__ .'/../components/item.component.php' ?></div>
            <div class="featured-carousel__product"><?php include __DIR__ .'/../components/item.component.php' ?></div>
            <div class="featured-carousel__product"><?php include __DIR__ .'/../components/item.component.php' ?></div>
        </div>
        <div class="featured-carousel__arrow featured-carousel__arrow--right">
            <i class="icon-arrow-right"></i>
        </div>
    </div>
    <a href="" class="featured__button">Zobacz wszystkie inspiracje</a>
</div>
<script src="js/featured.js"></script> 