<?php  
//tambahkan koneksi
include '../koneksi.php';

//ambil data dari form edit
$id_reservasi = $_POST['id_reservasi'];
$status = $_POST['status'];

//update data ke tabel databases
mysqli_query($koneksi, "update pesanan set id_reservasi='$id_reservasi', status='$status' where id_reservasi='$id_reservasi'");

//mengalihkan ke halaman index setelah berhail mengupdate
header("location:pesanan.php");
?>