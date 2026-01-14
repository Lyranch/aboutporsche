<?php
include "koneksi.php";

$username_session = $_SESSION['username'];

$stmt = $conn->prepare("SELECT * FROM user WHERE username=?");
$stmt->bind_param("s", $username_session);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();
?>

<div class="row justify-content-center">
    <div class="col-md-11">
        <form method="post" enctype="multipart/form-data">
            <!-- Username -->
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" value="<?= $user['username'] ?>" required>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label">Ganti Password</label>
                <input type="password" name="password" class="form-control"
                       placeholder="Isi jika ingin mengganti password">
            </div>

            <!-- Ganti foto -->
            <div class="mb-3">
                <label class="form-label">Ganti Foto Profil</label>
                <input type="file" name="foto" class="form-control">
            </div>

            <!-- Foto lama -->
            <div class="mb-3">
                <label class="form-label">Foto Profil Saat Ini</label><br>
                <?php if ($user['foto']) { ?>
                    <img src="img/<?= $user['foto'] ?>" width="120" class="img-thumbnail">
                <?php } else { ?>
                    <span class="text-muted">Belum ada foto</span>
                <?php } ?>
            </div>

            <button type="submit" name="simpan" class="btn btn-primary">
                Simpan
            </button>
        </form>
    </div>
</div>

<?php
// Proses Profile
if (isset($_POST['simpan'])) {
    $username_baru = $_POST['username'];
    $password_baru = $_POST['password'];
    $foto = $user['foto'];

    // upload foto
    if (!empty($_FILES['foto']['name'])) {
        $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
        $nama_foto = uniqid() . '.' . $ext;

        move_uploaded_file($_FILES['foto']['tmp_name'], "img/" . $nama_foto);

        // hapus foto lama
        if ($user['foto'] && file_exists("img/" . $user['foto'])) {
            unlink("img/" . $user['foto']);
        }

        $foto = $nama_foto;
    }

    // ganti password(otomatis md5)
    if (!empty($password_baru)) {
        $password_md5 = md5($password_baru);

        $stmt = $conn->prepare("
            UPDATE user 
            SET username=?, password=?, foto=?
            WHERE id=?
        ");
        $stmt->bind_param(
            "sssi",
            $username_baru,
            $password_md5,
            $foto,
            $user['id']
        );
    } else {
        // tanpa ganti password
        $stmt = $conn->prepare("
            UPDATE user 
            SET username=?, foto=?
            WHERE id=?
        ");
        $stmt->bind_param(
            "ssi",
            $username_baru,
            $foto,
            $user['id']
        );
    }

    if ($stmt->execute()) {
        $_SESSION['username'] = $username_baru;
        echo "<script>
            alert('Profil berhasil diperbarui');
            document.location='admin.php?page=profil';
        </script>";
    }
}
?>
