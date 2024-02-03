
<?php

require('conn.php');

if(isset($_POST["submit_test"])) {
// if (isset($_POST['submit_test'])) {
  $namagarispanduan = $_POST['namagarispanduan'];
  $muatnaikdokumen = $_POST['muatnaikdokumen'];
  $tarikhDiterbitkan = $_POST['tarikhDiterbitkan'];
  $keteranganobjektif = $_POST['keteranganobjektif'];
  $namakementerian = $_POST['namakementerian'];
  $nameagensi = $_POST['nameagensi'];
  $peringkatkerajaan = $_POST['peringkatkerajaan '];
  $lamanwebagensi = $_POST['lamanwebagensi'];
  $puncakuasa = $_POST['puncakuasa'];
  $peraturan = $_POST['peraturan'];
  $namaperlesenan = $_POST['namaperlesenan'];
  $status = $_POST['status'];
  $created = $_POST['created'];
  $updated = $_POST['updated'];
  
  $pdf = $_FILES['muatnaikdokumen']['name'];
  $pdf_type = $_FILES['pdf']['type'];
  $pdf_size = $_FILES['pdf']['size'];
  $pdf_tem_loc = $_FILES['pdf']['tmp_name'];
  $pdf_store = "uploadngp/" . $pdf;

  move_uploaded_file($pdf_tem_loc, $pdf_store);

  $pdf1 = $_FILES['aktaenakmenordinan']['name'];
  $pdf_type = $_FILES['pdf']['type'];
  $pdf_size = $_FILES['pdf']['size'];
  $pdf_tem_loc = $_FILES['pdf']['tmp_name'];
  $pdf_store = "uploadakta/" . $pdf1;

  move_uploaded_file($pdf_tem_loc, $pdf_store);

  
  $sql = "INSERT INTO informationform (namagarispanduan,muatnaikdokumen,tarikhDiterbitkan,keteranganobjektif,namakementerian,nameagensi,peringkatkerajaan,lamanwebagensi,puncakuasa,aktaenakmenordinan,peraturan,namaperlesenan,status, created,updated)
          VALUES (UPPER('$namagarispanduann'), '$pdf', '$keteranganobjektif','$tarikhDiterbitkan','$keteranganobjektif','$namakementerian', '$nameagensi','$peringkatkerajaan',UPPER('$lamanwebagensi'), UPPER('$puncakuasa'),'$pdf1','$peraturan', '$namaperlesenan','$status',date('Y-m-d'))";
   $query = mysqli_query($conn, $sql);
}

 


if (isset($_POST['submit'])) {
  $pdf = $_FILES['muatnaikdokumen']['name'];
  $pdf_type = $_FILES['pdf']['type'];
  $pdf_size = $_FILES['pdf']['size'];
  $pdf_tem_loc = $_FILES['pdf']['tmp_name'];
  $pdf_store = "uploadngp/" . $pdf;

  move_uploaded_file($pdf_tem_loc, $pdf_store);

  $sql = "INSERT INTO informationform(muatnaikdokumen) values('$pdf')";
  $query = mysqli_query($conn, $sql);
}
if (isset($_POST['submit'])) {
  $pdf1 = $_FILES['aktaenakmenordinan']['name'];
  $pdf_type = $_FILES['pdf']['type'];
  $pdf_size = $_FILES['pdf']['size'];
  $pdf_tem_loc = $_FILES['pdf']['tmp_name'];
  $pdf_store = "uploadakta/" . $pdf1;

  move_uploaded_file($pdf_tem_loc, $pdf_store);

  $sql = "INSERT INTO informationform(aktaenakmenordinan) values('$pdf1')";
  $query = mysqli_query($conn, $sql);
}


$sql = "INSERT INTO informationform (namagarispanduan,muatnaikdokumen,tarikhDiterbitkan,keteranganobjektif,namakementerian,nameagensi,peringkatkerajaan,lamanwebagensi,puncakuasa,aktaenakmenordinan,peraturan,namaperlesenan,status, created,updated)
VALUES (UPPER('$namagarispanduann'), '$pdf', '$keteranganobjektif','$tarikhDiterbitkan','$keteranganobjektif','$namakementerian', '$nameagensi','$peringkatkerajaan',UPPER('$lamanwebagensi'), UPPER('$puncakuasa'),'$pdf1','$peraturan', '$namaperlesenan','$status',date('Y-m-d'))";

$sql2 = "SELECT idngp FROM mygp ORDER BY idngp DESC LIMIT 1";



if ($conn->query($sql) === TRUE)

  $sql2 = "SELECT idngp FROM mygp ORDER BY idngp DESC LIMIT 1";
  $result = $conn->query($sql2);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $idngp = $row["idngp"];
  }
} else {
  echo "0 results";
}


if (isset($_POST['submit'])) {

  $uploadngp = $_POST['uploadngp'];
}


foreach ($uploadngp  as $item) {
  // echo $item . "<br>";
  $query = "INSERT INTO uploadngp  (muatnaikdokumen, idngp) VALUES ('$item','$idngp')";
  $query_run = mysqli_query($conn, $query);
}


$uploadakta = $_POST['uploadakta'];

foreach ($uploadakta as $items) {
  // echo $item . "<br>";
  $query2 = "INSERT INTO uploadakta (aktaenakmenordinan, idngp) VALUES ('$items', '$idngp')";
  $query_run = mysqli_query($conn, $query2);
}

?>
