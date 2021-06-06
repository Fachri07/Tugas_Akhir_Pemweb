<!DOCTYPE html>
<html lang="en">
<head>
<title>Pesanan Anda</title>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="views/pesanan.css">
  
    <!-- Import Font Montserrat dan Lato-->
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
      <?php include "pesanan.css" ?>
    </style>
</head>
<body>
<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Detail pemesanan</h2></div>                    
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>No. Hp</th>
                        <th>Jumlah pesanan</th>
                        <th>Kode pos</th>
                        <th>Keterangan</th>
                        <th>action</th>                    
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $no=1; foreach($getOrder as $data_order){?>  <!--Ini gak tau kenapa salah-->                                  
                    <tr>
                        <td><?php echo $data_order['nama_pembeli'];?></td>
                        <td><?php echo $data_order['alamat'];?></td>
                        <td><?php echo $data_order['email'];?></td>
                        <td><?php echo $data_order['no_hp'];?></td>
                        <td><?php echo $data_order['jumlah_pesanan'];?></td>
                        <td><?php echo $data_order['kode_pos'];?></td>
                        <td><?php echo $data_order['keterangan'];?></td>    
                        <td>
                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                            <a class="edit" title="Edit" data-toggle="tooltip" href="<?= base_url('Jamesulos/edit/'.$data_order['id_pemesanan']);?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg></a>
                            <a class="delete" title="Delete" data-toggle="tooltip" href="<?= base_url('Jamesulos/delete/'.$data_order['id_pemesanan']);?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></a>
                        </td>                    
                    </tr>   
                    <?php $no++;}?>                       
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <button class="btn btn-info">
        <a style="text-decoration:none;color:white" href="<?php echo site_url('Jamesulos/home'); ?>">Kembali ke menu utama</a>      
    </button>
</div>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>     
</body>
</html>