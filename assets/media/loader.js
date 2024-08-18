  $(document).ready(function() {
  // Menampilkan loader saat halaman dimuat
  $(".preloader").fadeIn();

  // Menyembunyikan loader saat halaman selesai dimuat
  $(window).on("load", function() {
    $(".preloader").fadeOut();
  });
});
