<?php

/*
    Create functions like insert, update and delete (CRUD actions) your self
*/

/**
 * Connecting to a database
 * @param $dbHost, a host like 'localhost'
 * @param $dbName, the name of the database you wish to connect to
 * @param $dbUser, the username to connect with the database
 * @param $dbPass, the password to connect with the database
 * 
 * If one of the params is empty then they will be retrieved from config file
 */
function dBconnect($dbHost = null, $dbName = null, $dbUser = null, $dbPass = null)
{    
    if (empty($dbHost) || empty($dbName) || empty($dbUser) || empty($dbPass)) {
        $dbHost = $_ENV['DB_HOST'];
        $dbName = $_ENV['DB_NAME'];
        $dbUser = $_ENV['DB_USER'];
        $dbPass = $_ENV['DB_PASS'];
    }
    
    try {
        $dbh = new \PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName, $dbUser, $dbPass);
    }
    catch (\PDOException $e) {
        throw($e);
    }

    return $dbh;
}