<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Goss</title>
  <link rel="stylesheet" href="<?= base_url('assets/pub/')?>css/swiper-bundle.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/pub/')?>css/style.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <script src="<?= base_url('assets/pub/')?>js/jquery.min.js"></script>
</head>

<body>

  <nav>
    <a href="<?= base_url('home')?>" class="logo"><img src="<?= base_url('assets/pub/')?>/images/logo/logo1.png" alt="logo1"></a>
    <div class="navigation">
      <ul class="menu">
        <div class="close-btn"></div>
        <li class="menu-item"><a href="<?= base_url('about_pb')?>">Tentang Kami</a></li>
        <li class="menu-item"><a href="<?= base_url('spmi_pb')?>">SPMI</a></li>
        <li class="menu-item">
          <a class="sub-btn" href="#">SPME <i class="uil uil-angle-down"></i></a>
          <ul class="sub-menu">
            <li class="sub-item"><a href="<?= base_url('akreditasi_pb')?>">Akreditasi</a></li>
            <li class="sub-item"><a href="<?= base_url('sertifikasi_pb')?>">Sertifikasi</a></li>
            <li class="sub-item"><a href="<?= base_url('renbang_pb')?>">RENBANG</a></li>
          </ul>
        </li>
        <li class="menu-item">
          <a class="sub-btn" href="#">Layanan Umum<i class="uil uil-angle-down"></i></a>
          <ul class="sub-menu">
            <li class="sub-item"><a href="<?= base_url('pelatihan_pb')?>">Informasi Pelatihan</a></li>
            <li class="sub-item"><a href="https://survei.pcr.ac.id/" target="_blank" rel="noopener noreferrer">Survei <i class="uil uil-external-link-alt"></i></a></li>
            <li class="sub-item"><a href="https://siap.pcr.ac.id/" target="_blank" rel="noopener noreferrer">SIAP <i class="uil uil-external-link-alt"></i></a></li>
          </ul>
        </li>
        <li class="menu-item"><a href="<?= base_url('berita_pb')?>">Berita</a></li>
        <li class="menu-item"><a href="<?= base_url('galeri_pb')?>">Galeri</a></li>
      </ul>
    </div>
    <div class="menu-btn"></div>
  </nav>
