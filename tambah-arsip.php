<?php
include "layout/header.php";
?>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Arsip Surat (Unggah Surat)</h3> 
                <p>Unggah surat yang telah terbit pada form ini untuk diarsipkan.</p>
                <p class="text-danger"><strong>Catatan : </strong> </p>
                <p>- Gunakan file berformat PDF</p>
            </div>
           
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Unggah Arsip</h2>                       
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="proses-arsip.php" id="form-upload" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="POST">

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nomor Surat <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="nomor_surat" name="nomor_surat" required="required" class="form-control ">
                                </div>
                            </div>                            
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Kategori</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select name="kategori" id="kategori" class="form-control">
                                        <option value="pengumuman">Pengumuman</option>
                                        <option value="undangan">Undangan</option>
                                        <option value="notadinas">Nota Dinas</option>
                                        <option value="pemberitahuan">Pemberitahuan</option>
                                    </select>                                    
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Judul Surat <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="judul" name="judul" required="required" class="form-control ">
                                </div>
                            </div>  
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">File Surat <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" id="file_surat" name="file_surat" required="required" class="form-control ">
                                </div>
                            </div>                             
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a href="index.php" class="btn btn-warning">Kembali</a>
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success" name="upload" value="upload">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "layout/footer.php";
?>