<?php

function isLoginCorrect($userEmailAddress, $userPsw)
{
    $result = false;

    $strSeparator = '\'';
    $loginQuery = 'SELECT * FROM users WHERE email = ' . $strSeparator . $userEmailAddress . $strSeparator;

    require_once 'model/dbConnector.php';
    //echo $loginQuery;
    $queryResult = executeQuerySelect($loginQuery);

    if (count($queryResult) == 1) {
        $userHashPsw = $queryResult[0]['userHashPsw'];
        if (password_verify($userPsw, $userHashPsw) == true) {
            $result = true;
        } else {
            $result = false;
        }
    } else {
        $result = false;
    }

    return $result;
}

function registerNewAccount($userEmailAddress, $userPsw, $userName, $userFirstName, $userNumberPhone)
{

    $userPswHash = password_hash($userPsw, PASSWORD_DEFAULT);
    $register = "INSERT INTO users (name, firstname, email, phoneNumber, password, userType, reservations_id) VALUES ('$userName', '$userFirstName', '$userEmailAddress', '$userNumberPhone', '$userPswHash', 1, 0)";

    require_once 'model/dbconnector.php';
    $registerResult = executeQueryIUD($register);

    return $registerResult;
}

function getUsers()
{
    $sql = "SELECT * FROM users";
    require_once "model/dbconnector.php";
    $users = executeQuerySelect($sql);
    return $users;
}