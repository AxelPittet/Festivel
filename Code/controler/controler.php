<?php

function home(){
    require "view/home.php";
}

function register(){
    require "view/register.php";
}

function logout(){
    session_destroy();
    require "view/home.php";
}

function login(){
    //create_session();
    require "view/home.php";
}