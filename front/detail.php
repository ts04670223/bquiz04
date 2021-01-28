<?php
$g = $Goods->find($_GET['id']);

?>

<h2><?= $g['name']; ?></h2>
<div class="pp" style="display: flex;">
  <div><img src="img/<?= $g['img']; ?>" style="width: 200px;"></div>
  <div style="width: 100%;">
    <div style="border-bottom: 3px solid white;">分類:<?= $Type->find($g['big'])['name']; ?>><?= $Type->find($g['mid'])['name']; ?></div>
    <div style="border-bottom: 3px solid white;">編號:<?= $g['num']; ?></div>
    <div style="border-bottom: 3px solid white;">價錢:<?= $g['price']; ?></div>
    <div style="border-bottom: 3px solid white;">詳細說明:<?= $g['intro']; ?></div>
    <div>庫存量:<?= $g['quota']; ?></div>
  </div>
</div>
<div style="border-top: 3px solid white;" class="tt ct">
  <form action="?do=buycar&id=<?= $goods['id']; ?>" method="get">
    購買數量:<input type="number" name="qt" value="1">
    <input type="hidden" name="do" value="buycart">
    <input type="hidden" name="goods" value="<?= $g['id']; ?>">
    <input type="submit" value="" style="background:url('icon/0402.jpg');width:60px;height:20px">
  </form>
</div>
<div class="ct"><button onclick="lof('?do=main')">返回</button></div>