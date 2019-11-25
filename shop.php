<?php 
  $title = '3Dcrafter.ru — Магазин 3D-принтеров в Москве';
  $keywords = 'купить 3D принтер в Москве для 3д печати цена';
  $description = 'Продажа высокоточных 3D-принтеров в Москве от производителя Picaso 3D с бесплатным обучением и гарантией';

  $og_type = 'website';
  $og_site_name = '3Dcrafter.ru'; 
  $og_title = '3Dcrafter.ru — Магазин 3D-принтеров в Москве';
  $og_image = 'https://3dcrafter.ru/docs/media/soc-3dcrafter.jpg';
  $og_description = 'Продажа высокоточных 3D-принтеров в Москве от производителя Picaso 3D с бесплатным обучением и гарантией';
  $og_url = 'https://3dcrafter.ru/store.php';  
  
  
  ?>

<?php include 'partials/globals/header.php'; ?>

<main class="main">

  <!-- 1-st slider -->
  <?php include 'partials/shop/main-slider.php'; ?>


  <!-- 2-nd slider -->
  <?php include 'partials/shop/teach.php'; ?>

  <!-- Printers slider -->
  <?php include 'partials/shop/shop-printers.php'; ?>

  <!-- Advantages -->
  <?php include 'partials/shop/shop-advantages.php'; ?>

  <!-- Form -->
  <?php include 'partials/shop/shop-form.php'; ?>

  <!-- Map -->
  <?php include 'partials/shop/shop-map.php'; ?>

</main> 
<!-- /.main -->

<?php include 'partials/globals/footer.php'; ?>