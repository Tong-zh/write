<?php
include "ss.php";

$id=$_POST['id'];
$title = $_POST['title'];
$time = $_POST['time'];
$content = $_POST['content'];

mysql_query("UPDATE diary SET title='$title',time='$time',content='$content' WHERE id=$id", $conn) or die('修改数据出错：' . mysql_error());
header("Location:sqldiary.php");
?>