<?php
$conn = mysqli_connect("localhost", "root", "", "healthpoli");
if(!$conn){
    die("Gagal Koneksi: " . mysqli_connect_error());
}
?>