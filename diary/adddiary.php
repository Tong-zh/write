<?php
include "ss.php";

$id=$_POST['id'];
$title = $_POST['title'];
$time = $_POST['time'];
$content = $_POST['content'];

$add = "INSERT INTO diary(id,title,time,content) VALUES ('$id','$title','$time','$content')";

mysql_query($add, $conn) or die('添加数据出错：' . mysql_error());

header("Location:sqldiary.php");
?>
