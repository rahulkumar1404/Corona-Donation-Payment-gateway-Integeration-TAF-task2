<?php

$_SERVER = "sql308.epizy.com";
$username = "epiz_29476370";
$password = "XBFUX4g6OrwDeR";
$dbname = "epiz_29476370_covidrelieffund";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("connection failed:".mysqli_connect_error());
}

?>
