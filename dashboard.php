<?php
// ambil username login
$username = $_SESSION['username'];

// ambil foto user
$stmt = $conn->prepare("SELECT foto FROM user WHERE username=?");
$stmt->bind_param("s", $username);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

// jumlah article
$sql1 = "SELECT * FROM article";
$hasil1 = $conn->query($sql1);
$jumlah_article = $hasil1->num_rows;

// jumlah galeri
$sql2 = "SELECT * FROM galeri";
$hasil2 = $conn->query($sql2);
$jumlah_galeri = $hasil2->num_rows;

// query untuk mengambil data article
$sql1 = "SELECT * FROM article ORDER BY tanggal DESC";
$hasil1 = $conn->query($sql1);
$jumlah_article = $hasil1->num_rows;

// query untuk mengambil data galeri
$sql2 = "SELECT * FROM galeri";
$hasil2 = $conn->query($sql2);
$jumlah_galeri = $hasil2->num_rows;

//print_r($jumlah_article);
?>
<div class="text-center my-5">

    <!-- Sambutan -->
    <p class="fs-5 text-muted mb-1">Selamat Datang,</p>
    <h2 class="fw-bold text-danger mb-4"><?= $username ?></h2>

    <!-- Foto Profil -->
    <div class="mb-4">
        <?php if (!empty($user['foto']) && file_exists("img/".$user['foto'])) { ?>
            <img src="img/<?= $user['foto'] ?>"
                 class="rounded-circle shadow"
                 width="180"
                 height="180"
                 style="object-fit: cover;">
        <?php } ?>
    </div>

    <!-- Card Statistik -->
    <div class="row justify-content-center g-4 mt-3">

        <!-- Article -->
        <div class="col-md-3">
            <div class="card border-danger shadow">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <i class="bi bi-newspaper fs-3"></i>
                        <p class="mb-0 mt-2">Article</p>
                    </div>
                    <span class="badge rounded-circle bg-danger fs-2">
                        <?= $jumlah_article ?>
                    </span>
                </div>
            </div>
        </div>

        <!-- Gallery -->
        <div class="col-md-3">
            <div class="card border-danger shadow">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <i class="bi bi-camera fs-3"></i>
                        <p class="mb-0 mt-2">Gallery</p>
                    </div>
                    <span class="badge rounded-circle bg-danger fs-2">
                        <?= $jumlah_galeri ?>
                    </span>
                </div>
            </div>
        </div>

    </div>
</div>
