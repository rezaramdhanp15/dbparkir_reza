<?php

$conn = mysqli_connect('localhost','root','','dbparkir');

if(!$conn){
    die("Koneksi Gagal". mysqli_connect_error());
}