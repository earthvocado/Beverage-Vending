<?php
$host     = "database.skr.ac.th";
$user     = "studentg2";
$pass     = "mypony";
$dbname   = "g2_1";
try {
    $dbcon = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $dbcon -> exec("set names utf8");
    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}