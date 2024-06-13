<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="./style/style.css">
</head>
<body>
    <div class="home_element div_element">
        <div class="element">
            <h3>Personal Data</h3>
            <?php
                include "../Control/control.php";
                $user = $_GET["user"];
                list($firstname, $lastname, $dateofbirth, $tel) = showInfo($user);
            ?>
            <div class="output_textstyle_pair">
                <div class="output_textstyle_leftcol">
                    Name
                </div>
                <div class="output_textstyle_rightcol">
                    <?php echo "$firstname $lastname";?>
                </div>
            </div>
            <div class="output_textstyle_pair">
                <div class="output_textstyle_leftcol">
                    Date of Birth
                </div>
                <div class="output_textstyle_rightcol">
                    <?php echo "$dateofbirth";?>
                </div>
            </div>
            <div class="output_textstyle_pair">
                <div class="output_textstyle_leftcol">
                    Tel.
                </div>
                <div class="output_textstyle_rightcol">
                    <?php echo "$tel";?>
                </div>
            </div>
        </div>
        <hr class="line">
        <div class="element2">
            <h3>Your Account</h3>
            <?php
                $email = queryEmail($user);
            ?>
            <div class="output_textstyle_pair">
                <div class="output_textstyle_leftcol">
                    Username
                </div>
                <div class="output_textstyle_rightcol">
                    <?php echo "$user";?>
                </div>
            </div>
            <div class="output_textstyle_pair">
                <div class="output_textstyle_leftcol">
                    Email
                </div>
                <div class="output_textstyle_rightcol">
                    <?php echo "$email";?>
                </div>
            </div>
            <form action="login.php" method="GET">
                <div class="buttonstyle">
                    <input type="submit" value="logout">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
