<?php

$db_host ="localhost";
$db_name ="chairproject"; 
$db_user ="root";
$db_password ="";

$dsn = "mysql:host={$db_host};dbname={$db_name}";

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
];

$pdo = new PDO($dsn, $db_user, $db_password, $pdo_options);

// $pdo->query("use test;"); // 萬一出現 no databases selected 的錯誤

define('WEB_ROOT', '/fund_project');

if(!isset($_SESSION)){
    session_start();
}