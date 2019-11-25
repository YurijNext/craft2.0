<?php 
  $title = 'Новости';
  $keywords = 'fdm sls печать полиамид металлом фотополимер ювелирная порошковая 3D печать';
  $description = 'Новости 3D-печати и примеры работ, изготовленных с применением 3D-принтеров и новейших технологий';
  
  $og_type = 'article';
  $og_site_name = '3Dcrafter.ru'; 
  $og_title = 'Последние новости о 3D-печати и 3D-принтерах в Москве и в мире';
  $og_image = 'https://3dcrafter.ru/docs/media/soc-3dcrafter.jpg';
  $og_description = '3Dcrafter — Новости 3D-печати и примеры работ, изготовленных с применением 3D-принтеров и новейших технологий';
  $og_url = 'https://3dcrafter.ru/news.php';
  
?>

<?php include 'partials/header.php'; ?>

<main class="main">


<!-- BANNER -->
<?php include 'partials/templates/slider-novosti.php'; ?>
<!-- NEWS -->
<?php include 'partials/templates/news-index.php'; ?>
<!-- ARHIV NEWS -->
<?php include 'partials/templates/news-main.php'; ?>
<!-- CONTACTS -->
<?php include 'partials/templates/contacts-main.php'; ?>


</main><!-- /.main -->

<?php include 'partials/footer.php'; ?>