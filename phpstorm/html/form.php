<!DOCTYPE html>
<html lang="en">
<head>
    <title>表单验证</title>
    <style>
        .error {color: aqua}
    </style>
</head>
<body>
<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["name"]))
    {
        $nameErr="名字必须填写";
    }
    else{
        $name=test_input($_POST["name"]);
        if(!preg_match("/^[a-zA-Z ]*$/",$name))
        {
            $nameErr="只允许输入字母和空格";
        }
    }
    if(empty($_POST["email"])){
        $emailErr="邮箱必须填写";
    }
    else{
        $email=test_input($_POST["email"]);
        if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
            $emailErr="非法邮箱格式";
        }
    }
    if(empty($_POST["website"]))
    {
        $website="";
    }else{
        $website=test_input($_POST["website"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website))
        {
            $websiteErr="URL地址非法";
        }
    }
    if(empty($_POST["comment"]))
    {
        $comment="";
    }else{
}
    $comment=test_input($_POST["comment"]);
    if(empty($_POST["gender"])){
        $genderErr="性别必须填写";
    }else{
        $gender=test_input($_POST["gender"]);
    }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<p><span class="error">*必需字段</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    名字: <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">*<?php echo $nameErr;?></span><br><br>
    性别：<input type="radio" name="gender"<?php if (isset($gender)&&$gender=="female")
    echo "checked";?> value="female">女
          <input type="radio" name="gender" <?php if(isset($gender)&&$gender=="male")
    echo "checked";?> value="male">男
    <span class="error">*<?php echo $genderErr;?></span><br><br>
    邮箱：<input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">*<?php echo $emailErr;?></span><br><br>
    网址：<input type="text" name="website" value="<?php echo $website;?>"
    <span class="error"><?php echo $websiteErr;?></span><br><br>
    备注：<textarea name="comment" rows="5" cols="40"><?php echo $comment;?>
    </textarea><br><br>
    <input type="submit" name="submit" value="提交">
</form>
<?php
echo "<h2>您输入的内容是：</h2>";
echo $name;
echo "<br>";
echo $gender;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
?>
</body>
</html>




