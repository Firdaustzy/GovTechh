<?php

if (isset($_GET['id'])) {
    $db = mysqli_connect("localhost", "root", "", "mygp");
    

    $id = mysqli_real_escape_string($db, $_GET['id']);

    
    $query = "DELETE FROM informationform WHERE idngp = $id";
    
    
    $result = mysqli_query($db, $query);

  
    if ($result) {
        echo "Data telah berjaya dipadam.";
    } else {
        echo "Gagal dalam memadam data. " . mysqli_error($db);
    }

    
    mysqli_close($db);
} else {
    echo "Invalid ID parameter.";
}
?>
