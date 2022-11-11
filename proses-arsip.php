<?php
include("config/koneksi.php");
if (isset($_POST['upload'])) {

    // ambil data dari formulir
    $nomor_surat = $_POST['nomor_surat'];
    $kategori = $_POST['kategori'];
    $judul = $_POST['judul'];

    // Baca lokasi file sementar dan nama file dari form (file_surat)
    $lokasi_file = $_FILES['file_surat']['tmp_name'];
    $nama_file   =  $_FILES['file_surat']['name'];
    // Tentukan folder untuk menyimpan file
    $folder = "file_surat/$nama_file";
    // tanggal sekarang
    $tgl_upload = date("Ymd");
    // Apabila file berhasil di upload
    if (move_uploaded_file($lokasi_file, "$folder")) {
        echo "Nama File : <b>$nama_file</b> sukses di upload";

        // buat query
        $sql = "INSERT INTO surat (nomor_surat, kategori, judul, waktu_pengarsipan, file_surat) VALUE ('$nomor_surat', '$kategori', '$judul', $tgl_upload, '$nama_file')";
        $query = mysqli_query($db, $sql);

        // apakah query simpan berhasil?
        if ($query) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: index.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: index.php?status=gagal');
        }
    }
} else {
    die("Akses dilarang...");
}
