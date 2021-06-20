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

function getConcertsScenes()
{
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

/**
 * @param $concertID
 * @return array|null
 */
function supConcertBDD($concertID)
{
    $sql = "DELETE FROM concerts WHERE id='$concertID'";
    require_once "model/dbconnector.php";
    $delConcerts = executeQuerySelect($sql);
    return $delConcerts;
}

/**
 * @param $startTime
 * @param $endTime
 * @param $artistID
 * @param $dayID
 * @return bool|null
 */
function addConcertBDD($startTime, $endTime, $artistID, $dayID)
{
    $sql = "INSERT INTO concerts (startTime, endTime, artist_id, days_id) VALUES ('$startTime', '$endTime','$artistID','$dayID')";
    echo $sql;
    require_once "model/dbconnector.php";
    $addConcerts = executeQueryIUD($sql);
    return $addConcerts;
}

