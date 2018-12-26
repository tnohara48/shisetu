<?php
session_start();
$zigyousya=$_SESSION['zigyousya'];
$yuubinbangou=$_SESSION['yuubinbangou'];
$todouhuken=$_SESSION['todouhuken'];
$tyouiki=$_SESSION['tyouiki'];
$denwabangou=$_SESSION['denwabangou'];
$faxbangou=$_SESSION['faxbangou'];
$hp=$_SESSION['hp'];
$daihyousya=$_SESSION['daihyousya'];
$syokumei=$_SESSION['syokumei'];

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
<img src="yazirushi2.jpg">
</div>
<table>
<tr>
<td><h3 class="k"> 事業所情報</h3></td>
</tr>
</table>
<table border="1">
<form method="post" action="h2_branch.php">
<tr>
<td colspan="2" class="ab">事業所名</td>
<td class="q"><input type="text" name="zigyousyo"value="" class="ba"></td>
</tr>
<tr>
<td colspan="2" class="ab">介護サービスの種類</td>
<td class="q"><input type="text" name="kaigos"value="" class="ba"></td>
</tr>
<tr>
<td colspan="2" class="ab">事業所番号</td>
<td class="q"><input type="text" name="zigyousyoba"value="" class="bf"></td>
</tr>
<tr>
<td rowspan="3" class="ab">住所</td>
<td class="ac">郵便番号</td>
<td class="q"><input type="text" name="yuubinbangou2"value="" class="bb">※入力されると住所が自動的に入力されます。</td>
</tr>
<tr>
<td class="ac">都道府県・市区町村</td>
<td class="q"><input type="text" name="todouhuken2"value="" class="bc"></td>
</tr>
<tr>
<td class="ac">町域・番地・建物名</td>
<td class="q"><input type="text" name="tyouiki2"value="" class="bb"></td>
</tr>
<tr>
<td rowspan="3" class="ab">連絡先</td>
<td class="ac">電話番号</td>
<td class="q"><input type="text" name="zenwabangou2"value="" class="bb"></td>
</tr>
<tr>
<td class="ac">FAX番号</td>
<td class="q"><input type="text" name="FAX2"value="" class="bd"></td>
</tr>
<tr>

</tr>
<tr>
<td colspan="2" class="ab">事業開始年月日</td>
<td class="q"><input type="text" name="zigyoukaisi"value="" class="be"></td>
</tr>
<tr>
<td colspan="2" class="aa">サービス内容</td>
<td class="q"><input type="text" name="sabisunaiyou"value="" class="be"></td>
</tr>
</table>
<table class="cc">
</br>
</br>
</br>
<tr>
<input name="zigyousya" type="hidden" value="<?php print $zigyousya ?>">
<input name="yuubinbangou" type="hidden" value="<?php print $yuubinbangou ?>">
<input name="todouhuken" type="hidden" value="<?php print $todouhuken ?>">
<input name="tyouiki" type="hidden" value="<?php print $tyouiki ?>">
<input name="denwabangou" type="hidden" value="<?php print $denwabangou ?>">
<input name="faxbangou" type="hidden" value="<?php print $faxbangou ?>">
<input name="hp" type="hidden" value="<?php print $hp ?>">
<input name="daihyousya" type="hidden" value="<?php print $daihyousya ?>">
<input name="syokumei" type="hidden" value="<?php print $syokumei ?>">
<td><input type="submit"class="square_btn"value="次へ"></td>
</tr>
</form>
</table>
</div>
</body>
</html>