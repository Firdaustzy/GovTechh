<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EMAIL ALREADY EXIST!</title>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
  <?php

  require('conn.php');
  session_start();

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;


  if (isset($_POST["submit_test"])) {

    $namagarispanduan = $_POST['namagarispanduan'];
    $tarikhditerbitkan = $_POST['tarikhditerbitkan'];
    $keteranganobjektif = $_POST['keteranganobjektif'];
    $namakementerian = $_POST['namakementerian'];
    $nameagensi = $_POST['nameagensi'];
    $peringkatkerajaan = $_POST['peringkatkerajaan'];
    $lamanwebagensi = $_POST['lamanwebagensi'];
    $puncakuasa = $_POST['puncakuasa'];
    $peraturan = $_POST['peraturan'];
    $namaperlesenan = $_POST['namaperlesenan'];

    $status = $_POST['status'];
    $created = date(DATE_RFC3339);
    $updated = date(DATE_RFC3339);

    //muatnaik fail yang pertama: muat naik dokumen
    $pdf = $_FILES['muatnaikdokumen']['name'];
    $pdf_type = $_FILES['muatnaikdokumen']['type'];
    $pdf_size = $_FILES['muatnaikdokumen']['size'];
    $pdf_tem_loc = $_FILES['muatnaikdokumen']['tmp_name'];
    $pdf_store = "uploadngp/" . $pdf;


    move_uploaded_file($pdf_tem_loc, $pdf_store);

    //muatnaik fail yang kedua: muat naik aktaenakmenordinan
    $pdf1 = $_FILES['aktaenakmenordinan']['name'];
    $pdf_type = $_FILES['aktaenakmenordinan']['type'];
    $pdf_size = $_FILES['aktaenakmenordinan']['size'];
    $pdf_tem_loc = $_FILES['aktaenakmenordinan']['tmp_name'];
    $pdf_store = "uploadakta/" . $pdf1;

    move_uploaded_file($pdf_tem_loc, $pdf_store);


    $checkbox1 = $_POST['sektor'];
    $chk = "";
    foreach ($checkbox1 as $chk1) {
      $chk .= $chk1 . ",";
    }

    $checkbox2 = $_POST['liputan'];
    $chkk = "";
    foreach ($checkbox2 as $chk2) {
      $chkk .= $chk2 . ",";
    }

    $sql = "INSERT INTO informationform (namagarispanduan,muatnaikdokumen,tarikhditerbitkan,keteranganobjektif,namakementerian,nameagensi,peringkatkerajaan,lamanwebagensi,puncakuasa,aktaenakmenordinan,peraturan,namaperlesenan,sektor,liputan,status,created,updated)
          VALUES (UPPER('$namagarispanduan'), '$pdf','$tarikhditerbitkan','$keteranganobjektif','$namakementerian', '$nameagensi','$peringkatkerajaan',UPPER('$lamanwebagensi'), UPPER('$puncakuasa'),'$pdf1','$peraturan', '$namaperlesenan','$chk','$chkk','$status','$created','$updated')";

    // $in_ch=mysqli_query($conn,"insert into informationform(sektor) values ('$chk')");  
    //$query = mysqli_query($conn, $sql);

    if ($conn->query($sql) == TRUE) {
      // echo "success";
      echo "<div class=\"alert alert-success\"role=\"alert\">Data Successfully insert.<a href=\"tables.php\" class=\"alert-link\">Return to tables page to see the data.</a></div>";

    } else {
      echo "Error " . $sql . "<br>" . $conn->error;
    }

    $sql3 = "SELECT idngp FROM informationform ORDER BY idngp DESC LIMIT 1";
    $result = $conn->query($sql3);

    if ($result->num_rows > 0) {
      //output data of each row
      while ($row = $result->fetch_assoc()) {
        $idngp = $row["idngp"];
        // $pid=$row["pid"];
      }
    } else {
      echo "0 results";
    }
  }

  if (isset($_POST['submit_update'])) {

    $id = $_POST['userId'];
    $namagarispanduan = $_POST['namagarispanduan'];
    $tarikhditerbitkan = $_POST['tarikhditerbitkan'];
    $keteranganobjektif = $_POST['keteranganobjektif'];
    $namakementerian = $_POST['namakementerian'];
    $nameagensi = $_POST['nameagensi'];
    $peringkatkerajaan = $_POST['peringkatkerajaan'];
    $lamanwebagensi = $_POST['lamanwebagensi'];
    $puncakuasa = $_POST['puncakuasa'];
    $peraturan = $_POST['peraturan'];
    $namaperlesenan = $_POST['namaperlesenan'];
    $sektor= $_POST['sektor'];
    $liputan = $_POST['liputan'];
    $status = $_POST['status'];

    if (isset($_FILES['muatnaikdokumen']['name'])) {
      $file_name = $_FILES['muatnaikdokumen']['name'];
      $file_tmp = $_FILES['muatnaikdokumen']['tmp_name'];
      move_uploaded_file($file_tmp, "./uploadngp/" . $file_name);
      echo $file_name;
    }

    if (isset($_FILES['aktaenakmenordinan']['name'])) {
      $aktaenakmenordinan_name = $_FILES['aktaenakmenordinan']['name'];
      $aktaenakmenordinan_tmp = $_FILES['aktaenakmenordinan']['tmp_name'];
      move_uploaded_file($aktaenakmenordinan_tmp, "./uploadakta/" . $aktaenakmenordinan_name);

      echo $aktaenakmenordinan_name;
    }

    $sql2 = "UPDATE informationform
             SET namagarispanduan = '$namagarispanduan', muatnaikdokumen = '$file_name', tarikhditerbitkan = '$tarikhditerbitkan', keteranganobjektif = '$keteranganobjektif', namakementerian = '$namakementerian', nameagensi = '$nameagensi', peringkatkerajaan = '$peringkatkerajaan', lamanwebagensi = '$lamanwebagensi', puncakuasa = '$puncakuasa', aktaenakmenordinan = '$aktaenakmenordinan_name', peraturan = '$peraturan',namaperlesenan = '$namaperlesenan ', sektor = '$sektor', liputan ='$liputan', status = '$status' 
             WHERE idngp = $id ";

    $query_run = mysqli_query($conn, $sql2);
    if ($query_run == TRUE) {
      echo "Data has updated succesfully";
      $conn->close();
  } else {
      echo "Data failed to update";
  }
  }


  if (isset($_POST['submit_login'])) {
    $email = $_POST['email'];
    
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result7 = $conn->query($sql);

    $count = mysqli_num_rows($result7);

    if ($count == TRUE) {
      //output data of each row

      $_SESSION['login'] = $email;
      $_SESSION['logged'] = true;
      $path = $_SERVER['localhost'] . '/mygp6';
      header("Location: ../dashboard/form.php");
      echo "<h1><center> Login successful </center></h1>";
    } else {
      header("Location: ../dashboard/login.php");
      // echo "<h1> Login failed. Invalid username or password.</h1>";
      echo "<div class=\"alert alert-danger\"role=\"alert\">Login Failed.<a href=\"login.php\" class=\"alert-link\"Return to login page.</a></div>";
    }
  } else {
  }

  if (isset($_POST['submit_password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql11 = "UPDATE users SET password = '$password' where email = '$email'";
    $result8 = $conn->query($sql11);

    if ($result8 == TRUE) {
      echo "<div class=\"alert alert-success\" role=\"alert\">Password Successfully Update! <a href=\"form.php\">Back to main page</a></div>";
    } else {
      echo "Error updating password" . $sql11 . "<br>" . $conn->error;
    }
  } else {
  }

  if (isset($_POST['submit_register'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $position = $_POST['position'];
    $password = $_POST['password'];
    // $repeatpassword = $_POST['repeatpassword'];

    $sql1 = "SELECT email FROM users WHERE email = '$email'";
    $result1 = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_array($result1, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result1);

    if ($count > 0) {
      echo "<div class=\"alert alert-success\" role=\"alert\">Email Exist! <a href=\"register.php\">Back to register page</a></div>";
    } else {
      $sql = "INSERT INTO users (firstname,lastname,email,phonenumber,position,password) values ('$firstname','$lastname','$email','$phonenumber','$position','$password')";
      $result = mysqli_query($conn, $sql);

      if ($conn->query($sql) == TRUE) {
        header("Location: ../dashboard/login.php");
        echo "<h1><center> Login successful </center></h1>";
      } else {
        echo "Error " . $sql . "<br>" . $conn->error;
      }
    }
  } else {
  }

  if (isset($_POST['update_profile'])) {
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $position = $_POST['position'];

    $sql7 = "UPDATE users SET firstname = '$firstname', lastname = '$lastname', phonenumber ='$phonenumber', position ='$position' WHERE email ='$email'";
    $result10 = $conn->query($sql7);

    if ($result10 == TRUE) {

      echo "<div class=\"alert alert-success\" role=\"alert\">Update Successfully! <a href=\"form.php\">Back to main page</a></div>";
    } else {
      echo "Error " . $sql7 . "<br>" . $conn->error;
    }
  } else {
  }


  if (isset($_POST['submit_email'])) {
    $email = $_POST['email'];
    $select = "SELECT * FROM users where email = '$email'";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {

      $newpassword = uniqid();

      $select1 = "UPDATE users SET password = '$newpassword' WHERE email='$email'";
      $result1 = $conn->query($select1);

      if ($result) {
        foreach ($result as $row) {
          $firstname = $row['firstname'];
          $lastname = $row['lastname'];


          require_once "vendor/autoload.php";

          $mail = new PHPMailer(true);

          //Enable SMTP debugging.
          $mail->SMTPDebug = false;

          //Set PHPMailer to use SMTP.
          $mail->isSMTP();

          //Set SMTP host name                          
          $mail->Host = "smtp.office365.com";

          //Set this to true if SMTP host requires authentication to send email
          $mail->SMTPAuth = true;

          //Provide username and password    

          $mail->Username = "webmaster@mpc.gov.my";
          $mail->Password = "mpc365*18";

          //If SMTP requires TLS encryption then set it

          $mail->SMTPSecure = "tls";

          //Set TCP port to connect to

          $mail->Port = 587;

          $mail->From = "webmaster@mpc.gov.my";
          $mail->FromName = "WebMaster";

          $mail->addAddress("fatihah@mpc.gov.my", "Nur Fatihah");
          $mail->isHTML(true);

          $mail->Subject = "Reset Password";
          $mail->Body = "Hi $firstname $lastname,
 
<br><br>

Ini ialah password baru anda : $newpassword;

<br><br>

Terima Kasih.";

          $mail->AltBody = "This is a plain-text message body";

          try {

            $mail->send();

            echo "<div class=\"alert alert-success\" role=\"alert\">Yeah successfully create your new password.</div>";
          } catch (Exception $e) {

            echo "Mailer Error: " . $mail->ErrorInfo;
          }
        }
      }

      // $password = md5($row['password']);
    } else {
      echo "error";
    }
  }

  ?>
</body>

</html>