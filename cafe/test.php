<?php
require_once 'data.php';
foreach($menuList['JUICE']->getReviews() as $review){
  var_dump($review[1]).'<br><br><br>';
}
?>