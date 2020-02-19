<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>添加博客</title>
</head>
<style type="text/css">
    form {
        margin: 20px;
    }
</style>
<script>
    function jump() {
        window.location.href = "http://localhost/diary/sqldiary.php";
    }
</script>


<body>
    <form action="adddiary.php" method="post">
        <label>标题：</label><input type="text" name="title">
        <label>写作时间：</label><input type="date" name="time">
        <br>
        <br>
        <label>正文：</label><input type="text" name="content" style="width:500px;height:200px;">
        <br>
        <br>
        <input type="submit" value="提交" style="margin-left:270px">
        <input type="button" value="返回" onclick="jump()">
    </form>
</body>
</html>