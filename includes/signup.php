<?php
    session_start();
    require_once 'connect.php';

    $username=$_POST['username'];
    $login=$_POST['login'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password_confirm=$_POST['password_confirm'];
    $pass=time()+60*60*24*7;
    if ($password!==$password_confirm) {
        $_SESSION['message']='Passwords do not match';
        header('Location: ../register.php');
    }
    else
    {
        $password = password_hash('$password',PASSWORD_DEFAULT);
        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`,`pass`) VALUES (NULL, '$username', '$login', '$email', '$password','$pass')");
        $_SESSION['message'] = 'You are registered';
        header('Location: ../index.php');
    }

?>