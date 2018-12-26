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
if(isset($_POST['zigyousyo'])==true)
{

    $zigyousyo=$_POST['zigyousyo'];
}
if(isset($_POST['kaigos'])==true)
{

    $kaigos=$_POST['kaigos'];


}
if(isset($_POST['zigyousyoba'])==true)
{

    $zigyousyoba=$_POST['zigyousyoba'];

}
if(isset($_POST['yuubinbangou2'])==true)
{

    $yuubinbangou2=$_POST['yuubinbangou2'];

}
if(isset($_POST['todouhuken2'])==true)
{

    $todouhuken2=$_POST['todouhuken2'];

}
if(isset($_POST['tyouiki2'])==true)
{

    $tyouiki2=$_POST['tyouiki2'];

}
if(isset($_POST['zenwabangou2'])==true)
{

    $zenwabangou2=$_POST['zenwabangou2'];

}
if(isset($_POST['FAX2'])==true)
{

    $FAX2=$_POST['FAX2'];

}
if(isset($_POST['zigyoukaisi'])==true)
{

    $zigyoukaisi=$_POST['zigyoukaisi'];

}
if(isset($_POST['sabisunaiyou'])==true)
{

    $sabisunaiyou=$_POST['sabisunaiyou'];

}

session_start();
$_SESSION['zigyousya']=$zigyousya;
$_SESSION['zigyousya']=$zigyousya;
$_SESSION['yuubinbangou']=$yuubinbangou;
$_SESSION['todouhuken']=$todouhuken;
$_SESSION['tyouiki']=$tyouiki;
$_SESSION['denwabangou']=$denwabangou;
$_SESSION['faxbangou']=$faxbangou;
$_SESSION['hp']=$hp;
$_SESSION['daihyousya']=$daihyousya;
$_SESSION['syokumei']=$syokumei;
$_SESSION['zigyousyo']=$zigyousyo;
$_SESSION['kaigos']=$kaigos;
$_SESSION['zigyousyoba']=$zigyousyoba;
$_SESSION['yuubinbangou2']=$yuubinbangou2;
$_SESSION['todouhuken2']=$todouhuken2;
$_SESSION['tyouiki2']=$tyouiki2;
$_SESSION['zenwabangou2']=$zenwabangou2;
$_SESSION['FAX2']=$FAX2;
$_SESSION['zigyoukaisi']=$zigyoukaisi;
$_SESSION['sabisunaiyou']=$sabisunaiyou;
header('Location: h4.php');
exit();
?>
