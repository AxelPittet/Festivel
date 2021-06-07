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
        $result = true;
    } else {
        $result = false;
    }

    return $result;
}

function registerNewAccount($userEmailAddress, $userPsw, $userName, $userFirstName, $userNumberPhone)
{

    $register = "INSERT INTO users (name, firstname, email, phoneNumber, password, userType) VALUES ('$userName', '$userFirstName', '$userEmailAddress', '$userNumberPhone', '$userPsw', 1)";

    require_once 'model/dbconnector.php';
    //echo $register;
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