<?php
if(!isset($_SESSION)){
    session_start();
}

if(! isset($_SESSION['e_fund_control'])){
    header('Location:login.php');
    exit;
}

// datalist2_delete