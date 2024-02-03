<?php 
require ('conn.php');
if (isset($_POST['submit_msg'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $perkara= $_POST['perkara'];
    $mesej = $_POST['mesej'];

    // $repeatpassword = $_POST['repeatpassword'];

    $sql1 = "INSERT INTO message (nama,email,perkara,mesej) VALUES ('$nama','$email','$perkara','$mesej')";
    // $result7 = mysqli_query($conn, $sql1);
    // $row = mysqli_fetch_array($result7, MYSQLI_ASSOC);
    // $count = mysqli_num_rows($result7);

    if ($conn->query($sql1) == TRUE) {
      echo "success";
    } else {
      echo "Error " . $sql1 . "<br>" . $conn->error;
    }

    }
?>