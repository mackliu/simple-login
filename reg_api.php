<?php
/***************************************************
 * 會員註冊行為：
 * 1.建立連線資料庫的參數
 * 2.判斷是否有送來表單資料
 * 3.建立所需的SQL語法
 * 4.將表單資料以變數形式填入SQL語法中
 * 5.執行資料庫連線並送出SQL語法
 * 6.判斷SQL語法是否執行成功，執行下一步
 ***************************************************/
include "base.php";
echo $acc=$_POST['acc'];
echo "<br>";
echo $pw=$_POST['pw'];
echo "<br>";
echo $name=$_POST['name'];
echo "<br>";
echo $addr=$_POST['addr'];
echo "<br>";
echo $tel=$_POST['tel'];
echo "<br>";
echo $date=$_POST['date'];
echo "<br>";
echo $email=$_POST['email'];
echo "<br>";

//insert into user () values();
/* $dsn="mysql:host=localhost;charset=utf8;dbname=mydb";
$pdo=new PDO($dsn,'root','mack'); */

$sql="insert into user (`acc`,`pw`,`name`,`addr`,`tel`,`birthday`,`email`) values('$acc','$pw','$name','$addr','$tel','$date','$email')";
echo "sql語法是:".$sql;

//$pdo->exec($sql)   用在不需要回傳資料的場景 del,update,insert
//echo $pdo->exec($sql);
//判斷是否新增成功;
if($pdo->exec($sql)){
    //echo "新增資料成功";
    header("location:index.php?s=1");
}else{
    //echo "新增失敗,請洽資料庫管理人員";
    header("location:reg.php?s=2");
}


?>