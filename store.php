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

<?php include 'partials/header.php'; ?>

<main class="main">


<!-- BANNER -->
<?php include 'partials/templates/slider-store.php'; ?>



<!-- PRINTER -->
<?php include 'partials/templates/printer-x.php'; ?>

<!-- PRINTER -->
<?php include 'partials/templates/printer-xpro.php'; ?>

<!-- PRINTER -->
<?php include 'partials/templates/printer-xl.php'; ?>

<!-- ШОУРУМ -->
<?php include 'partials/templates/forma.php'; ?>



<section class="main-section">
  <div class="container">
    <p class="main-section-title">УСЛОВИЯ ПОКУПКИ</p>
    <ul class="faq-list">

      <li id="school" class="faq-item">
        <span>Бесплатное обучение</span>
        <p class="faq-text">
          При покупке 3D-принтера в нашем магазине, мы предоставляем бесплатное обучение работе на оборудовании. 
          <br>Подробности по телефону: +7 (495) 00-44-187 
          <br><br>
          Оказываем поддержку в обучении ваших специалистов на принтерах «Picaso» даже если вы приобрели оборудование не в нашем магазине, в этом случае обучение платное.
        </p>
      </li>

      <li id="pay" class="faq-item">
        <span>Доставка и оплата</span>
        <p class="faq-text">
          Доставка по Москве, Московской области и всей России. Стоимость доставки по Москве - бесплатно. 
          <br>Доставим заказ транспортной компанией или другим удобным вам способом. 
          <br><br>
          Возможны варианты оплаты любым удобным для Вас способом: на расчётный счет, наличными.<br>
		  Для вашей бухгалтерии предоставим все необходимые документы.
        </p>
      </li>
	  	  
      <li class="faq-item">
        <span>Как сделать заказ?</span>
        <p class="faq-text">
          Сделать заказ Вы можете тремя способами:<br>
          1. Способ: Оставьте Вашу заявку на нашем сайте.<br>
          2. Способ: Напишите на наш адрес электронной почты sale@3dcrafter.ru<br>
          3. Способ: Позвоните нам по номеру телефона +7 (495) 00-44-187<br>
          После получения Вашей заявки, наши специалисты ее обрабатывают и затем с Вами согласовывают. По утверждению заказа и поступлению оплаты мы приступаем к исполнению.<br>
		  У вас есть возможность посетить наш шоурум до покупки 3D-приентера, позвоните нам по телефону: +7 (495) 00-44-187 — записаться на посещение шоурума.
        </p>
      </li>
	  
      <li id="sale" class="faq-item">
        <span>Предлагаем ли мы скидки в случае заказа нескольких 3D-принтеров?</span>
        <p class="faq-text">
          В нашей компании действует гибкая система скидкок.<br>
          От объема заказа зависит размер скидки или порядок бонусов.
        </p>
      </li>
	  
      <li class="faq-item">
        <span>Условия оплаты</span>
        <p class="faq-text">
          В основном мы работаем по 100%-ой предоплате, либо в соответствии с условиями, которые прописанны в Договоре. 
          <br>К постоянным клиентам относимся более лояльно в вопросе оплаты наших услуг.
        </p>
      </li>
	  
      <li id="guarantee" class="faq-item">
        <span>Гарантия</span>
        <p class="faq-text">
          «3Dcrafter.ru» является официальным сертифицированным представителем производителя 3D-принтеров «Picaso 3D» в Москве.
          <br>Мы обеспечиваем ремонт и поддержку 3D-принтеров, купленных в нашем магазине.
          <br><br>
          Гарантия от производителя: 2 года на все ТОПовые принтеры Picaso.
		  <br>Если вы приобрели оборудование не в нашем магазине — ремонт осуществляется на платной основе.
        </p>
      </li>	  
	  
	  
    </ul>
  </div><!-- /.container -->
</section>



<!-- COST/plastics -->
<?php include 'partials/templates/cost-plastics-materials-page.php'; ?>



<!-- ABOUT-US -->
<?php include 'partials/templates/about_us-main.php'; ?>
<!-- CLIENTS -->
<?php include 'partials/templates/clients-main.php'; ?>
<!-- CONTACTS -->
<?php include 'partials/templates/contacts-main.php'; ?>




</main><!-- /.main -->

<?php include 'partials/footer.php'; ?>