<?php
if(isset($_POST['zigyousya'])==true)
{

    $zigyousya=$_POST['zigyousya'];
}
if(isset($_POST['yuubinbangou'])==true)
{

    $yuubinbangou=$_POST['yuubinbangou'];


}
if(isset($_POST['todouhuken'])==true)
{

    $todouhuken=$_POST['todouhuken'];

}
if(isset($_POST['tyouiki'])==true)
{

    $tyouiki=$_POST['tyouiki'];

}
if(isset($_POST['denwabangou'])==true)
{

    $denwabangou=$_POST['denwabangou'];

}
if(isset($_POST['faxbangou'])==true)
{

    $faxbangou=$_POST['faxbangou'];

}
if(isset($_POST['hp'])==true)
{

    $hp=$_POST['hp'];

}
if(isset($_POST['daihyousya'])==true)
{

    $daihyousya=$_POST['daihyousya'];

}
if(isset($_POST['syokumei'])==true)
{

    $syokumei=$_POST['syokumei'];

}
session_start();
$_SESSION['zigyousya']=$zigyousya;
$_SESSION['yuubinbangou']=$yuubinbangou;
$_SESSION['todouhuken']=$todouhuken;
$_SESSION['tyouiki']=$tyouiki;
$_SESSION['denwabangou']=$denwabangou;
$_SESSION['faxbangou']=$faxbangou;
$_SESSION['hp']=$hp;
$_SESSION['daihyousya']=$daihyousya;
$_SESSION['syokumei']=$syokumei;
header('Location: h2.php');
exit();
?>
