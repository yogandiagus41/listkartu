<?php

include("koneksi.php");


if(isset($_POST['submit'])){

    $id = date ('idmhys');
    $waktu = date ('d/m/y i:s:h');
    

    $noLaporan = $id;
    $waktuLaporan = $waktu;
    $jenisGangguan = $_POST['jenisGangguan'];
    $subjenisGangguan = $_POST['subjenisGangguan'];
    $petugas = 'Eko';
    $permasalahan = 'Testing content';
    $status = 'Wo Baru';
  
    $sql = "INSERT INTO listkartu VALUES('$noLaporan','$waktuLaporan', '$jenisGangguan', '$subjenisGangguan', '$petugas', '$permasalahan', '$status')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
     
        header('Location: index.php');
    } else {
    
        header('Location: login.php');
    }
} else {
    die("Akses dilarang...");
}

?>