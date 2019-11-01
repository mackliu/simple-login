<?php
include_once "base.php";

$id=$_GET['id'];
$sql="DELETE FROM user WHERE id='$id'";
echo $sql;
$pdo->exec($sql);

//echo "<a href='admin'>已刪除資料,回會員列表</a>";
header("location:admin.php");

?>