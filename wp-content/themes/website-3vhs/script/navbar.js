// Pastikan dokumen sudah dimuat sebelum menjalankan skrip JavaScript
document.addEventListener("DOMContentLoaded", function() {
  // Memilih gambar di dalam elemen dengan kelas containerMobile
  const navIcon = document.querySelector(".containerMobile img");

  // Menambahkan event listener pada gambar yang sudah dipilih
  navIcon.addEventListener("click", function() {
    console.log("cek");
    navLinks = document.querySelector(".navLinks")
    // Mengubah lebar gambar menjadi 50% saat diklik
    navLinks.classList.toggle("w50")
    document.querySelector(".containerMobile img").classList.toggle("border")
  });

  // Pesan ini akan dicetak di konsol setelah dokumen selesai dimuat
  console.log("hao");
});
