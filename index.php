<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PERPUSKU</title>
    <link rel="stylesheet" href="CSS/globals.css" />
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="stylesheet" href="CSS/modal.css" />
    <style>
      
    </style>
  </head>

  <body>
    <div class="index">
      <div class="overlay"></div>
      <div class="div">
        <div class="overlap-group">
          <img class="rectangle" src="assets/imgs/Logo.png" />
          <div class="text-wrapper">PERPUSKU</div>
        </div>
        <div class="text-wrapper-2">SELAMAT DATANG DI PERPUSKU</div>
        <p class="p">Sistem informasi perpustakaan digital SMAN 1 Demak.</p>
        <div class="text-wrapper-3">copyright @kvenn</div>
        <div class="overlap">
          <img class="img" src="assets/imgs/Logo.png" />
          <form action="login.php" method="POST">
            <div class="div-wrapper">
              <input type="text" name="username" class="input-field" placeholder="username" required />
            </div>
            <div class="overlap-2">
              <input type="password" name="password" class="input-field" placeholder="password" required />
            </div>
            <div class="overlap-3">
              <button type="submit" class="submit-btn">masuk</button>
            </div>
          </form>
          <p class="belum-punya-akun">
            <a style="color: white;">Belum punya akun?</a> <a href="#" id="openModal" class="text-wrapper-8">daftar disini.</a>
          </p>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="modal">
      <div class="modal-content">
        <img src="./assets/imgs/Logo.png" alt="Logo" class="logo" />
        <h2><span class="perpus">PERPUSKU</span></h2>

        <form action="./database/proses_register.php" method="POST">
          <label for="username">Buat Username:</label>
          <input type="text" name="username" placeholder="Username" required />

          <label for="password">Buat password:</label>
          <input type="password" name="password" placeholder="Password" required />

          <button type="submit">Daftar</button>
        </form>

        <p class="login-link">
          Sudah punya akun? <a href="index.php">Login disini</a>
        </p>
        <p class="copyright">copyright @kvenn</p>
      </div>
    </div>
  </body>
  <script>
  // Buka modal register
  const openModal = document.getElementById("openModal");
  const modal = document.getElementById("modal");

  if (openModal && modal) {
    openModal.addEventListener("click", function (e) {
      e.preventDefault();
      modal.style.display = "block";
    });

    window.addEventListener("click", function (e) {
      if (e.target === modal) {
        modal.style.display = "none";
      }
    });
  }

  // Cek apakah pendaftaran sukses
  const urlParams = new URLSearchParams(window.location.search);
  if (urlParams.get("registered") === "success") {
    alert("Pendaftaran berhasil! Silakan login.");
    // Hapus parameter dari URL agar alert tidak muncul dua kali saat refresh
    history.replaceState(null, "", window.location.pathname);
  }
</script>

  <script src="./script.js"></script>
</html>
