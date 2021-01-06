<!doctype html>

<?php
  include "show profile.php";
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Triarti: Profil</title>
    <link rel="stylesheet" href="profil.css" type="text/css">
  </head>

  <body>
    <header>
    	<div class="logoo">
    		<a href="#">TRIARTI</a>
    	</div>

			<nav><!-- Navbar -->
				<ul class="nav_links">
					<li><a href="beranda.html">Beranda</a></li>
					<li><a href="banksampah.php">Bank Sampah</a></li>
					<li><a href="daurulang.html">Daur Ulang</a></li>
					<li><a href="artikel.html">Artikel</a></li>
					<li><a href="profil.php">Profil</a></li>
				</ul>
			</nav>
	  </header>

    <div class="box">
      <div class="row">
        <div class="column">
          <h1>Profil</h1><hr>         
        </div>
      </div> 

      <img class= "img" src="image/ava.svg">
      <h2><?php echo $nama; ?></h2>
      <div class="text">Username : <?php echo $username; ?></div>
      <p><?php echo $alamat; ?></p>
      <p><?php echo $profesi; ?></p>
      <p><?php echo $no_telp; ?></p>
      <p><?php echo $email; ?></p>
    </div><br>

    <footer>
      <div class="footer-inner">
        <div class="footer-inner-content">
          <div class="footer-inner-info">
            <span class="footer-inner-icon">TRIARTI</span><br>
            <span class="footer-inner-copy">&copy;2020</span><br><br>
            <span class="footer-inner-address">Ketintang, Surabaya<br/>Jawa Timur, Indonesia</span>
          </div><br>
        </div>  

        <div class="w3-xlarge w3-padding-32">
          <i class="fa fa-facebook-official w3-hover-opacity"></i>
          <i class="fa fa-instagram w3-hover-opacity"></i>
          <i class="fa fa-snapchat w3-hover-opacity"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity"></i>
          <i class="fa fa-twitter w3-hover-opacity"></i>
          <i class="fa fa-linkedin w3-hover-opacity"></i>
          <i class="fa fa-whatsapp w3-hover-opacity"></i>
        </div>
        <p>Design by <a href="https://www.TRIARTI.com/w3css/default.asp" target="_blank">TRIARTI.COM</a></p> 
      </div>
    </footer>

    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>