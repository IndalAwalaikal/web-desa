<?php
session_start();
 if (!isset($_SESSION["login"])) {
   echo '<script>location="login-admin.php"</script>';
       
 }
 include '../../db.php';
 $artikel = mysqli_query($conn, "SELECT * FROM tb_perangkat WHERE id_perangkat ='".$_GET['id']."' ");
$a = mysqli_fetch_object($artikel);
?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Desa Sukasenang</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
         <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">Desa Sukasenang</div>
            </a>


            <!-- Nav Item - Dashboard -->
              <li class="nav-item">
                <a class="nav-link" href="../dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            
              <li class="nav-item">
                <a class="nav-link" href="../data-artikel.php">
                    <i class="fas fa-clipboard"></i>
                    <span>Berita</span></a>
            </li>
            
              <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-pager"></i>
                    <span>Halaman</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                         <a class="collapse-item" href="../data-halaman.php">Profil</a>
                        <a class="collapse-item" href="../data-kelembagaan.php">Kelembagaan</a>
                        <a class="collapse-item" href="../data-desa.php">Data Desa</a>
                        <a class="collapse-item active" href="../data-perangkat-desa.php">Perangkat Desa</a>
                        <a class="collapse-item" href="../sambutan-kepala-desa?id=3.php">Sambutan Kepala Desa</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../data-gambar.php">
                   <i class="fas fa-images"></i>
                    <span>Gallery</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../data-pengumuman.php">
                    <i class="fas fa-bullhorn"></i>
                    <span>Pengumuman</span></a>
            </li>
              <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-users"></i>
                    <span>Data Penduduk</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                         <a class="collapse-item" href="../data-pekerjaan.php">Pekerjaan</a>
                        <a class="collapse-item" href="../data-agama.php">Agama</a>
                        <a class="collapse-item" href="../data-jeniskelamin.php">Jenis Kelamin</a>
                    </div>
                </div>
            </li>
             <li class="nav-item ">
                <a class="nav-link" href="../tempat.php">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Tempat</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="../setting-desa.php">
                    <i class="fas fa-cogs"></i>
                    <span>Setting Desa</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../data-sosmed.php">
                    <i class="fas fa-user-circle"></i>
                    <span>Sosmed</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

               <li class="nav-item ">
                <a class="nav-link" href="../../index">
                    <i class="fas fa-eye"></i>
                    <span>Lihat Web</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                      
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                           
                        </li>

                    </ul>

                </nav>
                

              
              <div class="container-fluid">

   
                <div class="container-fluid">

                    <!-- Page Heading -->
                   

                    <!-- DataTales Example -->
                   <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="text-dark">Edit Perangkat Desa</h3>
                        </div>
                        <div class="card-body">
                           <div class="box">
                                <form action="" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                <label class="form-label"><h5>Nama</h5></label>
                                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="<?php echo $a -> nama ?>">
                              </div>
                              <div class="mb-3">
                                <label class="form-label"><h5>Jabatan</h5></label>
                                <textarea type="text" name="jabatan" class="form-control" id="exampleInputPassword1" placeholder="Jabatan"><?php echo $a -> jabatan ?></textarea>
                             </div>
                             <div class="mb-3">
                                <label class="form-label"><h5>Gambar</h5> 
                                  <img src="../../web/gambar/<?php echo $a -> gambar ?>"width="25%">
                                  <p><input type="hidden" name="foto" value="<?php echo $a -> gambar ?>" ></p>
                                </label>
                                <input type="file" name="gambar" class="form-control" id="exampleInputPassword1">
                              </div>
                              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                              </div>
                             
                            </form>
                              <?php 
                                if(isset($_POST['submit'])){
                                  
                                   $nama       = $_POST['nama'];
                                   $jabatan      = $_POST['jabatan'];
                                   $foto        =$_POST['foto'];
                                    

                                    $filename = $_FILES['gambar']['name'];
                                    $tmp_name = $_FILES['gambar']['tmp_name'];

                                    if ($filename !='') {

                                    $type1 = explode('.', $filename);
                                    $type2 = $type1[1];

                                    $newname = 'perangkat' .time().'.' .$type2;

                                    $tipe_diizinkan = array('jpg', 'jpeg', 'png','gif');


                                    if (!in_array($type2, $tipe_diizinkan)) {
                                      echo 'Format file tidak diizinkan';
                                    }else{

                                      unlink('../../web/gambar/'.$foto);
                                      move_uploaded_file($tmp_name, '../../web/gambar/' .$newname);
                                      $namagambar = $newname;
                                      }


                                      }else{
                                               
                                          $namagambar = $foto ;   
                                    }

                                    $update = mysqli_query($conn, "UPDATE tb_perangkat SET
                                                 nama='".$nama."',
                                                 jabatan='".$jabatan."',
                                                 gambar='".$namagambar."'
                                                 WHERE id_perangkat = '".$a->id_perangkat."'
                                                ");
                                    if($update){
                                                echo 'simpan data berhasil';
                                                echo '<script>location="../data-perangkat-desa.php"</script>';
                                              }else{
                                                echo 'gagal'.mysqli_error($conn);
                                              }
                                }
                              ?>

                         </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
                    

            <!-- End of Main Content -->
 <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

       <script>
                        CKEDITOR.replace( 'isi_halaman' );
                </script>

</body>

</html>