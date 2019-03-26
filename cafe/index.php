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
    <h3>メニュー2品</h3> 
    <form method="post" action="confirm.php">
      <div class="menu-items">
        <div class="menu-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/juice.png" class="menu-item-image">
          <h3 class="menu-item-name">
            <a href="show.php?name=JUICE">JUICE</a>
          </h3>
          <p class="menu-item-type">アイス</p>
          <p class="price">&yen;648(税込)</p>
          <input type="text" value="0" name="JUICE">
          <span>個</span>
        </div>
        <div class="menu-item">
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/curry.png" class="menu-item-image">
          <h3 class="menu-item-name">
            <a href="show.php?name=CURRY">CURRY</a>
          </h3>
          <img src="https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/chilli.png" class="icon-spiciness">
          <p class="price">&yen;972(税込)</p>
          <input type="text" value="0" name="CURRY">
          <span>個</span>
        </div>
      </div> 
      <input type="submit" value="注文する">
    </form>
  </div>
</body>
</html>