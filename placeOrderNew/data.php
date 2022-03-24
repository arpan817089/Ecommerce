<?php
$server = "sql102.epizy.com";
$username = "epiz_30699216";
$password = "iawBtspfH54pdj";
$dbname = "epiz_30699216_swipefood";
$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed:".mysqli_connect_error());
}
?>