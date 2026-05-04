<?php
$host = "localhost";
$dbname = "nos_annoces_db";
$user = "root";
$password = "";

use PDO;
use PDOException;

try {
    $dsn = "mysql:host=$host,dbname=$dbname,charset=utf-8";
    $options = [
        PDO::ATTR_ERRMODE =>
        PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE =>
        PDO::FETCH_ASSOC,
    ];
    $connexion = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
    die("conexion echouee " . $e->getMessage());
}
