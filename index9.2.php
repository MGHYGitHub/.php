<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <title></title> -->
    </head>
    <body>
        <h1>注册页面</h1>
        <form>
            <div>
                <label>用户名：</label>
                <input type="text" name="username" placeholder="请输入用户名">
            </div>
            <div>
                <label>密码：</label>
                <input type="password" name="password" placeholder="请输入密码">
            </div>
            <div>
                <label>确认密码：</label>
                <input type="password" name="confirm_password" placeholder="请确认密码">
            </div>
            <div>
                <input type="submit" name="submit" value="注册">
            </div>
        </form>


        <?php

        if(isset($_GET['submit'])){

            $password = $_GET['password'];

            $confirm_password = $_GET['confirm_password'];
        }


        ?>

    </body>
</html>