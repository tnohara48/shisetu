<?php
ini_set("display_errors","On");
error_reporting(E_ALL);

try
{



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

$zigyousyo=$_SESSION['zigyousyo'];
$kaigos=$_SESSION['kaigos'];
$zigyousyoba=$_SESSION['zigyousyoba'];
$yuubinbangou2=$_SESSION['yuubinbangou2'];
$todouhuken2=$_SESSION['todouhuken2'];
$tyouiki2=$_SESSION['tyouiki2'];
$zenwabangou2=$_SESSION['zenwabangou2'];
$FAX2=$_SESSION['FAX2'];
$zigyoukaisi=$_SESSION['zigyoukaisi'];
$sabisunaiyou=$_SESSION['sabisunaiyou'];



}

catch (Exception $e)
{
    print 'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP基礎</title>
<link rel="stylesheet" href="h2.css" media="all">
</head>
<body>
<div id="content">
<div class="pattern2a">
<h1 class="oa">登録フォーム</h1>
</div>
<div class="pattern3a">
<img src="yazirushi3.jpg">
</div>
<table>
<tr>
<td class="xa"> 入力内容をご確認の上、「この内容で登録する」ボタンをクリックしてください。
</td>
</tr>
<tr>
<td><h3 class="ka"> 事業者情報</h3></td>
</tr>
</table>
<table border="1">
<tr>
<td colspan="2" class="aba">事業者名</td>
<td><?php print $zigyousya ?></td>
<tr>
<td rowspan="3" class="aba">住所</td>
<td class="aca">郵便番号</td>
<td><?php print $yuubinbangou ?></td>
</tr>
<tr>
<td class="aca">都道府県・市区町村</td>
<td><?php print $todouhuken ?></td>
</tr>
<tr>
<td class="aca">町域・番地・建物名</td>
<td><?php print $tyouiki ?></td>
</tr>
<tr>
<td rowspan="3" class="aba">連絡先</td>
<td class="aca">電話番号</td>
<td><?php print $denwabangou ?></td>
</tr>
<tr>
<td class="aca">FAX番号</td>
<td><?php print $faxbangou ?></td>
</tr>
<tr>
<td class="aca">ホームページ</td>
<td><?php print $hp ?></td>
</tr>
<tr>
<td colspan="2" class="aba">代表者氏名</td>
<td><?php print $daihyousya ?></td>
</tr>
<tr>
<td colspan="2" class="aaa">代表者職名</td>
<td><?php print $syokumei ?></td>
</tr>
</form>
</table>
<table class="cca">
<table>
<tr>
<td><h3 class="ka">サービス概要</h3></td>
</tr>
</table>
<table border="1">
<tr>
<td colspan="2" class="aba">事業所名</td>
<td><?php print $zigyousyo ?></td>
</tr>
<tr>
<td colspan="2" class="aba">介護サービスの種類</td>
<td><?php print $kaigos ?></td>
</tr>
<tr>
<td colspan="2" class="aba">事業所番号</td>
<td><?php print $zigyousyoba ?></td>
</tr>
<tr>
<td rowspan="3" class="aba">住所</td>
<td class="aca">郵便番号</td>
<td><?php print $yuubinbangou2 ?></td>
</tr>
<tr>
<td class="aca">都道府県・市区町村</td>
<td><?php print $todouhuken2 ?></td>
</tr>
<tr>
<td class="aca">町域・番地・建物名</td>
<td><?php print $tyouiki2 ?></td>
</tr>
<tr>
<td rowspan="3" class="aba">連絡先</td>
<td class="aca">電話番号</td>
<td><?php print $zenwabangou2 ?></td>
</tr>
<tr>
<td class="aca">FAX番号</td>
<td><?php print $FAX2 ?></td>
</tr>
<tr>
</tr>
<tr>
<td colspan="2" class="aba">事業開始年月日</td>
<td><?php print $zigyoukaisi ?></td>
</tr>
<tr>
<td colspan="2" class="aaa">サービス内容</td>
<td><?php print $sabisunaiyou ?></td>
</tr>
</table>
<table class="cca">
<form method="post" action="h3_branch.php">
<input name="zigyousya" type="hidden" value="<?php print $zigyousya ?>">
<input name="yuubinbangou" type="hidden" value="<?php print $yuubinbangou ?>">
<input name="todouhuken" type="hidden" value="<?php print $todouhuken ?>">
<input name="tyouiki" type="hidden" value="<?php print $tyouiki ?>">
<input name="denwabangou" type="hidden" value="<?php print $denwabangou ?>">
<input name="faxbangou" type="hidden" value="<?php print $faxbangou ?>">
<input name="hp" type="hidden" value="<?php print $hp ?>">
<input name="daihyousya" type="hidden" value="<?php print $daihyousya ?>">
<input name="syokumei" type="hidden" value="<?php print $syokumei ?>">

<input name="zigyousyo" type="hidden" value="<?php print $zigyousyo ?>">
<input name="kaigos" type="hidden" value="<?php print $kaigos ?>">
<input name="zigyousyoba" type="hidden" value="<?php print $zigyousyoba ?>">
<input name="yuubinbangou2" type="hidden" value="<?php print $yuubinbangou2 ?>">
<input name="todouhuken2" type="hidden" value="<?php print $todouhuken2 ?>">
<input name="tyouiki2" type="hidden" value="<?php print $tyouiki2 ?>">
<input name="zenwabangou2" type="hidden" value="<?php print $zenwabangou2 ?>">
<input name="FAX2" type="hidden" value="<?php print $FAX2 ?>">
<input name="zigyoukaisi" type="hidden" value="<?php print $zigyoukaisi ?>">
<input name="sabisunaiyou" type="hidden" value="<?php print $sabisunaiyou ?>">
</br>
<div class="pattern2a">
<td><a href="#"onClick="document.location='h1.php';" class="square_btna">修正する</a></td>
</div>
<div class="pattern3a">
<td><input type="submit"class="square_btna"value="この内容で登録する"></td>
</div>
</form>
</table>
</br>
</table>
</div>
</body>
</html>