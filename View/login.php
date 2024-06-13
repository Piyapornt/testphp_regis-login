<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
    <div class="login_element div_element">
        <form action="checkdata.php" method="GET">
            <div class="element">
                <h3>LOGIN</h3>
                <h5>ลงชื่อเข้าใช้งาน</h5>
                <div>
                    EMAIL <input type="email" name="email" maxlength="100" placeholder="email">
                    <br><br>
                    PASSWORD <input type="password" name="pwd" maxlength="30" placeholder="password">
                    <br>
                    <div class="textstyle_left fontsize">
                        <a href="register.php">สร้างบัญชีใหม่</a>
                    </div>
                    <div class="textstyle_right">
                        <input type="submit" value="login">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>