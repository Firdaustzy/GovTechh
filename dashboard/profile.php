<?php 

require('conn.php'); 

session_start();

if ($_SESSION['logged'] == true) {
    $email = $_SESSION['login'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if($result){
        foreach ($result as $row){
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MyGP - Profile</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/form.css" />

    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>

    <style type="text/css">
        .form-style-6 {
            width: 450px;
            padding: 30px;
            margin: 40px auto;
            background: #FFF;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
            -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
            -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
        }

        .form-style-6 .inner-wrap {
            padding: 30px;
            background: #F8F8F8;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        .form-style-4 h1 {
            background: #2A88AD;
            padding: 20px 30px 15px 30px;
            margin: -30px -30px 30px -30px;
            border-radius: 10px 10px 0 0;
            -webkit-border-radius: 10px 10px 0 0;
            -moz-border-radius: 10px 10px 0 0;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
            font: normal 30px 'Bitter', serif;
            -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            border: 1px solid #257C9E;
        }

        .form-style-6 h1>span {
            display: block;
            margin-top: 2px;
            font: 13px Arial, Helvetica, sans-serif;
        }

        .form-style-6 label {
            display: block;
            font: 13px Arial, Helvetica, sans-serif;
            color: #888;
            margin-bottom: 15px;
        }

        .form-style-6 input[type="text"],
        .form-style-6 input[type="date"],
        .form-style-6 input[type="datetime"],
        .form-style-6 input[type="email"],
        .form-style-6 input[type="number"],
        .form-style-6 input[type="search"],
        .form-style-6 input[type="time"],
        .form-style-6 input[type="url"],
        .form-style-6 input[type="password"],
        .form-style-6 textarea,
        .form-style-6 select {
            display: block;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            width: 100%;
            padding: 8px;
            border-radius: 6px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border: 2px solid #fff;
            box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
            -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
            -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
        }

        .form-style-6 .section {
            font: normal 20px 'Bitter', serif;
            color: #2A88AD;
            margin-bottom: 5px;
        }

        .form-style-6 .section span {
            background: #2A88AD;
            padding: 5px 10px 5px 10px;
            position: absolute;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border: 4px solid #fff;
            font-size: 14px;
            margin-left: -45px;
            color: #fff;
            margin-top: -3px;
        }

        .form-style-6 input[type="button"],
        .form-style-6 input[type="submit"] {
            background: #2A88AD;
            padding: 8px 20px 8px 20px;
            border-radius: 5px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            color: #fff;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
            font: normal 30px 'Bitter', serif;
            -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
            border: 1px solid #257C9E;
            font-size: 15px;
        }

        .form-style-6 input[type="button"]:hover,
        .form-style-6 input[type="submit"]:hover {
            background: #2A6881;
            -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
            -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
            box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
        }

        .form-style-6 .privacy-policy {
            float: right;
            width: 250px;
            font: 12px Arial, Helvetica, sans-serif;
            color: #4D4D4D;
            margin-top: 10px;
            text-align: right;
        }
    </style>

</head>

<body>


    <div class="form-style-6">
        <form method="POST" action="forminsert.php">
            <a>
                <center><img class="img-profile rounded-circle" src="img/undraw_profile.svg" width="300" height="250"></center>
            </a>
            <h2>Profile</h2>
            <input type="hidden" name="email" value="<?php echo $row["email"]; ?>">
            <label>First Name</label>
            <input type="text" name="firstname" value="<?php echo $row["firstname"]; ?>" class="input-xlarge">
            <label>Last Name</label>
            <input type="text" name="lastname" value="<?php echo $row["lastname"]; ?>" class="input-xlarge">
            <label>Phone Number</label>
            <input type="text" name="phonenumber" value="<?php echo $row["phonenumber"]; ?>" class="input-xlarge">
            <label>Position</label>
            <input type="text" name="position" value="<?php echo $row["position"]; ?>" class="input-xlarge">
            <br>
            <div>
                <button name="update_profile" class="btn btn-primary">Update</button>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <button type="button" class="btn btn-secondary"><a href="form.php">Back</a></button>
            </div>
        </form>
    
        <?php 
                        }
                    }
                }
        ?>

    </div>
    </div>
</body>

</html>