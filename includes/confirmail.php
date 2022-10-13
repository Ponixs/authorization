<?php
    session_start();
    
    require_once 'connect.php';
    $email=$_POST['email'];
    $find_user=mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' ");
    if (mysqli_num_rows($find_user)>0) {
        $user=mysqli_fetch_assoc($find_user);
        
        $_SESSION['message']='incorrect login or password';
        header('Location: ../password_change.php');
        

    }
    else {
        $_SESSION['message']='mail does not exist';
        header('Location: ../forgotpass.php');
    }
    
?>