<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>模板文件<?php echo ($name); ?></p><br/>
<b><?php echo ($data['name']); ?></b>
<?php echo ($data['email']); ?>
<?php echo ($user); ?>
</body>
</html>