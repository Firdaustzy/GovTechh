<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My Garis Panduan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-12 text-center text-lg-right mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <a href="./dashboard/login.php" class="btn btn-primary py-2 px-4 d-none d-lg-block">Log Masuk</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><img class="" src="img/banner.png" style="width:100%; height:auto; max-width:300px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img class="" src="img/mygplogo.png" style="width:100%; height:auto; max-width:200px;">
                </h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">

                </div>
                <!-- <a href="./dashboard/login.php" class="btn btn-primary py-2 px-4 d-none d-lg-block">Log Masuk</a> -->
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    <h1 class="heading" data-aos="fade-up">
                        Sumber rujukan garis panduan pelesenan perniagaan
                    </h1>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                        <input type="text" name="search" class="form-control" placeholder="Search data">
                        <!-- <button type="submit" name="search_submit" class="btn btn-primary">Search</button> -->

                        <div class="input-group-append">
                            <button class="btn btn-secondary px-4 px-lg-5">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <!-- <h1 class="text-white mt-4 mb-4">Learn From Home</h1> -->
            <h3 class=">text-white">Sumber rujukan garis panduan pelesenan perniagaan</h3>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sila Pilih</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Kementerian</a>
                            <a class="dropdown-item" href="#">SUK Negeri</a>
                            <a class="dropdown-item" href="#">Agensi</a>
                        </div>
                    </div>
                    <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="btn btn-secondary px-4 px-lg-5">Cari</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>Modal Example</h2>
        <!-- Trigger the modal with a button -->
        <!-- Dropdown code -->
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Choose Product <span class="caret"></span></button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#" data-toggle="modal" data-target="#modal1">Open modal 1</a></li>
                <li><a href="#" data-toggle="modal" data-target="#modal2">Open modal 2</a></li>
            </ul>
        </div>

        <!--Modal code -->
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1-label">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title">Modal 1</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal1-label">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="modal-title">Modal 2</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dropdown code -->
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Choose Product <span class="caret"></span></button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#" data-toggle="modal" data-target="#modal1">Open modal 1</a></li>
    <li><a href="#" data-toggle="modal" data-target="#modal2">Open modal 2</a></li>
  </ul>
</div>

<!--Modal code -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1-label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title">Modal 1</h2>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal1-label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h2 class="modal-title">Modal 2</h2>
      </div>
    </div>
  </div>
