<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blood Stok by Pandas</title>
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
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


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
                    <a href="<?php echo site_url('Informasi') ?>" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Detail Darah</a>
                    <a href="<?php echo site_url('Detail') ?>" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Detail Stok Darah</a>
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
                    <h2 class="text-primary mb-0"><i img src="<?php echo base_url('assets/img/logo.png'); ?>" width="70"></i></h2>
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
                <div class="bg-secondary text-center rounded p-4">

                    <h6 class="mb-4">
                        <h2 class="text-primary">BERANDA</h2>
                    </h6>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile Team</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact Us</button>
                        </div>
                    </nav>
                    <div class="tab-content pt-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <h3>Selamat datang di Pencatatan Stok Donor Darah!</h3>
                            <img src="<?php echo base_url('assets/img/welcome.png'); ?>" alt="welcome" width="400">
                            <h5 style="text-align:left;">Sebarkan kebaikan dan kebermanfaatan bagi sesama</h5>
                            <p style="text-align:left;">Setiap hari, ribuan orang membutuhkan darah untuk bertahan hidup.
                                Aplikasi Pencatatan Stok Donor Darah hadir untuk membantu mengelola dan memantau stok darah dengan efisien. Dengan platform ini, Anda dapat membantu membuat perbedaan yang nyata dan menyelamatkan nyawa.
                                Dapatkan informasi terkini tentang stok darah yang tersedia di berbagai tempat donor darah terdekat.
                            </p>
                            <h5 style="text-align:left;">Statistik dan Fakta Menarik</h5>
                            <p style="text-align:left;">
                            <ul style="list-style-type:disc">
                                <li style="text-align:left;">
                                    Setiap detik, seseorang di dunia ini membutuhkan transfusi darah.
                                </li>
                                <li style="text-align:left;">
                                    Sebagian besar darah yang diperlukan untuk transfusi berasal dari sumbangan sukarela.
                                </li>
                                <li style="text-align:left;">
                                    Dalam satu donasi darah, Anda dapat menyelamatkan hingga tiga nyawa.
                                </li>
                            </ul>
                            </p>
                            <h5 style="text-align:left;">Sumbangkan Darah Anda!</h5>
                            <p style="text-align:left;">
                                Sumbangkan darah dan menjadi bagian dari komunitas donor darah yang peduli dan berkomitmen.
                            </p>
                            <p style="text-align:left;">
                                Salam,
                            </p>
                            <p style="text-align:left;">Tim pengembang aplikasi pencatatan stok donor darah. - Pandas❤</p>

                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <!-- Profile Pandas -->
                            <h3>Profile Tim Pandas</h3>
                            <img src="<?php echo base_url('assets/img/profile.png'); ?>" alt="profile" width="300">
                            <!-- tulis profile nya disini guys -->
                            <p style="text-align:left;">
                                Tim Pandas adalah sebuah kelompok yang terbentuk dalam konteks tugas mata kuliah pemrograman web. Tim ini bertanggung jawab untuk mengembangkan sebuah website menggunakan framework CodeIgniter 3. Dengan berbekal pengetahuan dalam pemrograman web, tim ini bertujuan untuk menciptakan sebuah website yang dapat bekerja dengan baik.
                            </p>
                            <h5 style="text-align:left;">Anggota Tim</h5>
                            <p>
                            <ul style="text-align:left;">
                                <li style="text-align:left;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Nama</td>
                                                <td>:</td>
                                                <td>Fidya Nur Aliza</td>
                                            </tr>
                                            <tr>
                                                <td>NIM</td>
                                                <td>:</td>
                                                <td>213100213</td>
                                            </tr>
                                            <tr>
                                                <td>TTL</td>
                                                <td>:</td>
                                                <td>MAGELANG, 23 Juli 2001</td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>:</td>
                                                <td>Perempuan</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li><br>
                                <li style="text-align:left;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Nama</td>
                                                <td>:</td>
                                                <td>Ika Triyana</td>
                                            </tr>
                                            <tr>
                                                <td>NIM</td>
                                                <td>:</td>
                                                <td>213100196</td>
                                            </tr>
                                            <tr>
                                                <td>TTL</td>
                                                <td>:</td>
                                                <td>PEMALANG, 14 Februari 2003</td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>:</td>
                                                <td>Perempuan</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li><br>
                                <li style="text-align:left;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Nama</td>
                                                <td>:</td>
                                                <td>Jelita Sukawati</td>
                                            </tr>
                                            <tr>
                                                <td>NIM</td>
                                                <td>:</td>
                                                <td>213100179</td>
                                            </tr>
                                            <tr>
                                                <td>TTL</td>
                                                <td>:</td>
                                                <td>GROBOGAN, 13 Juli 2001</td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>:</td>
                                                <td>Perempuan</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li><br>
                            </ul>
                            </p>

                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <h6 style="text-align:left;">Jika anda memiliki pertanyaan atau membutuhkan bantuan, tim kami siap membantu. Hubungi kami melalui email di</h6>
                            <p>
                            <ul style="text-align:left;">
                                <li style="text-align:left;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Nama</td>
                                                <td>:</td>
                                                <td>Fidya Nur Aliza</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td><a href="#">fidya.aliza23@gmail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td>No Hp</td>
                                                <td>:</td>
                                                <td>+6283154961739</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li><br>
                                <li style="text-align:left;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Nama</td>
                                                <td>:</td>
                                                <td>Ika Triyana</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td><a href="#">ikatriyana14bts@gmail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td>No Hp</td>
                                                <td>:</td>
                                                <td>+6283861869876</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </li><br>
                                <li style="text-align:left;">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Nama</td>
                                                <td>:</td>
                                                <td>Jelita Sukawati</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td><a href="#">jelitasukawati13@gmail.com</a></td>
                                            </tr>
                                            <tr>
                                                <td>No Hp</td>
                                                <td>:</td>
                                                <td>+628568427274</td>
                                            </tr>
                                            </tb>
                                        </tbody>
                                    </table>
                                </li>
                            </ul>
                            </p>
                        </div>
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

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('assets/lib/chart/chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/easing/easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/tempusdominus/js/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</body>

</html>