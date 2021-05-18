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