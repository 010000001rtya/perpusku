<?php
include ("../service/database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  // Cek apakah username sudah digunakan
  $check = $db->prepare("SELECT id FROM users WHERE username = ?");
  $check->bind_param("s", $username);
  $check->execute();
  $check->store_result();

  if ($check->num_rows > 0) {
    // Username sudah digunakan
    echo "<script>alert('Username sudah digunakan!'); window.location.href='../index.php';</script>";
  } else {
    // Username tersedia, lanjut insert
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("ss", $username, $password);

    if ($stmt->execute()) {
      header("Location: ../index.php?registered=success");
      exit();
    } else {
      echo "<script>alert('Terjadi kesalahan saat menyimpan data!'); window.location.href='../index.php';</script>";
    }

    $stmt->close();
  }

  $check->close();
}
?>
