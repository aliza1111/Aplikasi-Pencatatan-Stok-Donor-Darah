<html>

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

    <!-- Framework Datatables -->
    <title>Data Informasi Detail Darah</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url('assets/img/logo.png'); ?>" type="image/x-icon">

    <!-- browser icon -->
    <link href="img/favicoicon." rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <!-- logo -->
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">
                        <i>
                            <img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Pandas" width="70">
                        </i>
                        Pandas
                    </h3>
                </a>

                <!-- <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i>< img src="assets/img/blood stock.png" alt="">Pandas</i></h3>
                </a> -->
                <!-- logo -->

                <div class="navbar-nav w-100">

                    <a href="<?php echo site_url('Stok') ?>" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Stok Darah</a>
                    <a href="<?php echo site_url('Informasi') ?>" class="nav-item nav-link active"><i class="fa fa-th me-2"></i>Detail Darah</a>
                    <a href="<?php echo site_url('Detail') ?>" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Detail Stok</a>
                    <a href="<?php echo site_url('Masuk') ?>" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Data Masuk</a>
                    <a href="<?php echo site_url('Keluar') ?>" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Data Keluar</a>
                    <a href="<?php echo site_url('Admin') ?>" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Kelola Admin</a>
                    <a href="<?php echo site_url('Auth/logout') ?>" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i>Log Out</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">

                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">


                        </div>
                    </div>
                    <div class="nav-item dropdown">

                    </div>
                    <div class="nav-item dropdown">
                        <a href="<?php echo site_url('Auth/logout') ?>" data-bs-toggle="dropdown">
                            <!-- ganti gambar icon admin nya -->
                            <a href="<?php echo site_url('Auth/logout') ?>"><img class="rounded-circle me-lg-2" src="<?php echo base_url('assets/img/keluar.png'); ?>" alt="" style="width: 40px; height: 40px;">Logout</a>

                        </a>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="container">
                    <h2>Daftar Informasi Detail Darah</h2>
                    <div class="table-responsive">
                        <table class="table" id="inginexport">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id Darah</th>
                                    <th scope="col">Id Stok</th>
                                    <th scope="col">Darah</th>
                                    <th scope="col">Goldar</th>
                                    <th scope="col">Rhesus</th>
                                    <th scope="col">Produk</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                //$read yang diambil dari control function index
                                foreach ($read->result_array() as $row) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $no ?>
                                        </td>
                                        <td>
                                            <?php echo $row['id_darah'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['id_stok'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['darah'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['goldar'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['rhesus'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['produk'] ?>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->




            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Pandas2023</a>, All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script>
        $(document).ready(function() {
            $('#inginexport').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
</body>

</html>