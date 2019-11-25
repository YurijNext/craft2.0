<section class="shop-form-section">
	<div class="container">
		<div class="shop-icon-wrap">
			<img src="images/shop/icons/maind.svg" alt="Main icon">
		</div>

		<div class="shop-form-content-wrapper">
			<div class="shop-form-questions">
				<h2 class="sh-title">Есть вопрос?</h2>
				<p class="sh-descr">Оставь заявку сейчас и опытный специалист ответит на ваш вопрос в течении 15 минут.</p>
				<p class="sh-descr">Бесплатный тест: чтобы вы убедились в качестве печати 3D принтера, мы распечатаем на нём тестовое изделие до 100 см³ бесплатно.</p>
				<p class="sh-descr">Шоурум: заполните заявку и посетите наш офис, чтобы своими глазами увидеть 3D принтеры данной модели в работе.</p>
			</div>

			<form action="post" class="shop-form"  enctype="multipart/form-data" onsubmit="yaCounter36438455.reachGoal('ORDER', function () { alert('DOne') })">

				<div class="inputs-column">
					<div class="input-wrapper input-wrapper-name">
						<input type="text" class="shop-input input-name" id="js-input-name" placeholder="Введите ваше имя">
					</div>
					<div class="input-wrapper input-wrapper-phone">
						<input type="phone" class="shop-input input-phone" id="js-input-phone" placeholder="Введите ваш телефон">
					</div>
					<div class="input-wrapper input-wrapper-mail">
						<input type="mail" class="shop-input input-phone" id="js-input-phone" placeholder="Email">
					</div>

					<div class="shop-capcha-wrap">
						<p class="form-capcha-question">
							Сколько будет <span class="random-numb">1</span> + <span class="random-numb">2</span> =
						</p>

						<input type="text" class="shop-capcha-answ" id="js-capch-answ">
					</div>
				</div>

				<div class="inputs-column-right">
					<div class="input-wrapper input-wrapper-area">
						<textarea class="shop-question-area" id="js-question-text" placeholder="Введите свой вопрос"></textarea>
					</div>

					<div class="shop-form-buttons">
						<button type="submit" class="shop-btn btn--blue shop-btn-submit"><span>Отправить</span></button>

						<label class="shop-addFile-wrap" for="js-addFile">
							<input type="file" name="addFile" class="shop-addFile" id="js-addFile" >
							<span>Прикрепить файл</span>
						</label>
					</div>
				</div>
				
			</form>
		</div>
	</div>
</section>
			