<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Detail Data</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url();?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url();?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-university"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Direktori Mahasiswa</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            
            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin/data_pending') ?>">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data Pending</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin/data_mahasiswa') ?>">
                    <i class="fas fa-fw fa-database"></i>
                    <span>Data Mahasiswa</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin/print') ?>">
                    <i class="fas fa-fw fa-print"></i>
                    <span>Cetak Data Mahasiswa</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('admin/data_admin') ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Admin</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('login/logout') ?>">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

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
                    <button id="sidebarToggleTop" class="btn btn-success d-md-none  mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="<?php echo site_url() ?>" target="_blank">
                                <i class="fas fa-globe fa-fw"></i>
                            </a>
                        </li>
                    
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama'); ?></span>
                                <img class="img-profile rounded-circle"
                                    src="<?php echo base_url();?>assets/admin/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('login/logout') ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Status:
                        <?php 
                        foreach($mhs as $data){
                          if($data->status == 1){
                            echo'<span class="text-primary">Terdaftar</span>';
                          }else{
                            echo'<span class="text-danger">Pending</span>';
                          }
                        ?>
                        </h1>
                        <a href="<?php echo base_url()?>admin/print_mhs/<?php echo $data->id?>" class="btn btn-success shadow-sm px-4"><i class="fas fa-print fa-sm text-white-50"></i> Cetak </a>
                        <?php } ?>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="col-lg-12">
                                <div class="card shadow mb-4">
                                    <div class="card-body">
                                                    <?php
                                                        foreach($mhs as $data){
                                                    ?>
                                        <img src="<?php echo base_url()?>/assets/gambar/<?php echo $data->foto; ?>" class="img-thumbnail" alt="...">
                                                      <?php
                                                        }
                                                      ?>
                                    </div>
                                </div>
                            </div>     
                        </div>
                        <div class="col-lg-8">
                            <div class="card shadow mb-4">
                                <div class="card-body p-lg-5">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                    <?php
                                                        $no=1;
                                                        foreach($mhs as $data){
                                                    ?>
                                                <tr>
                                                <td>Nama </td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>NIM </td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->nim, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>Jenis Kelamin </td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->kelamin, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>Tempat Lahir </td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->tempat_lahir, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>Tanggal Lahir </td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->tgl_lahir, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>Hobi </td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->hobi, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>Agama</td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->agama, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>Alamat Asal </td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->alamat_asal, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>Alamat Kost </td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->alamat_kost, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>Asal Sekolah </td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->asal_sekolah, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>email </td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->email, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>No WA </td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->wa, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>Instagram</td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->ig, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>quotes</td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->quotes, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                    <?php
                                                        }
                                                    ?> 
                                            </tbody>
                                        </table>
                                      </div>    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Angkatan 20</span>
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
    <script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>assets/admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url();?>assets/admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url();?>assets/admin/js/demo/chart-pie-demo.js"></script>

    <script>
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["laki laki", "perempuan"],
            datasets: [{
            data: [<?php echo $laki ?>, <?php echo $perempuan ?>],
            backgroundColor: ['#4e73df', '#e74a3b'],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
            },
            legend: {
            display: false
            },
            cutoutPercentage: 80,
        },
        });
    </script>

</body>

</html>