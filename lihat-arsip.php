<?php

include "config/koneksi.php";
include "layout/header.php";

if (!isset($_GET['id'])) {
    header('location: index.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM surat WHERE id = " . $id;
$query = mysqli_query($db, $sql);
$surat = mysqli_fetch_array($query);


if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>

<div class="container">
    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <h3>Lihat Surat</h3>
                <p>Nomor Surat : <?= $surat['nomor_surat'] ?></p>
                <p>Kategori Surat : <?= $surat['kategori'] ?></p>
                <p>Kategori Surat : <?= $surat['judul'] ?></p>
                <p>Waktu Surat : <?= $surat['waktu_pengarsipan'] ?></p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="text-center mb-4">
            <iframe src="<?php echo 'file_surat/' . $surat['file_surat']; ?>" width="800" height="600"></iframe>
        </div>
        <div class="clearfix"></div>
        <a href="index.php" class="btn btn-warning">Kembali</a>
        <?php echo "<a class='btn btn-success' href='unduh-arsip.php?file=" . $surat['file_surat'] . "'>Unduh</a>"; ?>
        <!-- <a href="" class="btn btn-warning">Kembali</a> -->
    </div>
</div>
<?php
include "layout/footer.php";
?>