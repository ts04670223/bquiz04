<?php
$g=$Goods->find($_GET['id']);

?>

<h2><?=$g['name'];?></h2>
<div class="pp" style="display: flex;">
  <div><a href="?do=detail.php&id=<?=$g['id'];?>"><img src="img/<?=$g['img'];?>" style="width: 200px;"></a></div>
  <div style="width: 100%;">
    <div class="tt ct" ><?=$g['name'];?></div>
    <div>價錢:<?=$g['price'];?>
  </div>
    <div>編號:<?=$g['num'];?></div>
    <div>規格:<?=$g['spec'];?></div>
    <div>簡介:<?=mb_substr($g['intro'],0,25,'utf8');?></div>
    <div>庫存量:<?=$g['quota'];?></div>
  </div>
</div>
<div class="tt ct">
  <form action="?do=buycar&id=<?=$goods['id'];?>" method="get">
    購買數量:<input type="number" name="qt" value="1">
    <input type="hidden" name="do" value="buycart">
    <input type="hidden" name="id" value="<?=$g['id'];?>">
<input type="submit" value="" style="background:url('icon/0402.jpg');width:60px;height:20px">
</form>
</div>
<div class="ct"><button onclick="lof('?do=main')">返回</button></div>
