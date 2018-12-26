<?php
header("Content-type: text/html; charset=utf-8");

if(empty($_POST)) {
	header("Location: kensaku_q.php");
	exit();

}else{
	//名前入力判定
    if (empty($_POST['zigyousya']) && empty($_POST['todouhuken'])){
        header('Location: kensaku_p.php');
	}
	/*金曜の午後に1人でできたやつ*/
}

if(!isset($errors)){

    $dsn='mysql:dbname=company;host=localhost;charset=utf8';
	$user = 'root';
	$password = 'shop_tnohara';



	try{
		$dbh = new PDO($dsn, $user, $password);

		$statementa =0;
		$statementb =0;
		$statementc =0;

		if  (!empty($_POST['zigyousya'])  && !empty($_POST['todouhuken'])){
		    $sql=("SELECT * FROM dat_company WHERE (zigyousya LIKE :zigyousya) && (todouhuken LIKE :todouhuken) ");
		    $statementc = $dbh->prepare($sql);

		}else if(!empty($_POST['todouhuken'])){
		    $sql=("SELECT * FROM dat_company WHERE todouhuken LIKE (:todouhuken) ");
		    $statementb = $dbh->prepare($sql);

		}else if(!empty($_POST['zigyousya'])){
		    $sql=("SELECT * FROM dat_company WHERE zigyousya LIKE (:zigyousya) ");
		    $statementa = $dbh->prepare($sql);
		}



			if($statementc){

			    $sql=("SELECT * FROM dat_company WHERE (zigyousya LIKE :zigyousya) and (todouhuken LIKE :todouhuken) ");
			    $statement = $dbh->prepare($sql);
			    $zigyousya = $_POST['zigyousya'];
			    $like_zigyousya = "%".$zigyousya."%";
			    $statement->bindValue(':zigyousya', $like_zigyousya, PDO::PARAM_STR);
			    $todouhuken = $_POST['todouhuken'];
			    $like_todouhuken = "%".$todouhuken."%";
			    $statement->bindValue(':todouhuken', $like_todouhuken, PDO::PARAM_STR);


			    if($statement->execute()){
			        //レコード件数取得
			        $row_count = $statement->rowCount();

			        while($row = $statement->fetch()){
			            $rows[] = $row;
			        }

			    }else{
			        $errors['error'] = "検索失敗しました。";
			    }

			    //データベース接続切断
			    $dbh = null;
			}
			else if($statementa){
		$sql=("SELECT * FROM dat_company WHERE zigyousya LIKE (:zigyousya) ");
		$statement = $dbh->prepare($sql);
		$zigyousya = $_POST['zigyousya'];
		$like_zigyousya = "%".$zigyousya."%";
		$statement->bindValue(':zigyousya', $like_zigyousya, PDO::PARAM_STR);


		if($statement->execute()){
		    //レコード件数取得
		    $row_count = $statement->rowCount();

		    while($row = $statement->fetch()){
		        $rows[] = $row;
		    }

		}else{
		    $errors['error'] = "検索失敗しました。";
		}

		//データベース接続切断
		$dbh = null;

		}

		else if($statementb){
		    $sql=("SELECT * FROM dat_company WHERE todouhuken LIKE (:todouhuken) ");
		    $statement = $dbh->prepare($sql);
		    $todouhuken = $_POST['todouhuken'];
		    $like_todouhuken = "%".$todouhuken."%";
		    $statement->bindValue(':todouhuken', $like_todouhuken, PDO::PARAM_STR);


			if($statement->execute()){
				//レコード件数取得
				$row_count = $statement->rowCount();

				while($row = $statement->fetch()){
					$rows[] = $row;
				}

			}else{
				$errors['error'] = "検索失敗しました。";
			}

			//データベース接続切断
			$dbh = null;
		}

	}catch (PDOException $e){
		print('Error:'.$e->getMessage());
		$errors['error'] = "データベース接続失敗しました。";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>検索結果</title>
  <link rel="stylesheet" href="pq.css" media="all">
  <meta charset="utf-8">
</head>

<body>
  <table>
    <td>
      <h1 class="k">ユーザー情報編集</h1>
    </td>
  </table>
  <table>
    <form action="kensaku_q.php" method="post" class="fg">
      <td>事業者名<input type="text" name="zigyousya">
        住所<input type="text" name="todouhuken">
        <input type="submit" value="検索する"></td>
    </form>

  </table>
  <form method="post" action="kensaku_h1.php">
    <?php if (!isset($errors)): ?>



    <table border='1'>
      <tr class="k">
        <td class=font-center>No</td>
        <td class=font-center>事業者名</td>
        <td class=font-center>住所</td>
        <td class=font-center>電話番号</td>
        <td class=font-center>詳細</td>
      </tr>

      <?php
foreach($rows as $row){
?>
      <tr>
        <td>
          <?=$row['code']?>
        </td>
        <td class="code">
          <?=htmlspecialchars($row['zigyousya'],ENT_QUOTES,'UTF-8')?>
        </td>
        <td class="zigyousya">
          <?=htmlspecialchars($row['todouhuken'],ENT_QUOTES,'UTF-8')?>
        </td>
        <td class="denwabangou">
          <?=htmlspecialchars($row['denwabangou'],ENT_QUOTES,'UTF-8')?>
        </td>
        <td class=syousai><input type="submit" class="square_btn" value="詳細"></td>
        <input name="code" type="hidden" value="<?=htmlspecialchars($row['code'],ENT_QUOTES,'UTF-8')?>">
      </tr>


      <?php
}

?>
      <?php
$i=0;
$ku=count($rows);

if($ku<=8){
    for($i=0;$i<(9-$ku);$i++)
        print"<tr><td class=\"code\"></td><td class=\"zigyousya\"></td><td class=\"zyuusyo\"></td><td class=\"denwabangou\"></td><td class=\"syousai\"><a class=\"square_btn\">詳細</a></td></tr>";

 }?>

      <?php elseif($errors > 0): ?>
      <?php
foreach($errors as $value){
	echo "<p>".$value."</p>";
}
?>
      <?php endif; ?>
  </form>
  </table>

</body>

</html>
