<link rel="stylesheet" href="<?= CSS_ROOT ?>/tile.css">
<div class="tile__main">
    <div class="tile__image <?= $tile['mask'] ? 'tile__image--mask' : '' ?>">
        <img class="tile__image" 
        src="<?= PHOTO_ROOT ?>/banners/<?= $tile['image_name'] ?>">
    </div>
    <div class="tile__content">
        <div class="tile__title"><?= $tile['title'] ?> </div>
        <div class="tile__dsc"><?= $tile['description'] ?></div>
        <a class="tile__button" href="<?= $tile['link'] ?>">Zobacz więcej</a>
    </div>
</div>
