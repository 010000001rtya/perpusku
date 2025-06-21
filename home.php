<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="CSS/globalshome.css" />
    <link rel="stylesheet" href="CSS/home.css" />
    <title>PERPUSKU - Sistem Perpustakaan Online</title>
  </head>
  <body>
    <div class="frame">
      <header class="header">
        <img class="logo" src="assets/imgs/Logo.png" alt="Logo PERPUSKU" />
        <h1 class="site-title">PERPUSKU</h1>
      </header>
      <main class="main-content">
        <h2 class="welcome-message">Selamat Datang <?php echo $_SESSION['username']; ?> </h2>
        <section class="book-catalog">
          <article class="book-card">
            <img class="book-cover" src="assets/imgs/kamus.jpg" alt="Sampul buku Kamus" />
            <h3 class="book-title">Kamus</h3>
            <button class="borrow-button">Pinjam</button>
          </article>
          <article class="book-card">
            <img class="book-cover" src="assets/imgs/images (4).png" alt="Sampul buku Pelajaran" />
            <h3 class="book-title">Pelajaran</h3>
            <button class="borrow-button">Pinjam</button>
          </article>
          <article class="book-card">
            <img class="book-cover" src="assets/imgs/novel.jpg" alt="Sampul buku Novel" />
            <h3 class="book-title">Novel</h3>
            <button class="borrow-button">Pinjam</button>
          </article>
          <article class="book-card">
            <img class="book-cover" src="assets/imgs/sejarah.jpg" alt="Sampul buku Sejarah" />
            <h3 class="book-title">Sejarah</h3>
            <button class="borrow-button">Pinjam</button>
          </article>
        </section>
      </main>
      <footer class="footer">
        <p class="copyright">copyright @kvenn</p>
      </footer>
    </div>
  </body>
</html>