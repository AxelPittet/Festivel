<?php

function addBilletBD($name, $day, $vip, $reservationNumber, $price, $userId)
{
    $sql = "INSERT INTO reservations (name, vip, price, reservationNumber, days_id, users_id) VALUES ('$name', '$vip', '$price', '$reservationNumber', '$day', '$userId')";

    require_once 'model/dbconnector.php';
    $result = executeQueryIUD($sql);

    echo $sql;

    return $result;
}

function getPanier()
{
    $sql = "SELECT * FROM reservations";
    require_once "model/dbconnector.php";
    $reservations = executeQuerySelect($sql);
    return $reservations;
}