</div>


    <!-- <div class="container text-center my-5 py-5"> -->
    <!-- <h1 class="text-white mt-4 mb-4">Learn From Home</h1> -->
    <!-- <h3 class=">text-white">Sumber rujukan garis panduan pelesenan perniagaan</h3>
            <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <div class="input-group-prepend"> -->
    <!-- <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Sila Pilih</button> -->
    <!-- <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Kementerian</a>
                            <a class="dropdown-item" href="#">SUK Negeri</a>
                            <a class="dropdown-item" href="#">Agensi</a>
                        </div> -->
    <!-- </div>
                    <div class="col-md-12">
                        <form action="" method="GET">
                            <div class="input-group mb-8">
                                <input type="text" name="search_submit" required value="<?php //if (isset($_GET['search'])) {
                                                                                        //echo $_GET['search'];
                                                                                        // } 
                                                                                        ?>" class="form-control" placeholder="Search data">
                                <button class="btn btn-secondary px-4 px-lg-5">Cari</button>
                            </div>
                        </form>
                    </div> -->
    <!-- <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="btn btn-secondary px-4 px-lg-5">Cari</button>
                    </div> -->
    <!-- </div>
            </div>
        </div> -->
    <div class="col-md-12">
        <!-- <div class="card mt-4"> -->
        <!-- <div class="card-body"> -->
        <!-- <table class="table table-bordered"> -->

        <?php
        if (isset($_POST['search_submit'])) {
            $search_name = $_POST['search'];

            $sql = "SELECT * FROM informationform WHERE namagarispanduan LIKE '%$search_name%' OR keteranganobjektif LIKE '%$search_name%'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $namagarispanduan = $row['namagarispanduan'];
                    $keteranganobjektif = $row['keteranganobjektif'];
                    $tarikhditerbitkan = $row['tarikhditerbitkan'];
        ?>
                    <table class="table table-borderless">

                        <tbody>
                            <tr>
                                <th scope="row"><a href="./dashboard/uploadngp/<?php echo $row['muatnaikdokumen']; ?>"><?php echo $namagarispanduan ?></a></th>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo $keteranganobjektif ?></th>
                            </tr>
                            <tr>
                                <th scope="row"><?php echo $tarikhditerbitkan ?></th>
                            </tr>
                        </tbody>
                    </table>


        <?php
                }
            } else {
                echo "no record found";
            }
        }

        ?>
    </div>
    </div>

    <!-- Header End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-image py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="section-title position-relative mb-4">
                        <h4 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Info!</h4>
                        <h5 class="display-6">Apa kata mereka?</h5>
                    </div>
                    <iframe width="450" height="275" src="https://www.youtube.com/embed/vevRFMFGTZI" title="Pengoperasian Lesen Gudang Berlesen & Lesen Pengilangan Berlesen oleh Jabatan Kastam Diraja Malaysia" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <!-- <iframe width="450" height="275" src="https://www.youtube.com/watch?v=vevRFMFGTZI"> -->

                    </iframe>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>My Garis Panduan adalah salah satu platform yang membantu kepada penguna khususnya rakyat Malaysia, Untuk mengetahui perkara yang dia ingin ketahui.</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/dato.png" alt="pengarahmpc">
                                <div>
                                    <h5>Dato' Abdul Latif B. Abu Seman</h5>
                                    <span>Pengarah MPC</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Website ini membantu memudahkan pengguna untuk merujuk pekeliling yang mereka kehendaki berdasarkan pencarian yang disediakan.</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/testimonial-1.jpg" alt="pengurusdtu">
                                <div>
                                    <h5>En Mohd Hisyam B. Hatimtai</h5>
                                    <span>Pengurus DTU</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Platform website ini salah satu inisiatif MPC untuk membantu pengguna untuk merujuk, mengetahui mengenai garis panduan dalam sesuatu perkara.</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/yazid.png" alt="pengarahmsf">
                                <div>
                                    <h5>En Mohd Yazid Abdul Majid</h5>
                                    <span>Pengarah MSF</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>My Garis Panduan membantu kita dan memudahkan kita untuk ketahui mengenai pekeliling,rujukan,akta dan sebagainya.</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/testimonial-2.jpg" alt="">
                                <div>
                                    <h5>En Mohd. Hilmi Mohd. Idris</h5>
                                    <span>Pengurus</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-primary mr-4">
                                <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="mt-n1">

                                <h4>Lokasi Kami</h4>
                                <p class="m-0">Malaysia Productivity Corporation (MPC) HQ <br>
                                    Jalan Sultan, Pjs 52, 46200 Petaling Jaya, Selangor</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-secondary mr-4">
                                <i class="fa fa-2x fa-phone-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Hubungi kami</h4>
                                <p class="m-0">+603–7955 7266</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-warning mr-4">
                                <i class="fa fa-2x fa-envelope text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Emel</h4>
                                <p class="m-0">mygp@mpc.gov.my</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Perlukan Bantuan?</h6>
                        <h2 class="display">Hantar Pesanan kepada Kami</h2>
                    </div>
                    <div class="contact-form">
                        <form method="POST" action="indexinsert.php">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" name="nama" class="form-control border-top-0 border-right-0 border-left-0 p-0" oninput="this.value = this.value.toUpperCase()" placeholder="Nama" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" name="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Email" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="perkara" class="form-control border-top-0 border-right-0 border-left-0 p-0" oninput="this.value = this.value.toUpperCase()" placeholder="Perkara" required="required">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control border-top-0 border-right-0 border-left-0 p-0" name="mesej" rows="5" oninput="this.value = this.value.toUpperCase()" placeholder="Mesej" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit" name="submit_msg">Hantar Mesej</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">


    </div>


    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white"><img class="" src="img/mygplog.png" style="width:100%; height:auto; max-width:300px;"></h1>

                    </a>
                    <p class="m-0">MyGP adalah My Garisan Panduan iaitu salah satu platform sumber rujukan garisan pelesenan perniagaan.</p>
                </div>


                <!-- </div> -->
                <!-- <div class="row"> -->
                <div class="col-md-6 mb-5 float-right">
                    <!-- <h3 class="text-white mb-4 ">Get In Touch</h3> -->
                    <!-- <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope mr-2"></i>info@example.com</p> -->
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="d-flex justify-content-start mt-4 float-right">
                        <a class="text-white mr-4 " href="https://twitter.com/MPC_HQ"><i class="fab fa-2x fa-twitter"></i></a>
                        <a class="text-white mr-4" href="https://www.facebook.com/MPCHQ"><i class="fab fa-2x fa-facebook-f"></i></a>
                        <a class="text-white mr-4" href="https://www.youtube.com/channel/UCEpY2Fuuc9do6J2eR2AWjzg"><i class="fab fa-2x fa-youtube"></i></a>
                        <a class="text-white" href="https://www.instagram.com/mpc_hq/"><i class="fab fa-2x fa-instagram"></i></a>
                    </div>


                </div>

            </div>
        </div>
        <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                        <p class="m-0">Copyright &copy; <a class="text-white" href="#">My Garis Panduan 2023</a>. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 text-center text-md-right">
                        <p class="m-0">Designed by <a class="text-white" href="https://www.mpc.gov.my/home">Digital Technology Unit (DTU MPC)</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <!--search function-->
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function upperCaseF(a) {
                setTimeout(function() {
                    a.value = a.value.toUpperCase();
                }, 1);
            }
        </script>
</body>

</html>