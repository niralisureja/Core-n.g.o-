<?php

session_start();
if(!isset($_SESSION['user'])){
    header("Location:../Volunteer_Login.php");
}

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?= $page_title ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        <?= $_SESSION['user']['full_name'] ?>
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item <?= isset($sidebar_btn_dashdord_active)?$sidebar_btn_dashdord_active:'  ' ?>">
                        <a class="nav-link" href="dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item <?= isset($sidebar_btn_user_active)?$sidebar_btn_user_active:'  ' ?>">
                        <a class="nav-link" href="./user.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="nav-item <?= isset($sidebar_btn_table_active)?$sidebar_btn_table_active:'  ' ?>">
                        <a class="nav-link" href="./Registered Volunteer.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Registered Volunteer</p>
                        </a>
                    </li>
                    <li class="nav-item <?= isset($sidebar_btn_typography_active)?$sidebar_btn_typography_active:'' ?>">
                        <a class="nav-link" href="./typography.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li class="nav-item <?= isset($sidebar_btn_icons_active)?$sidebar_btn_icons_active:'' ?>">
                        <a class="nav-link" href="./icons.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li class="nav-item <?= isset($sidebar_btn_maps_active)?$sidebar_btn_dashdord_active:'  ' ?>">
                        <a class="nav-link" href="./maps.php">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li class="nav-item <?= isset($sidebar_btn_notifications_active)?$sidebar_btn_dashdord_active:'  ' ?>">
                        <a class="nav-link" href="./notifications.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <!-- <li class="nav-item active active-pro">
                        <a class="nav-link active" href="upgrade.php">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>