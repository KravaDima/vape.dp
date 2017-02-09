<?php include ROOT."/views/layout/header.php" ?>

	<div class="content login-box">
			<div class="login-main">
				<div class="wrap">
				<ul class="product-head">
					<li><a href="<?ROOT?>/">Главная</a> <span>::</span></li>
					<li class="active-page"><a href="<?ROOT?>/cart">Корзина</a></li>
					<div class="clear"> </div>
				</ul>
					<div class="login">
						<?php if ($productsInCart): ?>
						<h3>Вы выбрали такие товары:</h3>
							<table>
								<tr>
									<th>Наименование товара</th>
									<th>Стоимость, грн</th>
									<th>Количество, шт</th>
									<th>Действие</th>
								</tr>
								<?php foreach ($products as $product): ?>
								<tr>
									<td><a href="/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></td>
									<td><?php echo $product['price']; ?></td>
									<td><?php echo $productsInCart[$product['id']]; ?></td>
									<td><a href="/cart/delete/<?php echo $product['id'];?>">Удалить<a/></td>
								</tr>
								<?php endforeach; ?>
								<tr>
									<th>Общая стоимость:</td>
									<th><?php echo $totalPrice; ?></td>
								</tr>
							</table>
						<a class="acount-btn" href="/cart/checkout/">Оформить заказ</a>
					</div>
					<?php else: ?>
						<p>Корзина пуста!</p>
					<?php endif; ?>
				</div>
			</div>
		</div>	
<?php include ROOT."/views/layout/footer.php" ?>
	

  
