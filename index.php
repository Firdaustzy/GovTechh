<?php require'conn.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My Garis Panduan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-12 text-center text-lg-right mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <a href="./dashboard/login.php" class="btn btn-primary py-2 px-4">Log Masuk</a>

                </div>
            </div>

        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
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








    <div style="background-color: #f8f9fa; padding: 0px; text-align: center;">

        <nav class="navbar navbar-expand-lg navbar-light ">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Laman Utama</a>
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
                        <input type="text" name="search" class="form-control" placeholder="Cari Data">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary px-4 px-lg-5" name="search_submit">Cari</button>
                        </div>

                    </form>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">


                        <button type="button" class="btn btn-dark mx-auto d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Kementerian/SUK Negeri/Agensi
                        </button>


                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Kementerian/SUK Negeri/Agensi</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <br>
                                    <div class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                                        <div class="modal-body">
                                            <input type="text" id="searchInput" name="search_jabatan" required class="form-control" placeholder="Search data">

                                            <div class="sugg">

                                            </div>
                                            <br>
                                            <button type="submit" name="submit_jabatan" class="btn btn-primary">Mulakan Pencarian</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="mx-auto">
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="d-flex justify-content-center w-100">
                                <button type="button" class="btn btn-secondary" data-bs-toggle="collapse" data-bs-target="#locationOptions" aria-expanded="false" aria-controls="locationOptions">
                                    <i class="bi bi-geo"></i> Pilih Lokasi
                                </button>


                                <div class="collapse" id="locationOptions">
                                    <div class="card card-body" name="locationSelect" style="border: 1px solid #3498db; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); padding: 15px;">
                                        <select class="form-select" id="locationSelect" name="locationSelect" style="border: 2px solid #3498db; border-radius: 5px; padding: 8px; font-size: 12px; color: #555;">
                                            <option value="PAHANG">PAHANG</option>
                                            <option value="PERAK">PERAK</option>
                                            <option value="TERENGGANU">TERENGGANU</option>
                                            <option value="PERLIS">PERLIS</option>
                                            <option value="KEDAH">KEDAH</option>
                                            <option value="SELANGOR">SELANGOR</option>
                                            <option value="NEGERI SEMBILAN">NEGERI SEMBILAN</option>
                                            <option value="JOHOR">JOHOR</option>
                                            <option value="KELANTAN">KELANTAN</option>
                                            <option value="SABAH">SABAH</option>
                                            <option value="LABUAN">LABUAN</option>
                                            <option value="PULAU PINANG">PULAU PINANG</option>
                                            <option value="MELAKA">MELAKA</option>
                                            <option value="W.PERSEKUTUAN (KL)">KUALA LUMPUR</option>
                                            <option value="SARAWAK">SARAWAK</option>
                                            <option value="SELURUH MALAYSIA">SELURUH MALAYSIA</option>
                                            <option value="SABAH">SABAH</option>
                                            <option value="SEMENANJUNG MALAYSIA">SEMENANJUNG MALAYSIA</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="submitLocation" class="btn btn-primary mt-2">
                                        <i class="bi bi-check-circle"></i> Cari
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div style=color:transparent;>
                        MYGP
                    </div>

                </div>

            </div>
        </div>
    </div>




    <!-- -->



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

            $sql = "SELECT * FROM informationform WHERE namagarispanduan LIKE '% $search_name%'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $namagarispanduan = $row['namagarispanduan'];
                    $keteranganobjektif = $row['keteranganobjektif'];
                    $tarikhditerbitkan = $row['tarikhditerbitkan'];
                    $namakementerian = $row['namakementerian'];
                    $nameagensi = $row['nameagensi'];
                    $liputan = $row['liputan'];
                    $muatnaik = $row['muatnaikdokumen'];
        ?>


        <table class="table table-borderless">
            <tbody>
                <?php if ($muatnaik == '') { ?>
                <tr>
                    <th scope="row"><a href="./error.php" target="_blank"><?php echo $namagarispanduan ?></a></th>
                </tr>
                <?php } else { ?>
                <tr>
                    <th scope="row">
                        <a href="javascript:void(0);" onclick="showDisclaimer('<?php echo $namagarispanduan; ?>', './dashboard/uploadngp/<?php echo $muatnaik; ?>', '<?php echo $tarikhditerbitkan; ?>')">
                            <?php echo $namagarispanduan ?>
                        </a>
                    </th>
                </tr>
                <?php  } ?>

                <tr>
                    <th scope="row"><?php echo $keteranganobjektif ?></th>
                </tr>
                <tr>
                    <th scope="row"><?php echo $namakementerian ?></th>
                </tr>
                <tr>
                    <th scope="row"><?php echo $nameagensi ?></th>
                </tr>
                <tr>
                    <th scope="row"><?php echo $liputan ?></th>
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
    <div>
        <?php
