<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "perpusku";

$db = new mysqli($host, $user, $pass, $dbname);

if ($db->connect_error) {
  die("Koneksi gagal: " . $db->connect_error);
}
?>