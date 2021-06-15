<?php

function addBilletBD($name, $day, $vip, $reservationNumber, $price, $userId)
{
    $sql = "INSERT INTO reservations (name, vip, price, reservationNumber, days_id, users_id) VALUES ('$name', '$vip', '$price', '$reservationNumber', '$day', '$userId')";

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

function supCartBDD($reservationID)
{
    $sql = "DELETE FROM reservations WHERE  id = '$reservationID'";
    require_once "model/dbconnector.php";
    $delCart = executeQueryIUD($sql);
    return $delCart;
}

function confirmCartBD($name, $vip, $price, $orderNumber, $day, $userEmailAddress)
{
    $sql = "INSERT INTO orders (name, vip, price, orderNumber, day, userEmailAddress) VALUES ('$name', '$vip', '$price', '$orderNumber', '$day', '$userEmailAddress')";
    require_once "model/dbconnector.php";
    $orders = executeQueryIUD($sql);
}