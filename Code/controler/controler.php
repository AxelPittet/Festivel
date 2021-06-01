<?php

function home()
{
    require "view/home.php";
}

function programme()
{
    require "model/concertsManager.php";
    $concerts = getConcerts();
    $artists = getArtists();
    $days = getDays();

    require "view/programme.php";
}

function createSession($userEmailAddress)
{
    $_SESSION['userEmailAddress'] = $userEmailAddress;
}

function logout()
{
    session_destroy();
    require "view/home.php";
}

function login($loginRequest)
{
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
            require "view/home.php";
        } else { //if the user/psw does not match, login form appears again
            $_GET['loginError'] = true;
            require "view/login.php";
        }
    } else { //the user does not yet fill the form
        require "view/login.php";
    }
}

function register($registerRequest)
{
//if a register request was submitted
    if (isset($registerRequest['inputUserEmailAddress']) && isset($registerRequest['inputUserPsw']) && isset($registerRequest['inputUserPswRepeat'])
        && isset($registerRequest['inputUserName']) && isset($registerRequest['inputFirstName']) && isset($registerRequest['inputUserName'])
        && isset($registerRequest['inputUserNumberPhone'])) {

        $userName = $registerRequest ['inputUserName'];
        $userFirstName = $registerRequest ['inputFirstName'];
        $userNumberPhone = $registerRequest ['inputUserNumberPhone'];
        $userEmailAddress = $registerRequest['inputUserEmailAddress'];
        $userPsw = $registerRequest['inputUserPsw'];
        $userPswRepeat = $registerRequest['inputUserPswRepeat'];

        if ($userPsw == $userPswRepeat) {
            require_once "model/usersManager.php";
            if (registerNewAccount($userEmailAddress, $userPsw, $userName, $userFirstName, $userNumberPhone)) {
                createSession($userEmailAddress);
                $registerErrorMessage = null;
                require "view/home.php";
            } else {
                $registerErrorMessage = "L'inscription n'est pas possible avec les valeurs saisies !";
                require "view/register.php";
            }
        } else {
            $registerErrorMessage = "Les mots de passe ne sont pas similaires !";
            require "view/register.php";
        }
    } else {
        $registerErrorMessage = null;
        require "view/register.php";
    }
}

function panier()
{
    require "view/panier.php";
}

function billetterie()
{
    require "view/billetterie.php";
}

function concert()
{
    $concertId = $_GET['concertId'];
    //$concerts = getConcerts();
    //$artists = getArtists();
    //$days = getDays();
    //$concertsScenes = getConcertsScenes
    //$scenes = getScenes();

    require "view/concert.php";
}