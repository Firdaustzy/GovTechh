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

    echo $pdf_store;

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
      echo "success";
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
  if (isset($_GET["submit_edit"])) {

    $namagarispanduan = $_GET['namagarispanduan'];
    $tarikhditerbitkan = $_GET['tarikhditerbitkan'];
    $keteranganobjektif = $_GET['keteranganobjektif'];
    $namakementerian = $_GET['namakementerian'];
    $nameagensi = $_GET['nameagensi'];
    $peringkatkerajaan = $_GET['peringkatkerajaan'];
    $lamanwebagensi = $_GET['lamanwebagensi'];
    $puncakuasa = $_GET['puncakuasa'];
    $peraturan = $_GET['peraturan'];
    $namaperlesenan = $_GET['namaperlesenan'];

    $status = $_GET['status'];
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


    $checkbox1 = $_GET['sektor'];
    $chk = "";
    foreach ($checkbox1 as $chk1) {
      $chk .= $chk1 . ",";
    }

    $checkbox2 = $_GET['liputan'];
    $chkk = "";
    foreach ($checkbox2 as $chk2) {
      $chkk .= $chk2 . ",";
    }


    $sql = "UPDATE informationform (namagarispanduan,muatnaikdokumen,tarikhditerbitkan,keteranganobjektif,namakementerian,nameagensi,peringkatkerajaan,lamanwebagensi,puncakuasa,aktaenakmenordinan,peraturan,namaperlesenan,sektor,liputan,status,created,updated)
    VALUES (UPPER('$namagarispanduan'), '$pdf','$tarikhditerbitkan','$keteranganobjektif','$namakementerian', '$nameagensi','$peringkatkerajaan',UPPER('$lamanwebagensi'), UPPER('$puncakuasa'),'$pdf1','$peraturan', '$namaperlesenan','$chk','$chkk','$status','$created','$updated')";
  }
  // $sql2 = "SELECT idngp FROM mygp ORDER BY idngp DESC LIMIT 1";



  // if ($conn->query($sql) === TRUE)

  //   $sql2 = "SELECT idngp FROM mygp ORDER BY idngp DESC LIMIT 1";
  //   $result = $conn->query($sql2);

  // if ($result->num_rows > 0) {
  // output data of each row
  //   while ($row = $result->fetch_assoc()) {
  //     $idngp = $row["idngp"];
  //   }
  // } else {
  //   echo "0 results";
  // }
  if (isset($_POST['submit_login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result7 = $conn->query($sql);

    $count = mysqli_num_rows($result7);

    if ($count == 1) {
      //output data of each row
      
      $_SESSION['login'] = $email;
      $_SESSION['logged'] = true;
      $path = $_SERVER['localhost'] . '/mygp';
      header("Location: ../dashboard/form.php");
      echo "<h1><center> Login successful </center></h1>";
    } else {
      header("Location: ../dashboard/login.php");
      // echo "<h1> Login failed. Invalid username or password.</h1>";
      echo "<div class=\"alert alert-danger\"role=\"alert\">Login Failed.<a href=\"login.php\" class=\"alert-link\"Return to login page.</a></div>";
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
      echo "<div class=\"alert alert-danger\" role=\"alert\">Email Exist! <a href=\"register.php\">Back to register page</a></div>";
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

  // if(isset($_POST['update_profile'])) {
  //   $firstname = $_POST['firstname'];
  //   $lastname = $_POST['lastname'];
  //   $phonenumber = $_POST['phonenumber'];
  //   $position = $_POST['position'];

  //   $sql= "UPDATE users SET firstname = '$firstname', lastname = '$lastname', phonenumber ='$phonenumber', position ='$$position' WHERE informationform.idngp ='$idngp'";

  // }


  if (isset($_POST['submit_email'])) {
    $email = $_POST['email'];

    // mysql_connect('localhost','root','2xs2mpc.','mygp');
    // mysql_select_db('mygp');
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