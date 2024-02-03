<?php require_once('conn.php');
      include('form.php') ;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>MyGP - Kemaskini</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
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
    <link rel="icon" type="image/x-icon" sizes="32x32" href="<?php echo('/dashboard/img/mygplogo'); ?><?php echo('site_favicon'); ?>" />


</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="form.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">My Garis Panduan</div>
                <!-- <div class="sidebar-brand-text mx-3">My Garis Pandua <sup>2</sup></div> -->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" />

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="form.php">
                    <i class="fa fa-edit"></i>
                    <span>Maklumat Baharu</span></a>
                <a class="nav-link" href="tables.php">
                    <i class="fa fa-book"></i>
                    <span>Senarai Garis Panduan</span></a>

            </li>
           
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
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->

                        <div class="topbar-divider d-none d-sm-block"></div>


                    </ul>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->

                    <!-- Content Row first -->
                    <div class="container">
                        <h4>Maklumat Baharu Garisan Panduan:</h4>
                        <br />

                        <form>
                            <div class="form-row">
                                <div class="col">
                                    <label for="inputEmail4">Nama Garis Panduan</label>
                                    <input type="text" class="form-control" placeholder="" />
                                </div>
                                <br />
                                <div class="col">
                                    <label for="exampleFormControlFile1">Muat Naik Dokumen</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" />
                                </div>
                            </div>
                            <br />
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlFile1">Tarikh diterbitkan &nbsp;</label>
                                        <div class="datepicker date input-group">

                                            <br />
                                            <input type="date" placeholder="Choose Date" class="form-control" id="fecha1" />
                                            <!-- <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                      </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Keterangan Objektif</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <!-- <div class="form-group col-md-4"> -->
                                    <label for="inputState">Nama Kementerian/SUK Negeri</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Nama Kementerian/SUK Negeri</option>
                                        <option value="HTML">Jabatan Perdana Menteri (JPM)</option>
                                        <option value="HTML">Kementerian Pertanian dan Industri Makanan(MAFI)</option>
                                        <option value="HTML">Kementerian Komunikasi dan Multimedia Malaysia(MINDEF)</option>
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
                                <br />
                                <div class="col">
                                    <label for="inputState">Nama Agensi</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Nama Agensi</option>
                                        <option value="HTML">Dewan Bahasa dan Pustaka(DBP)</option>
                                        <option value="HTML">Majlis Peperiksaan Malaysia(MPM)</option>
                                        <option value="HTML">Perbadanan Kota Buku</option>
                                        <option value="HTML">PADU Corporation(PADU)</option>
                                        <option value="HTML">Institut Terjemahan & Buku Malaysia</option>
                                        <option value="HTML">Berhad(ITBM)</option>
                                        <option value="HTML">Yayasan Guru Tun Hussein Onn(YGTHO)</option>
                                        <option value="HTML">Majlis Penasihat Pendidikan Kebangsaan</option></option>
                                        <option value="HTML">TIADA</option>
                                    </select>
                                </div>
                            </div>
                            <br />
                            <div class="form-row">
                                <div class="col">
                                    <!-- <div class="form-group col-md-4"> -->
                                    <label for="inputState">Peringkat Kerajaan</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Sila Pilih Peringkat Kerajaan</option>
                                        <option>Persekutuan</option>
                                        <option>Negeri</option>
                                        <option>Tempatan</option>

                                    </select>
                                </div>
                                <br />
                                <div class="col">
                                    <label for="inputEmail4">Laman Web Agensi</label>
                                    <input type="text" class="form-control" placeholder="Sila masukkan url" />
                                </div>
                            </div>
                            <br />
                            <div class="form-row">
                                <div class="col">
                                    <label for="inputEmail4">Punca Kuasa</label>
                                    <input type="text" class="form-control" placeholder="Nyatakan: Akta asas perundangan" />
                                </div>
                                <br />
                                <div class="col">
                                    <label for="exampleFormControlFile1">Akta/Enakmen/Ordinan</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" />
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Peraturan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Nama Perlesenan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="col">
                                <div class="row d-flex justify-content mt-100">
                                    <label for="exampleFormControlFile1">Sektor</label>
                                    <br>
                                    <div class="col-md-12"> <select id="choices-multiple-remove-button" placeholder="Sila Pilih Sektor" multiple>
                                            <option value="HTML">PEMBUATAN</option>
                                            <option value="Jquery">PERKHIDMATAN</option>
                                            <option value="CSS">PERTANIAN</option>
                                            <option value="Bootstrap 3">PEMBINAAN</option>
                                            <option value="Bootstrap 4">PERLOMBONGAN</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- </div> -->


                                <br>
                                <!-- <div class="col"> -->
                                <div class="row d-flex justify-content mt-100">
                                    <label for="exampleFormControlFile1">Liputan</label>
                                    <br>
                                    <div class="col-md-12"> <select id="choices-multiple-remove-button" placeholder="Sila Pilih Negeri Liputan" multiple>
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

                            <br>

                            <div>
                                <label for="radio">Status &nbsp;</label>
                                <!-- <h5>Status</h5> -->
                                <label>
                                    <input type="checkbox" class="radio" value="1" name="enable" />&nbsp;Enable</label> &nbsp;
                                <label>
                                    <input type="checkbox" class="radio" value="1" name="disable" />&nbsp;Disable</label>
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
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Select "Logout" below if you are ready to end your current session.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">
                            Cancel
                        </button>
                        <a class="btn btn-primary" href="login.php">Logout</a>
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
</body>

</html>