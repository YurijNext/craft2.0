<section class="main-section">
	<div class="container">
		<div class="main-section-row">
			<div class="main-contacts-map-wrap">
				<div class="ya_map" id="ya_map"></div>
			</div>
<script>
	ymaps.ready(init);

	function init() {
		var mapCenter = [55.794760, 37.608805];
			
		if(window.innerWidth > 960){
			myMap = new ymaps.Map("ya_map", {
				center: mapCenter,
				zoom: 14,
				behaviors: ['scrollZoom', 'drag'],
				controls: []
			});
		}else{
			myMap = new ymaps.Map("ya_map", {
				center: mapCenter,
				zoom: 14,
				behaviors: ['multiTouch'],
				controls: []
			});
		};
			
		var placemark = new ymaps.Placemark(mapCenter,{
			hintContent: 'Мы здесь!'
		}, {
			iconImageHref: './images/marker.png',
			iconImageSize: [51, 62],
			iconImageOffset: [-15, -60]
		});
		
		myMap.geoObjects.add(placemark);
	}
</script>
		
		</div><!-- /.main-section-row -->
			
			<h2 class="main-section-title">Контакты</h2>
			
		<div class="main-section-row">
			<div class="main-contacts-description">
				<div class="main-contacts-info oneblock">
					<span class="info-row">
						<span class="name">3Dcrafter.ru - Москва</span>
					</span>
					<span class="info-row">
						<span class="addres">Москва, ул. 2-я Ямская, дом 6</span>
					</span>
					<span class="info-row">
						<span class="mail">E-mail: <a href="mailto:sale@3dcrafter.ru">sale@3dcrafter.ru</a></span>
					</span>
					<span class="info-row">
						<span class="phone">Телефон #1: <a href="tel: +74950044187" class="roistat-phone">8 (495) 00-44-187</a></span>
						<!-- <span class="phone">Телефон #2: <a href="tel: +79265138231">+7 926 513-82-31</a></span> -->
					</span>
					<span class="info-row">
						<span class="work_time">Режим работы: круглосуточно</span>
					</span>
				</div><!-- /.main-contacts-info -->

				<div class="main-contacts-form">
					<form action="post" class="mail-form send-form " enctype="multipart/form-data" onsubmit="yaCounter36438455.reachGoal('ORDER', function () { alert('DOne') })">
						<div class="mail-inputs-row">
							<input type="text" class="form-input" name="name" placeholder="Ваше имя" autocomplete="on">
							
							<input type="mail" class="form-input" name="email" placeholder="E-mail" required autocomplete="on">
						</div>

						<textarea name="comment" class="form-input" placeholder="Комментарий"></textarea>
						
						<p class="form-capcha-wrap">Сколько будет <span class="form-capcha-numb"></span> + <span class="form-capcha-numb"></span> = <input type="text" class="form-capcha-answer" pattern="[0-9]{1,2}" required></p>

						<div class="mail-form-row">
							<input type="submit" value="Отправить">

							<label class="file-wrap">
								<input type="file" class="form-input" name="file" id="inputFile" onchange="getFileName()">
								<span>Прикрепить файл</span>
							</label>
						</div>
					</form>
				</div><!-- /.main-contacts-form -->
			</div><!-- /.main-contacts-description -->
		</div><!-- /.main-section-row -->


		
		<div class="main-section-row">
			<div class="main-contacts-description p25">
			
				<!-- адрес Уфа -->
				<div class="main-contacts-info oneblock">
					<span class="info-row">
						<a href="http://ufa.3dcrafter.ru" title="3D печать Уфа" target="_blank"><span class="name">3Dcrafter.ru - Уфа</span></a>
					</span>
					<span class="info-row">
						<span class="addres">Уфа, ул. Кировоградская, 37,<br>офис 1210</span>
					</span>
					<span class="info-row">
						<span class="mail">E-mail: <a href="mailto:info.ufa@3dcrafter.ru">info.ufa@3dcrafter.ru</a></span>
					</span>
					<span class="info-row">
						<span class="phone">Телефон #1: <a href="tel:+73472663607" class="roistat-phone">8 (347) 266-36-07</a></span>
						<!-- <span class="phone">Телефон #2: <a href="tel: +79265138231">+7 926 513-82-31</a></span> -->
					</span>
					<span class="info-row">
						<span class="work_time">Режим работы: <br>пн - пт. 10.00 - 19.00 <br>сб - вс. выходные<br><br><br></span>
					</span>
				</div><!-- /.main-contacts-info -->

				<!-- адрес Н.Новгород -->
				<div class="main-contacts-info">
					<span class="info-row">
						<a href="http://nn.3dcrafter.ru" title="3D печать Нижний Новгород" target="_blank"><span class="name">3Dcrafter.ru - Нижний Новгород</span></a>
					</span>
					<span class="info-row">
						<span class="addres">Нижний Новгород, ул. Артельная 29а</span>
					</span>
					<span class="info-row">
						<span class="mail">E-mail: <a href="mailto:info.nn@3dcrafter.ru">info.nn@3dcrafter.ru</a></span>
					</span>
					<span class="info-row">
						<span class="phone">Телефон #1: <a href="tel:+78312351280" class="roistat-phone">8 (831) 235-12-80</a></span>
						
					</span>
					<span class="info-row">
						<span class="work_time">Режим работы: <br>пн - пт. 09.00 - 17.00 <br>сб - вс. выходные<br><br><br></span>
					</span>
				</div><!-- /.main-contacts-info -->				
				
				<!-- адрес Архангельск -->
				<div class="main-contacts-info threeblock">
					<span class="info-row">
						<a href="http://arh.3dcrafter.ru" title="3D печать Архангельск" target="_blank"><span class="name">3Dcrafter.ru - Архангельск</span></a>
					</span>
					<span class="info-row">
						<span class="addres">Архангельск, улица Тимме д.3,<br>офис 2</span>
					</span>
					<span class="info-row">
						<span class="mail">E-mail: <a href="mailto:sale@3dcrafter.ru">sale@3dcrafter.ru</a></span>
					</span>
					<span class="info-row">
						<span class="phone">Телефон #1: <a href="tel:+79522555526" class="roistat-phone">8 (952) 255-55-26</a></span>
						
					</span>
					<span class="info-row">
						<span class="work_time">Режим работы: <br>пн - пт. 10.00 - 17.00 <br>сб - вс. выходные<br><br><br></span>
					</span>
				</div><!-- /.main-contacts-info -->				
								
				
			</div><!-- /.main-contacts-description -->
		</div><!-- /.main-section-row -->
		

		
		<div class="main-section-row">
			<div class="main-contacts-description p25">
			
				<!-- адрес Питер -->
				<div class="main-contacts-info oneblock">
					<span class="info-row">
						<a href="http://spb.3dcrafter.ru" title="3D печать Санкт-Петербург" target="_blank"><span class="name">3Dcrafter.ru - Санкт-Петербург</span></a>
					</span>
					<span class="info-row">
						<span class="addres">С-Петербург, наб. реки Фонтанки, дом 113, литер А,<br>офис 15,16</span>
					</span>
					<span class="info-row">
						<span class="mail">E-mail: <a href="mailto:info.spb@3dcrafter.ru">info.spb@3dcrafter.ru</a></span>
					</span>
					<span class="info-row">
						<span class="phone">Телефон #1: <a href="tel:+78124082725" class="roistat-phone">8 (812) 408-27-25</a></span>
						<!-- <span class="phone">Телефон #2: <a href="tel: +79265138231">+7 926 513-82-31</a></span> -->
					</span>
					<span class="info-row">
						<span class="work_time">Режим работы: <br>пн - пт. 10.00 - 19.00 <br>сб - вс. выходные<br><br><br></span>
					</span>
				</div><!-- /.main-contacts-info -->

				<!-- адрес Екатеринбург -->
				<div class="main-contacts-info">
					<span class="info-row">
						<a href="http://ekb.3dcrafter.ru" title="3D печать Екатеринбург" target="_blank"><span class="name">3Dcrafter.ru - Екатеринбург</span></a>
					</span>
					<span class="info-row">
						<span class="addres">Екатеринбург, ул. Шевченко, д.9,<br>офис 414/1</span>
					</span>
					<span class="info-row">
						<span class="mail">E-mail: <a href="mailto:info.ekb@3dcrafter.ru">info.ekb@3dcrafter.ru</a></span>
					</span>
					<span class="info-row">
						<span class="phone">Телефон #1: <a href="tel:+73432868180" class="roistat-phone">8 (343) 286-81-80</a></span>
						
					</span>
					<span class="info-row">
						<span class="work_time">Режим работы: <br>пн - пт. 10.00 - 19.00 <br>сб - вс. выходные<br><br><br></span>
					</span>
				</div><!-- /.main-contacts-info -->				
				
				<!-- адрес Воронеж -->
				<div class="main-contacts-info threeblock">
					<span class="info-row">
						<a href="http://vrn.3dcrafter.ru" title="3D печать Воронеж" target="_blank"><span class="name">3Dcrafter.ru - Воронеж</span></a>
					</span>
					<span class="info-row">
						<span class="addres">Воронеж, ул. Революции 1905 г. 82В,<br>офис 212</span>
					</span>
					<span class="info-row">
						<span class="mail">E-mail: <a href="mailto:voronezh@3dcrafter.ru">voronezh@3dcrafter.ru</a></span>
					</span>
					<span class="info-row">
						<span class="phone">Телефон #1: <a href="tel:+74732122538" class="roistat-phone">8 (473) 212-25-38</a></span>.

						
					</span>
					<span class="info-row">
						<span class="work_time">Режим работы: <br>пн - пт. 10.00 - 17.00 <br>сб - вс. выходные<br><br><br></span>
					</span>
				</div><!-- /.main-contacts-info -->				
								
				
			</div><!-- /.main-contacts-description -->
		</div><!-- /.main-section-row -->		
		
			
		

		
	</div><!-- /.container -->
</section><!-- /.main-section -->