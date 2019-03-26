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
        <select name="age">
          <option value="未選択">選択してください</option>
          <?php for($i=6;$i<=100;$i++) :?>
            <option value="<?php echo $i?>"><?php echo $i?></option>
          <?php endfor ?>
        </select>
        <div class="form-item">お問い合わせの種類</div>
        <select name="category">
          <option value="未選択">選択してください</option>
          <option value="Progateに関するお問い合わせ">Progateに関するお問い合わせ</option>
          <option value="Progateに対する意見">Progateに対する意見</option>
          <option value="採用に関するお問い合わせ">採用に関するお問い合わせ</option>
          <option value="取材・メディア関連のお問い合わせ">取材・メディア関連のお問い合わせ</option>
          <option value="料金に関するお問い合わせ">料金に関するお問い合わせ</option>
          <option value="その他">その他</option>
        </select>
        <div class="form-item">内容</div>
        <textarea name="body"></textarea>
        <input type="submit" value="送信">
      </form>
    </div>

  </div>
  <div class="footer">
    <div class="footer-left">
      <ul>
        <li>会社概要</li>
        <li>採用</li>
        <li>お問い合わせ</li>
      </ul>
    </div>
    <div class="like-box">
      <iframe src="https://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539&show_faces=false" scrolling="no" frameborder="0" style="border:none;overflow:hidden; height:300px;" allowtransparency="true"></iframe>
    </div>
  </div>
</body>
</html>