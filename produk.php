<?php include 'includes/header.php'; ?>

<section class="shop-section py-5">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold">Koleksi Bunga & Hampers</h2>

    <div class="row g-4">

      <?php
      // Array produk
      $produk = [
        ["Buket Mawar ", "bunga4.jpeg", "Bunga mawar merah premium dengan wrapping elegan", "Rp 250.000"],
        ["Hampers Sok Penyalin", "bunga5.jpeg", "Berisi bunga, kue kering, dan dekorasi eksklusif", "Rp 350.000"],
        ["Bunga Meja Minimalis", "bunga7.jpeg", "Cocok untuk meja tamu atau ruang kerja", "Rp 180.000"],
        ["Buket Graduation", "bunga8.jpeg", "Kado wisuda penuh makna dan warna", "Rp 220.000"],
        ["Hampers Penyalin 2", "bunga6.jpeg", "Buket + box kue mini untuk hadiah ulang tahun", "Rp 320.000"],
        ["Flower Box Premium", "bunga10.jpeg", "Kotak bunga eksklusif dengan kartu ucapan", "Rp 400.000"],
        ["Bunga Lily Elegan", "bunga11.jpeg", "Rangkaian lily putih yang elegan dan harum", "Rp 275.000"],
        ["Hampers Custom Nama", "bunga12.jpeg", "Bisa request nama di produk dan warna wrapping", "Rp 380.000"]
      ];

      // Loop produk
      foreach ($produk as $item) {
        echo '
        <div class="col-md-3 col-sm-9">
          <div class="card h-100 shadow-sm border-0">
            <img src="assets/img/' . $item[1] . '" class="card-img-top" alt="' . $item[0] . '">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">' . $item[0] . '</h5>
              <p class="card-text text-muted small">' . $item[2] . '</p>
              <p class="fw-bold mb-3">' . $item[3] . '</p>
              <a href="https://wa.me/6282341508882?text=Halo%20saya%20mau%20order%20' . urlencode($item[0]) . '" class="btn btn-outline-success mt-auto w-100">Pesan Sekarang</a>
            </div>
          </div>
        </div>';
      }
      ?>

    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
