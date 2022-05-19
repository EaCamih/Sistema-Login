<?php
session_start();
if(!$_SESSION['nome']);{
    header('index.php');
    exit();
}