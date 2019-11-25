<div class="modalBG modalOrdBG">
  <div class="modal modal-header-mail">
    <div class="modal-icon"><span class="sprite sprite-list">
			<svg>
				<use xlink:href='#list'/>
			</svg>
		</span></div>

    <form action="post" class="mail-form send-form"
          enctype="multipart/form-data"
          onsubmit="yaCounter36438455.reachGoal('ORDER', function () {
              alert('DOne');
          })">

      <h3 class="title">Заказать</h3>

      <span class="modalClose sprite sprite-close">
				<svg>
					<use xlink:href='#close'/>
				</svg>
			</span>

      <input type="text" class="form-input" name="name" placeholder="Ваше имя" autocomplete="on">

      <input type="mail" class="form-input" name="email" placeholder="E-mail" required autocomplete="on">

      <textarea name="comment" class="form-input" id="" placeholder="Комментарий"></textarea>

      <p class="form-capcha-wrap">Сколько будет <span class="form-capcha-numb"></span> + <span
                class="form-capcha-numb"></span> = <input type="text" class="form-capcha-answer" pattern="[0-9]{1,2}"
                                                          required></p>

      <div class="mail-form-row">
        <input type="submit" value="Отправить">

        <label class="file-wrap">
          <input type="file" class="form-input" name="file" id="inputFile" onchange="getFileName()">
          <span>Прикрепить файл</span>
        </label>
      </div>
    </form>
  </div>
  <!-- /.modal-header-mail -->
</div>
<!-- /.modalBG -->

<footer class="footer">
  <div class="container transparent">
    <div class="footer-row">
      <div class="footer-col">
        <h4 class="title"><span>Компания</span></h4>

        <ul class="list">
          <li class="list-item"><a href="about-us.php#about-us" title="О нас">О нас</a></li>

          <li class="list-item"><a href="technologies.php#technologies" title="Технологии" >Технологии</a></li>

          <li class="list-item"><a href="news.php#news1" title="Новости" >Новости</a></li>
        </ul>

        <div class="social-icons">
          <a href="https://www.facebook.com/3Dcrafter.ru" class="sprite sprite-facebook" title="3Dcrafter в фейсбук" target="_blank">
            <svg>
              <use xlink:href='#facebook'/>
            </svg>
          </a>

          <a href="https://vk.com/3dcrafter" target="_blank" class="sprite sprite-vk" title="3Dcrafter вконтакте" target="_blank">
            <svg>
              <use xlink:href='#vk'/>
            </svg>
          </a>

          <a href="//t.me/materializator" target="_blank" class="sprite sprite-telegram" title="3Dcrafter в telegram" target="_blank">
          </a>

          <a href="https://www.instagram.com/3dcrafter" class="sprite sprite-instagram" title="3Dcrafter в инстаграм" target="_blank">
            <svg>
              <use xlink:href='#instagram'/>
            </svg>
          </a>
        </div>
      </div>

      <div class="footer-col">
        <h4 class="title"><span>Услуги</span></h4>

        <ul class="list">
		
			<li class="list-item"><a href="store.php" title="Магазин" >Магазин</a></li>
			
          <li class="list-item"><a href="3d-print.php#3d-print" title="3D-печать" >3D-печать</a></li>

          <li class="list-item">
          	<a href="3d-models.php#3d-models" title="3D-моделирование" >3D-моделирование</a></li>
          </li>

          <li class="list-item"><a href="cost.php#cost" title="Стоимость" >Стоимость</a></li>

          <li class="list-item"><a href="education.php#education" title="Обучение" >Обучение</a></li>

          <li class="list-item"><a href="repair.php#repair" title="Ремонт" >Ремонт</a></li>
        </ul>
      </div>

      <div class="footer-col">
         <a href="/faq.php" class="title" title="FAQ" ><span>FAQ</span></a>

        <ul class="list list-js">
          <li class="list-item"><a href="./faq.php?for=min" title="Минимальный заказ" >Мин. заказ</a></li>

          <li class="list-item"><a href="./faq.php?for=pay" title="Доставка и оплата" >Доставка</a></li>

          <li class="list-item"><a href="./faq.php?for=sale" title="Скидки на объем" >Cкидки</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4 class="title"><span>Контакты</span></h4>

        <div class="footer-contacts">
          <!-- <span class="info roistat-phone">+7 (495) 00-44-127</span> -->
          <span class="info">+7 (495) 00-44-187</span>

          <span class="info">Ул. 2-я Ямская, д.6</span>

          <a class="info" href="mailto:sale@3dcrafter.ru">sale@3dcrafter.ru</a>
		  <!-- <span class="info" style="font-size:12px; color: #999999;">*Наш Email с циферками, особенный!</span>
		  -->

          <span class="info">&copy; 2014-2019 &laquo;3Dcrafter.ru&raquo;</span>
        </div>
      </div>
    </div>
    <!-- /.footer-row -->

    <div class="footer-mobile">
      <div class="footer-mobile-icons">
        <a href="https://www.facebook.com/3Dcrafter.ru" class="sprite sprite-facebook" title="3Dcrafter в фейсбук" target="_blank">
          <svg>
            <use xlink:href='#facebook'/>
          </svg>
        </a>

        <a href="https://vk.com/3dcrafter" class="sprite sprite-vk" title="3Dcrafter вконтакте" target="_blank">
          <svg>
            <use xlink:href='#vk'/>
          </svg>
        </a>

         <a href="//t.me/materializator" target="_blank" class="sprite sprite-telegram" title="3Dcrafter в telegram" target="_blank">
        </a>

        <a href="https://www.instagram.com/3dcrafter" class="sprite sprite-instagram" title="3Dcrafter в инстаграм" target="_blank">
          <svg>
            <use xlink:href='#instagram'/>
          </svg>
        </a>
      </div>

      <div class="footer-mobile-mail">
        <a class="info" href="mailto:sale@3dcrafter.ru">sale@3dcrafter.ru</a>
      </div>

      <div class="footer-mobile-copy">
        <span class="info">&copy; 2014-2019 &laquo;3Dcrafter.ru&raquo;</span>
      </div>
    </div>
    <!-- /.footer-mobile -->

    <!-- SPASIBO -->
      <?php include 'partials/templates/spasibo.php'; ?>
  </div>
  <!-- /.container -->
