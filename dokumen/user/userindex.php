<?php
    include "../koneksi.php";
    session_start();
?>
<!DOCTYPE html>
  <html lang="en" id="home">
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!-- my CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Toya Bungkah</title>
    </head>

    <body>

<!-- navbar -->
    <div class="navbar-fixed">
          <nav class="blue darken-4">
           <div class="container">
        <div class="nav-wrapper">
           <a href="#home" class="brand-logo">Toya Bungkah</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#About">About</a></li>
            <li><a href="#galeri">Galeri</a></li>
            <li><a href="#Contactus">Contact us</a></li>
            <li><a href="datapengurususer.php">Data Pengurus</a></li>
            <li><a href="datapengunjunguser.php">Data Pengunjung</a></li>
            <li><a href="databookinguser.php">Data Booking Villa</a></li>
            <li><a href="../logout1.php"><button type="button" class="btn btn-primary">Logout</button></a></li>
          </ul>
        </div>
      </div>
      </nav>
    </div>


    <!-- sidenav -->
     <ul class="sidenav" id="mobile-nav">
      <li><a href="#About">About</a></li>
      <li><a href="#galeri">Galeri</a></li>
      <li><a href="#Contactus">Contact us</a></li>
      <li><a href="datapengurususer.php">Data Pengurus</a></li>
      <li><a href="datapengunjunguser.php">Data Pengunjung</a></li>
      <li><a href="databookinguser.php">Data Booking Villa</a></li>
      <li><a href="../logout1.php"><button type="button" class="btn btn-primary">Logout</button></a></li>
     </ul>
      
    <!-- silider -->
    <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/slider/toyabungkah.jpg"> 
        <div class="caption left-align">
          <h3>"Selamat Datang"</h3>
          <h4>Di Toya Bungkah</h4>
        </div>
      </li>

      <li>
        <img src="img/slider/toyabungkah1.jpg"> 
        <div class="caption right-align">
          <h3>"Selamat Datang"</h3>
          <h4>Di Toya Bungkah</h4>
        </div>
      </li>
    </ul>
  </div><br>

      <!-- About -->
      <section class="About" id="About" >
        <div class="container">
          <div class="row">
            <h3 class="center light grey-text text-darken-3">About</h3>
            <div class="col m6 light">
              <h5>Toya Bungkah Kintemani</h5>
              <p align="justify" class="lead mb-5">Batur Natural Hot Spring menjadi salah satu tempat wisata pemandian air panah
                yang cukup populer di pulau Dewata Bali. Memang terdapat sejumlah pemandian air panas di Bali, sekaligus menawarkan
                sebuah pemandangan indah yang memanjakan dan memikat mata pengunjungnya, selain bisa menyegarkan tubuh juga menrefresh pikiran anda,
                melepaskan segala penat, menenggelamkan kejenuhan, sehingga menambah kesegaran tubuh untuk aktifitas berikutnya.
                Batur Natural Hot Spring di desa Toya Bungkah dikelola secara profesional oleh desa Pekraman Batur, sehingga anda
                bisa merasa nyaman, aman dan tenang untuk berada di lokasi, walaupun untuk masuk ke tempat pemandian ini dikenakan tiket masuk,
                hanya sebesar Rp 60.000/orang/WNI, harga tiket ini cukup masuk akal apalagi dengan berbagai fasilitas yang di dapatkan pengunjung seperti welcome drink, sampo, sabun dan handuk.
                Sehingga pemandian di desa Toya Bungkah menjadi tempat lebih ideal untuk berendam dibandingkan di tempat pemandian umum.
            </p><br>
          </div>
          <div class="col m6 light">
            <p>Pengunjung</p>
            <div class="progress">
              <div class="determinate" style="width: 90%"></div>
            </div>
             <p>Camping</p>
            <div class="progress">
              <div class="determinate" style="width: 80%"></div>
            </div>
            <p>Hot Spring</p>
            <div class="progress">
              <div class="determinate" style="width: 70%"></div>
            </div>
            <p>Restoran</p>
            <div class="progress">
              <div class="determinate" style="width: 55%"></div>
            </div>
            <p>Booking Villa</p>
            <div class="progress">
              <div class="determinate" style="width: 65%"></div>
            </div>
           </div>
          </div>
        </div>
      </section><br>
    <!-- galeri -->
    <section id="galeri"class="galeri">
      <div class="container">
        <h3 class="light center grey-text text-darken-3">Galeri</h3>
         <div class="row">
          <div class="col m4 s12">
            <img src="img/portfolio/1.jpg"class="responsive-img materialboxed">
         </div>
          <div class="row">
          <div class="col m4 s12">
            <img src="img/portfolio/2.jpg"class="responsive-img materialboxed">
         </div>
          <div class="row">
          <div class="col m4 s12">
            <img src="img/portfolio/3.jpg"class="responsive-img materialboxed">
         </div>
         <div class="row">
          <div class="col m6 s12">
            <img src="img/portfolio/4.jpg"class="responsive-img materialboxed">
        </div>
        </div>
      </div>
    </section>
    <!-- Contact us -->
    <section id="Contactus"class="Contactus">
      <div class="container">
        <h3 class="light grey-text text-darken-3 center">Contact Us</h3>
        <div class="row">
          <div class="col m6 s12">
            <div class="card-panel blue darken-2 center white-text">
              <i class="material-icons">email</i>
              <h5>Boxing Villa</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>

          <ul class="collection with-header">
            <li class="collection-header"><h4>Toya Bungkah</h4></li>
              <li class="collection-header"><h4>Batur Tengah,Kabupaten bangli</h4></li>
            </ul>
        </div>

        <div class="col m5 s12">
          <form>
            <div class="card-panel">
              <h5>Please fill Out this form</h5>
              <div class="input-field">
                <input type="text"name="name" id="name">
                <label for="name">Nama</label>
            </div>
            <div class="input-field">
              <input type="email"name="email"id="email">
              <label for ="email">Email</label>
             </div>
            <div class="input-field">
              <input type="text"name="phone"id="phone">
              <label for ="phone">Phone Number</label>
             </div>
            </div>
            <p><a href ="../logout.php"><button type="button" class="btn btn-primary">Logout</button></p></a>



      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
         <script>
         const sideNav=document.querySelectorAll('.sidenav');
         M.Sidenav.init(sideNav);

         const slider=document.querySelectorAll('.slider');
         M.Slider.init(slider,{
          indicators: false,
          height: 500,
          transition: 600,
          interval: 3000
         });

         const parallax = document.querySelectorAll('.parallax');
         M.Parallax.init(parallax);

         const materialbox = document.querySelectorAll('.materialboxed');
         M.materialbox.init(materialboxed)


      </script>
    </body>
  </html>

