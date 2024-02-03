<?php require_once('conn.php');?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MyGP - Kemaskini</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <!-- datepicker styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    <link rel="icon" type="image/x-icon" sizes="32x32" href="<?php echo ('/dashboard/img/mygplogo'); ?><?php echo ('site_favicon'); ?>" />


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="form.php">
                <div class="sidebar-brand-icon">
                    <a href="form.php" class="navbar-brand ml-lg-3">
                        <h1 class="m-0 text-uppercase text-primary"><img src="img/mygplog.png" class="img-fluid" alt="Responsive image"></h1>
                    </a>
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                </div>
                <!-- <div class="sidebar-brand-text mx-3">My Garis Panduan</div> -->
                <!-- <div class="sidebar-brand-text mx-3">My Garis Pandua <sup>2</sup></div> -->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="form.php">
                    <i class="fa fa-edit"></i>
                    <span>Maklumat Baharu</span></a>
                <a class="nav-link" href="tables.php">
                    <i class="fa fa-book"></i>
                    <span>Senarai Garis Panduan</span></a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">Logout</i>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->


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


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->


                    <!-- Content Row -->
                    <!-- Content Row first -->
                    <div class="container">
                        <h4>Maklumat Baharu Garisan Panduan:</h4>
                        <br />

                        <form>
                            <div class="form-row">
                                <div class="col">
                                    <label for="namaGarisPanduan" required>Nama Garis Panduan</label>
                                    <span class="required">*</span>
                                    <input type="text" id="namagarispanduan" name="namagarispanduan" class="form-control" minlength="5" oninput="this.value = this.value.toUpperCase()" required />
                                </div>
                                <br />
                                <div class="col">
                                    <label for="muatNaikDokumen">Muat Naik Dokumen</label>
                                    <span class="required">*</span>
                                    <input type="file" action="edit.php" name="muatnaikdokumen" class="form-control-file" id="muatnaikdokumen" method="post" entype="multipart/form-data" required />
                                    <?php
                                    include 'conn.php';

                                    $sql = "SELECT pdf from pdf_file";
                                    $query = mysqli_query($conn, $sql);
                                    while ($info = mysqli_fetch_array($query)) {
                                    ?>
                                        <embed type="application/pdf" src="pdf/<?php echo $info['pdf']; ?>" width="900" height="500">
                                    <?php
                                    }

                                    ?>
                                </div>
                            </div>
                            <br />
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group mb-4">
                                        <label for="tarikhDiterbitkan">Tarikh Diterbitkan &nbsp;</label>
                                        <span class="required">*</span>
                                        <div class="datepicker date input-group">

                                            <br />
                                            <input type="date" name="tarikhditerbitkan" placeholder="Choose Date" class="form-control" id="tarikhDiterbitkan" required />
                                            <!-- <div class="input-group-append">
                                          <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="keteranganObjektif">Keterangan Objektif</label>
                                <textarea class="form-control" name="keteranganobjektif" id="keteranganObjektif" rows="3" required></textarea>
                                <!-- <textarea
                  class="form-control"
                  name="keteranganobjektif"
                  id="keteranganObjektif"
                  rows="3"  oninput="this.value = this.value.toUpperCase()" required
                ></textarea> -->

                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <!-- <div class="form-group col-md-4"> -->
                                    <label for="namaKementerian">Nama Kementerian/SUK Negeri</label>
                                    <select id="namaKementerian" class="form-control" name="namakementerian" required>
                                        <option selected>Nama Kementerian/SUK Negeri</option>
                                        <option value="JabatanPerdanaMenteri">Jabatan Perdana Menteri (JPM)</option>
                                        <option value="KementerianPertaniandanIndustri">Kementerian Pertanian dan Industri Makanan(MAFI)</option>
                                        <option value="KementerianKomunikasidanMultimedia">Kementerian Komunikasi dan Multimedia Malaysia(MINDEF)</option>
                                        <option value="HTML">Kementerian Perdagangan Dalam Negeri dan Hal Ehwal Pengguna Malaysia (KPDNHEP)</option>
                                        <option value="HTML">Kementerian Pendidikan Malaysia (KPM)</option>
                                        <option value="HTML">Kementerian Tenaga dan Sumber Asli(KeTSA)</option>
                                        <option value="HTML">Kementerian Pembangunan Usahawan dan Koperasi (MEDAC)</option>
                                        <option value="HTML">Kementerian Alam Sekitar dan Air (KASA)</option>
                                        <option value="HTML">Kementerian Wilayah Persekutuan(KWP)</option>
                                        <option value="HTML">Kementerian Kewangan Malaysia (MOF)</option>
                                        <option value="HTML">Kementerian Luar Negeri (KLN)</option>
                                        <option value="HTML">Kementerian Kesihatan Malaysia(KKM)</option>
                                        <option value="HTML">Kementerian Pengajian Tinggi (KPT)</option>
                                        <option value="HTML">Kementerian Dalam Negeri (KDN)</option>
                                        <option value="HTML">Kementerian Perumahan dan Kerajaan Tempatan (KPKT)</option>
                                        <option value="HTML">Kementerian Perpaduan Negera(PERPADUAN)</option>
                                        <option value="HTML">Kementerian Perusahaan Perladangan dan Komoditi(MPIC))</option>
                                        <option value="HTML">Kementerian Pembangunan Luar Bandar(KPLB))</option>
                                        <option value="HTML">Kementerian Sains, Teknologi dan Inovasi (MOSTI)</option>
                                        <option value="HTML">Kementerian Pelancongan, Seni dan Budaya Malaysia (MOTAC)</option>
                                        <option value="HTML">Kementerian Pengangkutan Malaysia (MOT)</option>
                                        <option value="HTML">Kementerian Pembangunan Wanita, Keluarga dan Masyarakat (KPWKM)</option>
                                        <option value="HTML">Kementerian Kerja Raya Malaysia (KKR)</option>
                                        <option value="HTML">Kementerian Belia dan Sukan (KBS)</option>
                                        <option value="HTML">SUK JOHOR</option>
                                        <option value="HTML">SUK KEDAH</option>
                                        <option value="HTML">SUK MELAKA</option>
                                        <option value="HTML">SUK NEGERI SEMBILAN</option>
                                        <option value="HTML">SUK PAHANG</option>
                                        <option value="HTML">SUK PERAK</option>
                                        <option value="HTML">SUK PERLIS</option>
                                        <option value="HTML">SUK PULAU PINANG</option>
                                        <option value="HTML">SUK SABAH</option>
                                        <option value="HTML">SUK SARAWAK</option>
                                        <option value="HTML">SUK SELANGOR</option>
                                        <option value="HTML">SUK TERENGGANU</option>
                                    </select>
                                </div>

                                <br>

                                <div class="col">
                                    <label for=">namaAgensi">Nama Agensi</label>
                                    <select id="namaAgensi" class="form-control" name="nameagensi" required>
                                        <option selected>Nama Agensi</option>
                                        <option value="HTML">Dewan Bahasa dan Pustaka(DBP)</option>
                                        <option value="HTML">Majlis Peperiksaan Malaysia(MPM)</option>
                                        <option value="HTML">Perbadanan Kota Buku</option>
                                        <option value="HTML">PADU Corporation(PADU)</option>
                                        <option value="HTML">Institut Terjemahan & Buku Malaysia</option>
                                        <option value="HTML">Berhad(ITBM)</option>
                                        <option value="HTML">Yayasan Guru Tun Hussein Onn(YGTHO)</option>
                                        <option value="HTML">Majlis Penasihat Pendidikan Kebangsaan</option>
                                        </option>
                                        <option value="HTML">TIADA</option>
                                    </select>
                                </div>
                            </div>
                            <br />
                            <div class="form-row">
                                <div class="col">
                                    <!-- <div class="form-group col-md-4"> -->
                                    <label for="peringkatKerajaan">Peringkat Kerajaan</label>
                                    <select id="peringkatKerajaan" nama="peringkatkerajaan" class="form-control" required>
                                        <option selected>Sila Pilih Peringkat Kerajaan</option>
                                        <option value="PERSEKUTUAN">PERSEKUTUAN</option>
                                        <option value="NEGERI">NEGERI</option>
                                        <option value="TEMPATAN">TEMPATAN</option>

                                    </select>
                                </div>
                                <br />
                                <div class="col">
                                    <label for="lamanWebAgensi">Laman Web Agensi</label>
                                    <input type="text" class="form-control" name="lamanwebagensi" id="lamanWebAgensi" placeholder="Sila masukkan url" oninput="this.value = this.value.toUpperCase()" required />
                                </div>
                            </div>
                            <br />
                            <div class="form-row">
                                <div class="col">
                                    <label for="puncaKuasa">Punca Kuasa</label>
                                    <input type="text" name="puncakuasa" class="form-control" minlength="3" id="puncaKuasa" placeholder="Nyatakan: Akta asas perundangan" oninput="this.value = this.value.toUpperCase()" />
                                </div>
                                <br />
                                <div class="col">
                                    <label for="aktaEnakmenOrdinan">Akta/Enakmen/Ordinan</label>
                                    <input type="file" name="aktaenakmenordinan" class="form-control-file" id="aktaEnakmenOrdinan" />
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="peraturan">Peraturan</label>
                                <textarea class="form-control" id="peraturan" minlength="5" name="peraturan" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="namaPerlesenan">Nama Perlesenan</label>
                                <textarea class="form-control" id="namaPerlesenan" name="namaperlesenan" minlength="5" rows="3" required></textarea>
                            </div>
                            <div class="col">
                                <div class="row d-flex justify-content mt-100">
                                    <label for="sektor">Sektor</label>
                                    <span class="required">*</span>
                                    <br>
                                    <div class="col-md-12">
                                        <select id="choices-multiple-remove-button" name="sektor" placeholder="Sila Pilih Sektor" multiple required>
                                            <option value="PEMBUATAN">PEMBUATAN</option>
                                            <option value="PERKHIDMATAN">PERKHIDMATAN</option>
                                            <option value="PERTANIAN">PERTANIAN</option>
                                            <option value="PEMBINAAN">PEMBINAAN</option>
                                            <option value="PERLOMBONGAN">PERLOMBONGAN</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- </div> -->


                                <br>
                                <!-- <div class="col"> -->
                                <div class="row d-flex justify-content mt-100">
                                    <label for="liputan">Liputan</label>
                                    <span class="required">*</span>
                                    <br>
                                    <div class="col-md-12"> <select id="choices-multiple-remove-button" name="liputan" placeholder="Sila Pilih Negeri Liputan" multiple>
                                            <option value="HTML">PAHANG</option>
                                            <option value="Jquery">PERAK</option>
                                            <option value="CSS">TERENGGANU</option>
                                            <option value="Bootstrap 3">PERLIS</option>
                                            <option value="Bootstrap 4">SELANGOR</option>
                                            <option value="Bootstrap 4">NEGERI SEMBILAN</option>
                                            <option value="Bootstrap 4">JOHOR</option>
                                            <option value="Bootstrap 4">KELANTAN</option>
                                            <option value="Bootstrap 4">KEDAH</option>
                                            <option value="Bootstrap 4">PULAU PINANG</option>
                                            <option value="Bootstrap 4">MELAKA</option>
                                            <option value="Bootstrap 4">SABAH</option>
                                            <option value="Bootstrap 4">SARAWAK</option>
                                            <option value="Bootstrap 4">KUALA LUMPUR</option>
                                            <option value="Bootstrap 4">SELURUH MALAYSIA</option>
                                            <option value="Bootstrap 4">BORNEO(SABAH & SARAWAK</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>


                    <!-- Status: <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">2</label>
              </div> -->
                    <br>

                    <div class="col">
                        <label for="status">Status* &nbsp;</label> &nbsp;
                        <!-- <h5>Status</h5> -->
                        <label>
                            <input type="checkbox" class="radio" value="1" name="enable" required />&nbsp;Enable</label> &nbsp;
                        <label>
                            <input type="checkbox" class="radio" value="1" name="disable" required />&nbsp;Disable</label>
                    </div>
                    <br>
                    <div class="container bg-light">
                        <div class="col-md-12 text-right">
                            <button type="button" class="btn btn-primary">Kemaskini</button>

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
                        <span>Copyright &copy; My Garis Panduan 2023</span>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Pasti Untuk Log Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Pilih "Log Keluar" di bawah jika anda bersedia untuk menamatkan sesi semasa anda.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">
                        Batal
                    </button>
                    <a class="btn btn-primary" href="login.php">Log Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script>
        $(document).ready(function() {

            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,
                maxItemCount: 16,
                searchResultLimit: 16,
                renderChoiceLimit: 16
            });


        });
    </script>
    <!--code for status-->
    <script>
        // the selector will match all input controls of type :checkbox
        // and attach a click event handler 
        $("input:checkbox").on('click', function() {
            // in the handler, 'this' refers to the box clicked on
            var $box = $(this);
            if ($box.is(":checked")) {
                // the name of the box is retrieved using the .attr() method
                // as it is assumed and expected to be immutable
                var group = "input:checkbox[name='" + $box.attr("name") + "']";
                // the checked state of the group/box on the other hand will change
                // and the current value is retrieved using .prop() method
                $(group).prop("checked", false);
                $box.prop("checked", true);
            } else {
                $box.prop("checked", false);
            }
        });
    </script>
    <!--code for status-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- uppercase for field form-->
    <script>
        function upperCaseF(a) {
            setTimeout(function() {
                a.value = a.value.toUpperCase();
            }, 1);
        }
    </script>
</body>

</html>