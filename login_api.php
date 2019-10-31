<?php
/***************************************************
 * 會員登入行為：
 * 1.建立連線資料庫的參數
 * 2.判斷是否有送來表單資料
 * 3.從資料庫取得資料
 * 4.比對表單資料和資料庫資料是否一致
 * 5.根據比對的結果決定畫面的行為
  ***************************************************/
include "base.php";


$acc=$_POST['acc'];
$pw=$_POST['pw'];

echo "acc=".$acc;
echo "<br>";
echo "pw=".$pw;



//$sql="select count(*) as 'r' from user where acc='$acc' &&  pw='$pw'";
$sql="select id from user where acc='$acc' &&  pw='$pw'";

//$data=$pdo->query($sql)->fetchColumn();
$data=$pdo->query($sql)->fetch();


print_r($data);

if(!empty($data)){
  echo "登入成功";
  $_SESSION['login']=1;
  header("location:member_center.php?id=".$data['id']);
}else{
  echo "登入失敗";
  header("location:index.php?err=1");
}

/* if(!empty($data)){
  echo "登入成功";
}else{
  echo "登入失敗";
} */

/* if($acc==$data['acc'] && $pw=$data['pw']){
  echo "登入成功";
}else{
  echo "登入失敗";
} */

?>