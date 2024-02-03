<?php
require('conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  if (isset($_POST["submit_msg"])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $perkara = $_POST['perkara'];
    $mesej = $_POST['mesej'];

    $sql = "INSERT INTO message (nama,email,perkara,mesej,created)
        VALUES (UPPER('$nama'),'$email',(UPPER('$perkara'),(UPPER($mesej)),'$created')";


    if ($conn->query($sql) == TRUE) {
      echo "<div class=\"alert alert-success\" role=\"alert\">Message successfully sent! <a href=\"index.php\">Back to main page</a></div>";
    } else {
      echo "Error " . $sql . "<br>" . $conn->error;
    }
  }

  if (isset($_POST['submit_jabatan'])) {
    $kementerian = $_POST['namakementerian'];
    $agensi = $_POST['namaagensi'];

    $jabatan = $_POST['search_jabatan'];
    if ($jabatan == "kementerian") {

      // $sql = "SELECT namakementerian FROM informationform";
      $sql2 = "SELECT * FROM informationform WHERE namakementerian = '$namakementerian'";
      $result = $conn->query($sql2);
      if ($result) {
        foreach ($result as $row) {
          echo $row['namakementerian'] . '<br>';
        }
      }
    } else if ($jabatan == "agensi") {

      // $sql1 = "SELECT namaagensi FROM informationform";
      $sql3 = "SELECT * FROM informationform WHERE namaagensi = '$namaagensi'";
      $result = $conn->query($sql3);
      if ($result) {
        foreach ($result as $row) {

          echo $row['namaagensi'] . '<br>';
        }
      }
    } else {

      echo "Not Found";
    }
  }

  // if(isset($_POST['jabatan'])){
  //   echo $_POST['jabatan'];
  // }
  ?>
</body>

</html>