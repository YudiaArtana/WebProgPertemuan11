<?php
    include_once("koneksi.php");
    $sql = "SELECT * FROM mhs";
    $hasil = mysqli_query($con, $sql);

    $row = mysqli_fetch_all($hasil);
    echo json_encode($row);
