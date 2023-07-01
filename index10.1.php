<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>验证邮箱格式</title>
    </head>
    <body>
        <h1>验证邮箱</h1>
        <form>
            <label>邮箱：</label>
            <input type="text" name="email" placeholder="请输入邮箱">
            <div>
                <input type="submit" name="submit" value="提交">
            </div>
        </form>
        <?php

    if(isset($_GET['submit'])){

        $email = $_GET['email'];

        $pattern = "/^[a-zA-Z0-9_%+\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z]{2,}$/";

        if(preg_match($pattern,$email)){

            echo "<p style='color:green;'>{$email}邮箱验证通过</p>";
        }else{
            echo "<p style='color:red;'>{$email}邮箱格式有误，请重新输入</p>";
        }
    }

?>
    </body>
</html>