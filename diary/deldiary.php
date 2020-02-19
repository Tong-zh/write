<?php
include "ss.php";

$id = $_GET['id'];

$del = "DELETE FROM diary WHERE id={$id}";
mysql_query($del, $conn) or die('删除数据出错：' . mysql_error());

header("Location:sqldiary.php");
