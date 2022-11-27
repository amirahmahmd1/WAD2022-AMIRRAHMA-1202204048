<?php
    include "connector-user.php";
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $query=mysqli_query($conn_user, "SELECT * from user_amirrahma where email = '$email' && password = '$password'");
    $rows=mysqli_num_rows($query);

    if ($rows) {
        $result=mysqli_fetch_assoc($query);
        if (isset($_POST['remember'])){
            $remember = $_POST['remember'];
            setcookie('remember', $remember, time()+86400*30, '/');
        }

        setcookie('email', $email, time()+86400*30, '/');
        setcookie('name', $result['nama'], time()+86400*30, '/');
        setcookie('no_hp', $result['no_hp'], time()+86400*30, '/');
        header('location: ../index.php');

    }else{
        echo 'wrong email/password';
    }
?>