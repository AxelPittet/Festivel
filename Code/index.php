<?php

session_start();
require "controler/controler.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home' :
            home();
            break;
        case 'programme' :
            programme();
            break;
        case 'register' :
            register($_POST);
            break;
        case 'logout' :
            logout();
            break;
        case 'login' :
            login($_POST);
            break;
        case 'panier' :
            panier();
            break;
        case 'billetterie' :
            billetterie();
            break;
        case 'concert' :
            concert();
            break;
        case 'delCart' :
            delCart($_GET['key']);
            break;
        case 'buyBillet' :
            buyBillet();
            break;
        case 'supConcert' :
            supConcert();
            break;
        default :
            home();
    }
} else {
    home();
}