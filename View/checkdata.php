<?php
    include "../Control/control.php";
    
    $email = $_GET["email"];
    $pwd = $_GET["pwd"];
    $storedHash = getPasswordHashFromDatabase($email);
    if ($storedHash && password_verify($pwd, $storedHash)) {
        $user = queryUsername($email);
        header("Location: home.php?user=$user");
    }
    else {
        header("Location: login.php");
    }
?>