<?php
//menyertakan code dari file koneksi
include "koneksi.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Porsche | Sejarah, Artikel, Galeri & Informasi Porsche</title>
    <link rel="icon" type="image/png" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <meta name="description" content="Website About Porsche berisi artikel, galeri, dan informasi lengkap seputar sejarah, desain, dan performa mobil sport Porsche.">

  <style>
  body.light-theme {
    background-color: white;
    color: black;
  }

  body.dark-theme {
    background-color: #1f1f1f;
    color: white;
  }

  .dark-theme .card {
    background-color: #121212;
    color: white;
  }

  .dark-theme .navbar {
    background-color: #1a1a1a;
    color: white;
  }
  .dark-theme footer {
    background-color: #1a1a1a;
  }

  .dark-theme .accordion-button {
    background-color: #333;
    color: white;
  }

  .dark-theme .accordion-body {
    background-color: #222;
    color: white;
  }


.dark-theme #schedule,
.dark-theme section#schedule.bg-white {
  background-color: #1f1f1f !important;
  color: #eaeaea !important;
}

.dark-theme #schedule .card {
  background-color: #121212 !important;
  color: #eaeaea !important;
  border-color: rgba(255,255,255,0.06) !important;
}

.dark-theme #schedule .text-danger {
  color: #ff6b6b !important; 
}

.dark-theme .bi {
  color: inherit;
}

.dark-theme .card {
  background-color: #121212;
  color: #e6e6e6;
  border: 1px solid rgba(255,255,255,0.06);
  box-shadow: 0 2px 6px rgba(0,0,0,0.45);
}

.dark-theme .card .card-footer,
.dark-theme .card .card-footer small {
  background: transparent;
  color: #cfcfcf;
  border-top: 1px solid rgba(255,255,255,0.04);
}

.dark-theme .card .card-title,
.dark-theme .card .card-body,
.dark-theme .card .card-text {
  color: inherit;
}

.dark-theme .card a.text-dark {
  color: #f1f1f1 !important;
  text-decoration: none;
}

.dark-theme .text-body-secondary {
  color: #bdbdbd !important;
}

.dark-theme #schedule .bi {
  color: #ffb4b4;
}

.dark-theme .text-dark {
  color: #f8f8f8 !important;
}
.dark-theme .bg-white {
  background-color: transparent !important;
}
#tanggal, #jam {
    color: white;
}

.custom-navbar {
  background-color: #f8f9fa;
  transition: background-color 0.3s ease, color 0.3s ease;
}

.dark-theme .custom-navbar {
  background-color: #2b2b2b;
}

.dark-theme .custom-navbar .nav-link,
.dark-theme .custom-navbar .navbar-brand {
  color: #e6e6e6 !important;
}

.dark-theme .custom-navbar .nav-link:hover {
  color: #ffffff !important;
}

.dark-theme .navbar-toggler {
  border-color: rgba(255,255,255,0.3);
}

.dark-theme .navbar-toggler-icon {
  filter: invert(1);
}

  </style>
  </head>

  <body>
    <!-- nav begin -->
     <nav class="navbar navbar-expand-lg sticky-top custom-navbar">
  <div class="container">
    <a class="navbar-brand" href="#">About Porsche</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-dark">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#hero">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#article">Article</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#schedule">Schedule</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#accordion">About Me</a>
        </li>
      </ul>
      <div class="d-flex align-items-center gap-2">

  <!-- Tombol Login -->
  <a href="login.php" class="btn btn-outline-primary">
    <i class="bi bi-box-arrow-in-right"></i> Login
  </a>

  <!-- Tombol Light Mode -->
  <button id="lightBtn" class="btn btn-light border">
    <i class="bi bi-brightness-high"></i> Light
  </button>

  <!-- Tombol Dark Mode -->
  <button id="darkBtn" class="btn btn-dark">
    <i class="bi bi-moon-stars"></i> Dark
  </button>


    </div>
  </div>
</nav>
    <!-- nav end -->
    <!-- Dark/Light Start -->
     <script>
  const body = document.body;
  const darkBtn = document.getElementById("darkBtn");
  const lightBtn = document.getElementById("lightBtn");

  // Set default theme
  body.classList.add("light-theme");

  // Dark Mode
  darkBtn.addEventListener("click", () => {
    body.classList.remove("light-theme");
    body.classList.add("dark-theme");
  });

  // Light Mode
  lightBtn.addEventListener("click", () => {
    body.classList.remove("dark-theme");
    body.classList.add("light-theme");
  });
  
</script>
    <!-- Dark/Light End -->
    <!-- hero begin -->
    <section id="hero" class="text-center p-5 bg-black text-sm-start">
    <div class="container">
      <div class="d-sm-flex flex-sm-row-reverse align-items-center">
      <img src="img/porsche.jpg" class="img-fluid" width="600" />
        <div>
          <h1 class="fw-bold display-4 text-white">
            Selamat Datang di About Porsche
          </h1>
          <h4 class="lead display-8 text-white">
            Jelajahi dunia penuh inovasi dan kecepatan bersama Porsche. Temukan kisah legendaris, desain ikonik, serta performa luar biasa dari setiap model yang lahir untuk mendefinisikan arti “mobil sport sejati”.
          </h4>
          <span id="tanggal"></span>
          <span id="jam"></span>
        </div>
      </div>
    </div>
    </section>
    <!-- hero end -->
    <!-- article begin -->
      <section id="article" class="text-center p-5">
        <div class="container">
            <h2>Article</h2>
