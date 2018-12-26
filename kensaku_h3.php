
<?php
ini_set("display_errors","On");
error_reporting(E_ALL);

try
{
    require_once('../common/common.php');



    $dsn='mysql:dbname=company;host=localhost;charset=utf8';
    $user='root';
    $password='shop_tnohara';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

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
$sql="UPDATE dat_company SET zigyousya=?,yuubinbangou=?,todouhuken=?,tyouiki=?,denwabangou=?,faxbangou=?,hp=?,daihyousya=?,syokumei=?,zigyousyo=?,kaigos=?,zigyousyoba=?,yuubinbangou2=?,tyouiki2=?,todouhuken2=?,zenwabangou2=?,FAX2=?,zigyoukaisi=?,sabisunaiyou=? WHERE code=?";
$stmt=$dbh->prepare($sql);
$date=array();


$date[]=$zigyousya;
$date[]=$yuubinbangou;
$date[]=$todouhuken;
$date[]=$tyouiki;
$date[]=$denwabangou;
$date[]=$faxbangou;
$date[]=$hp;
$date[]=$daihyousya;
$date[]=$syokumei;

$date[]=$zigyousyo;
$date[]=$kaigos;
$date[]=$zigyousyoba;
$date[]=$yuubinbangou2;
$date[]=$tyouiki2;
$date[]=$todouhuken2;
$date[]=$zenwabangou2;
$date[]=$FAX2;
$date[]=$zigyoukaisi;
$date[]=$sabisunaiyou;
$date[]=$code;


$stmt->execute($date);

$dbh=null;

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
<link rel="stylesheet" href="h3.css" media="all">
</head>
<body>
<div id="content">
<table>
<tr>
<td> <h1></h1>
</td>
</tr>
<tr>
<td> <h1></h1>
</td>
</tr>
<tr>
<td> <h1></h1>
</td>
</tr>
<tr>
<td> <h1></h1>
</td>
</tr>
<tr>
<td> <h1></h1>
</td>
</tr>
<tr>
<td> <h1></h1>
</td>
</tr>
<tr>
<td> <h1></h1>
</td>
</tr>
<tr>
<td class="xa"> <h1>登録内容が変更しました。</h1>
</td>
</tr>
<tr>
<td> <h1></h1>
</td>
</tr>
<tr>
<td> <h1></h1>
</td>
<tr>
<td></td>
</tr>
<tr>
</table>
<table>
<tr>
<td class="xb"></td>
<td class="xc"> 登録内容の変更完了のメールをお送りしました。
</td>
<td class="xb"></td>
</tr>
<tr>
<td class="xb"></td>
<td class="xc"> 登録内容のご確認下さい。
</td>
<td class="xb"></td>
</tr>
<tr>
<td> <h3></h3>
</td>
</tr>
<tr>
<td class="xb"></td>

</td>
<td class="xb"></td>
</tr>
</table>
</br>

</div>
</body>
</html>