<?php
  include_once "base.php";

if(empty($_SESSION['login'])){
  header("location:index.php");
  exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>會員中心</title>
  <link rel="stylesheet" href="style.css">
  <style>
  table{
    border-collapse:collapse;
    border-spacing:0;
  }
  td{
    border:1px solid #ccc;
    padding:10px;
    text-align:center;
  }
  </style>
</head>
<body>
  <div class="member">
  <a href="admin.php">會員列表</a>
    <div class="wellcome">

      HI! 歡迎光臨!以下是你的個人資料:
      <a href="logout.php">登出</a>
    </div>
    <div class="private">
      <!--請自行設計個人資料的呈現方式並從資料庫取得會員資料-->
      <?php
/*         $dsn="mysql:host=localhost;charset=utf8;dbname=mydb";
        $pdo=new PDO($dsn,'root','mack'); */

        $sql="select * from user where id='".$_SESSION['id']."'";
        //echo $sql;
        $user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        //print_r($user);

      ?>
      <form action="edit_user.php" method="post">
      <table>
        <tr>
          <td>id</td>
          <td><?=$user['id'];?></td>
        </tr>
        <tr>
          <td>acc</td>
          <td><?=$user['acc'];?></td>
        </tr>
        <tr>
          <td>pw</td>
          <td><?=$user['pw'];?></td>
        </tr>
        <tr>
          <td>name</td>
          <td><input type="text" name="name" id="name" value="<?=$user['name'];?>"></td>
        </tr>
        <tr>
          <td>addr</td>
          <td><input type="text" name="addr" id="addr" value="<?=$user['addr'];?>"></td>
        </tr>
        <tr>
          <td>tel</td>
          <td><input type="text" name="tel" id="tel" value="<?=$user['tel'];?>"></td>
        </tr>
        <tr>
          <td>birthday</td>
          <td><input type="text" name="birthday" id="birthday" value="<?=$user['birthday'];?>"></td>
        </tr>
        <tr>
          <td>email</td>
          <td><input type="text" name="email" id="email" value="<?=$user['email'];?>"></td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="hidden" name="id" value="<?=$user['id'];?>">
            <input type="submit" value="編輯">
          </td>
        </tr>
      </table>
    </form>


    </div>
    <a href="index.php">回首頁</a>
  </div>

</body>
</html>