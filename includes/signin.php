<?php
    session_start();

    require_once 'connect.php';
    $password= $_POST['password'];
    $login=$_POST['login'];
    $find_user=mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' ");
    if (mysqli_num_rows($find_user)>0) {
        $user=mysqli_fetch_assoc($find_user);
        
        if (password_verify('$password', $user['password'])) {
            setcookie("cook","cook",time()+20);
            $_SESSION['user']=[
            "id"=>$user['id'],
            "username"=>$user['full_name'],
            "email"=>$user['email']
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