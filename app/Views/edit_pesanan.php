<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Pesanan</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="formPemesanan.css">

  <!-- Import Font Montserrat dan Lato-->
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
      <?php include "formPemesanan.css" ?>
      
  </style>
</head>
<body>

<div class="container">
  <div class="order_box">
    <form class = "box" action="<?php echo site_url('Jamesulos/update'); ?>" method="POST">
    <img src="https://i.ibb.co/SJQx4hG/logo.png">
      <h1>Edit Pesanan</h1>
        <div class="form-group">
          <label for="nama_pembeli">Nama :</label>
          <input type="text" value="<?= $pemesanan->nama_pembeli;?>" class="form-control" id="nama_pembeli" placeholder="Masukkan Nama Anda" name="nama_pembeli" required>
        </div>
        <div class="form-group">
          <label for="alamat">Alamat :</label>
          <input type="text" value="<?= $pemesanan->alamat;?>" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" name="alamat" required>
        </div>
        <div class="form-group">
          <label for="email">Email :</label>
          <input type="text" value="<?= $pemesanan->email;?>" class="form-control" id="email" placeholder="Masukkan Email Anda" name="email" required>
        </div>
        <div class="form-group">
          <label for="no_hp">Nomor HP :</label>
          <input type="text" value="<?= $pemesanan->no_hp;?>" class="form-control" id="no_hp" placeholder="Masukkan Nomor HP Anda" name="no_hp" required>
        </div>
        <div class="form-group">
          <label for="jumlah_pesanan">Jumlah Barang :</label>
          <input type="text" value="<?= $pemesanan->jumlah_pesanan;?>" class="form-control" id="jumlah_pesanan" placeholder="Masukkan Jumlah Barang" name="jumlah_pesanan" required>
        </div>
        <div class="form-group">
          <label for="kode_pos">Kode Pos :</label>
          <input type="text" value="<?= $pemesanan->kode_pos;?>" class="form-control" id="kode_pos" placeholder="Masukkan Kode Pos Anda" name="kode_pos" required>
        </div>
        <div class="form-group">
          <label for="keterangan">Keterangan :</label>
          <textarea value="<?= $pemesanan->keterangan;?>" class="form-control keterangan" id="keterangan" rows="5" name="keterangan"></textarea>
        </div>
        <input type="text" name="id_pemesanan" autofocus value="<?= $pemesanan->id_pemesanan; ?>" style="visibility:hidden">
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
  </div>  
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>