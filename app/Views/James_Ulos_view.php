<!doctype html>
<html lang="en" id="#">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="views/James_Ulos.css">
  
    <!-- Import Font Montserrat dan Lato-->
    <style type="text/css">
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
      <?php include "James_Ulos.css" ?>
    </style>
    
    <!-- Nama Web -->
    <title>James Ulos</title>
  </head>
  <body>
       
    <!--Navbar dan Search-->
    <nav class="navbar navbar-light bg-light justify-content-between">
      <a href="#" class="navbar-brand scroll">
        <img src="https://i.ibb.co/SJQx4hG/logo.png" width="220" height="85" alt="Logo James Ulos">
      </a>
      <button class="btn btn-info">
        <a style="text-decoration:none;color:white" href="<?php echo site_url('Jamesulos/view_order'); ?>">Pesanan Anda</a>      
      </button>                     
    </nav>

    <!--Menu-->    
    <div class="menu text-center">
      <ul>        
        <li><a href="#ulos"><button class="btn btn-outline-danger">Daftar Ulos</button></a></li>
        <li><a href="#sarung"><button class="btn btn-outline-danger">Sarung Tenun</button></a></li>
        <li><a href="#bahan"><button class="btn btn-outline-danger">Bahan Baku</button></a></li>
        <li><a href="#footer"><button class="btn btn-outline-danger">Contact Person</button></a></li>  
     </ul> 
    </div>

    <!--Carousel-->  
    <div id="carouselControls" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselIndicators" data-slide-to="1"></li>
        <li data-target="#carouselIndicators" data-slide-to="2"></li>
      </ol>      
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://i.ibb.co/3SqP2BR/car1.png" alt="James Ulos">
          <div class="carousel-caption d-none d-md-block">
            <h1>SELAMAT DATANG DI JAMES ULOS</h1>
            <h5>Website resmi UKM UD. JAMES SIMBOLON</h5>
            <h6>Kota Pematangsiantar, Sumatera Utara</h6>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://i.ibb.co/hHTSpNL/car2.png" alt="James Ulos">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://i.ibb.co/J2sLvJR/car3.png" alt="James Ulos">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!--Komoditas-->
    <section class="komoditas">
      <div class="container-fluid text-center">        
        <div class="row">
          <div class="col-xl-12">
            <h2>Barang yang Dijual</h2>
          </div>
        </div>        
        <div class="row">
          <div class="col-xl-4">
            <img src="https://i.ibb.co/Jk9xZL2/tb7.png" class="img-thumbnail" title="Ulos" alt="Ulos">
            <h3>Ulos</h3>
            <p>Menjual berbagai jenis ulos, kain khas kebanggaan Suku Batak, untuk acara-acara adat seperti pernikahan, pemakaman, festival budaya, dan lain-lain. Siap menyediakan berbagai jenis ulos untuk acara besar</p>
          </div>          
          <div class="col-xl-4">
            <img src="https://i.ibb.co/84PfC65/tb8.jpg" class="img-thumbnail" title="Sarung tenun" alt="Sarung tenun">
            <h3>Sarung tenun</h3>  
            <p>Menjual berbagai sarung tenun asli dari berbagai daerah seperti Tarutung, Tapanuli, Balige, dan daerah lainnya</p> 
          </div>
          <div class="col-xl-4">
            <img src="https://i.ibb.co/jWSyh6z/tb3.png" class="img-thumbnail" title="Bahan baku tekstil" alt="Bahan baku tekstil">
            <h3>Bahan baku tekstil</h3> 
            <p>Menjual berbagai bahan baku tekstil seperti kain, benang tenun, benang jahit, wol, dan lain-lain</p>           
          </div>        
        </div> 
      </div>
    </section> 

    <!--Daftar Ulos-->
    <section class="ulos" id="ulos">
      <div class="container-fluid text-center">
        <div class="row">                  
        <div class="gallery col-xl-12">
          <h3>Daftar Ulos</h3>      
          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#daftar_ulos">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="30" fill="currentColor" class="bi bi-grid-3x2-gap-fill" viewBox="0 0 20 16">
  <path d="M1 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V4zM1 9a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V9zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V9z"/>
            </svg>
          </button>
        </div>  
        <div id="daftar_ulos" class="collapse in">
          <div class="container-fluid text-center">
            <div class="card">
              <img src="https://i.ibb.co/dMN5RLs/ulos1.webp" class="card-img-top" alt="Kemeja Adj">
              <div class="card-body">
                <h5 class="card-title">Ulos Ragi Hotang</h5>
                <p class="card-text">Rp 150.000</p>  
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/c29zjDz/ulos2.webp" class="card-img-top" alt="Ulos Ragi Hidup">
              <div class="card-body">
                <h5 class="card-title">Ulos Ragi Hidup</h5>
                <p class="card-text">Rp 140.000</p>  
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/NKx3pJQ/ulos3.webp" class="card-img-top" alt="Ulos Parsamot">
              <div class="card-body">
                <h5 class="card-title">Ulos Parsamot</h5>
                <p class="card-text">Rp 100.000</p>  
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/YkCFBtb/ulos4.webp" class="card-img-top" alt="Ulos Pucca">
              <div class="card-body">
                <h5 class="card-title">Ulos Pucca</h5>
                <p class="card-text">Rp 150.000</p>  
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/drVgkH9/ulos5.webp" class="card-img-top" alt="Ulos Sadum">
              <div class="card-body">
                <h5 class="card-title">Ulos Sadum</h5>
                <p class="card-text">Rp 100.000</p>  
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/N6PPVWC/ulos6.webp" class="card-img-top" alt="Ulos Tumtuman">
              <div class="card-body">
                <h5 class="card-title">Ulos Tumtuman</h5>
                <p class="card-text">Rp 120.000</p>
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>     

            <div class="card">
              <img src="https://i.ibb.co/VvqRpM6/ulos7.jpg" class="card-img-top" alt="Ulos Saput">
              <div class="card-body">
                <h5 class="card-title">Ulos Saput</h5>
                <p class="card-text">Rp 100.000</p>
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/WH6YrV6/ulos8.webp" class="card-img-top" alt="Ulos Suri-Suri">
              <div class="card-body">
                <h5 class="card-title">Ulos Suri-Suri</h5>
                <p class="card-text">Rp 100.000</p>
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>                                    
          </div>  
        </div>
      </div>
    </section>   
    
    <!--Daftar Sarung Tenun-->    
    <br>
    <section class="sarung" id="sarung">
      <div class="container-fluid text-center">
        <div class="row">                  
        <div class="gallery col-xl-12">
          <h3>Daftar Sarung Tenun</h3>      
          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#daftar_sarung">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="30" fill="currentColor" class="bi bi-grid-3x2-gap-fill" viewBox="0 0 20 16">
  <path d="M1 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V4zM1 9a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V9zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V9z"/>
            </svg>
          </button>
        </div>  
        <div id="daftar_sarung" class="collapse in">
          <div class="container-fluid text-center">
            <div class="card">
              <img src="https://i.ibb.co/MGbbsFY/sarung1.jpg" class="card-img-top" alt="Sarung Tenun Mekar">
              <div class="card-body">
                <h5 class="card-title">Sarung Tenun Mekar</h5>
                <p class="card-text">Rp 150.000</p>    
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/tmJr75P/sarung2.jpg" class="card-img-top" alt="Sarung Tenun Rinca">
              <div class="card-body">
                <h5 class="card-title">Sarung Tenun Rinca</h5>
                <p class="card-text">Rp 100.000</p>  
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/bFdt4Rs/sarung3.jpg" class="card-img-top" alt="Sarung Tenun Poli">
              <div class="card-body">
                <h5 class="card-title">Sarung Tenun Poli</h5>
                <p class="card-text">Rp 110.000</p>  
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/pncb6YB/sarung4.jpg" class="card-img-top" alt="Sarung Tenun Ringgas">
              <div class="card-body">
                <h5 class="card-title">Sarung Tenun Ringgas</h5>
                <p class="card-text">Rp 120.000</p>
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/QrKKmCK/sarung5.jpg" class="card-img-top" alt="Sarung Tenun Daris">
              <div class="card-body">
                <h5 class="card-title">Sarung Tenun Daris</h5>
                <p class="card-text">Rp 130.000</p>
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/FHT6vBW/sarung6.jpg" class="card-img-top" alt="Sarung Tenun Ellim">
              <div class="card-body">
                <h5 class="card-title">Sarung Tenun Ellim</h5>
                <p class="card-text">Rp 100.000</p>
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>     

            <div class="card">
              <img src="https://i.ibb.co/9Z4Ympf/sarung7.jpg" class="card-img-top" alt="Sarung Tenun Fiona">
              <div class="card-body">
                <h5 class="card-title">Sarung Tenun Fiona</h5>
                <p class="card-text">Rp 100.000</p>   
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/ZcDzMTn/sarung8.jpg" class="card-img-top" alt="Sarung Tenun Gajah">
              <div class="card-body">
                <h5 class="card-title">Sarung Tenun Gajah</h5>
                <p class="card-text">Rp 140.000</p>
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>                                    
          </div>  
        </div>
      </div>
    </section>   
    <br>

    <!--Daftar Bahan Baku-->
    <section class="bahan" id="bahan">
      <div class="container-fluid text-center">
        <div class="row">                  
        <div class="gallery col-xl-12">
          <h3>Daftar Bahan Baku Tekstil</h3>      
          <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#daftar_bahan">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="30" fill="currentColor" class="bi bi-grid-3x2-gap-fill" viewBox="0 0 20 16">
  <path d="M1 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V4zM1 9a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V9zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V9zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V9z"/>
            </svg>
          </button>
        </div>  
        <div id="daftar_bahan" class="collapse in">
          <div class="container-fluid text-center">
            <div class="card">
              <img src="https://i.ibb.co/q9Kngfx/bbt1.webp" class="card-img-top" alt="Benang Nilon">
              <div class="card-body">
                <h5 class="card-title">Benang Nilon</h5>
                <p class="card-text">Rp 80.000</p> 
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/DC94ZTJ/bbt2.jpg" class="card-img-top" alt="Benang Wol">
              <div class="card-body">
                <h5 class="card-title">Benang Wol</h5>
                <p class="card-text">Rp 60.000</p>    
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/5Wkvtxn/bbt3.jpg" class="card-img-top" alt="Benang Pakan">
              <div class="card-body">
                <h5 class="card-title">Benang Pakan</h5>
                <p class="card-text">Rp 100.000</p>   
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/9yYgMzm/bbt4.webp" class="card-img-top" alt="Benang Bordir">
              <div class="card-body">
                <h5 class="card-title">Benang Bordir</h5>
                <p class="card-text">Rp 50.000</p>    
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/ygDJhpb/bbt5.png" class="card-img-top" alt="Benang Sutra">
              <div class="card-body">
                <h5 class="card-title">Benang Sutra</h5>
                <p class="card-text">Rp 50.000</p>    
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/9t5g206/bbt6.png" class="card-img-top" alt="Kain Bordir">
              <div class="card-body">
                <h5 class="card-title">Kain Bordir</h5>
                <p class="card-text">Rp 60.000</p>
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>     

            <div class="card">
              <img src="https://i.ibb.co/7VkbMfX/bbt7.jpg" class="card-img-top" alt="Kain Rayon">
              <div class="card-body">
                <h5 class="card-title">Kain Rayon</h5>
                <p class="card-text">Rp 100.000</p>   
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>
 
            <div class="card">
              <img src="https://i.ibb.co/HBqMKtK/bbt8.jpg" class="card-img-top" alt="Kain Satin">
              <div class="card-body">
                <h5 class="card-title">Kain Satin</h5>
                <p class="card-text">Rp 80.000</p>
                <a href="<?php echo base_url('/Jamesulos/order/'); ?>" class="btn btn-danger">Beli</a>
              </div>
            </div>                                    
          </div>  
        </div>
      </div>
    </section>   

    <!--Footer-->
    <section class="footer" id="footer">
      <div class="container-fluid">
        <h4>Copyright 2021 | Design by PD.co</h4>
        <h4 class="cp">Contact Person: 085387654321</h4>
      </div>    
    </section>
  
    <!-- Tombol Naik -->
    <div class="helper fixed-bottom mr-auto">
      <a href="#"><button><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z"/>
  <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
</svg></button></a> 
    </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

  </body>
</html>