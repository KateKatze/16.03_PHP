<?php

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "restaurant";

$connect = mysqli_connect($localhost, $username, $password, $dbname);

if (!$connect){
    die("Connection failed".mysqli_connect_error());
} else {
    echo "<div class='container text-success p-3 mt-5'>Database 'Restaurant' - Connected</div>";
}
?>