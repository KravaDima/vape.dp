<?php include ROOT."/views/layout/header.php" ?>

	<div class="content login-box">
			<div>
				<div class="wrap">
				<ul class="product-head">
					<li><a href="<?ROOT?>/">Главная</a> <span>::</span></li>
					<li class="active-page"><a href="<?ROOT?>/cart">Корзина</a></li>
					<div class="clear"> </div>
				</ul>
				<div class="content-left">
					<div class="content-left-top-brands">
						<h3>АРОМАТИЗАТОРЫ</h3>
						<ul>
							<li><a href="/aromavape/8">АРОМКИ TPA</a></li>
						</ul>
						<h3>ЖИДКОСТИ</h3>
						<ul>
							<li><a href="/eliquidvape/9">ATMOSE</a></li>
							<li><a href="/eliquidvape/16">KILO</a></li>
							<li><a href="/eliquidvape/11">МОНОВКУСЫ</a></li>
							<li><a href="/eliquidvape/19">ELIQUID FROM DRIPPING.ME</a></li>
						</ul>
						<h3>ДЛЯ САМОЗАМЕСА</h3>
						<ul>
							<li><a href="/samozames/14">ПРОПИЛЕНГЛИКОЛЬ</a></li>
							<li><a href="/samozames/15">ГЛИЦЕРИН</a></li>
							<li><a href="/samozames/13">ВАТА</a></li>
							<li><a href="/samozames/17">НИКОТИН</a></li>
							<li><a href="/samozames/12">ОСНОВА</a></li>
						</ul>
					</div>
				</div>
					<div class="cart-in">
						<?php if ($productsInCart): ?>
						<h1>Корзина:</h1>
								<?php foreach ($products as $product): ?>
								<div class="item-cart">
									<div class="item-img"><img src="<?php echo Product::getImageProduct($product['id']);?>" title="<?=$product["name"]?>" alt="<?=$product["name"]?>"/></div>
									<div class="item-name"><a href="/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></div>
									<div class="item-cart-price"><?php echo $product['price']; ?> грн</div>
									<div class="item-quantity"><?php echo $productsInCart[$product['id']]; ?></div>
									<div class="item-del"><a href="/cart/delete/<?php echo $product['id'];?>">Удалить</a></div>
								</div>
								<?php endforeach; ?>
								<div class="cart-price">
									<th>Общая стоимость:</td>
									<th><?php echo $totalPrice; ?> грн</td>
								</div>
						<a class="acount-btn" href="/cart/checkout/">Оформить заказ</a>
					</div>
					<?php else: ?>
						<p>Корзина пуста!</p>
					<?php endif; ?>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>	
<?php include ROOT."/views/layout/footer.php" ?>
	

  
