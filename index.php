<?php
    require './funcaomobile.php';

    $mobile = mobile();
    if ($mobile) {
        header("Location: ./View/login-smartphone.php");
    } else {
        header("Location: ./View/login-desktop.php");
    }
    die();