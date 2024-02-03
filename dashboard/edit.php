<?php require_once('conn.php');

$passedid = $_GET['id'];

$sql = "SELECT * FROM informationform WHERE idngp = '$passedid'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
  while($row = $result->fetch_assoc()){
    $idngp = $row["idngp"];
    $namagarispanduan = $row["namagarispanduan"];
    $tarikhditerbitkan = $row["tarikhditerbitkan"];
    $keteranganobjektif = $row["keteranganobjektif"];
    $namakementerian = $row["namakementerian"];
    $nameagensi = $row["nameagensi"];
    $peringkatkerajaan = $row["peringkatkerajaan"];
    $lamanwebagensi = $row["lamanwebagensi"];
    $puncakuasa = $row["puncakuasa"];
    $peraturan = $row["peraturan"];
    $namaperlesenan = $row["namaperlesenan"];
    $muatnaikdokumen = $row["muatnaikdokumen"];
    $aktaenakmenordinan = $row["aktaenakmenordinan"];
    $sektor = $row["sektor"];
    $liputan = $row["liputan"];
    $status = $row["status"];
    
  }


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Garis Panduan</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    rel="stylesheet"
  />
  <!-- bootstrap -->
  <link
    rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous"
  />

  <!-- datepicker styles -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css"
  />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">


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
                    <a class="nav-link" href="tables.html">
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
                <input type="hidden" name="userId" value="<?php echo $passedid; ?>">
                <div class="form-row">
                  <div class="col">
                    <label for="namaGarisPanduan" required >Nama Garis Panduan</label>
                    <input name="namagarispanduan" id="namagarispanduan" type="text" class="form-control" value="<?php echo $namagarispanduan; ?>"
                      oninput="this.value = this.value.toUpperCase()" required/>
                                   </div>
                  <br />
                  <div class="col">
                    <label for="muatNaikdokumen">Muat Naik Dokumen</label>
                    <input type="file" class="form-control-file" id="muatnaikdokumen" name="muatnaikdokumen" accept="application/pdf,application/vnd.ms-excel" value="<?php echo $muatnaikdokumen; ?>"/><span value="<?php echo $muatnaikdokumen; ?>"></span>
                  </div>
                </div>
                <br />
                <div class="form-row">
                  <div class="col">
                    <div class="form-group mb-4">
                      <label for="tarikhDiterbitkan"
                      >Tarikh Diterbitkan &nbsp;</label
                    >
                      <div class="datepicker date input-group">
                       
                        <br />
                        <input
                        type="date"
                          placeholder="Choose Date"
                          class="form-control"
                          id="$tarikhditerbitkan"
                          name="tarikhditerbitkan"
                          value="<?php echo $tarikhterbit; ?>"
                          
                         
                        />
                        <!-- <div class="input-group-append">
                                          <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="keteranganObjektif"
                    >Keterangan Objektif</label
                  >
                  <textarea
                  class="form-control"
                    id="keteranganobjektif"
                    name="keteranganobjektif"
                    rows="3"
                    value="<?php echo $keteranganobjektif; ?>"><?php echo $keteranganobjektif; ?></textarea>
                  
                </div>
                <div class="form-row">
                  <div class="col">
                    <!-- <div class="form-group col-md-4"> -->
                    <label for="inputState">Nama Kementerian/SUK Negeri</label>
                    <select id="namakementerian" name="namakementerian" class="form-control">
                     <option value="<?php $namakementerian; ?>" selected><?php echo $namakementerian; ?></option>
                      <option value="Jabatan Perdana Menteri (JPM)"></option>Jabatan Perdana Menteri (JPM)</option>
                      <option value="Kementerian Pertanian dan Industri Makanan (MAFI)">Kementerian Pertanian dan Industri Makanan (MAFI)</option>
                      <option value="Kementerian Komunikasi dan Multimedia Malaysia (KKMM)">Kementerian Komunikasi dan Multimedia Malaysia (KKMM)</option>
                      <option value="Kementerian Pertahanan Malaysia (MINDEF)">Kementerian Pertahanan Malaysia (MINDEF)</option>
                      <option value="Kementerian Perdagangan Dalam Negeri dan Hal Ehwal Pengguna Malaysia (KPDNHEP)">Kementerian Perdagangan Dalam Negeri dan Hal Ehwal Pengguna Malaysia (KPDNHEP)</option>
                      <option value="Kementerian Tenaga dan Sumber Asli (KeTSA)">Kementerian Tenaga dan Sumber Asli (KeTSA)</option>
                      <option value="Kementerian Pembangunan Usahawan dan Koperasi (MEDAC)">Kementerian Pembangunan Usahawan dan Koperasi (MEDAC)</option></option>
                      <option value="Kementerian Alam Sekitar dan Air (KASA)">Kementerian Alam Sekitar dan Air (KASA)</option>
                      <option value="Kementerian Wilayah Persekutuan (KWP)">Kementerian Wilayah Persekutuan (KWP)</option>
                      <option value="Kementerian Kewangan Malaysia (MOF)">Kementerian Kewangan Malaysia (MOF)</option>
                      <option value="Kementerian Luar Negeri (KLN)">Kementerian Luar Negeri (KLN)</option>
                      <option value="Kementerian Kesihatan Malaysia (KKM">Kementerian Kesihatan Malaysia (KKM)</option>
                      <option value="Kementerian Pengajian Tinggi (KPT)">Kementerian Pengajian Tinggi (KPT)</option>
                      <option value="Kementerian Dalam Negeri (KDN)">Kementerian Dalam Negeri (KDN)</option>
                      <option value="Kementerian Perumahan dan Kerajaan Tempatan (KPKT)">Kementerian Perumahan dan Kerajaan Tempatan (KPKT)</option>
                      <option value="Kementerian Sumber Manusia (MOHR)">Kementerian Sumber Manusia (MOHR)</option>
                      <option value="Kementerian Perdagangan Antarabangsa dan Industri (MITI)">Kementerian Perdagangan Antarabangsa dan Industri (MITI)</option>
                      <option value="Kementerian Perpaduan Negara (PERPADUAN)">Kementerian Perpaduan Negara (PERPADUAN)</option>
                      <option value="Kementerian Perusahaan Perladangan dan Komoditi (MPIC)">Kementerian Perusahaan Perladangan dan Komoditi (MPIC)</option>
                      <option value="Kementerian Pembangunan Luar Bandar (KPLB)Kementerian Pembangunan Usahawan dan Koperasi (MEDAC)">Kementerian Sains, Teknologi dan Inovasi (MOSTI)">Kementerian Pembangunan Luar Bandar (KPLB)Kementerian Pembangunan Usahawan dan Koperasi (MEDAC)">Kementerian Sains, Teknologi dan Inovasi (MOSTI)</option>
                      <option value="Kementerian Pengangkutan Malaysia (MOT)">Kementerian Pengangkutan Malaysia (MOT)</option>
                      <option value="Kementerian Pembangunan Wanita, Keluarga dan Masyarakat (KPWKM)">Kementerian Pembangunan Wanita, Keluarga dan Masyarakat (KPWKM)</option>
                      <option value="Kementerian Kerja Raya Malaysia (KKR)">Kementerian Kerja Raya Malaysia (KKR)</option>
                      <option value="Kementerian Belia dan Sukan (KBS)">Kementerian Belia dan Sukan (KBS)</option>
                      <option value="SUK JOHOR">SUK JOHOR</option>
                      <option value="SUK KEDAH">SUK KEDAH</option>
                      <option value="SUK KELANTAN">SUK KELANTAN</option>
                      <option value="SUK MELAKA">SUK MELAKA</option>
                      <option value="SUK NEGERI SEMBILAN">SUK NEGERI SEMBILAN</option>
                      <option value="SUK PAHANG">SUK PAHANG</option>
                      <option value="SUK PERLIS">SUK PERLIS</option>
                      <option value="SUK SABAH">SUK SABAH</option>
                      <option value="SUK SARAWAK">SUK SARAWAK</option>
                      <option value="SUK SELANGOR">SUK SELANGOR</option>
                      <option value="SUK TERENGGANU">SUK TERENGGANU</option>
                    </select>
                  </div>
                  <br />
                  <div class="col">
                  <label for="inputState">Nama Agensi</label>
                    <select id="nameagensi" name="nameagensi" class="form-control">
                    <option value="<?php $nameagensi;?>"selected><?php echo $nameagensi; ?></option>
                      
                      <option value="Dewan Bahasadan Pustaka">Dewan Bahasa dan Pustaka(DBP)</option>
                      <option value="Majlis Peperiksaan Malaysia">Majlis Peperiksaan Malaysia(MPM)</option>
                      <option value="Perbadanan Kota Buku">Perbadanan Kota Buku</option>
                      <option value="PADU Corporation">PADU Corporation(PADU)</option>
                      <option value="Institut Terjemahan & Buku Malaysia">Institut Terjemahan & Buku Malaysia</option>
                      <option value="Berhad (ITBM)">Berhad(ITBM)</option>
                      <option value="Yayasan Guru Tun Hussein Onn(YGTHO)">Yayasan Guru Tun Hussein Onn(YGTHO)</option>
                      <option value="Majlis Penasihat Pendidikan Kebangsaan">Majlis Penasihat Pendidikan Kebangsaan</option>
                      <option value="Pihak Berkuasa Penerbangan Awam Malaysia (CAAM)">Pihak Berkuasa Penerbangan Awam Malaysia (CAAM)</option>
                      <option value="Suruhanjaya Penerbangan Malaysia (MAVCOM)">Suruhanjaya Penerbangan Malaysia (MAVCOM)</option>
                      <option value="Biro Siasatan Kemalangan Udara (BSKU)">Biro Siasatan Kemalangan Udara (BSKU) </option>
                      <option value="Pertubuhan Penerbangan Awam Antarabangsa (ICAO)">Pertubuhan Penerbangan Awam Antarabangsa (ICAO)</option>
                      <option value="Konvensyen Pertubuhan Penerbangan Awam Antarabangsa(ICAOC)">Pertubuhan Penerbangan Awam Antarabangsa (ICAO)</option>
                      <option value="Institut Penyelidikan Keselamatan Jalan Raya Malaysia (MIROS)">"Institut Penyelidikan Keselamatan Jalan Raya Malaysia (MIROS)"</option>
                      <option value="Agensi Pengangkutan Awam Darat (APAD)">Agensi Pengangkutan Awam Darat (APAD)</option>
                      <option value="Lembaga Pelesenan Kenderaan Perdagangan (LPKP) Sabah">Lembaga Pelesenan Kenderaan Perdagangan (LPKP) Sabah</option>
                      <option value="Lembaga Pelesenan Kenderaan Perdagangan (LPKP) Sarawak">Lembaga Pelesenan Kenderaan Perdagangan (LPKP) Sarawak</option>
                      <option value="Perbadanan Aset Keretapi (RAC)">Perbadanan Aset Keretapi (RAC)</option>
                      <option value="Jabatan Laut Malaysia (JLM)">Jabatan Laut Malaysia (JLM)</option>
                      <option value="Institut Maritim Malaysia (MIMA)">Institut Maritim Malaysia (MIMA)</option>
                      <option value="Jabatan Pengangkutan Jalan (JPJ)">Jabatan Pengangkutan Jalan (JPJ)</option>
                      <option value="Lembaga Pelabuhan Klang">Lembaga Pelabuhan Klang</option>
                      <option value="Lembaga Pelabuhan Johor">Lembaga Pelabuhan Johor</option>
                      <option value="Lembaga Pelabuhan Kuantan">Lembaga Pelabuhan Kuantan</option>
                      <option value="Lembaga Pelabuhan Bintulu">Lembaga Pelabuhan Bintulu</option>
                      <option value="Suruhanjaya Pelabuhan Pulau Pinang (SPPP)">Pelabuhan Pulau Pinang</option>
                      
                    </select>
                  </div>
                </div>
                <br />
                <div class="form-row">
                  <!-- <div class="col">
                    <div class="form-group col-md-4"> -->
                    <label for="inputState">Peringkat Kerajaan</label>
                    <select id="peringkat" name="peringkatkerajaan" class="form-control">
                    <option value="<?php echo $peringkatkerajaan; ?>"selected><?php echo $peringkatkerajaan; ?></option>
                      <option value= "Persekutuan">PERSEKUTUAN</option></option>
                      <option value= "Negeri">NEGERI</option>
                      <option value= "Tempatan">TEMPATAN</option>
                   
                    </select>
                  </div>
                  <br />
                  <div class="col">
                    <label for="lamanWebAgensi">Laman Web Agensi</label>
                    <input
                    id="lamanwebagensi"
                      type="text"
                      name="lamanwebagensi"
                      class="form-control"
                      placeholder="Sila masukkan url"
                      value="<?php echo $lamanwebagensi; ?>"
                    />
                  </div>
                </div>
                <br />
                <div class="form-row">
                  <div class="col">
                  <label for="inputEmail4">Punca Kuasa</label>
                    <input
                      id="puncakuasa"
                      type="text"
                      name="puncakuasa"
                      class="form-control"
                      value="<?php echo $puncakuasa; ?>"
                      placeholder="Nyatakan: Akta asas perundangan"
                    />
                  </div>
                  <br />
                  <div class="col">
                      <label for="aktaEnakmenOrdinan">Akta/Enakmen/Ordinan</label>
                      <input type="file" class="form-control-file" id="aktaenakmenordinan" name="aktaenakmenordinan" accept="application/pdf,application/vnd.ms-excel" /><span name="old" value="<?php $aktaenakmenordinan; ?>"><?php echo $aktaenakmenordinan; ?></span>
                      
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label for="peraturan"
                    >Peraturan</label
                  >
                  <textarea
                  class="form-control"
                    id="peraturan"
                    name="peraturan"
                    value="<?php echo $peraturan; ?>"
                    rows="3"
                  ><?php echo $peraturan; ?></textarea>
                </div>
                <div class="form-group">
                  <label for="namaPerlesenan"
                    >Nama Perlesenan</label
                  >
                  <textarea
                  class="form-control"
                    id="namaperlesenan"
                    name="namaperlesenan"
                    value="<?php echo $namaperlesenan; ?>"
                    rows="3"
                  ><?php echo $namaperlesenan; ?></textarea>
                </div>
  
              <div class="col">
              <label for="sektor">Sektor</label>
                <br>
                <?php 
                        if($sektor = "pertanian"){
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"pembuatan\" name=\"sektor\"/>&nbsp;Pembuatan&nbsp";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"perkhidmatan\" name=\"sektor\"/>&nbsp;Perkhidmatan&nbsp";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"pertanian\" name=\"sektor\" checked/>&nbsp;Pertanian&nbsp";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"pembinaan\" name=\"sektor\"/>&nbsp;Pembinaan&nbsp";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"perlombongan\" name=\"sektor\"/>&nbsp;Perlombongan&nbsp";
                        }else if ($sektor = "pelombongan"){
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"pembuatan\" name=\"sektor\"/>&nbsp;Pembuatan&nbsp";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"perkhidmatan\" name=\"sektor\"/>&nbsp;Perkhidmatan";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"pertanian\" name=\"sektor\"/>&nbsp;Pertanian";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"pembinaan\" name=\"sektor\"/>&nbsp;Pembinaan";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"perlombongan\" name=\"sektor\" checked/>&nbsp;Perlombongan";
                        }else if ($sektor = "pembinaan"){
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"pembinaan\" name=\"sektor\"checked/>&nbsp;Pembinaan&nbsp";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"pembuatan\" name=\"sektor\"/>&nbsp;Pembuatan&nbsp";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"perkhidmatan\" name=\"sektor\"/>&nbsp;Perkhidmatan";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"pertanian\" name=\"sektor\"/>&nbsp;Pertanian";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"perlombongan\" name=\"sektor\"/>&nbsp;Perlombongan&nbsp";
                        }else if ($sektor = "pembuatan"){
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"pembuatan\" name=\"sektor\"checked/>&nbsp;Pembuatan&nbsp";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"pembinaan\" name=\"sektor\"/>&nbsp;Pembinaan&nbsp";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"perkhidmatan\" name=\"sektor\"/>&nbsp;Perkhidmatan";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"pertanian\" name=\"sektor\"/>&nbsp;Pertanian";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"perlombongan\" name=\"sektor\"/>&nbsp;Perlombongan&nbsp";
                        }else if ($sektor = "perkhidmatan"){
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"perkhidmatan\" name=\"sektor\"checked/>&nbsp;Perkhidmatan&nbsp";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"pembuatan\" name=\"sektor\"/>&nbsp;Pembuatan&nbsp";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"pembinaan\" name=\"sektor\"/>&nbsp;Pembinaan&nbsp";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"pertanian\" name=\"sektor\"/>&nbsp;Pertanian";
                          echo "<input type=\"checkbox\" id=\"sektor\" class=\"radio\" value=\"perlombongan\" name=\"sektor\"/>&nbsp;Perlombongan&nbsp";
                        }
                  ?>
            </div>
  <!-- </div> -->
                
  
              <br>
              <!-- <div class="col"> -->
              <label for="liputan">Liputan</label>
            <br>
            <div class="row form-row">
              <div class="col-sm-4">
                <label="liputan" name="negeri" id="negeri" placeholder="Sila Pilih Sektor" multiple></label>

                <?php
                    if($liputan = "MELAKA"){
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"MELAKA\" name=\"liputan\"checked/>&nbsp;MELAKA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SABAH\" name=\"liputan\"/>&nbsp;SABAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SARAWAK\" name=\"liputan\"/>&nbsp;SARAWAK&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"LABUAN\" name=\"liputan\"/>&nbsp;LABUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KUALALUMPUR\" name=\"liputan\"/>&nbsp;KUALA LUMPUR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SELURUHMALAYSIA\" name=\"liputan\"/>&nbsp;SELURUH MALAYSIA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KEDAH\" name=\"liputan\"/>&nbsp;KEDAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PULAUPINANG\" name=\"liputan\"/>&nbsp;PULAU PINANG&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PUTRAJAYA\" name=\"liputan\"/>&nbsp;PUTRAJAYA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"NEGERISEMBILAN\" name=\"liputan\"/>&nbsp;NEGERI SEMBILAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"JOHOR\" name=\"liputan\"/>&nbsp;JOHOR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KELANTAN\" name=\"liputan\"/>&nbsp;KELANTAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"WILAYAHPERSEKUTUAN\" name=\"liputan\"/>&nbsp;WILAYAH PERSEKUTUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PERAK\" name=\"liputan\"/>&nbsp;PERAK&nbsp";

                    }else if ($liputan = "SABAH"){
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"pembuatan\" name=\"liputan\"checked/>&nbsp;MELAKA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SABAH\" name=\"liputan\"/>&nbsp;SABAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SARAWAK\" name=\"liputan\"/>&nbsp;SARAWAK&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"LABUAN\" name=\"liputan\"/>&nbsp;LABUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KUALALUMPUR\" name=\"liputan\"/>&nbsp;KUALA LUMPUR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SELURUHMALAYSIA\" name=\"liputan\"/>&nbsp;SELURUH MALAYSIA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KEDAH\" name=\"liputan\"/>&nbsp;KEDAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PULAUPINANG\" name=\"liputan\"/>&nbsp;PULAU PINANG&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PUTRAJAYA\" name=\"liputan\"/>&nbsp;PUTRAJAYA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"NEGERISEMBILAN\" name=\"liputan\"/>&nbsp;NEGERI SEMBILAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"JOHOR\" name=\"liputan\"/>&nbsp;JOHOR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KELANTAN\" name=\"liputan\"/>&nbsp;KELANTAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"WILAYAHPERSEKUTUAN\" name=\"liputan\"/>&nbsp;WILAYAH PERSEKUTUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PERAK\" name=\"liputan\"/>&nbsp;PERAK&nbsp";

                    }else if ($liputan = "SARAWAK"){
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"pembuatan\" name=\"liputan\"checked/>&nbsp;MELAKA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SABAH\" name=\"liputan\"/>&nbsp;SABAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SARAWAK\" name=\"liputan\"/>&nbsp;SARAWAK&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"LABUAN\" name=\"liputan\"checked/>&nbsp;LABUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KUALALUMPUR\" name=\"liputan\"/>&nbsp;KUALA LUMPUR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SELURUHMALAYSIA\" name=\"liputan\"/>&nbsp;SELURUH MALAYSIA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KEDAH\" name=\"liputan\"/>&nbsp;KEDAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PULAUPINANG\" name=\"liputan\"/>&nbsp;PULAU PINANG&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PUTRAJAYA\" name=\"liputan\"/>&nbsp;PUTRAJAYA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"NEGERISEMBILAN\" name=\"liputan\"/>&nbsp;NEGERI SEMBILAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"JOHOR\" name=\"liputan\"/>&nbsp;JOHOR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KELANTAN\" name=\"liputan\"/>&nbsp;KELANTAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"WILAYAHPERSEKUTUAN\" name=\"liputan\"/>&nbsp;WILAYAH PERSEKUTUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PERAK\" name=\"liputan\"/>&nbsp;PERAK&nbsp";

                    }else if ($liputan = "LABUAN"){
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"pembuatan\" name=\"liputan\"/>&nbsp;MELAKA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SABAH\" name=\"liputan\"/>&nbsp;SABAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SARAWAK\" name=\"liputan\"/>&nbsp;SARAWAK&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"LABUAN\" name=\"liputan\"checked/>&nbsp;LABUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KUALALUMPUR\" name=\"liputan\"/>&nbsp;KUALA LUMPUR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SELURUHMALAYSIA\" name=\"liputan\"/>&nbsp;SELURUH MALAYSIA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KEDAH\" name=\"liputan\"/>&nbsp;KEDAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PULAUPINANG\" name=\"liputan\"/>&nbsp;PULAU PINANG&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PUTRAJAYA\" name=\"liputan\"/>&nbsp;PUTRAJAYA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"NEGERISEMBILAN\" name=\"liputan\"/>&nbsp;NEGERI SEMBILAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"JOHOR\" name=\"liputan\"/>&nbsp;JOHOR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KELANTAN\" name=\"liputan\"/>&nbsp;KELANTAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"WILAYAHPERSEKUTUAN\" name=\"liputan\"/>&nbsp;WILAYAH PERSEKUTUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PERAK\" name=\"liputan\"/>&nbsp;PERAK&nbsp";

                    }else if ($liputan = "KUALALUMPUR"){
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"pembuatan\" name=\"liputan\"/>&nbsp;MELAKA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SABAH\" name=\"liputan\"/>&nbsp;SABAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SARAWAK\" name=\"liputan\"/>&nbsp;SARAWAK&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"LABUAN\" name=\"liputan\"/>&nbsp;LABUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KUALALUMPUR\" name=\"liputan\"checked/>&nbsp;KUALA LUMPUR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SELURUHMALAYSIA\" name=\"liputan\"/>&nbsp;SELURUH MALAYSIA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KEDAH\" name=\"liputan\"/>&nbsp;KEDAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PULAUPINANG\" name=\"liputan\"/>&nbsp;PULAU PINANG&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PUTRAJAYA\" name=\"liputan\"/>&nbsp;PUTRAJAYA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"NEGERISEMBILAN\" name=\"liputan\"/>&nbsp;NEGERI SEMBILAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"JOHOR\" name=\"liputan\"/>&nbsp;JOHOR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KELANTAN\" name=\"liputan\"/>&nbsp;KELANTAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"WILAYAHPERSEKUTUAN\" name=\"liputan\"/>&nbsp;WILAYAH PERSEKUTUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PERAK\" name=\"liputan\"/>&nbsp;PERAK&nbsp";

                    }else if ($liputan = "SELURUHMALAYSIA"){
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"pembuatan\" name=\"liputan\"/>&nbsp;MELAKA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SABAH\" name=\"liputan\"/>&nbsp;SABAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SARAWAK\" name=\"liputan\"/>&nbsp;SARAWAK&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"LABUAN\" name=\"liputan\"/>&nbsp;LABUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KUALALUMPUR\" name=\"liputan\"/>&nbsp;KUALA LUMPUR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SELURUHMALAYSIA\" name=\"liputan\"checked/>&nbsp;SELURUH MALAYSIA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KEDAH\" name=\"liputan\"/>&nbsp;KEDAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PULAUPINANG\" name=\"liputan\"/>&nbsp;PULAU PINANG&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PUTRAJAYA\" name=\"liputan\"/>&nbsp;PUTRAJAYA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"NEGERISEMBILAN\" name=\"liputan\"/>&nbsp;NEGERI SEMBILAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"JOHOR\" name=\"liputan\"/>&nbsp;JOHOR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KELANTAN\" name=\"liputan\"/>&nbsp;KELANTAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"WILAYAHPERSEKUTUAN\" name=\"liputan\"/>&nbsp;WILAYAH PERSEKUTUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PERAK\" name=\"liputan\"/>&nbsp;PERAK&nbsp";

                    }else if ($liputan = "KEDAH"){
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"pembuatan\" name=\"liputan\"/>&nbsp;MELAKA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SABAH\" name=\"liputan\"/>&nbsp;SABAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SARAWAK\" name=\"liputan\"/>&nbsp;SARAWAK&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"LABUAN\" name=\"liputan\"/>&nbsp;LABUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KUALALUMPUR\" name=\"liputan\"/>&nbsp;KUALA LUMPUR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SELURUHMALAYSIA\" name=\"liputan\"/>&nbsp;SELURUH MALAYSIA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KEDAH\" name=\"liputan\"checked/>&nbsp;KEDAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PULAUPINANG\" name=\"liputan\"/>&nbsp;PULAU PINANG&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PUTRAJAYA\" name=\"liputan\"/>&nbsp;PUTRAJAYA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"NEGERISEMBILAN\" name=\"liputan\"/>&nbsp;NEGERI SEMBILAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"JOHOR\" name=\"liputan\"/>&nbsp;JOHOR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KELANTAN\" name=\"liputan\"/>&nbsp;KELANTAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"WILAYAHPERSEKUTUAN\" name=\"liputan\"/>&nbsp;WILAYAH PERSEKUTUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PERAK\" name=\"liputan\"/>&nbsp;PERAK&nbsp";

                    }else if ($liputan = "PULAUPINANG"){
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"pembuatan\" name=\"liputan\"/>&nbsp;MELAKA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SABAH\" name=\"liputan\"/>&nbsp;SABAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SARAWAK\" name=\"liputan\"/>&nbsp;SARAWAK&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"LABUAN\" name=\"liputan\"/>&nbsp;LABUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KUALALUMPUR\" name=\"liputan\"/>&nbsp;KUALA LUMPUR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SELURUHMALAYSIA\" name=\"liputan\"/>&nbsp;SELURUH MALAYSIA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KEDAH\" name=\"liputan\"checked/>&nbsp;KEDAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PULAUPINANG\" name=\"liputan\"checked/>&nbsp;PULAU PINANG&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PUTRAJAYA\" name=\"liputan\"/>&nbsp;PUTRAJAYA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"NEGERISEMBILAN\" name=\"liputan\"/>&nbsp;NEGERI SEMBILAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"JOHOR\" name=\"liputan\"/>&nbsp;JOHOR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KELANTAN\" name=\"liputan\"/>&nbsp;KELANTAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"WILAYAHPERSEKUTUAN\" name=\"liputan\"/>&nbsp;WILAYAH PERSEKUTUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PERAK\" name=\"liputan\"/>&nbsp;PERAK&nbsp";

                    }else if ($liputan = "PUTRAJAYA"){
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"pembuatan\" name=\"liputan\"/>&nbsp;MELAKA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SABAH\" name=\"liputan\"/>&nbsp;SABAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SARAWAK\" name=\"liputan\"/>&nbsp;SARAWAK&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"LABUAN\" name=\"liputan\"/>&nbsp;LABUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KUALALUMPUR\" name=\"liputan\"/>&nbsp;KUALA LUMPUR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SELURUHMALAYSIA\" name=\"liputan\"/>&nbsp;SELURUH MALAYSIA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KEDAH\" name=\"liputan\"checked/>&nbsp;KEDAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PULAUPINANG\" name=\"liputan\"/>&nbsp;PULAU PINANG&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PUTRAJAYA\" name=\"liputan\"checked/>&nbsp;PUTRAJAYA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"NEGERISEMBILAN\" name=\"liputan\"/>&nbsp;NEGERI SEMBILAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"JOHOR\" name=\"liputan\"/>&nbsp;JOHOR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KELANTAN\" name=\"liputan\"/>&nbsp;KELANTAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"WILAYAHPERSEKUTUAN\" name=\"liputan\"/>&nbsp;WILAYAH PERSEKUTUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PERAK\" name=\"liputan\"/>&nbsp;PERAK&nbsp";

                    }else if ($liputan = "NEGERISEMBILAN"){
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"pembuatan\" name=\"liputan\"/>&nbsp;MELAKA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SABAH\" name=\"liputan\"/>&nbsp;SABAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SARAWAK\" name=\"liputan\"/>&nbsp;SARAWAK&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"LABUAN\" name=\"liputan\"/>&nbsp;LABUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KUALALUMPUR\" name=\"liputan\"/>&nbsp;KUALA LUMPUR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SELURUHMALAYSIA\" name=\"liputan\"/>&nbsp;SELURUH MALAYSIA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KEDAH\" name=\"liputan\"checked/>&nbsp;KEDAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PULAUPINANG\" name=\"liputan\"/>&nbsp;PULAU PINANG&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PUTRAJAYA\" name=\"liputan\"checked/>&nbsp;PUTRAJAYA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"NEGERISEMBILAN\" name=\"liputan\"checked/>&nbsp;NEGERI SEMBILAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"JOHOR\" name=\"liputan\"/>&nbsp;JOHOR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KELANTAN\" name=\"liputan\"/>&nbsp;KELANTAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"WILAYAHPERSEKUTUAN\" name=\"liputan\"/>&nbsp;WILAYAH PERSEKUTUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PERAK\" name=\"liputan\"/>&nbsp;PERAK&nbsp";

                    }else if ($liputan = "JOHOR"){
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"pembuatan\" name=\"liputan\"/>&nbsp;MELAKA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SABAH\" name=\"liputan\"/>&nbsp;SABAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SARAWAK\" name=\"liputan\"/>&nbsp;SARAWAK&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"LABUAN\" name=\"liputan\"/>&nbsp;LABUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KUALALUMPUR\" name=\"liputan\"/>&nbsp;KUALA LUMPUR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SELURUHMALAYSIA\" name=\"liputan\"/>&nbsp;SELURUH MALAYSIA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KEDAH\" name=\"liputan\"checked/>&nbsp;KEDAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PULAUPINANG\" name=\"liputan\"/>&nbsp;PULAU PINANG&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PUTRAJAYA\" name=\"liputan\"checked/>&nbsp;PUTRAJAYA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"NEGERISEMBILAN\" name=\"liputan\"checked/>&nbsp;NEGERI SEMBILAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"JOHOR\" name=\"liputan\"checked/>&nbsp;JOHOR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KELANTAN\" name=\"liputan\"/>&nbsp;KELANTAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"WILAYAHPERSEKUTUAN\" name=\"liputan\"/>&nbsp;WILAYAH PERSEKUTUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PERAK\" name=\"liputan\"/>&nbsp;PERAK&nbsp";

                    }else if ($liputan = "KELANTAN"){
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"pembuatan\" name=\"liputan\"/>&nbsp;MELAKA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SABAH\" name=\"liputan\"/>&nbsp;SABAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SARAWAK\" name=\"liputan\"/>&nbsp;SARAWAK&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"LABUAN\" name=\"liputan\"/>&nbsp;LABUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KUALALUMPUR\" name=\"liputan\"/>&nbsp;KUALA LUMPUR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SELURUHMALAYSIA\" name=\"liputan\"/>&nbsp;SELURUH MALAYSIA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KEDAH\" name=\"liputan\"checked/>&nbsp;KEDAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PULAUPINANG\" name=\"liputan\"/>&nbsp;PULAU PINANG&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PUTRAJAYA\" name=\"liputan\"checked/>&nbsp;PUTRAJAYA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"NEGERISEMBILAN\" name=\"liputan\"checked/>&nbsp;NEGERI SEMBILAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"JOHOR\" name=\"liputan\"checked/>&nbsp;JOHOR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KELANTAN\" name=\"liputan\"checked/>&nbsp;KELANTAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"WILAYAHPERSEKUTUAN\" name=\"liputan\"/>&nbsp;WILAYAH PERSEKUTUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PERAK\" name=\"liputan\"/>&nbsp;PERAK&nbsp";

                    }else if ($liputan = "WILAYAHPERSEKUTUAN"){
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"pembuatan\" name=\"liputan\"/>&nbsp;MELAKA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SABAH\" name=\"liputan\"/>&nbsp;SABAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SARAWAK\" name=\"liputan\"/>&nbsp;SARAWAK&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"LABUAN\" name=\"liputan\"/>&nbsp;LABUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KUALALUMPUR\" name=\"liputan\"/>&nbsp;KUALA LUMPUR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SELURUHMALAYSIA\" name=\"liputan\"/>&nbsp;SELURUH MALAYSIA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KEDAH\" name=\"liputan\"checked/>&nbsp;KEDAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PULAUPINANG\" name=\"liputan\"/>&nbsp;PULAU PINANG&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PUTRAJAYA\" name=\"liputan\"checked/>&nbsp;PUTRAJAYA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"NEGERISEMBILAN\" name=\"liputan\"/>&nbsp;NEGERI SEMBILAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"JOHOR\" name=\"liputan\"checked/>&nbsp;JOHOR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KELANTAN\" name=\"liputan\"checked/>&nbsp;KELANTAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"WILAYAHPERSEKUTUAN\" name=\"liputan\"checked/>&nbsp;WILAYAH PERSEKUTUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PERAK\" name=\"liputan\"/>&nbsp;PERAK&nbsp";

                    }else if ($liputan = "PERAK"){
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"pembuatan\" name=\"liputan\"/>&nbsp;MELAKA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SABAH\" name=\"liputan\"/>&nbsp;SABAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SARAWAK\" name=\"liputan\"/>&nbsp;SARAWAK&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"LABUAN\" name=\"liputan\"/>&nbsp;LABUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KUALALUMPUR\" name=\"liputan\"/>&nbsp;KUALA LUMPUR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"SELURUHMALAYSIA\" name=\"liputan\"/>&nbsp;SELURUH MALAYSIA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KEDAH\" name=\"liputan\"checked/>&nbsp;KEDAH&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PULAUPINANG\" name=\"liputan\"/>&nbsp;PULAU PINANG&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PUTRAJAYA\" name=\"liputan\"checked/>&nbsp;PUTRAJAYA&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"NEGERISEMBILAN\" name=\"liputan\"/>&nbsp;NEGERI SEMBILAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"JOHOR\" name=\"liputan\"checked/>&nbsp;JOHOR&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"KELANTAN\" name=\"liputan\"checked/>&nbsp;KELANTAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"WILAYAHPERSEKUTUAN\" name=\"liputan\"checked/>&nbsp;WILAYAH PERSEKUTUAN&nbsp";
                      echo "<input type=\"checkbox\" id=\"liputan\" class=\"radio\" value=\"PERAK\" name=\"liputan\"checked/>&nbsp;PERAK&nbsp";
                    }



                ?>

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
               <br>7
               
               <div>
                <label for="radio">Status &nbsp;</label>
                <!-- <h5>Status</h5> -->
                <?php 
                        if($statuss = "Enable"){
                          echo "<input type=\"checkbox\" id=\"statuss\" class=\"radio\" value=\"Enable\" name=\"status\" checked/>&nbsp;Enable&nbsp";
                          echo "<input type=\"checkbox\" id=\"statuss\" class=\"radio\" value=\"Disable\" name=\"status\"/>&nbsp;Disable";
                        }else {
                          echo "<input type=\"checkbox\" id=\"statuss\" class=\"radio\" value=\"Enable\" name=\"status\" checked/>&nbsp;Enable&nbsp";
                          echo "<input type=\"checkbox\" id=\"statuss\" class=\"radio\" value=\"Disable\" name=\"status\" checked/>&nbsp;Disable";
                        }
                      }
                  ?>
              </div>
            <br>
            <br>
              <div class="container bg-light">
                <div class="col-md-12 text-right">
                    <button type="update" name="submit_update" value="update" class="btn btn-primary">Update</button>
                    <button type="button" name="submit value="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
  </div>
                    </form>   
            
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
      <div
        class="modal fade"
        id="logoutModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Anda Pasti Untuk Log Keluar?</h5>
              <button
                class="close"
                type="button"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              Pilih "Log Keluar" di bawah jika anda bersedia untuk menamatkan sesi semasa anda.
            </div>
            <div class="modal-footer">
              <button
                class="btn btn-secondary"
                type="button"
                data-dismiss="modal"
              >
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
      <script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"
      ></script>
  
      <!-- Datepicker -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
  
     
  <!--code for status-->
      <!-- <script>
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
      </script> -->
      <!--code for status-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <!-- uppercase for field form-->
      <script>
        function upperCaseF(a){
    setTimeout(function(){
        a.value = a.value.toUpperCase();
    }, 1);
}
      </script>
    </body>
  </html>
  