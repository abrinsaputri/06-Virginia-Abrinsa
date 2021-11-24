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
                        <h1 class="mt-4">Detail Data Arsip</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Detail Arsip</a></li>
                            <li class="breadcrumb-item active">Arsip</li>
                        </ol>
                        
                        <hr>
                        <div class="card mb-4">
                            <div class="card-header">
                                
                            </div>
                            <div class="card-body">
                                <div class="row">
                                <div class="col-7">
                                    <table class="table-form" border="0" width="100%" cellpadding="10" cellspacing="0" >
                                            <tr>
                                                <td>Nomor Surat</td>
                                                <td width="1%">:</td>
                                                <td><?php echo $data['no_surat'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Kategori</td>
                                                <td width="1%">:</td>
                                                <td><?php echo $data['kategori'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Judul</td>
                                                <td width="1%">:</td>
                                                <td><?php echo $data['judul'];?></td>
                                            </tr>
                                            <tr>
                                                <td>Waktu</td>
                                                <td width="1%">:</td>
                                                <td><?php echo $data['waktu'];?></td>
                                            </tr>
                                            <!-- <embed type="application/pdf" src="berkas/contoh.pdf" width="600" height="400"></embed> -->
                                            <embed type="application/pdf" src="berkas/<?php echo $data['namafile'];?>" width="1200"
                                                height="400"></embed>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-warning " data-toggle="tooltip" data-placement="top" title="Kembali" href="data_arsip.php">
                            <i class="fa fa-undo"></i> Kembali
                        </a>
                        <a class="btn btn-success " data-toggle="tooltip" data-placement="top" title="Unduh" href="dist/berkas/<?php echo $data['namafile'];?>" download>
                            <i class="fa fa-plus"></i> Unduh
                        </a>
                        <a class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="Ubah" href="edit_arsip.php">
                            <i class="fa fa-pen"></i> Ubah File
                        </a>
                        </div>
                    </div>
                </main>

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