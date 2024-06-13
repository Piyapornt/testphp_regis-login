<?php
    include "../Model/Model.php";
    
    function queryUsername($email) {
        return getUsername($email);
    }
    function showInfo($user) {
        return getUserInfo($user);
    }
    function queryEmail($user) {
        return getEmail($user);
    }
    function checknotnull($firstname, $lastname, $dateofbirth, $tel, $user, $email, $pwd1, $pwd2) {
        return validateInput($firstname, $lastname, $dateofbirth, $tel, $user, $email, $pwd1, $pwd2);
    }
    function checkduplicate_email_username($email, $user) {
        return checkduplicatedata($email, $user);
    }
    function checkpassword($pwd1, $pwd2) {
        return checkcorrectpassword($pwd1, $pwd2);
    }
    function createAccount($firstname, $lastname, $dateofbirth, $tel, $user, $email, $pwd1) {
        return createUserAccount($firstname, $lastname, $dateofbirth, $tel, $user, $email, $pwd1);
    }
    function getPasswordHashFromDatabase($email) {
        return getHashPassword($email);
    }
?>