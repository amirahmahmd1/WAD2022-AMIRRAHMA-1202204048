<?php
    include "connector-user.php";
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pw=$_POST['pw'];
    $konfirmasi_pw=$_POST['konfirmasi_pw'];
    $no_hp=$_POST['no_hp'];
    if($pw == $konfirmasi_pw){
        $query = mysqli_query($conn_user, "INSERT INTO user_amirrahma(nama, email, password, no_hp) VALUES ('$name', '$email', '$pw', '$no_hp')");
    if($query){
        setcookie('name', $name, time()+86400*30, '/' );
        setcookie('email', $email, time()+86400*30, '/' );
        setcookie('pw', $pw, time()+86400*30, '/' );
        setcookie('no_hp', $no_hp, time()+86400*30, '/' );
        header('location: ../index.php');
    }else{
        echo 'password salah';
    }
    
    }
?>