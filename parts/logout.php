<?php

session_start();

unset($_SESSION['e_fund_control']);

// 轉向
header('Location:login.php');