<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=mydb";
$pdo=new PDO($dsn,'root','mack');
session_start();

/**
* all()-給定資料表名後，會回傳整個資料表的資料
* find()-會回傳資料表指定id的資料
* update()-給定資料表的條件後，會去更新相應的資料。
* insert()-給定資料內容後，會去新增資料到資料表
* del()-給定條件後，會去刪除指定的資料
 */

function all($table){
    // 回傳整個資料表的內容
    global $pdo;
    $sql="select * from $table ";
    //$rows=$pdo->query($sql)->fetchAll();  //取出全部的資料
    return $pdo->query($sql)->fetchAll();
}


function find($table,$id){
    //取得某id的所有資料
    global $pdo;
    $sql="SELECT * FROM $table WHERE id='$id'";
    return $pdo->query($sql)->fetch();
}


function insert($table,$data){
    //把$data的資料新增到資料庫
    global $pdo;
    $row="`" . implode("`,`",array_keys($data)) . "`";
    $value="'" . implode("','",$data) . "'";
    $sql="insert into $table($row) values($value)";
    echo $sql;
    return $pdo->exec($sql);
}

?>