if (isset($_POST['submit_jabatan'])) {
    $search_name = $_POST['search_jabatan'];

    $sql = "SELECT * FROM informationform 
            WHERE namakementerian LIKE '%$search_name%'
               OR nameagensi LIKE '%$search_name%'
               OR peringkatkerajaan LIKE '%$search_name%'";
    $result = $conn->query($sql);
    
    

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $namagarispanduan = $row['namagarispanduan'];
            $keteranganobjektif = $row['keteranganobjektif'];
            $tarikhditerbitkan = $row['tarikhditerbitkan'];
            $namakementerian = $row['namakementerian'];
            $nameagensi = $row['nameagensi'];
            $liputan = $row['liputan'];
            $muatnaik = $row['muatnaikdokumen'];
?>
        <table class="table table-borderless">
            <tbody>
                <?php if ($muatnaik == '') { ?>
                <tr>
                    <th scope="row"><a href="./error.php" target="_blank"><?php echo $namagarispanduan ?></a></th>
                </tr>
                <?php } else { ?>
                <tr>
                    <th scope="row">
                        <a href="javascript:void(0);" onclick="showDisclaimer('<?php echo $namagarispanduan; ?>', './dashboard/uploadngp/<?php echo $muatnaik; ?>')"> <?php echo $namagarispanduan ?></a>
                    </th>
                </tr>
                <?php  } ?>
                <tr>
                    <th scope="row"><?php echo $keteranganobjektif ?></th>
                </tr>
                <tr>
                    <th scope="row"><?php echo $namakementerian ?></th>
                </tr>
                <tr>
                    <th scope="row"><?php echo $nameagensi ?></th>
                </tr>
                <tr>
                    <th scope="row"><?php echo $liputan ?></th>
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


    <div>
        <?php
if (isset($_POST['submitLocation'])) {
    $search_name = $_POST['locationSelect'];

    $sql = "SELECT * FROM informationform 
            WHERE liputan LIKE '%$search_name%'";
    $result = $conn->query($sql);
    
    

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $namagarispanduan = $row['namagarispanduan'];
            $keteranganobjektif = $row['keteranganobjektif'];
            $tarikhditerbitkan = $row['tarikhditerbitkan'];
            $namakementerian = $row['namakementerian'];
            $nameagensi = $row['nameagensi'];
            $liputan = $row['liputan'];
            $muatnaik = $row['muatnaikdokumen'];
?>
        <table class="table table-borderless">
            <tbody>
                <?php if ($muatnaik == '') { ?>
                <tr>
                    <th scope="row"><a href="./error.php" target="_blank"><?php echo $namagarispanduan ?></a></th>
                </tr>
                <?php } else { ?>
                <tr>
                    <th scope="row">
                        <a href="javascript:void(0);" onclick="showDisclaimer('<?php echo $namagarispanduan; ?>', './dashboard/uploadngp/<?php echo $muatnaik; ?>')"> <?php echo $namagarispanduan ?></a>
                    </th>
                </tr>
                <?php  } ?>
                <tr>
                    <th scope="row"><?php echo $keteranganobjektif ?></th>
                </tr>
                <tr>
                    <th scope="row"><?php echo $namakementerian ?></th>
                </tr>
                <tr>
                    <th scope="row"><?php echo $nameagensi ?></th>
                </tr>
                <tr>
                    <th scope="row"><?php echo $liputan ?></th>
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
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/vevRFMFGTZI" title="Pengoperasian Lesen Gudang Berlesen & Lesen Pengilangan Berlesen oleh Jabatan Kastam Diraja Malaysia" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <!-- <iframe width="450" height="275" src="https://www.youtube.com/watch?v=vevRFMFGTZI"> 

                    </iframe> -->
					<div>
                        <button class="btn btn-primary mt-3"><a href="https://www.youtube.com/@productivitycompetitivenes6077" target="_blank" style="color:white;">Lebih Info!</a></button>
                    </div>

                </div>



                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel">
                        <!-- <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>My Garis Panduan adalah salah satu platform yang membantu penguna khususnya rakyat Malaysia, Untuk mengetahui perkara yang berkaitan dengan perniagaan atau perlesenan.</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/dato.png" alt="pengarahmpc">
                                <div>
                                    <h5>Dato' Abdul Latif B. Abu Seman</h5>
                                    <span>Pengarah MPC</span>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Website ini membantu memudahkan pengguna untuk merujuk pekeliling yang mereka kehendaki berdasarkan pencarian yang disediakan.</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/hisyam.JPG" alt="pengurusdtu">
                                <div>
                                    <h5>En Mohd Hisyam B. Hatimtai</h5>
                                    <span>Pengurus DTU</span>
                                </div>
                            </div>
                        </div> -->
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>Platform website ini salah satu inisiatif MPC untuk membantu pengguna untuk merujuk, mengetahui mengenai garis panduan dalam sesuatu perkara.</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/fazlin.png" alt="pengarahncs">
                                <div>
                                    <h5>Puan Wan Fazlin Nadia Bt Wan Osman</h5>
                                    <span>Pengarah NCS</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-5">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <p>My Garis Panduan membantu kita dan memudahkan kita untuk ketahui mengenai pekeliling,rujukan,akta dan sebagainya.</p>
                            <div class="d-flex flex-shrink-0 align-items-center mt-4">
                                <img class="img-fluid mr-4" src="img/hilmi.JPG" alt="">
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

    <div class="container-fluid py-5">


    </div>
    <div class="row">
        <div class="col text-center">
            <img src="img/grp.png" alt="Computer Man" style="width:100px;height:100px;">
            <img src="img/MyMudah (2).png" alt="Computer Man" style="width:150px;height:100px;">
            <img src="img/pemudah.png" alt="Computer Man" style="width:150px;height:100px;">
            <img src="img/latihan.png" alt="" style="width:200px;height:100px;">
            <img src="img/upc.png" alt="Computer Man" style="width:100px;height:100px;">
        </div>
    </div>






    <!-- Contact End -->


    <!-- Footer Start -->
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
        <!-- Footer End -->

        <div class="modal fade" id="disclaimerModal" tabindex="-1" role="dialog" aria-labelledby="disclaimerModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="disclaimerModalLabel">Peringatan</h5>

                    </div>
                    <div class="modal-body">
                        <p id="disclaimerMessage" style="color: black;"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="cancelButton" data-dismiss="modal">Balik</button>
                        <button type="button" class="btn btn-primary" id="agreeButton">OK</button>
                    </div>
                </div>
            </div>
        </div>


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
        <script>
            const suggestionsData = [
                "Jabatan Perdana Menteri",
                "Kementerian Pertanian dan Industri Makanan (MAFI)",
                "Kementerian Komunikasi dan Multimedia Malaysia (KKMM)",
                "Kementerian Perdagangan Dalam Negeri dan Hal Ehwal Pengguna Malaysia (KPDNHEP)",
                "Kementerian Pendidikan Malaysia (KPM)",
                "Kementerian Tenaga dan Sumber Asli (KeTSA)",
                "Kementerian Pembangunan Usahawan dan Koperasi (MEDAC)",
                "Kementerian Alam Sekitar dan Air (KASA)",
                "Kementerian Wilayah Persekutuan(KWP)",
                "Kementerian Kewangan Malaysia (MOF)",
                "Kementerian Luar Negeri (KLN)",
                "Kementerian Kesihatan Malaysia (KKM)",
                "Kementerian Pengajian Tinggi (KPT)",
                "Kementerian Dalam Negeri (KDN)",
                "Kementerian Perumahan dan Kerajaan Tempatan (KPKT)",
                "Kementerian Perpaduan Negera (PERPADUAN)",
                "Kementerian Perusahaan Perladangan dan Komoditi (MPIC)",
                "Kementerian Pembangunan Luar Bandar (KPLB)",
                "Kementerian Sains, Teknologi dan Inovasi (MOSTI)",
                "Kementerian Pelancongan, Seni dan Budaya Malaysia (MOTAC)",
                "Kementerian Pengangkutan Malaysia (MOT)",
                "Kementerian Pembangunan Wanita, Keluarga dan Masyarakat (KPWKM)",
                "Kementerian Perdagangan Antarabangsa dan Industri (MITI)",
                "Kementerian Kerja Raya Malaysia (KKR)",
                "Kementerian Belia dan Sukan (KBS)",
                "Kementerian Sumber Manusia (MOHR)",
                "SUK JOHOR",
                "SUK KEDAH",
                "SUK MELAKA",
                "SUK NEGERI SEMBILAN",
                "SUK PAHANG",
                "SUK PERAK",
                "SUK PERLIS",
                "SUK PULAU PINANG",
                "SUK SABAH",
                "SUK SARAWAK",
                "SUK SELANGOR",
                "SUK TERENGGANU",
                "Dewan Bahasadan Pustaka",
                "Majlis Peperiksaan Malaysia",
                "Perbadanan Kota Buku",
                "PADU Corporation",
                "Institut Terjemahan & Buku Malaysia",
                "Berhad (ITBM)",
                "Yayasan Guru Tun Hussein Onn (YGTHO)",
                "Majlis Penasihat Pendidikan Kebangsaan",
                "Pihak Berkuasa Penerbangan Awam Malaysia (CAAM)",
                "Suruhanjaya Penerbangan Malaysia (MAVCOM)",
                "Biro Siasatan Kemalangan Udara (BSKU)",
                "Pertubuhan Penerbangan Awam Antarabangsa (ICAO)",
                "Konvensyen Pertubuhan Penerbangan Awam Antarabangsa (ICAOC)",
                "Institut Penyelidikan Keselamatan Jalan Raya Malaysia (MIROS)",
                "Agensi Pengangkutan Awam Darat (APAD)",
                "Lembaga Pelesenan Kenderaan Perdagangan (LPKP) Sabah",
                "Lembaga Pelesenan Kenderaan Perdagangan (LPKP) Sarawak",
                "Perbadanan Aset Keretapi (RAC)",
                "Jabatan Laut Malaysia (JLM)",
                "Institut Maritim Malaysia (MIMA)",
                "Jabatan Pengangkutan Jalan (JPJ)",
                "Lembaga Pelabuhan Klang",
                "Lembaga Pelabuhan Johor",
                "Lembaga Pelabuhan Kuantan",
                "Lembaga Pelabuhan Bintulu",
                "Suruhanjaya Pelabuhan Pulau Pinang (SPPP)",
                "Suruhanjaya Penerbangan Malaysia(MAVCOM)",
                "Agensi Kelayakan Malaysia (MQA)",
                "Agensi Pengangkutan Awam Darat (APAD)",
                "Agensi Regulatori Farmasi Negara (NPRA)",
                "Bahagian Kawalan Penyakit",
                "Bahagian Keselamatan dan Kualiti Makanan (BKKM)",
                "Bank Negara Malaysia",
                "Bursa Malaysia",
                "Cawangan Kawalan Amalan Perubatan Swasta (CKAPS)",
                "Institut Piawaian dan Penyelidikan Perindustrian Malaysia (SIRIM)",
                "Jabatan Akauntan Negara Malaysia",
                "Jabatan Alam Sekitar (JAS)",
                "Jabatan Imigresen Malaysia",
                "Jabatan Kastam Diraja Malaysia",
                "Jabatan Kebajikan Masyarakat (JKM)",
                "Jabatan Kemajuan Islam Malaysia(JAKIM)",
                "Jabatan Kerajaan Tempatan",
                "Jabatan Kerja Raya(JKR)",
                "Jabatan Keselamatan dan Kesihatan Pekerjaan (DOSH)",
                "Jabatan Kimia Malaysia",
                "Jabatan Ketua Pengarah Tanah dan Galian Persekutuan (JKPTG)",
                "Jabatan Laut Malaysia (JLM)",
                "Jabatan Mineral dan Geosains Malaysia (JMG)",
                "Jabatan Muzium Malaysia",
                "Jabatan Pendidikan Tinggi (JPT)",
                "Jabatan Pengurusan Sisa Pepejal Negara",
                "Jabatan Perikanan Malaysia",
                "Jabatan Perkhidmatan Kuarantin Dan Pemeriksaan Malaysia",
                "Jabatan Perkhidmatan Veterinar",
                "Jabatan Perlindungan Hidupan Liar dan Taman Negara Semenanjung Malaysia (PERHILITAN)",
                "Jabatan Pertanian Malaysia",
                "Jabatan Perumahan Negara",
                "Jabatan Tenaga Kerja Semenanjung Malaysia (JTKSM)Jabatan Pertanian Malaysia",
                "Lembaga Arkitek Malaysia",
                "Lembaga Getah Malaysia (LGM)",
                "Lembaga Iklan Ubat",
                "Lembaga Jurutera Malaysia",
                "Majlis Bandaraya Kuantan",
                "Majlis Perbandaran Temerloh",
                "Majlis Perbandaran Bentong",
                "Majlis Daerah Pekan",
                "Majlis Daerah Rompin",
                "Majlis Daerah Bera",
                "Majlis Daerah Raub",
                "Majlis Daerah Cameron Highlands",
                "Majlis Daerah Jerantut",
                "Majlis Daerah Lipis",
                "Majlis Daerah Maran",
                "Lembaga Pembangunan Tioman",
                // Add other options as needed
            ];

            document.addEventListener("DOMContentLoaded", function() {
                const searchInput = document.getElementById("searchInput");
                const suggestionsContainer = document.querySelector(".sugg");

                searchInput.addEventListener("input", function() {
                    const value = this.value.trim().toLowerCase();
                    const filteredSuggestions = suggestionsData.filter(option =>
                        option.toLowerCase().includes(value)
                    );

                    const suggestionsHTML = filteredSuggestions.map(suggestion =>
                        `<div class="suggestion-item">${suggestion}</div>`
                    ).join("");

                    suggestionsContainer.innerHTML = suggestionsHTML;
                });


                suggestionsContainer.addEventListener("click", function(event) {
                    if (event.target.classList.contains("suggestion-item")) {
                        searchInput.value = event.target.innerText;
                        suggestionsContainer.innerHTML = "";
                    }
                });
            });

        </script>
        <script>
            function showDisclaimer(documentName, documentLink, tarikhditerbitkan) {
                var disclaimerMessage = "Dokumen yang dimuatnaik kedalam portal MyGP adalah benar dan sahih yang diperolehi dari sumber yang tepat:<br><br>" +
                    "Nama: " + documentName + "<br>" +
                    "<br>Tarikh Diterbitkan: " + tarikhditerbitkan;

                document.getElementById('disclaimerMessage').innerHTML = disclaimerMessage;

                $('#disclaimerModal').modal('show');

                document.getElementById('agreeButton').onclick = function() {
                    window.open(documentLink, "_blank");
                    $('#disclaimerModal').modal('hide');
                };

                document.getElementById('cancelButton').onclick = function() {
                    $('#disclaimerModal').modal('hide');
                };
            }

        </script>




    </div>

</body>

</html>
