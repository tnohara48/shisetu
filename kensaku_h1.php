<?php
ini_set("display_errors","On");
error_reporting(E_ALL);

$dsn='mysql:dbname=company;host=localhost;charset=utf8';
$user = 'root';
$password = 'shop_tnohara';

try
{
    if(isset($_POST['code'])==true)
    {

        $code=$_POST['code'];
    }
    $dbh = new PDO($dsn, $user, $password);

    $sql=("SELECT * FROM dat_company WHERE code LIKE (:code) ");
    $statement = $dbh->prepare($sql);
    $code = $_POST['code'];
    $like_code = "%".$code."%";
    $statement->bindValue(':code', $like_code, PDO::PARAM_STR);


    if($statement->execute()){
        //レコード件数取得
        $row_count = $statement->rowCount();

        while($row = $statement->fetch()){
            $rows[] = $row;
        }



}
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
<table>
<td><h1 class="h">ユーザー情報編集</h1></td>
</table>
<table>
<tr>
<td><h3 class="ka"> 事業者情報</h3></td>
</tr>
</table>
<table border="1">
<?php
foreach($rows as $row){
?>
<tr>
<td colspan="2" class="aba">事業者名</td>
<td><?=htmlspecialchars($row['zigyousya'],ENT_QUOTES,'UTF-8')?></td>
<tr>
<td rowspan="3" class="aba">住所</td>
<td class="aca">郵便番号</td>
<td><?=htmlspecialchars($row['yuubinbangou'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<tr>
<td class="aca">都道府県・市区町村</td>
<td><?=htmlspecialchars($row['todouhuken'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<tr>
<td class="aca">町域・番地・建物名</td>
<td><?=htmlspecialchars($row['tyouiki'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<tr>
<td rowspan="3" class="aba">連絡先</td>
<td class="aca">電話番号</td>
<td><?=htmlspecialchars($row['denwabangou'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<tr>
<td class="aca">FAX番号</td>
<td><?=htmlspecialchars($row['faxbangou'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<tr>
<td class="aca">ホームページ</td>
<td><?=htmlspecialchars($row['hp'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<tr>
<td colspan="2" class="aba">代表者氏名</td>
<td><?=htmlspecialchars($row['daihyousya'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<tr>
<td colspan="2" class="aaa">代表者職名</td>
<td><?=htmlspecialchars($row['syokumei'],ENT_QUOTES,'UTF-8')?></td>
</tr>
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
<td><?=htmlspecialchars($row['zigyousyo'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<tr>
<td colspan="2" class="aba">介護サービスの種類</td>
<td><?=htmlspecialchars($row['kaigos'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<tr>
<td colspan="2" class="aba">事業所番号</td>
<td><?=htmlspecialchars($row['zigyousyoba'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<tr>
<td rowspan="3" class="aba">住所</td>
<td class="aca">郵便番号</td>
<td><?=htmlspecialchars($row['yuubinbangou2'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<tr>
<td class="aca">都道府県・市区町村</td>
<td><?=htmlspecialchars($row['todouhuken2'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<tr>
<td class="aca">町域・番地・建物名</td>
<td><?=htmlspecialchars($row['tyouiki2'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<tr>
<td rowspan="3" class="aba">連絡先</td>
<td class="aca">電話番号</td>
<td><?=htmlspecialchars($row['zenwabangou2'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<tr>
<td class="aca">FAX番号</td>
<td><?=htmlspecialchars($row['FAX2'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<tr>
</tr>
<tr>
<td colspan="2" class="aba">事業開始年月日</td>
<td><?=htmlspecialchars($row['zigyoukaisi'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<tr>
<td colspan="2" class="aaa">サービス内容</td>
<td><?=htmlspecialchars($row['sabisunaiyou'],ENT_QUOTES,'UTF-8')?></td>
</tr>
<?php }?>
</table>
<table class="cca">
<form method="post" action="kensaku＿h1_branch.php">
<input name="code" type="hidden" value="<?php print $code ?>">
<input name="zigyousya" type="hidden" value="<?php print $row['zigyousya'] ?>">
<input name="yuubinbangou" type="hidden" value="<?php print $row['yuubinbangou'] ?>">
<input name="todouhuken" type="hidden" value="<?php print $row['todouhuken'] ?>">
<input name="tyouiki" type="hidden" value="<?php print $row['tyouiki'] ?>">
<input name="denwabangou" type="hidden" value="<?php print $row['denwabangou'] ?>">
<input name="faxbangou" type="hidden" value="<?php print $row['faxbangou'] ?>">
<input name="hp" type="hidden" value="<?php print $row['hp'] ?>">
<input name="daihyousya" type="hidden" value="<?php print $row['daihyousya'] ?>">
<input name="syokumei" type="hidden" value="<?php print $row['syokumei'] ?>">

<input name="zigyousyo" type="hidden" value="<?php print $row['zigyousyo'] ?>">
<input name="kaigos" type="hidden" value="<?php print $row['kaigos'] ?>">
<input name="zigyousyoba" type="hidden" value="<?php print $row['zigyousyoba'] ?>">
<input name="yuubinbangou2" type="hidden" value="<?php print $row['yuubinbangou2'] ?>">
<input name="todouhuken2" type="hidden" value="<?php print $row['todouhuken2'] ?>">
<input name="tyouiki2" type="hidden" value="<?php print $row['tyouiki2'] ?>">
<input name="zenwabangou2" type="hidden" value="<?php print $row['zenwabangou2'] ?>">
<input name="FAX2" type="hidden" value="<?php print $row['FAX2'] ?>">
<input name="zigyoukaisi" type="hidden" value="<?php print $row['zigyoukaisi'] ?>">
<input name="sabisunaiyou" type="hidden" value="<?php print $row['sabisunaiyou'] ?>">
</br>
<div class="pattern2a">
<td><a href="#"onClick="document.location='kensaku_p.php';" class="square_btna">戻る</a></td>
</div>
<div class="pattern3a">
<td><input type="submit"class="square_btna"value="この内容で修正する"></td>
</div>
</form>
</table>
</br>
</table>
</div>
</body>
</html>