<?php 
  include '../koneksi.php';
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOTEL RAINBOW</title>
  <link rel="icon" type="image/png" href="../assets/gambar/icon.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>
<div class="wrapper">
  <body class="text-center">
    <h3>HOTEL RAINBOW | CETAK PRINT DATA</h3>
    <div class="card-body">
      
      <div class="form-group">
        <table class="table table-bordered">
          <thead>      
            <tr>
              <th>Nama</th>
              <th>Tanggal Check In</th>
              <th>Tanggal Check Out</th>
              <th>Jumlah Kamar</th>
              <th>Tipe Kamar</th>
              <th>harga</th>
              <th>total</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
          <?php
                    include '../koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "select * from pesanan");
                    while($d = mysqli_fetch_array($data)){
                      ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['tanggal_reservasi']; ?></td>
                        <td><?php echo $d['tanggal_check_in']; ?></td>
                        <td><?php echo $d['tanggal_check_out']; ?></td>
                        <td><?php echo $d['id_tamu']; ?></td>
                        <td><?php echo $d['nama_tamu']; ?></td>
                        <td><?php echo $d['email']; ?></td>
                        <td><?php echo $d['handphone']; ?></td>
                        <td><?php echo $d['tipe_kamar']; ?></td>
                        <td><?php echo $d['jumlah_kamar']; ?></td> 
              <td>
                <?php
                if ($d['status'] == 1) { ?>
                  <span class="badge bg-warning">Belum di Konfirmasi</span>
                <?php } else { ?>
                  <span class="badge bg-success">Sudah di Konfirmasi</span>
                <?php } ?>
              </td>
            </tr>
            <?php 
              } 
            ?>
          </tbody>
        </table>
        
      </div>
    </div>
</div>

  <script>
		window.print();
	</script>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
</body>
</html>