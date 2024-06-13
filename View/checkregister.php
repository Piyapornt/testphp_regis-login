<?php
    include "../Control/control.php";

    $firstname = $_GET["firstname"];
    $lastname = $_GET["lastname"];
    $dateofbirth = $_GET["dateofbirth"];
    $tel = $_GET["tel"];
    $user = $_GET["user"];
    $email = $_GET["email"];
    $pwd1 = $_GET["pwd1"];
    $pwd2 = $_GET["pwd2"];

    $hashedPassword1 = password_hash($pwd1, PASSWORD_DEFAULT);
    $hashedPassword2 = password_hash($pwd2, PASSWORD_DEFAULT);

    if(checknotnull($firstname, $lastname, $dateofbirth, $tel, $user, $email, $hashedPassword1, $hashedPassword2)) {
        if(checkduplicate_email_username($email, $user)) {
            if(checkpassword($pwd1, $pwd2)) {
                createAccount($firstname, $lastname, $dateofbirth, $tel, $user, $email, $hashedPassword1);
                header("Location: reg_success.php");
            }
        }
    }
?>