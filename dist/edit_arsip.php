<!DOCTYPE html>
<?php
include "koneksi.php";
$sql=mysqli_query($koneksi, "select* from surat where id='$_GET[id]'");
$data=mysqli_fetch_array($sql);
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Arsip</title>
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
                        <h1 class="mt-4">Edit Data Arsip</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="
                                ">Edit Arsip</a></li>
                            <li class="breadcrumb-item active">Arsip</li>
                        </ol>
                        
                        <hr>
                        <div class="card mb-4">
                            <div class="card-body">
                                
                                 <form class="form-horizontal style-form" action="" method="post">
                                                                        
                                    <div class="form-group row">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor
                                                Surat</label>
                                        </div>
                                        <div class="col-12 col-md-9"><input type="text" value="<?php echo $data['no_surat']; ?>"
                                                name="no_surat" placeholder="" class="form-control"><small
                                                class="form-text text-muted">Masukan
                                                nomor
                                                surat</small></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col col-md-3"><label for="text-input"
                                                class=" form-control-label">Kategori</label>
                                        </div>
                                        <div class="col-12 col-md-9"><input type="text" value="<?php echo $data['kategori']; ?>"
                                                name="kategori" placeholder="" class="form-control"><small
                                                class="form-text text-muted">Masukan kategori
                                                surat</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col col-md-3"><label for="text-input"
                                                class=" form-control-label">Judul</label>
                                        </div>
                                        <div class="col-12 col-md-9"><input type="text" value="<?php echo $data['judul']; ?>"
                                                name="judul" placeholder="" class="form-control"><small
                                                class="form-text text-muted">Masukan judul
                                                surat</small></div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col col-md-3"><label for="text-input"
                                                class=" form-control-label">Waktu</label>
                                        </div>
                                        <div class="col-12 col-md-9"><input type="text" value="<?php echo $data['waktu']; ?>"
                                                name="waktu" placeholder="" class="form-control"><small
                                                class="form-text text-muted">Masukan waktu</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col col-md-3"><label for="text-input"
                                                class=" form-control-label">File</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <a href="index.php" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-file -text"></i>&nbsp;Ubah PDF</a>
                                        </div>
                                    </div>
                                    <div class="form-group row text-right">
                                        <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                            <button class="btn btn-space btn-secondary">Kembali</button>
                                            <button type="submit" class="btn btn-space btn-primary">Simpan</button>
                                            
                                        </div>
                                    </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </main>
                <?php
                include("koneksi.php");
                   if(isset($_POST['proses'])){
                    mysqli_query($koneksi, "update surat set
                    no_surat = '$_POST[no_surat]',
                    kategori = '$_POST[kategori]',
                    judul = '$_POST[judul]',
                    waktu = '$_POST[waktu]'
                    ");

                    
                echo "<script>alert('Data yang anda Sukses diubah');window.location='index.php'</script>";
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