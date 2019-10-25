<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>會員註冊</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>會員註冊</h1>
<form action="reg_api.php" method="post">
<table class="wrapper">
  <tr>
    <td>帳號：</td>
    <td><input type="text" name="acc" id="acc"></td>
  </tr>
  <tr>
    <td>密碼：</td>
    <td><input type="password" name="pw" id="pw"></td>
  </tr>
  <tr>
    <td>姓名：</td>
    <td><input type="text" name="name" id="name"></td>
  </tr>
  <tr>
    <td>地址：</td>
    <td><input type="text" name="addr" id="addr"></td>
  </tr>
  <tr>
    <td>電話：</td>
    <td><input type="text" name="tel" id="tel"></td>
  </tr>
  <tr>
    <td>生日：</td>
    <td><input type="date" name="date" id="date"></td>
  </tr>
  <tr>
    <td colspan="2" class="ct">
        <input type="submit" value="註冊">
        <input type="reset" value="重置">
    </td>
  </tr>
  <tr>
    <td colspan="2" class="ct reg">
      <a href="index.php">回首頁</a>
    </td>
  </tr>
</table>
</form>
</body>
</html>
