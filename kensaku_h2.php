<?php
ini_set("display_errors","On");
error_reporting(E_ALL);

try
{

/*できた風になっているがデータの上書きができていない。明日確認する。*/

session_start();
$code=$_SESSION['code'];
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
<link rel="stylesheet" href="h1.css" media="all">
</head>
<body>

<table>
<tr>
<td><h3 class="k"> 事業者情報</h3></td>
</tr>
</table>
<table border="1">
<form method="post" action="kensaku＿h2_branch.php">
<tr>
<td colspan="2" class="ab">事業者名</td>
<td class="q"><input type="text" name="zigyousya"value="<?php print $zigyousya; ?>" class="ba"></td>
</tr>
<tr>
<td rowspan="3" class="ab">住所</td>
<td class="ac">郵便番号</td>
<td class="q"><input type="text" name="yuubinbangou"value="<?php print $yuubinbangou; ?>" class="bb">※入力されると住所が自動的に入力されます。</td>
</tr>
<tr>
<td class="ac">都道府県・市区町村</td>
<td class="q"><input type="text" name="todouhuken"value="<?php print $todouhuken; ?>" class="bc"></td>
</tr>
<tr>
<td class="ac">町域・番地・建物名</td>
<td class="q"><input type="text" name="tyouiki"value="<?php print $tyouiki; ?>" class="bb"></td>
</tr>
<tr>
<td rowspan="3" class="ab">連絡先</td>
<td class="ac">電話番号</td>
<td class="q"><input type="text" name="denwabangou"value="<?php print $denwabangou; ?>" class="bb"></td>
</tr>
<tr>
<td class="ac">FAX番号</td>
<td class="q"><input type="text" name="faxbangou"value="<?php print $faxbangou; ?>" class="bd"></td>
</tr>
<tr>
<td class="ac">ホームページ</td>
<td class="q"><input type="text" name="hp"value="<?php print $hp; ?>" class="bd"></td>
</tr>
<tr>
<td colspan="2" class="ab">代表者氏名</td>
<td class="q"><input type="text" name="daihyousya"value="<?php print $daihyousya; ?>" class="be"></td>
</tr>
<tr>
<td colspan="2" class="aa">代表者職名</td>
<td class="q"><input type="text" name="syokumei"value="<?php print $syokumei; ?>" class="be"></td>
</tr>
</table>
<table>
<tr>
<td><h3 class="k"> 事業所情報</h3></td>
</tr>
</table>
<table border="1">
<tr>
<td colspan="2" class="ab">事業所名</td>
<td class="q"><input type="text" name="zigyousyo"value="<?php print $zigyousyo; ?>" class="ba"></td>
</tr>
<tr>
<td colspan="2" class="ab">介護サービスの種類</td>
<td class="q"><input type="text" name="kaigos"value="<?php print $kaigos; ?>" class="ba"></td>
</tr>
<tr>
<td colspan="2" class="ab">事業所番号</td>
<td class="q"><input type="text" name="zigyousyoba"value="<?php print $zigyousyoba; ?>" class="bf"></td>
</tr>
<tr>
<td rowspan="3" class="ab">住所</td>
<td class="ac">郵便番号</td>
<td class="q"><input type="text" name="yuubinbangou2"value="<?php print $yuubinbangou2; ?>" class="bb">※入力されると住所が自動的に入力されます。</td>
</tr>
<tr>
<td class="ac">都道府県・市区町村</td>
<td class="q"><input type="text" name="todouhuken2"value="<?php print $todouhuken2; ?>" class="bc"></td>
</tr>
<tr>
<td class="ac">町域・番地・建物名</td>
<td class="q"><input type="text" name="tyouiki2"value="<?php print $tyouiki2; ?>" class="bb"></td>
</tr>
<tr>
<td rowspan="3" class="ab">連絡先</td>
<td class="ac">電話番号</td>
<td class="q"><input type="text" name="zenwabangou2"value="<?php print $zenwabangou2; ?>" class="bb"></td>
</tr>
<tr>
<td class="ac">FAX番号</td>
<td class="q"><input type="text" name="FAX2"value="<?php print $FAX2; ?>" class="bd"></td>
</tr>
<tr>

</tr>
<tr>
<td colspan="2" class="ab">事業開始年月日</td>
<td class="q"><input type="text" name="zigyoukaisi"value="<?php print $zigyoukaisi; ?>" class="be"></td>
</tr>
<tr>
<td colspan="2" class="aa">サービス内容</td>
<td class="q"><input type="text" name="sabisunaiyou"value="<?php print $sabisunaiyou; ?>" class="be"></td>
</tr>
<input name="code" type="hidden" value="<?php print $code ?>
</table>
</br>

<table class="saigo">
<div class="pattern4">
<td><a href="#"onClick="document.location='kensaku_p.php';" class="square_btn">戻る</a></td>
</div>
<div class="pattern5">
<td><input type="submit"class="square_btn"value="登録する"></td>
</div>
</table>
</form>

</br>
</br>
</br>
</body>
</html>