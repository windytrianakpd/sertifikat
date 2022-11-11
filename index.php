<?php
session_start();
// $_SESSION['msg'] = 2;
include 'layout/header.php';
include 'config/koneksi.php';
?>

<!-- Content -->
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Arsip Surat</h3>
                <p>Berikut ini adalah surat - surat yang telah terbit dan diarsipkan</p>
                <p>Klik "Lihat" pada kolom aksi untuk menampilkan surat</p>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Surat</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php if (isset($_GET['status'])) : ?>
                                    <p>
                                        <?php
                                        if ($_GET['status'] == 'sukses') {
                                            echo '<div class="alert alert-success">Berhasil</div>';
                                        } else {
                                            echo "Pendaftaran gagal!";
                                        }
                                        ?>
                                    </p>
                                <?php endif; ?>
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Kode Surat</th>
                                                <th>Kategori</th>
                                                <th>Judul</th>
                                                <th>Waktu Pengarsipan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $sql = "SELECT * FROM surat";
                                            $query = mysqli_query($db, $sql);

                                            while ($surat = mysqli_fetch_array($query)) {
                                                echo "<tr>";

                                                echo "<td>" . $surat['id'] . "</td>";
                                                echo "<td>" . $surat['nomor_surat'] . "</td>";
                                                echo "<td>" . $surat['kategori'] . "</td>";
                                                echo "<td>" . $surat['judul'] . "</td>";
                                                echo "<td>" . $surat['waktu_pengarsipan'] . "</td>";
                                                echo "<td>";
                                                echo "<button class='btn btn-danger btn-sm' data-id =". $surat['id']." id='btn-delete'>Hapus</button>";
                                                echo "<a class='btn btn-success btn-sm' href='unduh-arsip.php?file=" . $surat['file_surat'] . "'>Unduh</a>";
                                                echo "<a class='btn btn-primary btn-sm' href='lihat-arsip.php?id=" . $surat['id'] . "'>Lihat</a>";
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <a href="tambah-arsip.php" class="btn btn-success my-3">Arsipkan Surat </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include 'layout/footer.php';
?>
<script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 1000);
        // hapus data proses
        $(document).on('click', '#btn-delete', function() {
            var id = $(this).attr('data-id');

            console.log(id);
            Swal.fire({
                title: 'Apakah Kamu Yakin Menghapus Data Ini',
                showDenyButton: true,
                icon: 'warning',
                showCancelButton: false,
                confirmButtonText: 'Hapus',
                denyButtonText: `Batal`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        data: "id=" + id,
                        url: '/Project_Sertifikasi/hapus-arsip.php',
                        success: function($result) {
                            Swal.fire('Data Telah Dihapus!', '', 'Sukses')
                            location.reload();
                        }
                    });

                } else if (result.isDenied) {
                    Swal.fire('Data Tidak jadi di hapus', '', 'info')
                }
            })
        });
    });
</script>