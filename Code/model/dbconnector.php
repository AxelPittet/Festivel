<?php

/**
 * This function is designed to execute a query received as parameter
 * @param $query : must be correctly build for sql (synthaxis) but the protection against sql injection will be done there
 * @return array|null : get the query result (can be null)
 * Source : http://php.net/manual/en/pdo.prepare.php
 */
function executeQuerySelect($query)
{
    $queryResult = null;

    $dbConnexion = openDBConnexion();//open database connexion
    if ($dbConnexion != null) {
        $statement = $dbConnexion->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll();//prepare result for client
    }
    $dbConnexion = null;//close database connexion
    return $queryResult;
}

/**
 * This function is designed to insert value in database
 * @param $query
 * @return bool|null : $statement->execute() returne true is the insert was successful
 */
function executeQueryIUD($query)
{
    $queryResult = null;

    $dbConnexion = openDBConnexion();//open database connexion
    if ($dbConnexion != null) {
        $statement = $dbConnexion->prepare($query);//prepare query
        $queryResult = $statement->execute();//execute query
    }
    $dbConnexion = null;//close database connexion
    return $queryResult;
}

/**
 * This function is designed to manage the database connexion. Closing will be not proceeded there. The client is responsible of this.
 * @return PDO|null
 * Source : http://php.net/manual/en/pdo.construct.php
 */
function openDBConnexion()
{
    $tempDbConnexion = null;

    $sqlDriver = '';
    $hostname = '';
    $port = '';
    $charset = 'utf8';
    $dbName = '';
    $userName = '';
    $userPwd = '';
    $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;

    try {
        $tempDbConnexion = new PDO($dsn, $userName, $userPwd);
    } catch (PDOException $exception) {
        echo 'Connection failed: ' . $exception->getMessage();
    }
    return $tempDbConnexion;
}