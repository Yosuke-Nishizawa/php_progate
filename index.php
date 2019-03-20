<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="header">
    <div class="header-left">Progate</div>
    <div class="header-right">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li class="selected">お問い合わせ</li>
      </ul>
    </div>
  </div>
  <div class="main">
    <div class="contact-form">
      <div class="form-title">お問い合わせ</div>
      <form method="post" action="sent.php">
        <div class="form-item">名前</div>
        <input type="text" name="name">
        <div class="form-item">年齢</div>
        <select name="age"></select>
        <div class="form-item">お問い合わせの種類</div>
        <select name="category"></select>
        <div class="form-item">内容</div>
        <textarea name="body"></textarea>
        <input type="submit" value="送信">
      </form>
    </div>

  </div>
</body>
</html>