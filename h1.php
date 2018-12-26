<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP基礎</title>
<link rel="stylesheet" href="h1.css" media="all">
</head>
<body>
<div id="content">
<div class="pattern2">
<h1 class="o">登録フォーム</h1>
</div>
<div class="pattern3">
<img src="yazirushi1.jpg">
</div>
<table>
<tr>
<td><h3 class="k"> 事業者情報</h3></td>
</tr>
</table>
<table border="1">
<form method="post" action="h1_branch.php">
<tr>
<td colspan="2" class="ab">事業者名</td>
<td class="q"><input type="text" name="zigyousya"value="" class="ba"></td>
</tr>
<tr>
<td rowspan="3" class="ab">住所</td>
<td class="ac">郵便番号</td>
<td class="q"><input type="text" name="yuubinbangou"value="" class="bb">※入力されると住所が自動的に入力されます。</td>
</tr>
<tr>
<td class="ac">都道府県・市区町村</td>
<td class="q"><input type="text" name="todouhuken"value="" class="bc"></td>
</tr>
<tr>
<td class="ac">町域・番地・建物名</td>
<td class="q"><input type="text" name="tyouiki"value="" class="bb"></td>
</tr>
<tr>
<td rowspan="3" class="ab">連絡先</td>
<td class="ac">電話番号</td>
<td class="q"><input type="text" name="denwabangou"value="" class="bb"></td>
</tr>
<tr>
<td class="ac">FAX番号</td>
<td class="q"><input type="text" name="faxbangou"value="" class="bd"></td>
</tr>
<tr>
<td class="ac">ホームページ</td>
<td class="q"><input type="text" name="hp"value="" class="bd"></td>
</tr>
<tr>
<td colspan="2" class="ab">代表者氏名</td>
<td class="q"><input type="text" name="daihyousya"value="" class="be"></td>
</tr>
<tr>
<td colspan="2" class="aa">代表者職名</td>
<td class="q"><input type="text" name="syokumei"value="" class="be"></td>
</tr>
</table>
<table class="cc">
</br>
</br>
</br>
<tr>
<td><input type="submit"class="square_btn"value="次へ"></td>
</tr>
</form>
</table>
</div>
</body>
</html>