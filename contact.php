<?php require'conn.php';?>
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

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid p-0">
        <div class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.php" class="navbar-brand ml-lg-3">
                <div class="row">
                    <div class="col-sm-6">
                        <img class="img-fluid" src="img/1.png" alt="Banner 1" style="max-width: 100%; max-height: 120px; float: left; margin-right: 320px;">
                    </div>
                
                </div>
            </a>
        </div>
    </div>
    <div style="background-color: #f8f9fa; padding: 10px; text-align: center;">

    <nav class="navbar navbar-expand-lg navbar-light ">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Laman Utama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Hubungi Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galery.php">Galeri</a>
                </li>
            </ul>
        </div>

    </nav>

</div>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">MYGP</a>
    </div>
</nav>

<!-- Contact Information and Form Section -->
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="bg-light d-flex flex-column justify-content-center px-5">
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
                                    <input type="text" name="nama" class="form-control border-top-0 border-right-0 border-left-0 p-0" oninput="this.value = this.value.toUpperCase()" placeholder="Nama">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" name="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="perkara" class="form-control border-top-0 border-right-0 border-left-0 p-0" oninput="this.value = this.value.toUpperCase()" placeholder="Perkara">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control border-top-0 border-right-0 border-left-0 p-0" name="mesej" rows="5" oninput="this.value = this.value.toUpperCase()" placeholder="Mesej"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5 float-right" type="submit" name="submit_msg">Hantar Mesej</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="mt-n2 text-uppercase text-white"><img class="" src="img/mpc1.PNG" style="width:100%; height:auto; max-width:300px;"></h1>

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
    </body>
</html>
   
    