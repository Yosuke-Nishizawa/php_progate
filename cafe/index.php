<?php
require_once 'data.php';
require_once 'food.php';
require_once 'drink.php';
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
  <div class="menu-wrapper container">
    <h1 class="logo">Cafē Progate</h1>
    <h3>メニュー<?php echo count($menuList) ?>品</h3> 
    <form method="post" action="confirm.php">
      <div class="menu-items">
        <?php foreach($menuList as $menu): ?>
          <div class="menu-item">
            <img src="<?php echo $menu->getImg() ?>" class="menu-item-image">
            <h3 class="menu-item-name">
              <a href="show.php?name=<?php echo $menu->getName() ?>"><?php echo $menu->getName() ?></a>
            </h3>
            <?php if($menu instanceof Drink): ?>
              <p class="menu-item-type"><?php echo $menu->isHot() ? 'ホット' : 'アイス' ?></p>
            <?php elseif($menu instanceof Food): ?>
              <?php for($i=1;$i<=$menu->getHotness();$i++): ?>
                <img src="<?php echo sprintf($imgPath, 'chilli.png') ?>" class="icon-spiciness">
              <?php endfor ?>
            <?php endif ?>
            <p class="price">&yen;<?php echo $menu->getAmount() ?>(税込)</p>
            <input type="text" value="0" name="<?php echo $menu->getName() ?>">
            <span>個</span>
          </div>
        <?php endforeach ?>
      </div> 
      <input type="submit" value="注文する">
    </form>
  </div>
</body>
</html>