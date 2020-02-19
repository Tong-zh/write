<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>修改博客</title>
</head>
<script>
    function jump() {
        window.location.href = "http://localhost/diary/sqldiary.php";
    }
</script>
<body>
    <?php
    include "ss.php";

    $id = $_GET['id'];
    $sql = mysql_query("SELECT * FROM diary WHERE id=$id", $conn);
    $sql_arr = mysql_fetch_array($sql);

    ?>

    <form action="changediary.php" method="post">
        <label>ID: </label><?php echo $sql_arr['id'] ?>
        <br>   
        <label>标题：</label><input type="text" name="title" value="<?php echo $sql_arr['title'] ?>">
        <br>
        <label>写作时间：</label><input type="date" name="time" value="<?php echo $sql_arr['time'] ?>">
        <br>
        <br>
        <label>正文：</label><input type="text" name="content" style="width:500px;height:200px"  value="<?php echo $sql_arr['content'] ?>">
        <input type="submit" value="提交">
        <input type="button" value="返回" onclick="jump()">
    </form>

</body>

</html>