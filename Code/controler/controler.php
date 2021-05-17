<?php

function home(){
    require "view/home.php";
}

function programme(){
    require "view/programme.php";
}

function register(){
    require "view/register.php";
}

function logout(){
    session_destroy();
    require "view/home.php";
}

function login($loginRequest){
//if a login request was submitted
    if (isset($loginRequest['inputUserEmailAddress']) && isset($loginRequest['inputUserPsw'])) {
        //extract login parameters
        $userEmailAddress = $loginRequest['inputUserEmailAddress'];
        $userPsw = $loginRequest['inputUserPsw'];
        //try to check if user/psw are matching with the database
        require_once "model/usersManager.php";
        if (isLoginCorrect($userEmailAddress, $userPsw)) {
            createSession($userEmailAddress);
            $_GET['loginError'] = false;
            $_GET['action'] = "home";
            require "view/home.php";
        } else { //if the user/psw does not match, login form appears again
            $_GET['loginError'] = true;
            $_GET['action'] = "login";
            require "view/login.php";
        }
    } else { //the user does not yet fill the form
        $_GET['action'] = "login";
        require "view/login.php";
    }
}