<?php

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$content = htmlspecialchars($_POST['content']);


//  dsn(data source name)
// XAMPP環境ではuser名はroot, passwordは空
// PDO (PHP Data Objects) は、PHPからデータベースにアクセスする機能を提供する拡張モジュール
// PDOにより、接続するデータベースにかかわらず、同じ操作でデータにアクセスできる
// dbhのhはハンドル？
$dsn = 'mysql:dbname=bootstrap;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');


// $sql = 'ここにSQL文を書く';
// ドットを前後につける必要性は？
// ->はアロー演算子　
// execute 実行する
$sql = 'INSERT INTO `inquiry`(`name`, `email`, `content`) VALUES ("'.$name.'", "'.$email.'", "'.$content.'")';
$stmt = $dbh->prepare($sql);
$stmt->execute();


$dbh = null;

?>