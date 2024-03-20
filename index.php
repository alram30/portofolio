<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>online resume</title>
  <link rel="stylesheet" href="asset/style.css" type="text/css">

  <!--link icon-->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <!--link google font-->
  <link rel="preconnect" href="https/fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?
  family=rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  
  <!-- script js -->
<script src="asset/script.js"></script>

</head>
<body>
  <header>
    <a href="#" class="logo"><span>AL</span>RAM</a>

    <ul class="navbar">
      <li><a href="#home-page" class="aktif">home</a></li>
      <li><a href="#about">about</a></li>
      <li><a href="#resume">resume</a></li>
      <li><a href="#contact">contact</a></li>
    </ul>
  </header>
    <!-- section hone -->
    <section id="home-page">
      <div class="txt-home">
        <span>Software depeloper</span>
        <h1>Ali Ramdani</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure nobis, recusandae necessitatibus omnis reiciendis alias sed eveniet, beatae numquam explicabo nisi! Voluptas quod ut inventore cupiditate tenetur est, veniam rem?</p>
      </div>

      <div class="img-home">
    <img src="asset/images/fotoali.png" id="homeImage">
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var image = document.getElementById('homeImage');
    
        image.addEventListener('click', function() {
            alert('halooo!!! selamat datang di web saya');
        });
    });
</script>

    </section>
<!-- end sedtion home -->

<!-- section about -->
<section id="about" class="about">
  <div class="container">

    <div class="section-title">
      <h2>About Me</h2>
      <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
    </div>
              <ul class="list-about">
                <li>Name: <span>Ali Ramdani</span></li>
                <li>NIM:<span>222303002</span></li>
                <li>Phone: <span>0881023483866</span></li>
                <li>City:<span>Bandung, Jawa Barat</span></li>
              </ul>
            </div>
            <div>
              <ul class="list-about-right">
                <li>Age:<span>21</span></li>
                <li>Degree: <span>student</span></li>
                <li>PhEmailone:<span>alfingerstyle17@gmail.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
              </ul>
            </div>
          </div>
</section><!-- End About Me Section -->

<!-- section resume -->
<section id="resume" class="resume">
  <div class="container">
  <div class="main-title">
    <h1>Resume</h1>
    <div class="sub-title">
      <h2>Informasi Pribadi</h2>
    <ul class="bio">
      <li>Nama : <span>Ali Ramdani</span></li>
      <li>Alamat : <span>Bandung, Jawa Barat</span></li>
      <li>telepon : <span>+62 881 0234 8386 6</span></li>
      <li>Email : <span>alfingerstyle17@gmail.com</span></li>
    </ul>
    </div>
  </div>
</div>
  <div class="sub-title-buttom">
    <h2>Informasi Pribadi</h2>
  <p>Seorang Seorang mahasiswa yang bersemangat dan berbakat dalam web depeloper, dengan keterampilan yang kuat dalam pembuatan website. Memiliki keinginan yang besar untuk belajar dan berkembang dalam lingkungan profesional. Saya bertekad untuk membawa kontribusi positif melalui pemikiran kreatif, kerja keras, dan keterampilan interpersonal yang kuat</p>
</div>
</section>
<!-- end section resume -->

<!-- section contact -->


<?php

//simpan ke db

if(isset($_POST['btn_register'])){

  //koneksi ke db
  $cn=mysqli_connect(
      'localhost',
      'root',
      '',
      'db_message'
  );
  
  //simpan ke database
  $s = "INSERT INTO tb_message
  (
      nama,
      email,
      pesan
  ) VALUES
  (
      '$_POST[nama]',
      '$_POST[email]',
      '$_POST[pesan]'
  
  )";
  
  //execute perintah sql
  
  $q = mysqli_query($cn,$s) or die (mysqli_eror($cn));
  
  echo "<hr>data sudah disimpan ke database.";
  }else{
      echo "Anda belum ngapa ngapain";
  }




?>
<form method=POST enctype=multipart/form-data>

<section id="contact">
  <div class="contact">
    <h1>contact</h1>
    <ul>
      <li>Email : alfingerstyle17@gmail.com</li>
      <li>Telephone : +62 881 0234 8386 6</li>
    </ul>
    <form method=POST enctype=multipart/form-data>
<input required type="text" name="nama" placeholder="nama">
<br>
<input required type="text" name="email" placeholder="email">
<br>
<input required type="text" name="pesan" placeholder="pesan">
<br>
<button name=btn_register>Register</button>
  </div>
</section>
</body>
</html>