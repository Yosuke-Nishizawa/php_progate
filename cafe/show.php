<?php
  require_once 'data.php';
  $menu = $menuList[$_GET['name']];
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cafe Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico|Lato" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="review-wrapper">
    <img src="<?php echo $menu->getImg() ?>" class="menu-item-image">
    <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
    <?php if($menu instanceof Drink): ?>
      <p class="menu-item-type"><?php echo $menu->isHot() ? 'ホット' : 'アイス' ?></p>
    <?php elseif($menu instanceof Food): ?>
      <?php for($i=1;$i<=$menu->getHotness();$i++): ?>
        <img src="<?php echo sprintf($imgPath, 'chilli.png') ?>" class="icon-spiciness">
      <?php endfor ?>
    <?php endif ?>
    <p class="price">&yen;<?php echo $menu->getAmount() ?>(税込)</p>
    <div class="review-list-wrapper">
      <div class="review-list">
        <div class="review-list-title">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/review.png" class="icon-review">
          <h4>レビュー一覧</h4>
        </div>
        <?php foreach($menu->getReviews() as $review): ?>
          <?php $person = $review[0]; $text = $review[1]; ?>
          <div class="review-list-item">
            <div class="review-user">
              <img src="<?php echo sprintf($imgPath, $person->isMale() ? 'male.png' : 'female.png') ?>" class="icon-user">
              <p><?php echo $person->getName() ?></p>
            </div>
            <p class="review-text"><?php echo $text ?></p>
          </div>
        <?php endforeach ?>
      </div>
      <a href="index.php">← メニュー一覧へ</a>
    </div>
  </div>
</body>
</html>