<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>我的博客</title>
</head>

<script type="text/javascript">
    function del(id) {
        if (confirm("确定删除这条新闻吗？")) {
            window.location = "deldiary.php?id=" + id;
        }
    }
</script>

<?php
class diary
{
    var $id;
    var $title;
    var $time;
    var $content;
    function _construct($id, $title, $time, $content)
    {
        $this->id = $id;
        $this->title = $title;
        $this->time = $time;
        $this->content = $content;
    }
}
?>

<body>
    <div class="wrapper">
        <h2>我的博客</h2>
        <div class="add">
            <a href="add.php">增加日记</a>
        </div>
        <table width="960" border="1">
            <tr>
                <th>ID</th>
                <th>标题</th>
                <th>写作时间</th>
                <th>正文</th>
                <th>操作</th>
            </tr>

            <?php
            include "ss.php";
            $sql = 'select * from diary order by id asc';
            $result = mysql_query($sql, $conn);
            $newsNum = mysql_num_rows($result);
            for ($i = 0; $i < $newsNum; $i++) {
                $row = mysql_fetch_array($result);
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['title']}</td>";
                echo "<td>{$row['time']}</td>";
                echo "<td>{$row['content']}</td>";
                echo "<td>
                            <a href='javascript:del({$row['id']})'>删除</a>
                            <a href='change.php?id={$row['id']}'>修改</a>
                          </td>";
                echo "</tr>";
            }
            mysql_free_result($result);
            mysql_close($conn);
            ?>
        </table>
    </div>

</body>

</html>