<?php

$id_kendaraan = $_POST['id_kendaraan'];
$no_plat = $_POST['no_plat'];
$id_parkir = $_POST['id_parkir'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO 
kendaraan VALUES('$id_kendaraan','$no_plat','$id_parkir','$jenis_kendaraan')");

if($query){
    echo "<script>alert('Tambah berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
   echo "<script>alert('Tambah gagal')</script>";
   echo "<script>window.location.href='tambah.php'</script>";
}