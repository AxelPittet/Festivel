<?php

function isLoginCorrect($userEmailAddress, $userPsw)
{
    $result = false;

    $strSeparator = '\'';
    $loginQuery = 'SELECT * FROM users WHERE email = ' . $strSeparator . $userEmailAddress . $strSeparator;

    require_once 'model/dbConnector.php';
    $queryResult = executeQuerySelect($loginQuery);

    if (count($queryResult) == 1) {
        $userHashPsw = $queryResult[0]['password'];
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
    $register = "INSERT INTO users (name, firstname, email, phoneNumber, password, userType) VALUES ('$userName', '$userFirstName', '$userEmailAddress', '$userNumberPhone', '$userPswHash', 1)";

    require_once 'model/dbconnector.php';
    echo $register;
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


function getUserType($userEmailAddress) {
    $result = 1;

    $strSeparator = '\'';
    $getUserTypeQuery = 'SELECT userType FROM users WHERE users.userEmailAddress =' . $strSeparator . $userEmailAddress . $strSeparator;

    require_once 'model/dbconnector.php';
    $queryResult = executeQuerySelect($getUserTypeQuery);
    //echo $getUserTypeQuery;

    if (count($queryResult) == 1) {
        $result = $queryResult[0]['userType'];
    }

    return $result;
}
