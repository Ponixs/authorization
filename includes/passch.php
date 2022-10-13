<?php
    session_start();
    require_once 'connect.php';
    echo $login=$_POST['login'];
    $find_user=mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' ");
    $connect->query("DELETE FROM `users` WHERE `login` = '$login' ");
    $user=mysqli_fetch_assoc($find_user);
    $password=$_POST['password'];
    $password = password_hash('$password',PASSWORD_DEFAULT);
    $pass=$user['pass'];
    $username=$user['full_name'];
    $email=$user['email'];
    
    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`,`pass`) VALUES (NULL, '$username', '$login', '$email', '$password','$pass')");
    $_SESSION['message'] = 'You have changed your password!';        

    $connect->close();
    header('Location: ../index.php');
?>