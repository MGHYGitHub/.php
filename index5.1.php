<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>验证注册密码长度</title>
    </head>
    <body>
        <h1>注册页面</h1>
        <form>
            <div>
                <label>用户名：</label>
                <input type="text" name="username" placeholder="请输入用户名" />
            </div>
            <div>
                <label>密码：</label>
                <input type="password" name="password" placeholder="请输入密码6-12位" />
            </div>
            <div>
                <label>确认密码：</label>
                <input type="password" name="confirm_password" placeholder="确认密码" />
            </div>
            <div>
                <input type="submit" name="submit" value="注册">
            </div>
        </form>
        <?php
        if(isset($_GET['submit'])){

            $password=$_GET['password'];
            $getpasswprdlength=strlen($password);
            $getconfirmpass=$_GET['confirm_password'];

            if($getpasswprdlength<6||$getpasswprdlength>12){
                echo "<script>alert('请输入密码6-12位');</script>";
            }else if($getconfirmpass!=$password){
                echo "<script>alert('两次密码输入不一致');</script>";
            }else{
                echo "<script>alert('注册成功');</script>";
            }
        }

        ?>






    </body>
</html>