<?php
require_once 'data.php';
$totalAmount = 0;
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Progate Cafe</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Lato" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="order-wrapper">
      <h2>注文内容確認</h2>
      <?php foreach($menuList as $menu):?>
        <?php 
          $itemNum = $_POST[$menu->getName()];
          $subTotalAmount = $menu->getAmount() * $itemNum;
          $totalAmount += $subTotalAmount;
        ?>
        <p class="order-amount"><?php echo sprintf('%s × %d個',$menu->getName(), $itemNum) ?></p>
        <p class="order-price"><?php echo $subTotalAmount ?>円</p>
      <?php endforeach ?>
      <h3>合計金額: <?php echo $totalAmount ?>円</h3>
    </div>
  </body>
</html>