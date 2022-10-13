<?php

    session_start();

    require_once 'connect.php';
    $password= $_POST['password'];
    $login=$_POST['login'];
    $find_user=mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' ");
    if (mysqli_num_rows($find_user)>0) {
        $user=mysqli_fetch_assoc($find_user);
        
        if (password_verify('$password', $user['password'])) {
            $username=$user['full_name'];
            $login=$user['login'];
            $email=$user['email'];
            $password=$user['password'];
            $id=$user['id'];
            $Token=time()+60;
            $pass=$user['pass'];
            $connect->query("DELETE FROM `users` WHERE `login` = '$login'AND `password`='$password' ");

            mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`,`Token`,`pass`) VALUES ('$id',
             '$username', '$login', '$email', '$password','$Token','$pass')");

            $_SESSION['user']=[
            "id"=>$id,
            "username"=>$username,
            "email"=>$email,
            "Token"=>$Token,
            "pass"=>$pass
            ];

            header('Location: ../profile.php');
            
        }
        else {
            $_SESSION['message']='incorrect login or password';
            header('Location: ../index.php');
        }

    }
    else {
        $_SESSION['message']='incorrect login or password';
        header('Location: ../index.php');
    }
    
?>