<div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
  				<?php
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
        $hasil = $conn->query($sql); 

        while($row = $hasil->fetch_assoc()){
        ?>
<!-- col start -->
          <div class="col">
            <div class="card h-100">
              <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title"><?= $row["judul"]?></h5>
                <p class="card-text">
                  <?= $row["isi"]?>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary"><?= $row["tanggal"]?></small>
              </div>
            </div>
          </div>
<!-- col end -->
<?php
}
?>
</div>
      </section>
    <!-- article end-->
    <!-- gallery begin -->
     
     <section id="gallery" class="text-center p-5 bg-black text-white">
      <div class="container">
          <h2>Gallery</h2>
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/taycan.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/spyder.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/BDAD5683C3A94CC6AA8EA7DDB944336A_EA25FD0FDC51455DB3B8B582B22BA830_911-turbo-s-exterior.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/gt3-rs.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      </div>

     </section>
    <!-- gallery end -->
    <!-- Schedule begin -->
<section id="schedule" class="text-center p-5 bg-white">
      <h2 class="text-center mb-4 fw-bold">Schedule</h2>

      <div class="container">
        <div class="row g-4 justify-content-center">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card h-100 shadow-sm">
              <h2 class="text-danger mt-3"><i class="bi bi-book"></i></h2>
              <div class="card-body">
                <h5 class="card-title">Membaca</h5>
                <p class="card-text">Menambah wawasan setiap pagi sebelum beraktivitas</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card h-100 shadow-sm">
              <h2 class="text-danger mt-3"><i class="bi bi-laptop"></i></h2>
              <div class="card-body">
                <h5 class="card-title">Menulis</h5>
                <p class="card-text">Mencatat setiap pengalaman harian di jurnal pribadi</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card h-100 shadow-sm">
              <h2 class="text-danger mt-3"><i class="bi bi-people-fill"></i></h2>
              <div class="card-body">
                <h5 class="card-title">Diskusi</h5>
                <p class="card-text">Bertukar ide dengan teman dalam kelompok belajar</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card h-100 shadow-sm">
              <h2 class="text-danger mt-3"><i class="bi bi-bicycle"></i></h2>
              <div class="card-body">
                <h5 class="card-title">Olahraga</h5>
                <p class="card-text">Menjaga kesehatan dengan bersepeda sore hari</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row g-4 justify-content-between mt-3">
<div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card h-100 shadow-sm">
              <h2 class="text-danger mt-3"><i class="bi bi-film"></i></h2>
              <div class="card-body">
                <h5 class="card-title">Movie</h5>
                <p class="card-text">Menonton film yang bagus di bioskop</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card h-100 shadow-sm ms-auto">
              <h2 class="text-danger mt-3"><i class="bi bi-bag"></i></h2>
              <div class="card-body">
                <h5 class="card-title">Belanja</h5>
                <p class="card-text">Membeli kebutuhan bulanan di supermarket</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- Schedule end -->
    <!--Accordion begin-->
    <section id="accordion" class="text-center p-5 bg-black text-white">
      <h2>About Me</h2>
      <div class="accordion" id="accordionExample">
  <div class="accordion-item ">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button bg-danger bg-gradient text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Universitas Dian Nuswantoro
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed bg-danger bg-gradient text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        SMA N 1 Cepiring
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed bg-danger bg-gradient text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        SMP N 3 Patebon
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
</section>
    <!--Accordion end-->
    <!-- footer begin -->
    <footer class="text-center p-5">
      <div>
        <a href="https://www.instagram.com/lylux.garage/?next=%2Flylux.garage%2F"><i class="bi bi-instagram h2 p-2 text-dark"></a></i>
        <a href="https://www.youtube.com/@lyranch"><i class="bi bi-youtube h2 p-2 text-dark"></a></i>
        <a href="https://steamcommunity.com/id/Lyranch/"><i class="bi bi-steam h2 p-2 text-dark"></a></i> 
      </div>
      <h5>Salvadino Danazulla Hansyah</h5>
      <p>all copyright reserved @2025</p>
      
    </footer>
    <!-- footer end -->
     
		<!-- Tombol Back to Top -->
    <button
      id="backToTop"
      class="btn btn-dark rounded-circle position-fixed bottom-0 end-0 m-3 d-none"
    >
      <i class="bi bi-arrow-up" title="Back to Top"></i>
    </button>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript">
function tampilwaktu() {
  const waktu = new Date();

  const pad = (num) => num.toString().padStart(2, "0");

  const tanggal = pad(waktu.getDate());
  const bulan = pad(waktu.getMonth() + 1); // FIX
  const tahun = waktu.getFullYear();

  const jam = pad(waktu.getHours());
  const menit = pad(waktu.getMinutes());
  const detik = pad(waktu.getSeconds());

  document.getElementById("tanggal").innerHTML = `${tanggal}/${bulan}/${tahun}`;
  document.getElementById("jam").innerHTML = `${jam}:${menit}:${detik}`;
}
setInterval(tampilwaktu, 1000);
    </script>
    <script type="text/javascript"> 
    const backToTop = document.getElementById("backToTop");
  			
    window.addEventListener("scroll", function () {
			if (window.scrollY > 300) {
        backToTop.classList.remove("d-none");
        backToTop.classList.add("d-block");
      } else {
        backToTop.classList.remove("d-block");
        backToTop.classList.add("d-none");
      }
    });
    
    backToTop.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
</script>
  </body>
   
</html>
