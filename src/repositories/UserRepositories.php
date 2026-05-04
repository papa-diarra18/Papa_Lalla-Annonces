<?php

require 'db_connection.php';
require_once __DIR__.'../config/db_connection';
require_once __DIR__.'../models/Users.php';
function getUserbyEmail($email)
{
    global $connexion;
    $sql = "SELECT * FROM utilisateurs WHERE email=:email";
    $statement = $connexion->prepare($sql);
    $param = [':email=email'];
    $statement->execute($param);
    return $statement->fetch();
}
function registerUser($nom, $prenom, $email, $password, $tel, $photo)
{
    global $connexion;
    $sql = "INSERT INTO utilisateur($nom,$prenom,$email,$password,$tel,$photo) VALUES(:nom,:prenom,:email,:password,:tel,:photo)";
    $stmt = $connexion->prepare($sql);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->bindParam(":tel", $tel);
    $stmt->bindParam(":photo", $photo);
    $passwordhashe = password_hash($password, PASSWORD_BCRYPT);
    $stmt->bindParam(":password", $passwordhashe);
    return $stmt->execute();
}
