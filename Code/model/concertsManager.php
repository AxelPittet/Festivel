<?php

function getConcerts()
{
    $sql = "SELECT * FROM concerts";
    require_once "model/dbconnector.php";
    $concerts = executeQuerySelect($sql);
    return $concerts;
}

function getArtists()
{
    $sql = "SELECT * FROM artists";
    require_once "model/dbconnector.php";
    $artists = executeQuerySelect($sql);
    return $artists;
}

function getDays()
{
    $sql = "SELECT * FROM days";
    require_once "model/dbconnector.php";
    $days = executeQuerySelect($sql);
    return $days;
}

function getConcertsScenes() {
    $sql = "SELECT * FROM concerts_workthrough_scenes";
    require_once "model/dbconnector.php";
    $concertsScenes = executeQuerySelect($sql);
    return $concertsScenes;
}

function getScenes()
{
    $sql = "SELECT * FROM scenes";
    require_once "model/dbconnector.php";
    $scenes = executeQuerySelect($sql);
    return $scenes;
}

