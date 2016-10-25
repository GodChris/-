<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/cars-doctor/Public/Css/login.css" />
    <meta charset="utf-8">
    <script src="/cars-doctor/Public/Js/jquery-1.7.2.min.js"></script>
    <script src="/cars-doctor/Public/Js/login.js"></script>
</head>
<body>
<div id="top">

</div>
<div class="login">
    <form action="<?php echo U('Admin/Login/login');?>" method="post" id="login">
        <div class="title">
            登录后台
        </div>
        <table border="1" width="100%">
            <tr>
                <th>管理员帐号:</th>
                <td>
                    <input type="text" name="username" class="len250"/>
                </td>
            </tr>
            <tr>
                <th>密码:</th>
                <td>
                    <input type="password" class="len250" name="password"/>
                </td>
            </tr>
            <tr>
                <th>验证码:</th>
                <td>
                    <input type="code" class="len250" name="code"/> <img src="<?php echo U(‘Admin/Login/verify‘,‘‘,‘‘);?>" id="code"/> <a href="javascript:void(change_code(this));">看不清</a>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-left:160px;"> <input type="submit" class="submit" value="登录"/></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>