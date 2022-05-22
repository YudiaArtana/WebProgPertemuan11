<?php
    include_once("konfigurasi.php");
    $con = mysqli_connect(DBHOST, DBUSER, DBPASCODE, DBNAME, DBPORT) or die("koneksi ke DBMS MySQL gagal");
    // echo "Koneksi Berhasil";
    // $sql = "SELECT * FROM mhs";
    // $hasil = mysqli_query($con, $sql);
    // while($output = mysqli_fetch_array($hasil)){
    //     echo json_encode($output);
    // }
    
