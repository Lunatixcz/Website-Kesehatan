<!doctype html>
<html lang="en">

<?php include 'meta.php' ?>

<body>
  <?php include 'nav.php' ?>

  <!-- Greeting page-->
  <div class="greeting">
    <div class="container container-greet">
      <h1 class="greet-heading"><span class="red">Healthcare</span> with a click</h1>
      <p class="greet-body">Layanan konsultasi kesehatan terbaik di Indonesia karya anak bangsa</p>
    </div>
  </div>

  <!--option-->
  <div class="option container">
    <h2>Layanan dari Kami</h2>
    <div class="container">
      <div class="row">
        <div class="col">
          <a href="./dokter.php?s=dokter">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="./image/Chat.png" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Chat Dokter</h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a href="./obat.php?s=obat">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="./image/Pill Outline.png" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Beli Obat</h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a href="./artikel.php?s=artikel">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="./image/news2.png" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Artikel</h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col">
          <a href="./cart.php?s=cart">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="./image/cart.png" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Shopping Cart</h5>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Article -->
  <div class="article container">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h2 id="">Artikel</h2>
        </div>
        <div class="col-4 text-end">
          <a href="./artikel.php?s=artikel" id="bottom">lihat semua ></a>
        </div>
      </div>
    </div>
    <hr>
    <div class="article-content container">
      <div class="row container-head">
        <div class="col-8">
          <img src="./image/Artikel Resep.jpg" alt="" style="width: 100%;">
        </div>
        <div class="col-4 text-content">
          <h1>Resep Makanan Mudah, Sehat, dan Bergizi</h1><br>
          <p>Anak muda sekarang sangat sulit mencari waktu untuk menyiapkan makanan sehat. Maka dari itu, kami
            ...</p>
          <br>
          <a href="../Artikel/Artikel Resep.php?s=artikel">Baca Selengkapnya ></a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col text">
        <div class="card" style="width: 18rem;">
          <img src="./image/Artikel Laki.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Trik Jitu untuk Mendapat Anak Laki-Laki</h5>
            <a href="../Artikel/Artikel Laki.php?s=artikel">Baca Selengkapnya ></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="./image/Artikel Daging.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Daging Sapi dan Kambing, manakah yang lebih tinggi kolestrol</h5>
            <a href="../Artikel/Artikel Daging.php?s=artikel">Baca Selengkapnya ></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="./image/Artikel Jambu.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ini Manfaat Jambu Kristal untuk Ibu Hamil</h5>
            <a href="../Artikel/Artikel Jambu.php?s=artikel">Baca Selengkapnya ></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" style="width: 18rem;">
          <img src="./image/Artikel Kiwi.jpg" card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Manfaat Buat Kiwi untuk Kesehatan Pria</h5>
            <a href="../Artikel/Artikel Kiwi.php?s=artikel">Baca Selengkapnya ></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div style="height: 20vh;"></div>

  <?php include 'footer.php' ?>
</body>

</html>