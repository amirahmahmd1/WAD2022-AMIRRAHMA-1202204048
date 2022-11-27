<?php
    unset($_COOKIE['name']);
    unset($_COOKIE['email']);
    unset($_COOKIE['pw']);
    unset($_COOKIE['no_hp']);
    setcookie('name', '', time()-3600,'/');
    setcookie('email', '', time()-3600,'/');
    setcookie('pw', '', time()-3600,'/');
    setcookie('no_hp', '', time()-3600,'/');
    header('location: index.php');

?>
