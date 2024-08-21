<?php

session_start();

if(!isset($_SESSION['user'])){
    header("Location:../Volunteer_Login.php");
}else{
    session_unset();
    session_destroy();
    header("Location:../Volunteer_Login.php");
}