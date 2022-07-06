<?php
session_start();
if(!empty($_SESSION["userId"])) {
    require_once './view/home.php';
} else {
    require_once './view/login.php';
}
?>