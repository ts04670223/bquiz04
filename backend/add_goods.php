<h2 class="ct">新增商品</h2>
<form method="POST" action="api/add_goods.php">
<table class="all">
<tr></tr>
  <td class="tt">所屬大分類</td>
  <td class="pp"><select name="big" id="big"></select></td>
</tr>
<tr>
  <td class="tt">所屬中分類</td>
  <td class="pp"><select name="mid" id="mid"></select></td>
</tr>
<tr>
  <td class="tt">商品編號</td>
  <td class="pp"><input type="text" name="num"></td>
</tr>
<tr>
  <td class="tt">商品名稱</td>
  <td class="pp"><input type="text" name="name"></td>
</tr>
<tr>
  <td class="tt">商品價格</td>
  <td class="pp"><input type="text" name="price"></td>
</tr>
<tr>
  <td class="tt">規格</td>
  <td class="pp"><input type="text" name="spec"></td>
</tr>
<tr>
  <td class="tt">庫存量</td>
  <td class="pp"><input type="number" name="quota"></td>
</tr>
<tr>
  <td class="tt">商品圖片</td>
  <td class="pp"><input type="file" name="img"></td>
</tr>
<tr>
  <td class="tt">商品介紹</td>
  <td class="pp"><textarea name="intro" style="width: 90%;height:200px;"></textarea></td>
</tr>
</table>
<div class="ct">
<input type="submit" value="新增">
<input type="reset" value="重置">
<input type="button" value="返回" onclick="history.go(-1)">
</div>
</form>