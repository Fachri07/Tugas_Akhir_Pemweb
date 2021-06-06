<!DOCTYPE html>
<?php
$background = "https://i.ibb.co/3SqP2BR/car1.png";
?>

<html>
<head>
    <style>
        <?php include "login.css" ?>
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <!-- Import Font Montserrat dan Lato-->
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
      body {
          background-image: url('<?php echo $background;?>');
      }
    </style>

	<title>
		Login
	</title>
</head>
<body>
	<div class="container">        
    	<div class="login_box">        	           
            <form class="box">
                <img src=<?= "https://i.ibb.co/SJQx4hG/logo.png" ?>>            
                <h1>LOGIN</h1>
            	<input type="text" name="username" placeholder="Masukkan: user" required> 
                <input type="password" name="password" placeholder="Masukkan: 123" required> 
                <button class="btn btn-info">
   <a style="text-decoration:none;color:white" href="<?php echo base_url('/Jamesulos/home/'); ?>">Login</a>
</button>
        	</form>            	        	
    	</div>
	</div>
</body>
</html>
