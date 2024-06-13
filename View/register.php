<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
    <div class="register_element div_element">
        <div class="element">
            <h3>Register</h3>
            <form action="checkregister.php" method="GET">
                <div class="output_textstyle_pair">
                    <div class="listofdata">
                        Firstname
                    </div>
                    <div class="output_textstyle_rightcol">
                        <input type="text" name="firstname" maxlength="100" placeholder="Firstname">
                    </div>
                </div>
                <div class="output_textstyle_pair">
                    <div class="listofdata">
                        Surname
                    </div>
                    <div class="output_textstyle_rightcol">
                        <input type="text" name="lastname" maxlength="100" placeholder="Surname">
                    </div>
                </div>
                <div class="output_textstyle_pair">
                    <div class="listofdata">
                        Date of Birth
                    </div>
                    <div class="output_textstyle_rightcol">
                        <input type="date" name="dateofbirth" class="datewidth">
                    </div>
                </div>
                <div class="output_textstyle_pair">
                    <div class="listofdata">
                        Tel.
                    </div>
                    <div class="output_textstyle_rightcol">
                        <input type="text" name="tel" maxlength="100" placeholder="Tel. Number">
                    </div>
                </div>
                <hr class="register_line">
                <div class="output_textstyle_pair">
                    <div class="listofdata">
                        Username
                    </div>
                    <div class="output_textstyle_rightcol">
                        <input type="text" name="user" maxlength="100" placeholder="Username">
                    </div>
                </div>
                <div class="output_textstyle_pair">
                    <div class="listofdata">
                        Email
                    </div>
                    <div class="output_textstyle_rightcol">
                        <input type="email" name="email" maxlength="100" placeholder="Email">
                    </div>
                </div>
                <div class="output_textstyle_pair">
                    <div class="listofdata">
                        Password
                    </div>
                    <div class="output_textstyle_rightcol">
                        <input type="password" name="pwd1" maxlength="100" placeholder="Password">
                    </div>
                </div>
                <div class="output_textstyle_pair">
                    <div class="listofdata">
                        Confirm Password
                    </div>
                    <div class="output_textstyle_rightcol">
                        <input type="password" name="pwd2" maxlength="100" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="output_textstyle_pair">
                    <div class="listofdata buttonstyle">
                        <button type="reset">reset</button>
                    </div>
                    <div class="output_textstyle_rightcol">
                        <div class="buttonstyle">
                            <input type="submit" value="submit">
                        </div>
                    </div>
                </div>
                <div class="output_textstyle_pair">
                    <div class="output_textstyle_rightcol2 fontsize">
                        มีบัญชีแล้ว 
                        <a href="login.php">ลงชื่อเข้าใช้</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>