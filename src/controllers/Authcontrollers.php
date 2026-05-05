<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['button'])){
    if($_POST['buttton']=="connecter"){
    if (
    isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password']) &&
    !empty($_POST['nom']) &&
    !empty($_POST['prenom']) &&
    !empty($_POST['email']) &&
    !empty($_POST['password'])
) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "email invalide";
        header("location:login_db.php");
        exit();
    }
    $regex = "/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$&]).{8,}$/";
    if (!preg_match($regex, $password)) {
        $_SESSION['error'] = "password invalide";
        header("location:login_db.php");
        exit();
    }
    header("location:../views/auth/register.php");
    exit();
} else {
    echo "les chapms doivent etre remplies";
    header("location:../views/auth/login_db.php");
    exit();
}
}
}
