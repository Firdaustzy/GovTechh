<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MyGP - Maklumat Baharu</title>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="icon" type="image/x-icon" sizes="32x32" href="<?php echo ('/dashboard/img/mygplogo'); ?><?php echo ('site_favicon'); ?>" />
    <style>
        .required {
            color: red;
        }
    </style>

</head>

<!-- <form method="POST" action="forminsert.php" enctype="multipart/form-data" onsubmit="return validateForm();"> -->

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
                        <form method="POST" action="forminsert.php" enctype="multipart/form-data">
                            <div class="form-row">
                                <!-- Nama Garis Panduan -->
                                <div class="col">
                                    <label for="namaGarisPanduan">Nama Garis Panduan <span class="required">*</span></label>
                                    <input type="text" id="namagarispanduan" name="namagarispanduan" class="form-control" minlength="5" required />
                                    <!--oninput="this.value = this.value.toUpperCase()"-->
                                </div>
                                <br />
                                <div class="col">
                                    <br>
                                    <!-- Muat Naik Dokumen -->
                                    <label for="muatnaikdokumen">Muat Naik Dokumen:</label>
                                    <span class="required">*</span>
                                    <input type="file" name="muatnaikdokumen">
                                </div>
                            </div>
                            <br />
                            <div class="form-row">
                                <div class="col">
                                    <!-- Tarikh Diterbitkan -->
                                    <div class="form-group mb-4">
                                        <label for="tarikhDiterbitkan">Tarikh Diterbitkan &nbsp;</label>
                                        <span class="required">*</span>
                                        <div class="">
                                            <input type="date" name="tarikhditerbitkan" placeholder="Choose Date" class="form-control" id="tarikhDiterbitkan" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- Keterangan Objektif -->
                                <label for="keteranganObjektif">Keterangan Objektif<span class="required">*</span></label>
                                <textarea class="form-control" name="keteranganobjektif" id="keteranganObjektif" rows="3" required></textarea>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <!-- Nama kementerian -->
                                    <!-- <div class="form-group col-md-4"> -->
                                    <label for="namaKementerian">Nama Kementerian/SUK Negeri <span class="required">*</span></label>
                                    <select id="namaKementerian" class="form-control" name="namakementerian" required>
                                        <option selected>Nama Kementerian/SUK Negeri</option>
                                        <option value="Jabatan Perdana Menteri">Jabatan Perdana Menteri (JPM)</option>
                                        <option value="Kementerian Pertaniandan Industri (MAFI)">Kementerian Pertanian dan Industri Makanan(MAFI)</option>
                                        <option value="Kementerian Komunikasi dan Multimedia Malaysia(KKKM)">Kementerian Komunikasi dan Multimedia Malaysia(MINDEF)</option>
                                        <option value="Kementerian Perdagangan Dalam Negeri dan Hal Ehwal Pengguna Malaysia (KPDNHEP)">Kementerian Perdagangan Dalam Negeri dan Hal Ehwal Pengguna Malaysia (KPDNHEP)</option>
                                        <option value="Kementerian Pendidikan Malaysia (KPM)">Kementerian Pendidikan Malaysia (KPM)</option>
                                        <option value="Kementerian Tenaga dan Sumber Asli(KeTSA)">Kementerian Tenaga dan Sumber Asli(KeTSA)</option>
                                        <option value="Kementerian Pembangunan Usahawan dan Koperasi (MEDAC)">Kementerian Pembangunan Usahawan dan Koperasi (MEDAC)</option>
                                        <option value="Kementerian Alam Sekitar dan Air (KASA)">Kementerian Alam Sekitar dan Air (KASA)</option>
                                        <option value="Kementerian Wilayah Persekutuan(KWP)">Kementerian Wilayah Persekutuan(KWP)</option>
                                        <option value="Kementerian Kewangan Malaysia (MOF)">Kementerian Kewangan Malaysia (MOF)</option>
                                        <option value=">Kementerian Luar Negeri (KLN)">Kementerian Luar Negeri (KLN)</option>
                                        <option value="Kementerian Kesihatan Malaysia(KKM)">Kementerian Kesihatan Malaysia(KKM)</option>
                                        <option value="Kementerian Pengajian Tinggi (KPT)">Kementerian Pengajian Tinggi (KPT)</option>
                                        <option value="Kementerian Dalam Negeri (KDN)">Kementerian Dalam Negeri (KDN)</option>
                                        <option value="Kementerian Perumahan dan Kerajaan Tempatan (KPKT)">Kementerian Perumahan dan Kerajaan Tempatan (KPKT)</option>
                                        <option value="Kementerian Perpaduan Negera(PERPADUAN)">Kementerian Perpaduan Negera(PERPADUAN)</option>
                                        <option value="Kementerian Perusahaan Perladangan dan Komoditi(MPIC)">Kementerian Perusahaan Perladangan dan Komoditi(MPIC)</option>
                                        <option value="Kementerian Pembangunan Luar Bandar(KPLB)">Kementerian Pembangunan Luar Bandar(KPLB)</option>
                                        <option value="Kementerian Sains, Teknologi dan Inovasi (MOSTI)">Kementerian Sains, Teknologi dan Inovasi (MOSTI)</option>
                                        <option value="Kementerian Pelancongan, Seni dan Budaya Malaysia (MOTAC)">Kementerian Pelancongan, Seni dan Budaya Malaysia (MOTAC)</option>
                                        <option value="Kementerian Pengangkutan Malaysia (MOT)">Kementerian Pengangkutan Malaysia (MOT)</option>
                                        <option value="KementerianPembangunanWanitaKeluargadanMasyarakat">Kementerian Pembangunan Wanita, Keluarga dan Masyarakat (KPWKM)</option>
                                        <option value="Kementerian Kerja Raya Malaysia (KKR)">Kementerian Kerja Raya Malaysia (KKR)</option>
                                        <option value="Kementerian Belia dan Sukan (KBS)">Kementerian Belia dan Sukan (KBS)</option>
                                        <option value="SUK JOHOR">SUK JOHOR</option>
                                        <option value="SUK KEDAH">SUK KEDAH</option>
                                        <option value="SUK MELAKA">SUK MELAKA</option>
                                        <option value="SUK NEGERI SEMBILAN">SUK NEGERI SEMBILAN</option>
                                        <option value="SUK PAHANG">SUK PAHANG</option>
                                        <option value="SUK PERAK">SUK PERAK</option>
                                        <option value="SUK PERLIS">SUK PERLIS</option>
                                        <option value="SUK PULAU PINANG">SUK PULAU PINANG</option>
                                        <option value="SUK SABAH">SUK SABAH</option>
                                        <option value="SUK SARAWAK">SUK SARAWAK</option>
                                        <option value="SUK SELANGOR">SUK SELANGOR</option>
                                        <option value="SUK TERENGGANU">SUK TERENGGANU</option>
                                    </select>
                                </div>
                                <br>
                                <!-- nama agensi -->
                                <div class="col">
                                    <label for=">namaAgensi">Nama Agensi <span class="required">*</span></label>
                                    <select id="namaAgensi" class="form-control" name="nameagensi" required>
                                        <option selected>Nama Agensi</option>
                                        <option value="Dewan Bahasadan Pustaka">Dewan Bahasa dan Pustaka(DBP)</option>
                                        <option value="Majlis Peperiksaan Malaysia">Majlis Peperiksaan Malaysia(MPM)</option>
                                        <option value="Perbadanan Kota Buku">Perbadanan Kota Buku</option>
                                        <option value="PADU Corporation">PADU Corporation(PADU)</option>
                                        <option value="Institut Terjemahan & Buku Malaysia">Institut Terjemahan & Buku Malaysia</option>
                                        <option value="Berhad (ITBM)">Berhad(ITBM)</option>
                                        <option value="Yayasan Guru Tun Hussein Onn(YGTHO)">Yayasan Guru Tun Hussein Onn(YGTHO)</option>
                                        <option value="Majlis Penasihat Pendidikan Kebangsaan">Majlis Penasihat Pendidikan Kebangsaan</option>
                                        </option>
                                        <option value="TIADA">TIADA</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col">
                                    <!-- Peringkat Kerajaan -->
                                    <!-- <div class="form-group col-md-4"> -->
                                    <label for="peringkatKerajaan">Peringkat Kerajaan <span class="required">*</span></label>
                                    <select name="peringkatkerajaan" class="form-control" required>
                                        <option selected>Sila Pilih Peringkat Kerajaan</option>
                                        <option value="PERSEKUTUAN">PERSEKUTUAN</option>
                                        <option value="NEGERI">NEGERI</option>
                                        <option value="TEMPATAN">TEMPATAN</option>
                                    </select>
                                </div>
                                <br />
                                <div class="col">
                                    <!-- Laman Web Agensi -->
                                    <label for="lamanWebAgensi">Laman Web Agensi <span class="required">*</span></label>
                                    <input type="text" class="form-control" name="lamanwebagensi" id="lamanWebAgensi" placeholder="Sila masukkan url" oninput="this.value = this.value.toUpperCase()" required />
                                </div>
                            </div>
                            <br>
                            <div class="form-row">
                                <div class="col">
                                    <!-- Punca Kuasa -->
                                    <label for="puncaKuasa">Punca Kuasa</label>
                                    <input type="text" name="puncakuasa" class="form-control" minlength="3" id="puncaKuasa" placeholder="Nyatakan: Akta asas perundangan" oninput="this.value = this.value.toUpperCase()" />
                                </div>
                                <br />
                                <div class="col">
                                    <br>
                                    <!-- Akta/Enakmen/Ordinan -->
                                    <label for="aktaenakmenordinan">Akta/Enakmen/Ordinan:</label>
                                    <input type="file" name="aktaenakmenordinan">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <!-- peraturan -->
                                <label for="peraturan">Peraturan</label>
                                <textarea class="form-control" id="peraturan" minlength="5" name="peraturan" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <!-- Nama Perlesenan -->
                                <label for="namaPerlesenan">Nama Perlesenan <span class="required">*</span></label>
                                <textarea class="form-control" id="namaPerlesenan" name="namaperlesenan" minlength="5" rows="3" required></textarea>
                            </div>
                            <br>
                            <!-- <div class="col">
                                <label for="customCheck">Sektor :</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="cbox1" id="customCheck1" value="PEMBUATAN">
                                    <label class="custom-control-label" for="customCheck1">PEMBUATAN</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="cbox2" id="customCheck2" value="PERKHIDMATAN">
                                    <label class="custom-control-label" for="customCheck2">PERKHIDMATAN</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="cbox3" id="customCheck3" value="PEMBINAAN">
                                    <label class="custom-control-label" for="customCheck3">PEMBINAAN</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="cbox4" id="customCheck4" value="PERLOMBONGAN">
                                    <label class="custom-control-label" for="customCheck4">PERLOMBONGAN</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="cbox5" id="customCheck5" value="PERTANIAN">
                                    <label class="custom-control-label" for="customCheck5">PERTANIAN</label>
                                </div>
                            </div> -->

                            <br>
                            <div class="col">
                                <label for="">Sektor : &nbsp;</label>
                                <input type="checkbox" name="sektor[]" value="PEMBUATAN" class="theClass" />PEMBUATAN &nbsp;
                                <input type="checkbox" name="sektor[]" value="PERKHIDMATAN" class="theClass" />PERKHIDMATAN &nbsp;
                                <input type="checkbox" name="sektor[]" value="PEMBINAAN" class="theClass" />PEMBINAAN &nbsp;
                                <input type="checkbox" name="sektor[]" value="PERLOMBONGAN" class="theClass" />PERLOMBONGAN &nbsp;
                                <input type="checkbox" name="sektor[]" value="PERTANIAN" class="theClass" />PERTANIAN
                            </div>

                                <br>
                                <div class="col">
                                    <label for="status">Status<span class="required">*</span> &nbsp;</label>
                                    <div class="form-group col-2">
                                        <input type="radio" name="status" id="enable" value="enable" /> &nbsp;Enable
                                        <!--onfocus="enablecheckbox();"-->
                                    </div>
                                    <div class="form-group col-2">
                                        <input type="radio" name="status" id="disable" value="disable" />&nbsp;Disable
                                        <!--onfocus="disablecheckbox();"-->
                                    </div>
                                </div>
                                <br>
                                <div class="container bg-light">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" name="submit_test" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-secondary" onclick="myFunction()" value="reset">Reset</button>
                                    </div>
                                </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- </form> -->
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
    <!--reset button-->
    <script>
        function myFunction() {
            document.getElementById("myForm").reset();
        }
    </script>
    <script>
        var expanded = false;

        function showCheckboxes() {
            var checkboxes = document.getElementById("checkboxes");
            if (!expanded) {
                checkboxes.style.display = "block";
                expanded = true;
            } else {
                checkboxes.style.display = "none";
                expanded = false;
            }
        }
    </script>
    <script>
        $('input[type=checkbox]').on('change', function() {
            if ($(this).is(':checked')) {
                var values = [];
                $.each($('input:checked'), function(index, input) {
                    values.push(input.value);
                });

                var str = values.join(',');
                $(".hello").html(str);

            }
        });
    </script>

</body>

</html>