<?= include_once('conn.php') ?>
<div id="content-wrapper">

    <div class="container-fluid">
        <h2>Senarai Garis Panduan</h2>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Tarikh</th>
                            <th>Nama Kementerian/SUK Negeri</th>
                            <th>Nama Agensi</th>
                            <th>Peringkat Kerajaan</th>
                            <th>Sektor</th>
                            <th>Liputan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db = mysqli_connect("localhost", "root", "", "mygp");
                        $query = "SELECT * FROM informationform";
                        $result = mysqli_query($db, $query) or die(mysqli_error($db));

                        while ($row = mysqli_fetch_assoc($result)) {

                            echo '<tr>';
                            echo '<td>' . $row['namagarispanduan'] . '</td>';
                            echo '<td>' . $row['tarikhditerbitkan'] . '</td>';
                            echo '<td>' . $row['namakementerian'] . '</td>';
                            echo '<td>' . $row['nameagensi'] . '</td>';
                            echo '<td>' . $row['peringkatkerajaan'] . '</td>';
                            echo '<td>' . $row['sektor'] . '</td>';
                            echo '<td>' . $row['liputan'] . '</td>';
                            echo " ";
                            echo '<td><a type="button" class="btn btn-sm btn-warning fa fa-edit fw-fa" ' . $row['id'] . '">Edit</a>';
                            // echo '<td><a type="button" class="btn btn-sm btn-warning fa fa-edit fw-fa" href="#" data-toggle="modal" data-target="#UpdateEmployee' . $row['emp_id'] . '">Edit</a>';
                        }
                        ?>
                        <!-- <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td>sxcsf</td>
                            <td> <button class="btn"><i class="fa fa-home"> <a class="nav-link" href="tables.php"></i></button></i></td>
                        </tr> -->
                    </tbody>