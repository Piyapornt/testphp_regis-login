<?php
    function getUsername($email) {
        include "connect.php";
        $sql = "SELECT username FROM userdata WHERE email='$email'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        return $row['username'];
    }
    function getUserInfo($user) {
        include "connect.php";
        $sql = "SELECT firstname, lastname, dateofbirth, tel FROM personalinfo WHERE username='$user'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        return array($row['firstname'], $row['lastname'], $row['dateofbirth'], $row['tel']);
    }
    function getEmail($user) {
        include "connect.php";
        $sql = "SELECT email FROM userdata WHERE username='$user'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        return $row['email'];
    }
    function validateInput($firstname, $lastname, $dateofbirth, $tel, $user, $email, $pwd1, $pwd2) {
        if (isset($firstname, $lastname, $dateofbirth, $tel, $user, $email, $pwd1, $pwd2)) {
            if (!empty($firstname) && !empty($lastname) && !empty($dateofbirth) && !empty($tel) && !empty($user) && !empty($email) && !empty($pwd1) && !empty($pwd2)) {
                return true;
            }
        }
        header("Location: register.php");
    }
    function checkduplicatedata($email, $user) {
        include "connect.php";
        $sql = "SELECT email, username FROM userdata";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            if($row['email'] == $email) {
                header("Location: register.php");
            }
        }
        while($row = $result->fetch_assoc()) {
            if($row['username'] == $user) {
                header("Location: register.php");
            }
        }
        return true;
    }
    function checkcorrectpassword($pwd1, $pwd2) {
        if($pwd1 == $pwd2) {
            return true;
        }
        header("Location: register.php");
    }
    function createUserAccount($firstname, $lastname, $dateofbirth, $tel, $user, $email, $pwd1) {
        include "connect.php";
        $sql = "INSERT INTO userdata (email, pwd, username) VALUES ('$email', '$pwd1', '$user')";
        $result = $conn->query($sql);
        $sql = "INSERT INTO personalinfo (username, firstname, lastname, dateofbirth, tel) VALUES ('$user', '$firstname', '$lastname', '$dateofbirth', '$tel')";
        $result = $conn->query($sql);
    }
    function getHashPassword($email) {
        include "connect.php";
        $sql = "SELECT email FROM userdata";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
            if($row['email'] == $email) {
                $sql_pwd = "SELECT pwd FROM userdata WHERE email='$email'";
                $result_pwd = $conn->query($sql_pwd);
                $row_pwd = $result_pwd->fetch_assoc();
                return $row_pwd['pwd'];
            }
        }
        header("Location: login.php");
    }
?>