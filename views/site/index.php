<?php include ROOT."/views/layout/header.php" ?>
		<div class="img-slider">
			<div class="wrap">
			<ul id="jquery-demo">
			  <li>
			    <a href="https://goo.gl/Gbvo87">
			      <img src=<?php ROOT;?>"/upload/images/news/vapexpo.png" alt="#VAPEXPO_KIEV" />
			    </a>
			    <div class="slider-detils">
			    	<h3>#VAPEXPO_KIEV <label>4-5 марта</label></h3>
			    	<span>Киев МВЦ</br> Броварской пр-т, 15</span>
			    	<a class="slide-btn" href="https://goo.gl/Gbvo87">Купить билет</a>
			    </div>
			  </li>
			  <li>
			    <a href="<?php ROOT;?>/aromavape/8">
			      <img src=<?php ROOT;?>"/upload/images/news/tpa.png" alt="Ароматизаторы TPA / TFA" />
			    </a>
			    <div class="slider-detils">
			    	<h3>Аромки <label>TPA/TFA</label></h3>
			    	<span>PREMIUM Аромки TPA</br> самый широкий выбор в Украине.</span>
			    	<a class="slide-btn" href="<?php ROOT;?>/aromavape/8">Подробнее</a>
			    </div>
			  </li>
			  <li>
			    <a href="<?php ROOT;?>/eliquidvape/11">
			      <img src=<?php ROOT;?>"/upload/images/news/eliquid39.png" alt="Жидкости для электронных сигарет" />
			    </a>
			    <div class="slider-detils">
			    	<h3>Жидкость <label>39грн/30мл</label></h3>
			    	<span>Лучшая жидкость</br> для электронных сигарет в Украине!</span>
			    	<a class="slide-btn" href="<?php ROOT;?>/eliquidvape/11">Подробнее</a>
			    </div>
			  </li>
			  <li>
			    <a href="<?php ROOT;?>/eliquidvape/9">
			      <img src=<?php ROOT;?>"/upload/images/news/atmose49.png" alt="E-liquid Atmose (clones)" />
			    </a>
			    <div class="slider-detils">
			    	<h3>E-LIQUID <label>ATMOSE</label></h3>
			    	<span>Лучшие КЛОНЫ линейки Atmose,</br> по доступной цене.</span>
			    	<a class="slide-btn" href="<?php ROOT;?>/eliquidvape/9">Подробнее</a>
			    </div>
			  </li>
			  <li>
			    <a href="<?php ROOT;?>/eliquidvape/16">
			      <img src=<?php ROOT;?>"/upload/images/news/kilo79_1.png"  alt="E-liquid KILO (clones)" />
			    </a>
			     <div class="slider-detils">
			    	<h3>E-LIQUID <label>KILO</label></h3>
			    	<span>Новая линейка клонов</br> премиум жидкостей KILO.</span>
			    	<a class="slide-btn" href="<?php ROOT;?>/eliquidvape/16">Подробнее</a>
			    </div>
			  </li>
			</ul>
			</div>
		</div>
		<div class="clear"> </div>

		<div class="content">
			<div class="wrap">
				<div class="content-left">
					<div class="content-left-top-brands">
						<h3>АРОМАТИЗАТОРЫ</h3>
						<ul>
							<li><a href="aromavape/8">АРОМКИ TPA</a></li>
						</ul>
						<h3>ЖИДКОСТИ</h3>
						<ul>
							<li><a href="eliquidvape/9">ATMOSE</a></li>
							<li><a href="eliquidvape/16">KILO</a></li>
							<li><a href="/eliquidvape/11">МОНОВКУСЫ</a></li>
							<li><a href="/eliquidvape/19">ELIQUID FROM DRIPPING.ME</a></li>
						</ul>
						<h3>ДЛЯ САМОЗАМЕСА</h3>
						<ul>
							<li><a href="samozames/14">ПРОПИЛЕНГЛИКОЛЬ</a></li>
							<li><a href="samozames/15">ГЛИЦЕРИН</a></li>
							<li><a href="samozames/13">ВАТА</a></li>
							<li><a href="samozames/17">НИКОТИН</a></li>
							<li><a href="samozames/12">ОСНОВА</a></li>
						</ul>
					</div>
				</div>

				<div class="content-right">
					<div class="product-grids">
						<!--- start-rate---->
							<script src=<?php ROOT;?>"template/web/js/jstarbox.js"></script>
							<link rel="stylesheet" href=<?php ROOT;?>"template/web/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
							<script type="text/javascript">
								jQuery(function() {
									jQuery('.starbox').each(function() {
										var starbox = jQuery(this);
										starbox.starbox({
											average: starbox.attr('data-start-value'),
											changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
											ghosting: starbox.hasClass('ghosting'),
											autoUpdateAverage: starbox.hasClass('autoupdate'),
											buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
											stars: starbox.attr('data-star-count') || 5
										}).bind('starbox-value-changed', function(event, value) {
											if(starbox.hasClass('random')) {
												var val = Math.random();
												starbox.next().text(' '+val);
												return val;
											} 
										})
									});
								});
							</script>
							<!---//End-rate---->
							<!---caption-script---->
							<!---//caption-script---->
						<?php foreach($lastestProducts as $product):?>
						<div onclick="location.href='product/<?=$product["id"]?>';" class="product-grid fade">
						<div class="product-grid-hover">
							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<!-- <div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div> --> 
							</div>
							<div class="product-pic">
								<a href="/product/<?php echo $product['id'];?>"><img src="<?php echo Product::getImageProduct($product['id']);?>" title="<?=$product["name"]?>" /></a>
								<p>
								<a href="/product/<?php echo $product['id'];?>"><small><?=$product["brand"]?></small> <?=$product["name"]?></a>
								<span><a href="/product/<?php echo $product['id'];?>"><?php echo $product['name'];?></a></span>
								</p>
								
							</div>
							<?php if($product['is_new']):?>
								<img src=<?php ROOT;?>"/template/images/home/new.png" class="new" alt="" />
							<?php endif;?>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="product/<?=$product["id"]?>">Подробнее</a>
								</div>
								<div class="product-info-price">
									<a href="product/<?=$product["id"]?>"><?php echo $product['price']."грн";?></a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info add-to-cart link-1" data-id="<?php echo $product['id'];?>">
								<span> </span>
							</div>


						</div>
						</div>
						<?php endforeach;?>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="clear"> </div>
            <div>
            	<div class="">
				   <div class="carousel shadow"> 
				   	<h1> Ароматизаторы The Perfumer’s Apprentice: <a href="/aromavape/8">смотреть все</a></h1>
				      <div class="carousel-button-left"><a href="#"></a></div> 
				      <div class="carousel-button-right"><a href="#"></a></div> 
						<div class="carousel-wrapper"> 
						   <div class="carousel-items"> 
						   	<?php foreach($categoryProducts as $recprod):?>
							  <div class="carousel-block">
									<a href="/product/<?=$recprod['id']?>"><img src="<?php echo Product::getImageProduct($recprod['id']);?>" title="<?=$recprod["name"]?>" alt="<?=$recprod["name"]?>" /><?=$recprod["name"]?></br> <?=$recprod["price"]?>грн</a>
							  </div>
							<?endforeach;?>
						   </div>
						</div>
				   </div>
				</div>

					<h1>О нас!</h1>
					<span>
						Vape shop <b>Dripping.me</b> не просто интернет-магазин для Vaperов, мы ваши друзья! </br></br>
						
						Интернет магазин Dripping.me – это качество, ипостась, которой многие продавцы пренебрегают. </br></br>
						
						<h2>Качество заключается не только в высококвалифицированном обслуживании и персонале, а еще в качестве предлагаемого продукта. Наши поставщики это компании с мировым именем и историей:</h2></br>
						<ul style="font-size:0.9em; margin-left:10px;">
							<li type="disc">Ароматизаторы  : TPA (The Parfumer's Apprentice) & Capella (USA)</li>
							<li type="disc">Глицерин : Glaconchemie (Германия)</li>
							<li type="disc">Пропиленгликоль : BASF</li>
							<li type="disc">Вата для фитилей : koh gen do (Япония)</li>
							<li type="disc">Проволока для атомайзера : Нихромовая (Украина)</li>
						</ul>
						</br></br>
						<p>
							Нам доставило не мало хлопот идея собрать данных производителей в одном месте, но это все делается, в первую, очередь для клиента, т.е. для Вас, во вторую для себя, для качественного наполнения интернет магазина.
Мы так же предлагаем Вам по умеренным ценам клоны жидкостей для парения (таких как Cuttwood(USA), KILO(USA), SpaceJam и др.), которые были созданы с максимально строгим соблюдением рецепта и всех рекомендаций, а так же авторские жидкости, которые не оставят равнодушным, без исключения, каждого, кто попробует наш продукт. Dripping.me заботиться о каждом своем клиенте и принимаем во внимание любые замечания и предложения. Открыты к общению 24 часа в сутки.
						</p>
						
					</span></br>
					<p style="font-weight:700">
						P.S.</br> 
						Кстати, на счет скидок в Dripping.me - Vape Shop, постоянные клиенты знают, что чем больше заказ, тем больше скидка.
					</p>
				</div>
			</div>
		</div>
		
<?php include ROOT."/views/layout/footer.php" ?>