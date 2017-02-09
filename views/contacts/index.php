<?php include ROOT."/views/layout/header.php" ?>
	<section>
		<!--- start-content---->
		<div class="content contact-main">
			<!----start-contact---->
			<div class="contact-info">
					<div class="map">
					 	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1213.0187573980406!2d35.045437107756996!3d48.463961833221205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2e77eb4e8ef%3A0x4d0679645bd5d2ee!2z0L_Qu9C-0YnQsCDQk9C10YDQvtGX0LIg0JzQsNC50LTQsNC90YMsINCU0L3RltC_0YDQvsyBLCDQlNC90ZbQv9GA0L7Qv9C10YLRgNC-0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1486196197560" width="600" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
					 </div>
					 <div class="wrap">
					 <div class="contact-grids">
							 <div class="col_1_of_bottom span_1_of_first1">
								    <h5>Адрес</h5>
								    <ul class="list3">
										<li>
											<img src=<? ROOT?>"/template/web/images/home.png" alt="">
											<div class="extra-wrap">
											 <p>Днепр, <br> пл.Героев Майдана, д.1, офис. 431 (пл.Ленина, 1, офис 431)<p>
											</div>
										</li>
									</ul>
							    </div>
								<div class="col_1_of_bottom span_1_of_first1">
								    <h5>Телефоны</h5>
									<ul class="list3">
										<li>
											   <img src=<? ROOT?>"/template/web/images/phone.png" alt="">
											<div class="extra-wrap">
												<p><span>Телефоны:</span></p>
												<p><a href="tel:+380970069555">+380 97 00 69 555</a></p>
												<p><a href="tel:+380934699806">+380 93 46 99 806</a></p>
												<p><a href="tel:+380508769555">+380 50 87 69 555</a></p>
											</div>
												<img id="img-viber" src=<? ROOT?>"/template/web/images/viber.png" alt="">
											<div class="extra-wrap">
												<p><span>Viber:</span></p>
												<p><a href="tel:+380934699806">+380 93 46 99 806</a></p>
											</div>
										</li>
									</ul>
								</div>
								<div class="col_1_of_bottom span_1_of_first1">
									 <h5>Email</h5>
								    <ul class="list3">
										<li>
											<img src=<? ROOT?>"/template/web/images/email.png" alt="">
											<div class="extra-wrap">
											  <p><span class="mail"><a href="mailto:dripping.me@gmail.com">dripping.me@gmail.com</a></span></p>
											</div>
										</li>
									</ul>
							    </div>
								<div class="clear"></div>
					 </div>	
						<?php if ($result): ?>
							<p> Сообщение отправлено!</p>
						<?php else: ?>
							<?php if (isset($errors) && is_array($errors)): ?>
								<ul>
									<?php foreach ($errors as $error): ?>
										<li> - <?php echo "$error";?> </li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>

					 	<form method="post" action="">
					          <div class="contact-form">
								<div class="contact-to">
			                     	<input type="text" name="userName" class="text" value="Имя..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Имя...';}">
								 	<input type="text" name="userMail" class="text" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}">
								 	<input type="text" name="userText" class="text" value="Тема..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Тема...';}">
								</div>
								<div class="text2">
				                   <textarea name="userMes" value="Сообщение:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Сообщение';}">Сообщение..</textarea>
				                </div>
				               <span><input type="submit" name="submit" class="" value="Отправить"></span>
				                <div class="clear"></div>
				               </div>
				           </form>
						</div>
						<?php endif;?>
			</div>
			<!----//End-contact---->
		</div>
<?php include ROOT."/views/layout/footer.php" ?>