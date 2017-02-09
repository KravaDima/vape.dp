<?php include ROOT."/views/layout/header.php" ?>
	<section>
		<div class="wrap">
			<div class="row">
				<ul class="product-head">
					<li><a href="<?ROOT?>/cart">Корзина</a> <span>::</span></li>
					<li class="active-page"><a href="<?ROOT?>/cart/checkout">Оформление заказа</a></li>
					<div class="clear"> </div>
				</ul>
				<?php if ($result): ?>
					<p>Заказ оформлен! Сейчас наш менеджер допарит заправку и перезвонит!</p>
				<?php else: ?>
					<p>Выбрано товаров: <?php echo $totalQuantity; ?>, на общую сумму: <?php echo $totalPrice; ?>грн</p>
					<?php if (isset($errors) && is_array($errors)): ?>
					<ul>
						<?php foreach ($errors as $error): ?>
						<li> - <?php echo $error;?></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
					<p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>
					<form method="post" action="" name="order">
						<div class="contact-form">
							<div class="contact-to">
								<input type="text" name="name" class="text" value="<? echo empty($userName)?'Имя':$userName;?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $userName;?>';}">
								<input type="text" name="phone" class="text" value="<? echo empty($userPhone)?'Телефон +380':$userPhone;?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<? echo empty($userPhone)?'Телефон +380':$userPhone;?>';}">
							</div>
							<div class="text2">
								<textarea value="Комментарий:" name="comment" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Сообщение';}">Комментарий..</textarea>
							</div>
							<span><input type="submit" name="submit" class="" value="Оформить"></span>
							<!-- <a href="javascript:checkFoo()">Оформить</a> -->
							<div class="clear"></div>
						</div>
					</form>
				<?php endif; ?>
				
			</div>		
		</div>
	</section>
<?php include ROOT."/views/layout/footer.php" ?>