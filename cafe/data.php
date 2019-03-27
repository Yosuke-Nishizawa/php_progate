<?php
require_once 'drink.php';
require_once 'food.php';
require_once 'person.php';

$p1 = new Person(true, 'suzuki');
$p2 = new Person(false, 'suzuki');
$p3 = new Person(false, 'tanaka');
$p4 = new Person(true, 'sato');

$juiceReview = array(
  array($p1 , '果肉たっぷりのオレンジジュースです!'),
  array($p2 , '普通のジュース')
);
$coffeeReview = array(
  array($p3 , '香りがいいです'),
  array($p4 , '苦みがちょうどよくて、おすすめです')
);
$curryReview = array(
  array($p1 , '具がゴロゴロしていてとてもおいしいです'),
  array($p2 , '値段の割においしいカレーだと思いました')
);
$pastaReview = array(
  array($p3 , 'ソースが絶品です。また食べたい。'),
  array($p4 , '具材にこだわりを感じました。')
);
$imgPath = 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/php/%s';
$juice = new Drink('JUICE',648, $juiceReview, sprintf($imgPath, 'juice.png'), false);
$coffee = new Drink('COFFEE',540, $coffeeReview, sprintf($imgPath, 'coffee.png'), true);
$curry = new Food('CURRY',970, $curryReview, sprintf($imgPath, 'curry.png'), 3);
$pasta = new Food('PASTA',1296, $pastaReview, sprintf($imgPath, 'pasta.png'), 1);

$menuList = array(
  $juice->getName() => $juice,
  $coffee->getName() => $coffee,
  $curry->getName() => $curry,
  $pasta->getName() => $pasta
);

?>