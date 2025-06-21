
  const openModal = document.getElementById("openModal");
  const modal = document.getElementById("modal");

  openModal.addEventListener("click", function (e) {
    e.preventDefault();
    modal.style.display = "block";
  });

  window.addEventListener("click", function (e) {
    if (e.target == modal) {
      modal.style.display = "none";
    }
  });

  // Notifikasi jika pendaftaran berhasil
  const urlParams = new URLSearchParams(window.location.search);
  if (urlParams.get("registered") === "success") {
    alert("Pendaftaran berhasil! Silakan login.");
  }
