<?php

function addBilletBD($day, $vip, $price)
{
    $sql = "INSERT INTO reservations (vip, price, reservationNumber, days_id) VALUES ('$vip', '$price', 1, '$day')";

    require_once 'model/dbconnector.php';
    $result = executeQueryIUD($sql);

    return $result;
}

function getPanier()
{
    $sql = "SELECT * FROM reservations";
    require_once "model/dbconnector.php";
    $reservations = executeQuerySelect($sql);
    return $reservations;
}
