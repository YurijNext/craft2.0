<section class="main-section">
	<div class="container">
		<h2 class="main-section-title">Контакты</h2>
		
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
			<div class="main-contacts-description">
				<div class="main-contacts-info">
					<span class="info-row">
						<span class="name">3Dcrafter.ru</span>
					</span>
					<span class="info-row">
						<span class="addres">г. Москва, ул. 2-я Ямская, дом 6</span>
					</span>
					<span class="info-row">
						<span class="mail">E-mail: <a href="mailto:sale@3dcrafter.ru">sale@3dcrafter.ru</a></span>
					</span>
					<span class="info-row">
						<span class="phone">Телефон #1: <a href="tel: +74950044187" class="roistat-phone">+7 495 00-44-187</a></span>
						<!-- <span class="phone">Телефон #2: <a href="tel: +79265138231">+7 926 513-82-31</a></span> -->
					</span>
					<span class="info-row">
						<span class="work_time">Режим работы: круглосуточно</span>
					</span>
				</div><!-- /.main-contacts-info -->

				<div class="main-contacts-form">
					<form action="post" class="mail-form send-form" enctype="multipart/form-data" onsubmit="yaCounter36438455.reachGoal('ORDER', function () { alert('DOne') })">
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


		
	</div><!-- /.container -->
</section><!-- /.main-section -->