<?php
$servername = "localhost";
$username = "root";
$password = "root";
$conn = mysql_connect($servername, $username, $password);
mysql_select_db("blog", $conn);
?>