<?php
session_start();
include ("service/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM users WHERE username = ?";
  $stmt = $db->prepare($sql);
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 1) {
    $data = $result->fetch_assoc();

    if (password_verify($password, $data["password"])) {
      $_SESSION["username"] = $data["username"];
      header("Location: home.php");
    } else {
      echo "<script>alert('Password salah!'); window.location.href='index.php';</script>";
    }
  } else {
    echo "<script>alert('Username tidak ditemukan!'); window.location.href='index.php';</script>";
  }

  $stmt->close();
}
?>