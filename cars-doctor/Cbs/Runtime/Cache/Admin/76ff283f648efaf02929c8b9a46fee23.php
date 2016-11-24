<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>选择技师</title>
</head>
<body>
<input type="radio" name="worker" value="陈观民" onclick="chk(this)"/>陈观民<br>
<input type="radio" name="worker" value="王凯" onclick="chk(this)"/>王凯<br>
<input type="radio" name="worker" value="于振涛" onclick="chk(this)"/>于振涛<br>
<input type="radio" name="worker" value="彭立宜" onclick="chk(this)"/>彭立宜
<script>
    function chk(worker){
        window.opener.document.getElementById("worker_name").value=worker.value;
        window.close();
    }

</script>
</body>
</html>