<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php

try
{


$dsn='mysql:dbname=company;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT code,zigyousya FROM dat_company WHERE 1';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$dbh=null;

print"<div style='text-align:center'>";
print'事業者一覧<br/><br/>';

print'<form method="post"action="zigyousya_branch.php">';
while(true)
{
    $rec=$stmt->fetch(PDO::FETCH_ASSOC);
    if($rec==false)
    {
        break;
    }
    print'<input type="radio"name="companycode" value="'.$rec['code'].'">';
    print$rec['zigyousya'];
    print'<br/>';
}

}
catch (Exception $e)
{
    print'ただいま障害により大変ご迷惑をお掛けします。';
    exit();
}
?>

<br/>
<a href="../staff_login/staff_top.php">トップメニューへ</a><br/>

<hr>
</body>
</html>