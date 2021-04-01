<?php
include 'connect.php'; // for database connection
session_start();
$username = "";
$email = "";
$errors = array();//error array

//log in logic with basic validation
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);// db is database connection defined in connect.php
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if (empty($username)) {
        array_push($errors, "Username cannot be empty");
    }
    if (empty($password)) {
        array_push($errors, "password cannot be empty");
    }
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users  WHERE ( username='$username' AND password='$password') or ( email='$username' AND password='$password' ) ";
        $results = mysqli_query($db, $query);
        $value = mysqli_fetch_array($results);
        if (!empty($value)) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Login Successfull";
            header('location: welcome.php');
        } else {
            array_push($errors, " Incorrect Username or password ");
        }
    }
}
