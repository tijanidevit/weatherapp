<?php
    session_start();
    unset($_SESSION['weather_user']);

    header('location: ./');
?>