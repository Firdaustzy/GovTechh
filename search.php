<?php
require 'conn.php'; ?>


<?php
if (isset($_POST['search_submit'])) {
    $search_name = $_POST['search'];

    $sql = "SELECT * FROM informationform WHERE namagarispanduan LIKE '%$search_name%' OR keteranganobjektif LIKE '%$search_name%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $namagarispanduan = $row['namagarispanduan'];
            $keteranganobjektif = $row['keteranganobjektif'];
            $tarikhditerbitkan = $row['tarikhditerbitkan'];
?>
        
            <table class="table table-borderless">

                <tbody>
                    <tr>
                        <th scope="row"><a href="./uploadngp/<?php echo $row['muatnaikdokumen']; ?>"><?php echo $namagarispanduan ?></a></th>
                    </tr>
                    <tr>
                        <th scope="row"><?php echo $keteranganobjektif ?></th>
                    </tr>
                    <tr>
                        <th scope="row"><?php echo $tarikhditerbitkan ?></th>
                    </tr>
                </tbody>
            </table>


<?php
        }
    } else {
        echo "no record found";
    }
}

?>


<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-9 text-center">
            <h1 class="heading" data-aos="fade-up">
                Sumber rujukan garis panduan pelesenan perniagaan
            </h1>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                <input type="text" name="search" class="form-control" placeholder="Search data">
                <button type="submit" name="search_submit" class="btn btn-primary">Search</button>
            </form>
        </div>
    </div>
</div>
</div>