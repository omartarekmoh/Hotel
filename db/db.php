<?php
/*
distnation name : city

check in name : check-in

check out name : check-out


adult name : adult

children name : chidren

room name : room
*/

$server_name = "localhost";
$username = "root";
$pw = "";
$db = "hotel";

$conn = mysqli_connect($server_name, $username, $pw, $db);
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
