<?php
$mysqli = new mysqli("localhost","root"," ","msd_toko_online");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>