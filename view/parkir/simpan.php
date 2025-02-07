<?php

$id_parkir = $_POST['id_parkir'];
$tanggal_parkir = $_POST['tanggal_parkir'];
$harga_parkir = $_POST['harga_parkir'];
$alamat_parkir = $_POST['alamat_parkir'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "INSERT INTO 
parkir VALUES('$id_parkir','$tanggal_parkir','$harga_parkir','$alamat_parkir')");

if($query){
    echo "<script>alert('Tambah berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else{
   echo "<script>alert('Tambah gagal')</script>";
   echo "<script>window.location.href='tambah.php'</script>";
}