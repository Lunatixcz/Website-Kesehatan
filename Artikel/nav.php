<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand larger" href="../Website Kesehatan/dashboard.php?=dashboard"> <img src="./Image/./healthcare white.png" alt=""> USU
      Sehat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../Website Kesehatan/dokter.php?s=dokter">Chat Dokter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Website Kesehatan/artikel.php?s=artikel">Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Website Kesehatan/obat.php?s=obat">Obat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Website Kesehatan/cart.php?s=cart">Cart</a>
        </li>
      </ul>
      <ul class="navbar-nav" id="reg-log">
        <li class="nav-item">
          <a class="nav-link disabled" style="font-weight: bolder; color: white;">
            <?php
            if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
              // session isn't started
              session_start();
            }
            if (isset($_SESSION['name'])) {
              echo $_SESSION['name'];
            } else {
              echo 'Anonymous User';
            }
            ?>
          </a>
          <?php
          if (isset($_SESSION['name'])) {
            echo '
          <li class="nav-item">
            <a class="nav-link" href="./logout.php">Log out</a>
          </li>
          ';
          }
          ?>
        </li>
        <li class="nav-item">
        <?php
            if (session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
              // session isn't started
              session_start();
            }
            if (isset($_SESSION['name'])) {
              echo '';
            } else {
              echo '<a class="nav-link" href="./index.php">Log In</a>';
            }
            ?>
        </li>
      </ul>
    </div>
  </div>
</nav>