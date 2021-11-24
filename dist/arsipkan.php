<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Arsipkan</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Arsip Data</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Menu</div>
                            <a class="nav-link" href="data_arsip.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Arsip
                            </a>
                            <a class="nav-link" href="about.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                About
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tambah Arsip</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Tambah Data Arsip</a></li>
                            <li class="breadcrumb-item active">Arsipkan</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Tambah Data Arsip
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <tbody>
                                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Nomor Surat</label>
                                            <div class="col-12 col-sm-8 col-lg-6"><input type="text" name="no_surat" placeholder=""
                                        class="form-control"><small class="form-text text-muted">Masukan nomor
                                        surat</small></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Kategori</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                            <select class="custom-select d-block col-md-3" id="kategori" name="kategori" required>
                                                <option value="0">--Pilih Kategori--</option>
                                                <option value="Undangan">Undangan</option>
                                                <option value="Pengumuman">Pengumuman</option>
                                                <option value="Nota Dinas">Nota Dinas</option>
                                                <option value="Pemberitahuan">Pemberitahuan</option>
                                                
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Judul</label>
                                            <div class="col-12 col-sm-8 col-lg-6"><input type="text" name="judul" placeholder=""
                                        class="form-control"><small class="form-text text-muted">Masukan judul
                                        surat</small></div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">Waktu</label>
                                            <div class="col-12 col-sm-8 col-lg-6"><input type="text" value="<?php echo date("Y-m-d H:i:s"); ?>" name="waktu" placeholder=""
                                                class="form-control"><small class="form-text text-muted">Masukan waktu</small>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-left">File Surat</label>
                                            <div class="col-12 col-sm-8 col-lg-6"><input type="file" name="file" placeholder=""
                                                class="form-control"><small class="form-text text-muted">Masukan file surat
                                                dengan format
                                                PDF</small></div>
                                        </div>
                                        <input type="submit" redirect="data_arsip.php" value="Simpan" name="proses" class="btn btn-success">
                                        <a href="data_arsip.php" class="btn btn-warning"><i class="fa fa-times"></i>&nbsp;Kembali</a>
                                        </form>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php
    include "koneksi.php";
    if(isset($_POST['proses'])){
        $ekstensi_diperbolehkan = array('pdf');
        $nama = $_FILES['file']['name'];
        $x = explode('.', $nama);
        $ekstensi = strtolower(end($x));
        $ukuran = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name' ];   

        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if($ukuran < 1044070){          
                move_uploaded_file($file_tmp, 'berkas/'.$nama);
                mysqli_query($koneksi, "insert into surat set
                no_surat = '$_POST[no_surat]',
                kategori = '$_POST[kategori]',
                judul = '$_POST[judul]',
                waktu = '$_POST[waktu]',
                namafile = '$nama'");
            }else{
                echo 'UKURAN FILE TERLALU BESAR';
            }
        }else{
            echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
        // echo "Data Berhasil Disimpan";
        echo "<script>alert('Berhasil Membah Data');window.location='data_arsip.php'</script>";
        // echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
        
    }
    ?>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>

</html>