</footer>
<!-- /.footer -->
</div>
<!-- /.main-wrap -->



<script>

$(window).resize(function(){
    jQuery('.slider-slider-slick').slick({
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        //swipe: false,
        //touchMove: false,
        //draggable: false
    });

    //  jQuery('.example-slider').slick({
    //    prevArrow: '<span class="slick-prev sprite sprite-arrow-left"></span>',
    //    nextArrow: '<span class="slick-next sprite sprite-arrow-right"></span>'
    //  });

    jQuery('.example-slider').each(function () {
        jQuery(this).slick({
            prevArrow: '<span class="slick-prev sprite sprite-arrow-left"></span>',
            nextArrow: '<span class="slick-next sprite sprite-arrow-right"></span>',
            asNavFor: jQuery(this).parents('.main-section-50').find('.news-slider')
        });

        jQuery(this).parents('.main-section-50').find('.news-slider').slick({
            prevArrow: '<span class="slick-prev sprite sprite-arrow-left"></span>',
            nextArrow: '<span class="slick-next sprite sprite-arrow-right"></span>',
            asNavFor: jQuery(this)
        });
    });

    jQuery('.main-section-news-slider .news-slider').each(function () {
        jQuery(this).slick({
            prevArrow: '<span class="slick-prev sprite sprite-arrow-left"></span>',
            nextArrow: '<span class="slick-next sprite sprite-arrow-right"></span>',
            asNavFor: jQuery(this).parents('.main-news-row').find('.modal .news-slider')
        });

        jQuery(this).parents('.main-news-row').find('.modal .news-slider').slick({
            prevArrow: '<span class="slick-prev sprite sprite-arrow-left"></span>',
            nextArrow: '<span class="slick-next sprite sprite-arrow-right"></span>',
            asNavFor: jQuery(this)
        });

    });

});

    jQuery('.slider-slider-slick').slick({
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
        //swipe: false,
        //touchMove: false,
        //draggable: false
    });

    //  jQuery('.example-slider').slick({
    //    prevArrow: '<span class="slick-prev sprite sprite-arrow-left"></span>',
    //    nextArrow: '<span class="slick-next sprite sprite-arrow-right"></span>'
    //  });

    jQuery('.example-slider').each(function () {
        jQuery(this).slick({
            prevArrow: '<span class="slick-prev sprite sprite-arrow-left"></span>',
            nextArrow: '<span class="slick-next sprite sprite-arrow-right"></span>',
            asNavFor: jQuery(this).parents('.main-section-50').find('.news-slider')
        });

        jQuery(this).parents('.main-section-50').find('.news-slider').slick({
            prevArrow: '<span class="slick-prev sprite sprite-arrow-left"></span>',
            nextArrow: '<span class="slick-next sprite sprite-arrow-right"></span>',
            asNavFor: jQuery(this)
        });
    });

    jQuery('.main-section-news-slider .news-slider').each(function () {
        jQuery(this).slick({
            prevArrow: '<span class="slick-prev sprite sprite-arrow-left"></span>',
            nextArrow: '<span class="slick-next sprite sprite-arrow-right"></span>',
            asNavFor: jQuery(this).parents('.main-news-row').find('.modal .news-slider')
        });

        jQuery(this).parents('.main-news-row').find('.modal .news-slider').slick({
            prevArrow: '<span class="slick-prev sprite sprite-arrow-left"></span>',
            nextArrow: '<span class="slick-next sprite sprite-arrow-right"></span>',
            asNavFor: jQuery(this)
        });

    });


    //  jQuery('.news-slider').slick({
    //    prevArrow: '<span class="slick-prev sprite sprite-arrow-left"></span>',
    //    nextArrow: '<span class="slick-next sprite sprite-arrow-right"></span>'
    //  });

    /*if(jQuery('.container:first').innerWidth() == 800){
        jQuery('.mobile-slider').slick({
            infinite: false,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 3,
            slidesToScroll: 1
        })
    }*/
    //console.log(jQuery('.container:first').innerWidth());
</script>

<script src="js/script.js"></script>


<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-82399680-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');

</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter36438455 = new Ya.Metrika2({
                    id:36438455,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/36438455" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<!-- Живосайт подключение своих стилей иконок JIVOSITE CODE -->
<link href="/jivosite/jivosite.css" rel="stylesheet">
<script src="/jivosite/jivosite.js" type="text/javascript"></script>
<!-- Живосайт подключение своих стилей иконок JIVOSITE CODE -->

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function () {
        var widget_id = 'NrubcGs2bN';
        var d = document;
        var w = window;

        function l() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = '//code.jivosite.com/script/widget/' + widget_id;
            var ss = document.getElementsByTagName('script')[0];
            ss.parentNode.insertBefore(s, ss);
        }

        if (d.readyState == 'complete') {
            l();
        } else {
            if (w.attachEvent) {
                w.attachEvent('onload', l);
            } else {
                w.addEventListener('load', l, false);
            }
        }
    })();</script>

    <script type="text/javascript" src='https://api-maps.yandex.ru/2.1/?apikey=0a7ad2dd-daec-4dac-84d8-e01e38600600&lang=ru_RU')></script>
<!-- {/literal} END JIVOSITE CODE -->
</body>

</html>